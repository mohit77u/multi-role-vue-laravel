<template>
    <div class="row">
        <div class="col-sm-6" v-for="portfolio in portfolioToShow" :key="portfolio" data-aos="slide-up" data-aos-delay="600">
                <div class="portfolio-details">
                    <img v-bind:src="'/static/images/portfolio/' + portData[portfolio].image" alt="portfolio">
                    <div class="overlay">
                        <div class="name">{{portData[portfolio].name}}</div>
                    </div>
                </div>
        </div>
        <div class="text-center mt-5" v-if="portfolioToShow < portData.length || portData.length > portfolioToShow">
            <button class="letsbtn" @click="portfolioToShow += 3">Load More</button>
        </div>
    </div>
    
</template>
<script>
export default {
    name: 'PortfolioStartup',
    data() {
        return {
            portfolioToShow: 3,
            totalPortfolio: 0,
            portData: [
                {name: 'The Scholarship Plug', image: 'scholarship.jpg'}, 
                {name: 'The Scholarship Plug', image: 'scholarship.jpg'}, 
                {name: 'My Destiny English', image: 'destiny.jpg'}, 
                {name: 'Marc Pridmore', image: 'marc.jpg'}, 
                {name: 'Keep The Bounce', image: 'keep.jpg'},
                {name: 'Ibizaslc', image: 'ibizaslc.jpg'},
                {name: 'Ferz Sa', image: 'ferz.jpg'},
                {name: 'Corporate Culcha', image: 'corporate.jpg'},
                {name: 'Apex Wheels', image: 'apex.jpg'},
            ],
        };
    },
    mounted() {
        this.totalPortfolio = this.portData.length
        console.log(this.portData.length)
    },
    computed: {
        portfolio: () => {
            return this.portfolioToShow.filter(function (portfolio) {
                return portfolio < portData.length
            })
        }
    } 
}
</script>
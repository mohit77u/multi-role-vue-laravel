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
    name: 'PortfolioWeb',
    data() {
        return {
            portfolioToShow: 3,
            totalPortfolio: 0,
            portData: [
                {name: 'The Scholarship Plug', image: 'scholarship.jpg'}, 
                {name: 'Smart Web Restaurant', image: 'smart.jpg'}, 
                {name: 'My Cars', image: 'cars.jpg'},
                {name: 'AutoPartsz', image: 'autopartsz.jpg'},
                {name: 'Go777taxi', image: 'go777taxi.jpg'},
                {name: 'Curogram', image: 'curogram.jpg'},
                {name: 'Chatwatch', image: 'chatwatch.jpg'},
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
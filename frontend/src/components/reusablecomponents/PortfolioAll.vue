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
    name: 'PortfolioData',
    data() {
        return {
            portfolioToShow: 3,
            totalPortfolio: 0,
            portData: [
                {name: 'The Scholarship Plug', image: 'scholarship.jpg'}, 
                {name: 'The Scholarship Plug', image: 'scholarship.jpg'}, 
                {name: 'Strategische-Investments', image: 'strategis.jpg'},
                {name: 'Smart Web Restaurant', image: 'smart.jpg'}, 
                {name: 'Sofas and Stuff', image: 'sofas.jpg'},
                {name: 'Prezzee', image: 'prezzee.jpg'}, 
                {name: 'Patdivilly', image: 'patdivilly.jpg'},
                {name: 'Parfymklubben', image: 'parfymklubben.jpg'}, 
                {name: 'Oomosound', image: 'oomosound.jpg'},
                {name: 'My Destiny English', image: 'destiny.jpg'}, 
                {name: 'My Cars', image: 'cars.jpg'},
                {name: 'Martymusic', image: 'martymusic.jpg'}, 
                {name: 'Marentree2020', image: 'marentree.jpg'},
                {name: 'Marc Pridmore', image: 'marc.jpg'}, 
                {name: 'Kuader', image: 'kuader.jpg'},
                {name: 'Keep The Bounce', image: 'keep.jpg'}, 
                {name: 'Kaizer Leather', image: 'kaizer.jpg'},
                {name: 'Jazzedge', image: 'jazzedge.jpg'}, 
                {name: 'Javouve', image: 'javouve.jpg'},
                {name: 'Inter Pharma', image: 'inter.jpg'}, 
                {name: 'Ibizaslc', image: 'ibizaslc.jpg'},
                {name: 'Hangan steel', image: 'hangan.jpg'},
                {name: 'Green Virgin Products', image: 'green.jpg'},
                {name: 'Go777taxi', image: 'go777taxi.jpg'},
                {name: 'Go Easy Online', image: 'easy.jpg'},
                {name: 'Gapsaustralia', image: 'gapsaustralia.jpg'},
                {name: 'Ferz Sa', image: 'ferz.jpg'},
                {name: 'Enchanted Meadow', image: 'enchanted.jpg'},
                {name: 'Curogram', image: 'curogram.jpg'},
                {name: 'Corporate Culcha', image: 'corporate.jpg'},
                {name: 'Chatwatch', image: 'chatwatch.jpg'},
                {name: 'Art Of The Hak', image: 'art.jpg'},
                {name: 'Apex Wheels', image: 'apex.jpg'},
                {name: 'Abundance College', image: 'abundance.jpg'},
                {name: '7Winds', image: '7winds.jpg'},
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
<template>
    <div>
        <breadcumb v-bind:title="pagetitle" />

        <section class="tech-banner">
            <div class="container-fluid">
                <img src="/static/images/technology.jpg" alt="Technology Stack">
            </div>
        </section>

        <section class="tech-tabs">
            <div class="container">
                <div class="tech-tab-title">
                    <a href="#web">Web Technologies</a>
                    <a href="#cms">CMS & Ecommerce</a>
                    <a href="#mobility">Mobility</a>
                    <a href="#cloud">Cloud computing and Database</a>
                </div>
            </div>
        </section>

        <section class="tech-tabs-content text-center" v-for="(tech,index) in techData" :key="index">
            <section v-bind:class= tech.class>
                <div v-bind:id= tech.id class="container">
                    <h2>{{tech.title}}</h2>
                    <p>{{tech.para}}</p>
                    <img v-bind:src="'/static/images/' + tech.image" alt="Web Technologies">
                </div>
            </section>
        </section>

        <section class="last-tech">
            <div class="container">
                <h2 class="text-center">Our Few Prestigious Clients</h2>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3" v-for="(last,index) in lastTechData" :key="index">
                        <img v-bind:src="'/static/images/icons/' + last.image" alt="icons">
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</template>
<script>
import Breadcumb from '../reusablecomponents/Breadcumb.vue'
export default {
    name: 'TechnologyStack',
    components: {
        Breadcumb
    },
    data(){
        return{
            pagetitle: 'Technology Stack',
            techData: [
                { id: 'web', class: '', image: 'web.png', title: 'Web Technologies', para: 'Our team consist of experts web developers who aims to deliver world class business web solutions to you.' },
                { id: 'cms', class: 'bg', image: 'cms.png', title: 'CMS & Ecommerce', para: 'With use of usable codes, CMS based plugins combined with custom work gets you a desired ecommerce store for your business in quick turn around time.' },
                { id: 'mobility', class: '', image: 'mobility.png', title: 'Mobility', para: 'Shaping your business idea to a mobile app with scaleable, robust mobile technologies including flutter, iOS, Android, and manymore...' },
                { id: 'cloud', class: 'bg', image: 'cloud.png', title: 'Cloud computing and Database', para: 'Systems supported with robust cloud based database, and secured servers.' },
            ],
            lastTechData: [
                {image: 'inter.png'},
                {image: 'tm.png'},
                {image: 'oomo.png'},
                {image: 'weeky.png'},
                {image: 'lion.png'},
                {image: 'wheels.png'},
                {image: 'offwell.png'},
                {image: 'haitian.png'},
            ]
        }
    },
    mounted() {
        document.title = "Technology Stack in Best Web Development Agency in Indore | Mxpertz";
    },
}
</script>
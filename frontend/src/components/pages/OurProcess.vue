<template>
    <div>
        <breadcumb v-bind:title="pagetitle" />

        <section class="process-banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="process-content">
                            <h1>Process Oriented <br/>Development</h1>
                            <p>Your project will walk through a systematic gateway supported <br/> with testing re-iterations and full proof delivery</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="/static/images/process.jpg" alt="process">
                    </div>
                </div>
            </div>
        </section>

        <section class="get-started">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/static/images/get-started.jpg" alt="get-started">
                    </div>
                    <div class="col-sm-8">
                        <div class="get-started-content">
                            <h2>Get started with process-<br/>driven to achieve fine-<br/>tuned project outcomes.</h2>
                            <div class="line"></div>
                            <p>We work with proven technologies to develop robust<br/> and beautiful solution as per latest technological<br/> trends. We provide screen resolutions & effective<br/> functionalities on popular mobile operating systems.</p>
                            <div class="circular">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <vue-ellipse-progress 
                                            :progress="75"
                                            color="rgb(79, 109, 245)"
                                            emptyColor="#fff"  
                                            :size="175"
                                            :thickness="3"
                                            emptyThickness="3%"
                                            animation="reverse 3000">
                                            <p slot="legend-caption">%</p>
                                        </vue-ellipse-progress>
                                        <p class="getname">Design</p>
                                    </div><div class="col-sm-4">
                                        <vue-ellipse-progress 
                                            :progress="80"
                                            color="rgb(79, 109, 245)"
                                            emptyColor="#fff"  
                                            :size="175"
                                            :thickness="3"
                                            emptyThickness="3%"
                                            animation="reverse 3000">
                                            <p slot="legend-caption">%</p>
                                        </vue-ellipse-progress>
                                        <p class="getname">Development</p>
                                    </div><div class="col-sm-4">
                                        <vue-ellipse-progress 
                                            :progress="85"
                                            color="rgb(79, 109, 245)"
                                            emptyColor="#fff"  
                                            :size="175"
                                            :thickness="3"
                                            emptyThickness="3%"
                                            animation="reverse 3000">
                                            <p slot="legend-caption">%</p>
                                        </vue-ellipse-progress>
                                        <p class="getname">Performance</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="key-process">
            <div class="container">
                <div class="customize-title">
                    <h2 class="text-center">Key Process Elements</h2>
                    <div class="center-line">
                        <div class="line"></div>
                    </div>
                    <div class="para">
                        <p>Every projects goes through under-lined elements considering the<br/> delivery gets victory.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 left">
                        <Features  v-bind:featuresData="featuresleftData"/>
                    </div>
                    <div class="col-sm-6">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active first" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2" class="second"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3" class="third"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/static/images/idea-red.png" alt="idea-red">
                                </div>
                                <div class="carousel-item">
                                    <img src="/static/images/idea-yellow.png" alt="idea-yellow">
                                </div>
                                <div class="carousel-item">
                                    <img src="/static/images/idea-green.png" alt="idea-green">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 right">
                        <Features  v-bind:featuresData="featuresrightData"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-process">
            <div class="container">
                <div class="customize-title">
                    <h2 class="text-center">Our process</h2>
                    <div class="center-line">
                        <div class="line"></div>
                    </div>
                    <div class="para">
                        <p>We design, build and support websites and apps for clients worldwide.<br/> We make your business stand out.</p>
                    </div>
                </div>
                <Process v-bind:processData="ourprocessData" />
            </div>
        </section>

        <section class="interested">
            <div class="container">
                <div class="customize-title">
                    <h2 class="text-center">Interested? Let's get in touch!</h2>
                    <div class="center-line">
                        <div class="line"></div>
                    </div>
                    <div class="para">
                        <p>Mxpertz is a trusted, process driven, and result-oriented agency for your software business needs !</p>
                    </div>
                    <div class="text-center"><router-link class="letsbtn" to="/contact">Get started</router-link></div>
                </div>
            </div>
        </section>

    </div>
</template>
<script>
import Breadcumb from '../reusablecomponents/Breadcumb.vue'
import Features from '../reusablecomponents/Features.vue'
import Process from '../reusablecomponents/Process.vue'
export default {
    name: 'OurProcess',
    components: {
        Breadcumb, Features, Process
    },
    data(){
        return{
            pagetitle: 'Our Process',
            featuresleftData: [
                { icon: 'far fa-clock', title: 'Performance', para: 'Performance centric solutions to gain maximum user base towards your business.' },
                { icon: 'fas fa-leaf', title: 'Sustainability', para: 'Crafted project should get sustained to the market seamlessly beating all upgradations.' },
            ],
            featuresrightData: [
                { icon: 'fas fa-link', title: 'Quality', para: 'Performance centric solutions to gain maximum user base towards your business.' },
                { icon: 'fas fa-satellite', title: 'Result-oriented', para: 'Performance centric solutions to gain maximum user base towards your business.' },
            ],
            ourprocessData: [
                { number: '1', title: 'Develop objectives', para: 'Share your business requirements with us, we will brainstorm and suggest a smart way of achieving objective.'},
                { number: '2',title: 'Determine efforts', para: 'Get your team developed under our roof, assign work, guide them and get work output with expected quality.'},
                { number: '3', title: 'Create a timeline', para: 'Validating process with required planned timelines during the project ensures we work as per plan, towards project goal.'},
                { number: '4', title: 'Delivery', para: 'Re-iterate, re-discuss until the final outputs gets achieved and make your delivery perfect as projected initially with the team.'},
            ],
            
        }
    },
    mounted() {  
        document.title = "Our Process The Best Web Development Agency in Indore | Mxpertz";  
    }, 
}
</script>
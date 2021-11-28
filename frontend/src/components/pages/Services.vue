<template>
    <div>
        <section class="services-banner">
            <div class="circle yellowone"></div>
            <div class="circle purpleone"></div>
            <div class="circle redone"></div>
            <div class="circle greenone"></div>
            <div class="circle redtwo"></div>
            <div class="circle yellowtwo"></div>
            <div class="circle greentwo"></div>
            <div class="circle purpletwo"></div>
            <breadcumb v-bind:title="pagetitle" />
        </section>

        <section class="after-services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="/static/images/after-services-1.jpg" alt="services-1">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card card-left">
                            <h4>Custom Software Development</h4>
                            <p>To stand competent in the market, memorable identity for corporate becomes essential. We have examples in designing outstanding creative and alluring software for a variety of business complexities.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card card-right">
                            <img  class="image" src="/static/images/after-services-2.jpg" alt="Avatar">
                            <div class="overlay">
                                <div class="content">
                                    <h4>Website Development</h4>
                                    <p>Your website is a virtual office for your business. Having a web presence has gained popularity in every next business over these years. An attractive and user-friendly website is essential for every business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card card-right">
                            <img  class="image" src="/static/images/after-services-3.jpg" alt="Avatar">
                            <div class="overlay">
                                <div class="content">
                                    <h4>Mobile App Development</h4>
                                    <p>Business Applications helps you to stand out in the crowded and competitive market today. Get the right app solution with the efficient team to the market and help your business to grow immensely.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-slider">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="slider-content">
                            <hooper :settings="hooperSettings">
                            <slide v-for="(service, index) in serviceData" :key="index">
                                <img v-bind:src="'/static/images/' + service.image " alt="service">
                            </slide>
                            <hooper-navigation slot="hooper-addons"></hooper-navigation>
                            </hooper>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </section>

        <section class="industries">
            <div class="container">
                <h2>Industries we Served</h2>
                <div class="line"></div>
                <p>Build a positive impact on your business. Check out what we have to offer.</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="industries-content">
                            <hooper :settings="industrieshooperSettings">
                            <slide v-for="(industries, index) in industriesData" :key="index">
                                <div class="card">
                                    <img v-bind:src="'/static/images/' + industries.image " alt="industries">
                                    <h4>{{industries.name}}</h4>
                                </div>
                            </slide>
                            <hooper-pagination slot="hooper-addons"></hooper-pagination>
                            </hooper>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-icons">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" v-for="(icon,index) in iconsData" :key="index">
                        <div class="icon-content">
                            <i v-bind:class= icon.icon></i>
                            <h4>{{icon.name}}</h4>
                            <p>{{icon.para}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="build-better">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="/static/images/services-left.jpg" alt="build">
                    </div>
                    <div class="col-sm-6">
                        <div class="content">
                            <h2>Build better business software a lot quicker with Mxpertz</h2>
                            <div class="icon-box" v-for="(icon,index) in servicesIconData" :key="index">
                                <i v-bind:class= icon.icon></i>
                                <div class="icon-content">
                                    <h6>{{icon.name}}</h6>
                                    <p>{{icon.para}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="content">
                            <h2>Simply brand new your corporate identities.</h2>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#One" aria-expanded="false" aria-controls="collapseOne">
                                        1. Timely Updates
                                    </button>
                                    </h3>
                                    <div id="One" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>During project work, receiving timely updates helps to know project taking shape and also helps to develop next plan of actions.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item" v-for="(accordion,index) in accordionData" :key="index">
                                    <h3 class="accordion-header" id="heading">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" v-bind:data-bs-target= accordion.link aria-expanded="false" aria-controls="collapseTwo">
                                            {{accordion.title}}
                                        </button>
                                    </h3>
                                    <div v-bind:id= accordion.id class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{accordion.para}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <img src="/static/images/services-right.png" alt="brand">
                    </div>
                </div>
            </div>
        </section>

        <section class="after-build-better">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h3>With plentiful shortcodes to ease your workflow, Mxpertz is meant to simplify the website building experience. Welcome your visitors with elegance and flexibility.</h3>
                            <p>Mxpertz is a full stop solution agency for your premium design and development needs. Thus is great for associating with businesses looking for a specific agency partnering.</p>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <div class="content">
                            <div class="card" v-for="(card,index) in afterCards" :key="index">
                                <h6>{{card.title}}</h6>
                                <p>{{card.para}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="interested" data-aos="fade-up" data-aos-delay="600">
            <div class="container">
                <div class="customize-title">
                    <h2 class="text-center mb-5">Mxpertz is a trusted, process driven,<br/> and result-oriented agency for your<br/> software business needs !</h2>
                    <div class="text-center"><router-link class="letsbtn" to="/contact">Get started</router-link>
                    <p class="mt-5"><a href="#">Lets Discuss</a> about your project requirement.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>
<script>
import Breadcumb from '../reusablecomponents/Breadcumb.vue'
import { Hooper, Slide, Navigation as HooperNavigation, Pagination as HooperPagination } from "hooper";
import "hooper/dist/hooper.css";

export default {
    name: 'Services',
    components: {
        Breadcumb, Hooper, Slide, HooperNavigation, HooperPagination
    },
    data(){
        return{
            pagetitle: 'Services',
            hooperSettings: {
                infiniteScroll: true,
                autoPlay: true,
                playSpeed: 8000,
                itemsToShow: 1,
            },
            serviceData: [
                {image: 'slide-1.png'},
                {image: 'slide-2.png'},
                {image: 'slide-3.png'},
                {image: 'slide-4.png'},
                {image: 'slide-5.png'},
                {image: 'slide-6.png'},
            ],
            industrieshooperSettings: {
                infiniteScroll: true,
                autoPlay: true,
                playSpeed: 8000,
                breakpoints: {
                480: {
                    itemsToShow: 1,
                    spaceBetween: 30,
                },
                768: {
                    itemsToShow: 2,
                    spaceBetween: 30,
                },
                1024: {
                    itemsToShow: 3,
                    spaceBetween: 30,
                },
                },
            },
            industriesData: [
                {image: 'health.jpg', name: 'Health care'},
                {image: 'servicing.jpg', name: 'Servicing'},
                {image: 'education.jpg', name: 'Education'},
                {image: 'travel.jpg', name: 'Travel'},
                {image: 'entertainment.jpg', name: 'Entertainment'},
            ],
            iconsData: [
                {icon:'far fa-lightbulb', name: 'Craft Your Ideas', para: 'We shape your ideas with use of proper strategic planning, combined with the right use of efforts and implementation of solutions.'},
                {icon:'fas fa-expand', name: 'Scalable Solutions', para: 'Our designed solutions are conceptualized as it can be scaled up with the right blend of technology add-ons.'},
                {icon:'far fa-file-code', name: 'Latest Technical Know-how', para: 'Implementation of latest technical know-hows leads any solution adherence for result oriented outcome towards the problems and yes,we imply the best use'},
                {icon:'far fa-hand-pointer', name: 'Robust Systems', para: 'We aim to develop robust systems supported towards achieving a fine-tuned solution which enables large user base accessibility with zero performance issues, plus seemless action flows on software.'},
                {icon:'fas fa-eye', name: 'Premium Powerful Design', para: 'System designs beat its Web, Mobile - the vital aspect is to keep the system outlook premium supported with premium, & classy designs. We prefer towards keep best, & powerful designs.'},
                {icon:'fas fa-chevron-right', name: 'Modernized Solutions', para: 'We look to provide a modernized, trendy up-gradation to the solutions so, it can very well perform in the niche beating market competitiveness ahead.'},

            ],
            servicesIconData: [
                {icon: 'fas fa-hand-pointer', name: 'User-Friendly', para: 'The business software solutions needs to be user-friendly as any sort of user would able to make the best use of it.'},
                {icon: 'fas fa-file-code', name: 'Result Oriented', para: 'Association with us is very much focused on project outcome, hence the approach as followed is result-oriented.'},
                {icon: 'far fa-hand-spock', name: 'Solid code', para: 'Codes written methods as followed by us, is robust enough to make the system stable too.'},
            ],
            accordionData: [
                {title: '2. Optimized for speed', link: '#one', id: 'one', para: 'Its important the software application should run seemlessly with out any speed issue hence in-parallel this aspect is well covered by us.' },
                {title: '3. Security', link: '#two', id: 'two', para: 'Keeping security aspect is the first step towards building any software solution, and yes – we follow it at best.' },
            ],
            afterCards: [
                {title: 'Ready to launch websites', para: 'With given an all-new look and powerful features to your websites, Mxpertz is the best source to ensure success for your business.'},
                {title: 'Reuse-ability Codes', para: 'Save money and start building your website or apps solutions using the best reusable codes in the market today.'},
                {title: 'Custom made elements', para: 'Each content element has been carefully crafted and offers multiple options. There is a shortcode for anything you need hence we make best of use of it.'},
            ]
        }
    },
    mounted() {
        document.title = "Services of Best Web Development Agency in Indore | Mxpertz";
    },
}
</script>
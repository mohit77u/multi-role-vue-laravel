<template>
    <div>
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3" v-for="(footer, index) in footerLinks" :key="index">
                        <div class="footer-content">
                            <h5>{{footer.title}}</h5>
                            <ul>
                                <li v-for="(link, index) in footer.links" :key="index">
                                    <router-link v-bind:to= link.url  class="footer-links">{{link.name}}</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-content">
                            <h5 class="mb-3">Top IT Firm 2020</h5>
                            <div class="footer-image">
                                <div>
                                    <img src="/static/images/good.png" alt="good">
                                    <br />
                                    <a href="https://www.goodfirms.co/company/mxpertz" target="blank"><i class="fas fa-star"></i></a>
                                    <a href="https://www.goodfirms.co/company/mxpertz" target="blank"><i class="fas fa-star"></i></a>
                                    <a href="https://www.goodfirms.co/company/mxpertz" target="blank"><i class="fas fa-star"></i></a>
                                    <a href="https://www.goodfirms.co/company/mxpertz" target="blank"><i class="fas fa-star"></i></a>
                                    <a href="https://www.goodfirms.co/company/mxpertz" target="blank"><i class="fas fa-star"></i></a>
                                </div>
                                <img src="/static/images/clutch.png" alt="clutch">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="footer-bottom">
                            <p>mxpertz@allrightsreserved.</p>
                        </div>
                    </div>
                </div>
                <a href="#" :class="{ normalback: scrollPosition < 300, backtotop: scrollPosition > 300 }" data-aos="fade-left" data-aos-delay="200"><i class="fas fa-chevron-up"></i></a>
            </div>
        </section>

        <section class="letsbtnmodal">
            <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="modal-left">
                                        <h2>Have a project? Let's talk.</h2>
                                        <p>Give us a call or leave a message, we endeavour to answer all enquiries within 24 hours on business days.</p>
                                        <ul>
                                            <li><a href="tel:916264865655"><i class="fas fa-phone"></i>(+91) 626-4865-655</a></li>
                                            <li><a href="mailto:info@mxpertz.com"><i class="fas fa-envelope"></i>info@mxpertz.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="modal-right">
                                        <ContactForm/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

    </div>
</template>
<script>
import ContactForm from '../reusablecomponents/ContactForm.vue'
export default {
    name:'Footer',
    components: {
        ContactForm,
    },
    data(){
        return{
            scrollPosition: null,
            footerLinks: [
                { 
                    title: 'Who we are',
                    links: [
                        {name: 'About', url:'/about'},
                        {name: 'Services', url:'/services'},
                        {name: 'Job opportunities', url:'/career'},
                    ],
                },
                { 
                    title: 'Know more',
                    links: [
                        {name: 'Our Process', url:'/our-process'},
                        {name: 'Work models', url:'/work-model'},
                        {name: 'Portfolio', url:'/portfolio'},
                        {name: 'Speak to us', url:'/contact'},
                    ],
                },
                { 
                    title: 'Additional links',
                    links: [
                        {name: 'Technology Stack', url:'/technology-stack'},
                        {name: 'FAQ’s', url:'/faq'},
                        {name: 'Privacy Policy', url:'/privacy-policy'},
                        {name: 'Contact Us', url:'/contact'},
                    ],
                },
            ],
        }
    },
     methods: {
        updateScroll() {
            this.scrollPosition = window.scrollY;
        },
    },
    mounted() {
        window.addEventListener("scroll", this.updateScroll);
    },
}
</script>

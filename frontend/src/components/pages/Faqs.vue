<template>
    <div>
        <breadcumb v-bind:title="pagetitle" />

        <section class="faq">
            <div class="container">
                <div class="customize-title" data-aos="fade-up" data-aos-delay="600">
                    <h2 class="text-center">Frequently asked questions</h2>
                    <div class="center-line">
                        <div class="line"></div>
                    </div>
                    <div class="para">
                        <p>Find quick answers to common questions using our helpful FAQs.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#One" aria-expanded="false" aria-controls="collapseOne">
                                    1. How does we work?
                                </button>
                                </h2>
                                <div id="One" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We are a process driven organization, who follows right approaches towards keeping all projects aligned aiming for deliveries with perfection, quality and precision.</p>
                                    <h6>Our approach –</h6>
                                    <ul>
                                        <li>We analyse your requirement</li>
                                        <li>We brainstorm with you</li>
                                        <li>We set up project planning</li>
                                        <li>We commence to deliver</li>
                                        <li>We test before marking final delivery</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item" v-for="(accordion,index) in accordionData" :key="index">
                                <h2 class="accordion-header" id="heading">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" v-bind:data-bs-target= accordion.link aria-expanded="false" aria-controls="collapseTwo">
                                        {{accordion.title}}
                                    </button>
                                </h2>
                                <div v-bind:id= accordion.id class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{accordion.para}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="acco-right-content" v-for="(right,index) in getData" :key="index">
                            <h3>{{right.title}}</h3>
                            <p>{{right.para}}</p>
                            <router-link class="letsbtn" to="/contact">Read More</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-review">
            <div class="container">
                <div class="customize-title" data-aos="fade-up" data-aos-delay="600">
                    <h2 class="text-center">Client reviews</h2>
                    <div class="center-line">
                        <div class="line"></div>
                    </div>
                    <div class="para">
                        <p>We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" v-for="(review,index) in reviewData" :key="index" data-aos="fade-up" data-aos-delay="600">
                        <div class="review">
                            <h5>{{review.name}}</h5>
                            <p>{{review.country}}</p>
                            <p class="my-3">{{review.para}}</p>
                            <div class="ratings">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>
<script>
import Breadcumb from '../reusablecomponents/Breadcumb.vue'
export default {
    name: 'Faqs',
    components: {
        Breadcumb
    },
    data(){
        return{
            pagetitle: 'FAQ',
            accordionData: [
                {title: '2. What are your services as available?', link: '#one', id: 'one', para: 'We provide end to end software build up solutions on various robust and latest technologies. We serve our clients with right solutions in place as per their business needs.' },
                {title: '3. Where is my data stored and how is it secured?', link: '#two', id: 'two', para: 'We work on our secured servers to ensure, and if preferred – at your servers it can be started. Though we take deployments from beta to alpha with proper followed procedures only. We also ensure as your data remains secured with us through cloud server storage protocols.' },
                {title: '4. Would I be charged extra, while working ahead?', link: '#three', id: 'three', para: 'We prefer and aim to keep transparent, honest communication with our customers hence on need of any extra working – our team prefers to discuss proactively with our customers and thus keeping the charges aligned accordingly at best.' },
                {title: '5. What supporting do you need to start?', link: '#four', id: 'four', para: 'Project scope with your project expected delivery items. We take up projects to be followed on agile methodologies and further ensure the delivery flows goes un-parallel defeating all bugs and errors, and shall move towards cross test-driven enviornment.' },
                {title: '6. How can I contact you?', link: '#five', id: 'five', para: 'Our experts shall be contacted via emails, chat or calling messengers etc. We ensure your emails get responded with 24 hours of time-frame so the communication can be expedited with-put any delays.' },
            ],
            getData: [
                {title: 'Getting started', para: 'Get started with a passionate team, to secure success on your business terms.'},
                {title: 'Ask an expert', para: 'Our team of experts ensures we understand your preservative towards project idea and thus extend a commitment ahead.'},
            ],
            reviewData: [
                {name: 'Mr. Philippe Hugot', country: 'China', para: 'I have a lot of experience as buyer and I can be quite demanding. It was a very good surprise to work with this seller. Professional, responsive, went the extra mile for my project. I would definitely work with them again.'},
                {name: 'Mr. Shyane Ewers', country: 'United Kingdom', para: 'Very good service and value. was very patient and helpful communication was great !!! A+++'},
                {name: 'Mr. Sunny Turner', country: 'United States', para: 'Outstanding communication, easily understood what was needed and worked quickly and effectively. They are swift in communication, and delivery updates.Thanks guys..keep up the good work always Highly recommended!'},
            ]
        }
    },
    mounted() {
        document.title = "FAQ About Best Web Development Agency in Indore | Mxpertz";
    },
}
</script>

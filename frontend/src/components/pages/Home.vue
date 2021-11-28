<template>
  <div>
    <section class="banner">
      <div class="container">
        <div
          id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-interval="5000"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm-5" data-aos="fade-up" data-aos-delay="1200">
                        <div class="banner-content">
                            <h1 class="animate__animated animate__backInLeft animate__delay-1s">We Create Beautifull Web, Mobile & Software Solutions</h1>
                            <p class="animate__animated animate__backInLeft animate__delay-2s">Your trusted IT partner in building customized IT solutions for your business needs.</p>
                            <router-link to="/about"><button class="readbtn animate__animated animate__backInLeft animate__delay-3s">Read More</button></router-link>
                        </div>
                    </div>
                    <div class="col-sm-7"  data-aos="fade-up" data-aos-delay="600">
                        <img class="animate__animated animate__backInRight" src="/static/images/banner-1.png" alt="banner-1" />
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-5" data-aos="fade-up" data-aos-delay="1200">
                        <div class="banner-content">
                            <h1 class="animate__animated animate__backInLeft animate__delay-1s">Reliable Apps Outsourcing Partnership</h1>
                            <p class="animate__animated animate__backInLeft animate__delay-2s">Robust and scalable apps solutions for result oriented success.</p>
                            <router-link to="/about"><button class="readbtn animate__animated animate__backInLeft animate__delay-3s">Read More</button></router-link>
                        </div>
                    </div>
                    <div class="col-sm-7" data-aos="fade-up" data-aos-delay="600">
                        <img class="animate__animated animate__backInRight" src="/static/images/banner-2.png" alt="banner-1" />
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="after-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" data-aos="zoom-in" data-aos-delay="1500" v-for="(after, index) in afterData" :key="index">
                    <div class="card">
                        <div class="card-content">
                            <i v-bind:class= after.icon ></i>
                            <h4>{{after.title}}</h4>
                            <p>{{after.para}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hire">
        <div class="container">
            <div class="row">
                <div class="col-sm-5" data-aos="fade-up" data-aos-delay="1200">
                    <div class="hire-content">
                        <h2>Hire expert and start your project !</h2>
                    </div>
                </div>
                <div class="col-sm-7" data-aos="fade-up" data-aos-delay="1500">
                    <div class="hire-content">
                        <p>Build a foundation for cognitive business through beating complex technological challenges and evolve towards building optimized business environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="right-offshore">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                    <img src="/static/images/right-offshore.jpg" alt="Right offshore">
                </div>
                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="right-content">
                        <h2>Right offshore development partnering for long term sustained success</h2>
                        <p>With substantial record of ROI towards your business success</p>
                        <Progress v-bind:progressData="progressData"  />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customize">
        <div class="container">
            <div class="customize-title" data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-center">Customized Solutions</h2>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <div class="para">
                    <p>We help businesses of all sizes & verticals to increase visibility, drive more traffic and improve profitability by delivering quality software solution.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="customize-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-business-tab" data-bs-toggle="pill" data-bs-target="#pills-business" type="button" role="tab" aria-controls="pills-business" aria-selected="true">Business Solutions</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ecommerce-tab" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button" role="tab" aria-controls="pills-ecommerce" aria-selected="false">E-Commerce Solutions</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-startup-tab" data-bs-toggle="pill" data-bs-target="#pills-startup" type="button" role="tab" aria-controls="pills-startup" aria-selected="false">Startup Solutions</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-integrated-tab" data-bs-toggle="pill" data-bs-target="#pills-integrated" type="button" role="tab" aria-controls="pills-integrated" aria-selected="false">Integrated Solutions</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
                                <div class="row">
                                    <div class="col-sm-4" v-for="(business,index) in businessData" :key="index" data-aos="fade-up" data-aos-delay="600">
                                        <div class="card">
                                            <img v-bind:src="'/static/images/customize/' + business.image" alt="">
                                            <div class="card-body">
                                                <h4>{{business.title}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-ecommerce" role="tabpanel" aria-labelledby="pills-ecommerce-tab">
                                <div class="row">
                                    <div class="col-sm-4" v-for="(ecommerce,index) in ecommerceData" :key="index" data-aos="fade-up" data-aos-delay="600">
                                        <div class="card">
                                            <img v-bind:src="'/static/images/customize/' + ecommerce.image" alt="">
                                            <div class="card-body">
                                                <h4>{{ecommerce.title}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-startup" role="tabpanel" aria-labelledby="pills-startup-tab">
                                <div class="row">
                                    <div class="col-sm-4" v-for="(startup,index) in startupData" :key="index" data-aos="fade-up" data-aos-delay="600">
                                        <div class="card">
                                            <img v-bind:src="'/static/images/customize/' + startup.image" alt="">
                                            <div class="card-body">
                                                <h4>{{startup.title}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-integrated" role="tabpanel" aria-labelledby="pills-integrated-tab">
                                <div class="row">
                                    <div class="col-sm-4" v-for="(integrated,index) in integratedData" :key="index" data-aos="fade-up" data-aos-delay="600">
                                        <div class="card">
                                            <img v-bind:src="'/static/images/customize/' + integrated.image" alt="">
                                            <div class="card-body">
                                                <h4>{{integrated.title}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="scr">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" v-for="(scr, index) in scrData" :key="index" data-aos="fade-up" data-aos-delay="900">
                    <div class="scr-content">
                        <div class="number">{{scr.number}}<span>{{scr.symbol}}</span></div>
                        <h4>{{scr.title}}</h4>
                        <p>{{scr.desc}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                     <div class="customize-title">
                        <h2 class="text-center">Client Testimonials</h2>
                        <div class="center-line">
                            <div class="line"></div>
                        </div>
                        <div class="para">
                            <p>Happy clients are the back-bone of any strong business. Read a few of our prestigious clients testimonials below.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <testimonials/>
                </div>
            </div>
        </div>
    </section>

    <section class="request">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="request-content">
                        <h2>The best way to develop your software project. Speak to our expert today.</h2>
                        <div class="line"></div>
                        <p>Understanding your requirements and objectives is important to us. We listen and work together to create a truly unique and unforgettable experience.</p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="form-content">
                        <h4 class="mb-4">Request a quote back</h4>
                        <ContactForm/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
</template>

<script>
    import Testimonials from '../reusablecomponents/TestimonialsHome.vue';
    import ContactForm from '../reusablecomponents/ContactForm.vue';
    import Progress from '../reusablecomponents/Progress.vue';

    export default {
    name: "Home",
    components: {
        Testimonials, Progress,ContactForm,
    },
    data() {
        return {
            afterData:[
                { title: 'Software Development', para: 'Tailor made solution gets the business revenue multiplied. Customers like to make more transactions with a familiar & user-friendly software solution.Customers like to make more Customers like to make more.', icon: 'fab fa-windows' },
                { title: 'Website Development', para: 'Your website is a virtual office for your business. Having a web presence has gained popularity in every next business over these years. An attractive and user-friendly website is essential for every business.', icon: 'fas fa-laptop-code' },
                { title: 'Mobile App Development', para: 'Business Applications helps you to stand out in the crowded and competitive market today. Get the right app solution with the efficient team to the market and help your business to grow immensely.', icon: 'fas fa-mobile-alt' },
            ],
            businessData: [
                { title: 'Salon Web', image: 'salon.jpg'},
                { title: 'Venetian Blinds Web', image: 'venetian.jpg'},
                { title: 'LMS Solution', image: 'lms.jpg'},
            ],
            ecommerceData: [
                { title: 'Jewellery e-Store', image: 'glossom.jpg'},
                { title: 'Medical e-Store', image: 'interpharma.jpg'},
                { title: 'Furniture e-Store', image: 'marc.jpg'},
            ],
            startupData: [
                { title: 'Cosmetic Brand', image: 'cosmatic.png'},
                { title: 'Construction Company', image: 'construction.jpg'},
                { title: 'Entrepreneurial Start', image: 'start.png'},
            ],
            integratedData: [
                { title: 'Devices Repair Solutions', image: 'devices.png'},
                { title: 'Inventory Management', image: 'admin.png'},
                { title: 'Hotelier Solution', image: 'hotiltis.jpg'},
            ],
            scrData: [
                { number: '20', symbol: '+', title: 'Skillful Experts', desc: 'Resource with niche skill forte of their specific domains takes your projects to a new heights of success and delivery.' },
                { number: '98', symbol: '%', title: 'Customer Satisfaction', desc: 'Our focus is to extend "delighted"customer satisfaction by greater mean and thus we aimed to have quality deliveries in place.' },
                { number: '5', symbol: 'x', title: 'Repeat Clientele', desc: 'Our approach is customer driven, keep a right proportionate balance of Win-Win and also leading customers to repeat business associations with us.' },
            ],
            progressData: [
                { title: 'Cost saving', percentage: '75%', width: 'max-width: 75%' },
                { title: 'Success rate', percentage: '90%', width: 'max-width: 90%' },
                { title: 'Customer satisfaction', percentage: '98%', width: 'max-width: 98%' },
            ],
        };
    },
    mounted() {
        document.title = "Best Web Development Agency in Indore | Mxpertz";
    },

    };
</script>

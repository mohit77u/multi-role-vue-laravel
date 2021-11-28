<template>
    <div>
        <section class="career-banner">
            <div class="container">
                <breadcumb v-bind:title="pagetitle" />
            </div>
        </section>

        <section class="jobs">
            <div class="container">
                <Jobs />
                <div class="text-center my-4" data-aos="fade-up" data-aos-delay="900"><a class="letsbtn" href='mailto:jobs@mxpertz.com'>Apply now</a></div>
            </div>
        </section>

        <section class="after-jobs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="after-job-content-left" data-aos="fade-up" data-aos-delay="600">
                            <h2 class="mb-4">Are you looking for a great job? Discover our company !</h2>
                            <p class="mb-5">Mxpertz over the period of years has been bestowed with various names such as “passionate team”, “a great team to work with” however what differentiates with others in the industry is the focused approach on building amazing products and solutions.</p>
                           <img src="/static/images/after-job-2.png" alt="after-job-content">
                           <h2 class="mt4">We look forward for solutions to the problems, learn about us more !</h2>
                            <p class="mb-5">Mxpertz over the period of years has been bestowed with various names such as “passionate team”, “a great team to work with” however what differentiates with others in the industry is the focused approach on building amazing products and solutions.</p>
                            <img src="/static/images/after-job-4.png" alt="after-job-content">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="after-job-content-right" data-aos="fade-up" data-aos-delay="700">
                            <img src="/static/images/after-job-1.png" alt="after-job-content">
                            <h2 class="mt-5">Team with Passion, Integrity and attention to details !</h2>
                            <p class="mb5">People working with us learn, excel, delivery and enjoy the success all-together ! We affirm on building team efforts for bringing best product as outcome.</p>
                            <img src="/static/images/after-job-3.png" alt="after-job-content">
                            <div class="sucess-measures">
                                <h2>Success Measures</h2>
                                <div class="number">100<span>+</span></div>
                                <p>Satisfied Clients + Projects</p>
                                <div class="number">20<span>+</span></div>
                                <p>Talented Brains</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="interested" data-aos="fade-up" data-aos-delay="600">
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
   
    import Jobs from '../job/Jobs.vue'
    import Breadcumb from '../reusablecomponents/Breadcumb.vue'
    
    export default {
        name: 'Home',
        components:{
            Jobs,Breadcumb
        },
        data(){
            return{
                pagetitle: 'Careers',
            }
        },
         mounted() {  
            document.title = "Apply for job in The Best Web Development Agency | Mxpertz";  
        },
    }
</script>
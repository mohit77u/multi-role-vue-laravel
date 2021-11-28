<template>
    <div>
         <section class="work-banner">
            <div class="container">
                <h1>Contact us</h1>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <p>We design, build and support websites and apps for clients worldwide.<br/>We make your business stand out. Interested? Let's chat.</p>
            </div>
        </section>

        <section class="dreams">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>We are here to discuss & deliver results.</h2>
                    </div>
                    <div class="col-sm-7">
                        <p>We acknowledge the utmost confidentiality of submitted information of your project ideas and will share it with the required team only. You can even email us at info@mxpertz.com or fill the complementary inquiry form for further discussion.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235526.90924712367!2d75.7237618214095!3d22.724228429904368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1634546239632!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-sm-5">
                        <div class="contact-form">
                            <h3>Contact us</h3>
                            <div class="line"></div>
                            <p>We will be happy to answer your questions.</p>
                            <ContactForm/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="after-contact">
            <section class="after-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3" data-aos="zoom-in" data-aos-delay="300" v-for="(after, index) in afterData" :key="index">
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
        </section>
    </div>
</template>
<script>
import ContactForm from '../reusablecomponents/ContactForm.vue'
export default {
    name: 'Contact',
    components: {
        ContactForm,
    },
    data(){
        return{
            afterData:[
                { title: 'Chat with us', para: 'Add us on Skype - mxpertz.com, and start a discussion', icon: 'far fa-comments' },
                { title: 'Phone support', para: 'We are active on messenger and on calls for you. Dial us !', icon: 'fas fa-mobile-alt' },
                { title: 'Ask for Assistance', para: 'Ask for required assistance for your business needs.', icon: 'far fa-life-ring ' },
                { title: 'We are social', para: 'Yes, you can follow us on social media channels too !', icon: 'fab fa-twitter' },
            ],
        }
    },
     mounted() {
        document.title = "Contact Us To Get More Information | Mxpertz";
    },
}
</script>
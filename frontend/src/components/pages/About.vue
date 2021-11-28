<template>
  <div>
    <section class="about-banner">
      <div class="container">
        <div class="text-container">
            <h1>Mxpertz is meant to simplify the websites & apps building experience.</h1>
            <!-- <ul class="dynamic-text">
                <li><h1 class="item">Mxpertz is meant to simplify the websites & apps building experience.</h1></li>
                <li><h1 class="item">Get ready to impress.</h1></li>
                <li><h1 class="item">Keep your audience engaged.</h1></li>
                <li><h1 class="item">Build your dream website & apps.</h1></li>
                <li><h1 class="item">Mxpertz is meant to simplify the websites & apps building experience.</h1></li>
            </ul> -->
        </div>
      </div>
    </section>

    <section class="about-mxpertz">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" v-for="(about,index) in aboutData" :key="index" data-aos="fade-up" data-aos-delay="600">
                    <div class="about-content">
                        <h2>{{about.first}}</h2>
                        <p>{{about.second}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-icons">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" v-for="(icon, index) in iconData" :key="index" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-content">
                        <i v-bind:class= icon.class ></i>
                        <h6>{{ icon.name }}</h6>
                        <p>{{ icon.para }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-build">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" data-aos="fade-up" data-aos-delay="600">
                    <img src="/static/images/about-build.png" alt="about-build">
                </div>
                <div class="col-sm-8" data-aos="fade-up" data-aos-delay="800">
                    <div class="about-build-content">
                        <h2>Build better business software a lot quicker with Mxpertz.</h2>
                        <div class="line"></div>
                        <p>Blend of robust processes, easy communication and excellent skill-sets aid to an advantage while working with a right technology partner.</p>
                        <Progress v-bind:progressData="progressData"  />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-process">
        <div class="container">
            <div class="customize-title" data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-center">Our Process</h2>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <div class="para">
                    <p>We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4" v-for="(process,index) in aboutprocessData" :key="index" data-aos="fade-up" data-aos-delay="600">
                    <div class="card">
                        <div class="number">{{process.number}}.</div>
                        <h4>{{process.title}}</h4>
                        <p>{{process.desc}}</p>
                        <router-link to="/our-process"><button class="readbtn">Read more</button></router-link>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-get">
        <div class="container">
            <div class="row">
                <div class="col-sm-7" data-aos="fade-up" data-aos-delay="600">
                    <img src="/static/images/about-get.png" alt="about-get">
                </div>
                <div class="col-sm-5" data-aos="fade-up" data-aos-delay="800">
                    <div class="about-get-content">
                        <h2>Get the ultimate experts team and grow your business audience</h2>
                        <div class="line"></div>
                        <p>Our team carry determination, and right proportion of technical skills to ensure your be-spoke requirements gets delivered with right precision.</p>
                        <div class="row">
                            <div class="col-sm-5" v-for="(get,index) in getData" :key="index">
                                <div class="number">{{get.number}}<span>+</span></div>
                                <p>{{get.desc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-team">
        <div class="container-fluid">
            <div class="customize-title">
                <h2 class="text-center">A multi-disciplinary team of<br/> creators</h2>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <div class="para">
                    <p>Get to know the people behind Mxpertz. Our creative<br/> and technical team.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <Testimonials-about/>
                </div>
            </div>
        </div>
    </section>

    <section class="about-trusted">
        <div class="container">
            <div class="customize-title">
                <h2 class="text-center">Trusted by over 100+<br/> Global businesses. Try<br/> Mxpertz today!</h2>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <div class="text-center"><router-link class="letsbtn" to="/contact">Get Started</router-link></div>
            </div>
            <div class="row">
                <div class="col-sm-3" v-for="(trust,index) in trustedData" :key="index">
                    <img v-bind:src="'/static/images/' + trust.image " alt="">
                </div>
            </div>
        </div>
    </section>
   
  </div>
</template>
<script>
import Progress from '../reusablecomponents/Progress.vue';
import TestimonialsAbout from '../reusablecomponents/Team.vue';
export default {
  components: { Progress, TestimonialsAbout },
  name: "About",
  data(){
      return{
        aboutData: [
            { first: 'We Create Brand New Corporate Identities' },
            { second: 'Mxpertz, a certified ISO 9001-2015 - assisting various industry verticals globally solving their routine business challenges. Ours incorporate held in 2015 with a vision to add value-added service solutions to our end customers. Our team of experts leverages businesses to become scalable, competent and sustained in achieving better business prospects and higher returns over their investments by adding the right technological blend in an effective manner.' },
            { second: 'Choosing us your technological partner would get the right ROI on the incurred investment with us. We leverage the acumen of right investment returns to ensure your projects success shall get us in a win-wi situation. Our team consist of key-elements like - integrity, passion & determination towards building a trust-worthy relationships with our customers.' }
        ],
        iconData: [
            { class: 'fas fa-bullseye', name: 'Build Dream Project',para: 'As per defined project scope'},
            { class: 'fas fa-user-secret', name: 'Unlock Your Creativity',para: 'Brainstorm with us'},
            { class: 'fas fa-crown', name: 'Premium Design',para: 'Impressive UI/UX'},
            { class: 'far fa-window-maximize', name: 'Right Technology Partner',para: 'Reliable association'},
            { class: 'fas fa-atom', name: 'Enhanced Business Presentation',para: 'Leading business associations'},
            { class: 'fas fa-clock', name: 'Timely Progress Updates',para: 'Disciplined approach'},
        ],
        aboutprocessData: [
            {number: '1', title: 'Strategy', desc: 'Share your business requirements with us, we will brainstorm and suggest a smart way of achieving objective by creating strategies in accordance to your requirement.'},
            {number: '2', title: 'Development', desc: 'Get your project developed under our roof with right key approaches towards development like Agile flow of working ensuring the superior quality development takes places ahead.'},
            {number: '3', title: 'Tested Deployment', desc: 'Re-iterate, to make your delivery perfect as projected. Validating process with required testing during the project ensures we work as per plan, towards project goal.'}
        ],
        getData: [
            {number: '20', desc: 'Team members carrying specific key skill-sets.'},
            {number: '4', desc: 'Years in business, catering SMEs globally'},
        ],
        trustedData: [
            { image: 'repair.png'},
            { image: 'ellipsis.png'},
            { image: 'abi.png'},
            { image: 'eli.png'},
        ],
        progressData: [
            { title: 'Customer Satisfaction', percentage: '90%', width: 'max-width: 90%' },
            { title: 'Web Development', percentage: '75%', width: 'max-width: 75%' },
            { title: 'Performance & Outcome', percentage: '85%', width: 'max-width: 85%' },
        ],
      }
  },
  mounted() {  
        document.title = "About Mxpertz The Best Web Development Agency in Indore";  
    },
};
</script>
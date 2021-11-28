<template>
    <div>
       <breadcumb v-bind:title="job.title" />

       <section class="get-ultimate">
           <div class="container">
               <div class="row">
                   <div class="col-sm-6">
                       <div class="get-text">
                           <h2>Get the ultimate experience and learn to grow yourself with us.</h2>
                           <div class="line"></div>
                           <p>We deliver results, and Join Us in the Journey.</p>
                       </div>
                   </div>
                   <div class="col-sm-2"></div>
                   <div class="col-sm-4">
                       <div class="card">
                           <h4>We provide the exceptional service we'd want to experience ourselves!</h4>
                           <p>Want to work with us?</p>
                       </div>
                   </div>
               </div>
           </div>
       </section>

       <section class="skills">
           <div class="container">
            <div class="customize-title" data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-center">Skills, Experience Required</h2>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <div class="para">
                    <p>Key Skills:- {{job.skills}}</p>
                </div>
            </div>
           </div>
       </section>

       <section class="job-summary">
           <div class="container">
                <div class="customize-title" data-aos="fade-up" data-aos-delay="600">
                    <h3 class="text-center">Job Summary</h3>
                    <p class="text-center my-4">{{job.summary}}</p>
                </div>
           </div>
       </section>

        <section class="res-req">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="responsibility">
                            <h4>Responsibilities and Duties</h4>
                            <ul>
                                <li>{{job.responsibility_one}}</li>
                                <li>{{job.responsibility_two}}</li>
                                <li>{{job.responsibility_three}}</li>
                                <li>{{job.responsibility_four}}</li>
                                <li>{{job.responsibility_five}}</li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5" data-aos="fade-up" data-aos-delay="600">
                        <div class="required">
                            <h4>Required Experience and Qualifications</h4>
                            <ul>
                                <li>{{job.requirements_one}}</li>
                                <li>{{job.requirements_two}}</li>
                                <li>{{job.requirements_three}}</li>
                                <li>{{job.requirements_four}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
import axios from 'axios'
import Breadcumb from '../reusablecomponents/Breadcumb.vue'
export default {
    name: 'JobTemplate',
    components:{
        Breadcumb,
    },
    data(){
        return{
            job:{
                title: '',
                skills: '',
                url: '',
                positions: '',
                experience: '',
                summary: '',
                responsibility_one: '',
                responsibility_two: '',
                responsibility_three: '',
                responsibility_four: '',
                responsibility_five: '',
                requirements_one: '',
                requirements_two: '',
                requirements_three: '',
                requirements_four: '',
            },
            
        }
    },
    created(){
        axios.get(`http://localhost:8000/api/jobs/${this.$route.params.id}`)
        .then((res)=> {
            this.job = res.data
        });
    },
    mounted() {
        document.title = ' Apply for job | Mxpertz' ;
    },

}
</script>

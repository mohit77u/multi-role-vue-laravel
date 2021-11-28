<template>
    <div>
        <section class="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="sidemain">
                            <h2 class="text-center my-5">Hi Admin!</h2>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <router-link class="nav-link" to="/admin" >Dashboard</router-link>
                                <router-link class="nav-link" to="/dashboard/add-job" >Add New Job</router-link>
                                <router-link class="nav-link active" to="/dashboard/all-job">All Jobs</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="main-content">
                            <h2 class="text-center my-5">Admin(Update job)</h2>
                            <div class="add-jobs">
                                <form @submit.prevent="updateJob">
                                    <h5>Responsibility</h5>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Job Title</label>
                                                <input type="text" placeholder="Job Title" class="form-control" v-model="job.title">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Key Skills</label>
                                                <input type="text" placeholder="Key Skills" class="form-control" v-model="job.skills">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Url</label>
                                                <input type="text" placeholder="Url" class="form-control" v-model="job.url">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Number of positions</label>
                                                <input type="text" placeholder="Number of positions" class="form-control" v-model="job.positions">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Minimum Experience</label>
                                                <input type="text" placeholder="Minimum Experience" class="form-control" v-model="job.experience">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Job Summary</label>
                                                <textarea placeholder="Job Summary" class="form-control" v-model="job.summary"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <h5>Responsibility</h5>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-2">
                                                        <label>Responsibility One</label>
                                                        <input type="text" placeholder="Responsibility One" class="form-control" v-model="job.responsibility_one">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-2">
                                                        <label>Responsibility Two</label>
                                                        <input type="text" placeholder="Responsibility Two" class="form-control" v-model="job.responsibility_two">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-2">
                                                        <label>Responsibility Three</label>
                                                        <input type="text" placeholder="Responsibility Three" class="form-control" v-model="job.responsibility_three">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-2">
                                                        <label>Responsibility Four</label>
                                                        <input type="text" placeholder="Responsibility Four" class="form-control" v-model="job.responsibility_four">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-2">
                                                        <label>Responsibility Five</label>
                                                        <input type="text" placeholder="Responsibility Five" class="form-control" v-model="job.responsibility_five">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <h5>Requirements</h5>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Requirements One</label>
                                                        <input type="text" placeholder="Requirements Five" class="form-control" v-model="job.requirements_one">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Requirements Two</label>
                                                        <input type="text" placeholder="Requirements Two" class="form-control" v-model="job.requirements_two">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Requirements Three</label>
                                                        <input type="text" placeholder="Requirements Three" class="form-control" v-model="job.requirements_three">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Requirements Four</label>
                                                        <input type="text" placeholder="Requirements Four" class="form-control" v-model="job.requirements_four">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <button class="letsbtn">{{ loading ? "Updating..." : "Update" }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
import axios from 'axios'
import SideBar from './SideBar.vue'
export default {
    name: 'Dashboard',
    components: {
        SideBar
    },
    data(){
        return{
            loading: false,
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
    methods: {
       updateJob(){
           this.loading= true
            axios.put(`http://localhost:8000/api/jobs/${this.$route.params.id}`,this.job)
            .then(response=>{
                this.loading= false
                this.$swal({
                    title: 'Succesfully Job Updated !!',
                    icon: 'success'
                });
                this.$router.push('/dashboard/all-job')
            }).catch(error=>{
                this.loading= false
                this.$swal({
                    title: 'Error Occurred !!',
                    icon: 'error'
                });
            })
        }
    },
}
</script>
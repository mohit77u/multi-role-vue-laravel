<template>
    <div>
        <section class="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <SideBar />
                    </div>
                    <div class="col-sm-10">
                        <div class="main-content">
                             <div class="all-jobs" v-if="jobs">
                                <h2 class="text-center my-5">Admin(All jobs)</h2>
                                <div class="add-new-btn mb-3">
                                    <router-link class="btn btn-outline-success" to="/dashboard/add-job" >Add New Job</router-link>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SI.NO</th>
                                                <th>Job Title</th>
                                                <th>Key Skills</th>
                                                <th>Positions</th>
                                                <th>Experience</th>
                                                <th>Job Summary</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(job,index) in jobs" :key="index">
                                                <td>{{ index+1 }}</td>
                                                <td>{{ job.title }}</td>
                                                <td>{{ job.skills }}</td>
                                                <td>{{ job.positions }}</td>
                                                <td>{{ job.experience }}</td>
                                                <td>{{ job.summary }}</td>
                                                <td><router-link class="btn btn-outline-success" :to="{name: 'edit', params: {id: job.id, url: job.url,}}">Edit</router-link></td>
                                                <td><button class="btn btn-outline-danger" @click="deleteJob(job.id)">{{ loading ? "Deleting..." : "Delete" }}</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
            jobs: [],
        }
    },
    methods: {
        fetchAllJobs() {
            axios.get('http://localhost:8000/api/jobs', this.job)
            .then(response => this.jobs = response.data)
            .catch(error=>{
                console.log(error)
            })           
            
        },
        deleteJob(id) {
            this.loading= true
            axios.delete(`http://localhost:8000/api/jobs/${id}`)
            .then(response => {
                this.fetchAllJobs();
                this.loading= false
                this.$swal('Succesfully Job Deleted !!');
            })
            .catch(error=>{
                console.log(error)
                this.loading= false
            })           
            
        },
    },
    mounted() {
        this.fetchAllJobs()
    },
    
}
</script>
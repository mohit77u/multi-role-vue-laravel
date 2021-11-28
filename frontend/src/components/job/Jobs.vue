<template>
    <div>
        <div class="row" v-if="jobs">
            <div class="col-sm-4" v-for="(job,index) in jobs" :key="index">
                <div class="card">
                    <h6>{{job.title}}</h6>
                    <p>Position Number :- {{job.positions}}</p>
                    <p>Experience :- {{job.experience}}</p>
                    <router-link :to="{ name:'JobTemplate', params: { id: job.id, url: job.url} }">
                        <p class="applybtn">Apply for job</p>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    name: 'Other',
    data(){
        return{
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
    },
    mounted() {
        this.fetchAllJobs()
    },
    
}
</script>
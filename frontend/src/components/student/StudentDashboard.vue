<template>
    <div>
        <div v-if="!isStudent">
            <div class="notauth text-center">
                <div class="text-spin">
                    <div class="spinner-border text-danger" role="status"></div>
                    <h4 class="text-center my-5">You are not Authorize to access this page !! Redirecting to Your Dashboard Please wait...</h4>
                </div>
            </div>
        </div>
        <div v-if="isStudent">
            <h1>Student Dashboard</h1>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'StudentDashboard',
    data(){
        return{
            user:[],
        }
    },
     created(){
        axios.get('http://localhost:8000/api/user',{
            headers:{
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        })
        .then(res=>{
            this.user = res.data
        })
    },
    computed:{
        isStudent(){
            if(this.user.role == 'student'){
                return true
            }else if(this.user.role == 'user'){
                this.$router.push('/user')
            }
        },
    },
    beforeCreate () {
        if(this.$store.state.token == null) {
            this.$router.push('/login')
        }
    }
}
</script>
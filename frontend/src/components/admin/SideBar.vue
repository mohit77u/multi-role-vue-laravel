<template>
    <div>
        <div class="sidemain">
            <h2 class="text-center my-5">Hi {{user.name}}!</h2>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <router-link class="nav-link" to="/admin" >Dashboard</router-link>
                <router-link class="nav-link" to="/dashboard/add-job" >Add New Job</router-link>
                <router-link class="nav-link" to="/dashboard/all-job">All Jobs</router-link>
                <router-link class="nav-link" to="/dashboard/products">Products</router-link>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    name: 'SideBar',
    data(){
        return{
             user: [],
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
        isAdmin(){
            return this.user.role == 'admin'
        },
        isUser(){
            return this.user.role == 'user'
        },
        isStudent(){
            return this.user.role == 'student'
        }
    },
}
</script>
<template>
    <transition name="fade">
        <div>
            <div v-if="!isAdmin">
                <div class="notauth text-center">
                    <div class="text-spin">
                        <div class="spinner-border text-danger" role="status"></div>
                        <div v-if="isUser || isStudent">
                            <h4 class="text-center my-5">You are not authorize to access this page please login with Admin Credentials</h4>
                        </div>
                    </div>
                </div>
            </div>
            <section class="dashboard" v-if="isAdmin">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-2">
                            <SideBar />
                        </div>
                        <div class="col-sm-10">
                            <div class="main-content">
                                <div class="all-jobs" v-if="users">
                                    <h2 class="text-center my-5">Admin Details</h2>
                                    <div class="add-new-btn mb-3">
                                        <router-link class="btn btn-outline-success" to="/dashboard/add-admin" >Add New Admin</router-link>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>SI.NO</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(user,index) in users" :key="index">
                                                    <td>{{ index+1 }}</td>
                                                    <td>{{ user.name }}</td>
                                                    <td>{{ user.email }}</td>
                                                    <td>{{ user.role }}</td>
                                                    <td><router-link class="btn btn-outline-success" :to="{name: 'update', params: {id: user.id}}">Edit</router-link></td>
                                                    <td><button class="btn btn-outline-danger" @click="deleteUser(user.id)">{{ loading ? "Deleting..." : "Delete" }}</button></td>
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
    </transition>
</template>
<script>
    import axios from 'axios'
    import SideBar from './SideBar.vue'
    export default {
        name: 'AdminDashboard',
        components: {
            SideBar
        },
        data(){
            return{
                loading: false,
                users: [],
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
                if(this.user.role == 'admin'){
                    return true
                }else if(this.user.role == 'student'){
                    this.$router.push('/student')
                }else if(this.user.role == 'user'){
                    this.$router.push('/user')
                }
            },
            isUser(){
                return this.user.role == 'user'
            },
            isStudent(){
                return this.user.role == 'student'
            },
        },
        methods: {
            fetchAllUsers() {
                axios.get('http://localhost:8000/api/users', this.users)
                .then(response => this.users = response.data)
                .catch(error=>{
                    console.log(error)
                })           
                
            },
            deleteUser(id) {
                this.loading= true
                axios.post(`http://localhost:8000/api/delete/${id}`)
                .then(() => {
                    this.fetchAllUsers();
                    this.loading= false
                    this.$swal('Succesfully User Deleted !!');
                })
                .catch(error=>{
                    console.log(error)
                    this.loading= false
                })           
                
            },
        },
        mounted() {
            this.fetchAllUsers();
        },
        beforeCreate () {
            if(this.$store.state.token == null) {
                this.$router.push('/login')
            }
        }
        
    }
</script>

<style scoped>
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.8s ease;
    }
    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }
</style>
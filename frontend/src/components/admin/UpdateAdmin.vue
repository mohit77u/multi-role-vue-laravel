<template>
    <div>
        <section class="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                       <div class="sidemain">
                            <h2 class="text-center my-5">Hi Admin!</h2>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <router-link class="nav-link active" to="/admin" >Dashboard</router-link>
                                <router-link class="nav-link" to="/dashboard/add-job" >Add New Job</router-link>
                                <router-link class="nav-link" to="/dashboard/all-job">All Jobs</router-link>
                                <router-link class="nav-link" to="/dashboard/products">Products</router-link>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="main-content">
                            <h2 class="text-center my-5">Admin(Update Admin Details)</h2>
                            <div class="add-jobs">
                                <form class="px-5 py-5" v-on:submit.prevent="updateUser">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input disabled type="text" placeholder="Full Name" class="form-control" v-model="registration.name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input disabled type="email" placeholder="Email address" class="form-control" v-model="registration.email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">User Role</label>
                                        <select class="form-select" aria-label="Default select example" v-model="registration.role">
                                            <option selected disabled>Choose User Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                            <option value="student">Student</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn letsbtn w-100">{{ loading ? "Updating..." : "Update User" }}</button>
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
            registration: {
                role: '',
            }
        }
    },
    created(){
        axios.get(`http://localhost:8000/api/user/${this.$route.params.id}`)
        .then((res)=> {
            this.registration = res.data
        });
    },
    methods: {
       updateUser(){
           this.loading= true
            axios.post(`http://localhost:8000/api/update/${this.$route.params.id}`,this.registration)
            .then(response=>{
                this.loading= false
                this.$swal({
                    title: 'Succesfully User Updated !!',
                    icon: 'success'
                });
                this.$router.push('/dashboard')
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
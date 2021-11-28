<template>
    <section class="auth">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="card py-5">
                        <h2 class="text-center">Reset Password</h2>
                        <form class="px-5 py-5" v-on:submit.prevent="Reset">
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" placeholder="Password" class="form-control" v-model="reset.password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password Confirmation</label>
                                <input type="password" placeholder="Password Confirmation" class="form-control" v-model="reset.password_confirmation">
                            </div>
                            <button type="submit" class="btn letsbtn w-100 mb-3">{{ loading ? "Loading..." : "Reset Password" }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import axios from 'axios'
export default {
    name: 'ResetPassword',
    data(){
        return{
            loading: false,
            reset: {
                password: '',
                password_confirmation: '',
            }
        }
    },
    methods: {
        Reset(){
            this.loading= true
            axios.post('http://localhost:8000/api/reset',{
                password: this.reset.password,
                password_confirmation: this.reset.password_confirmation,
                token: this.$route.params.token
            })
            .then(res=>{
                this.loading= false
                this.$swal({
                    title: 'Password Reset Successfully !!',
                    icon: 'success'
                });
            })
            .catch(error=>{
                this.loading= false
                this.$swal({
                    title: 'Error Occurred !!',
                    icon: 'error'
                });
            })
            
        }
    }
}
</script>
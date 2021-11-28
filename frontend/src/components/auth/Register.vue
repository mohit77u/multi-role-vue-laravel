<template>
    <div>
        <section class="auth">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <h2 class="text-center my-5">Registration Form</h2>
                            <form class="px-5 py-5" v-on:submit.prevent="Register">
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" placeholder="Full Name" class="form-control" v-model="registration.name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" placeholder="Email address" class="form-control" v-model="registration.email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" placeholder="Password" class="form-control" v-model="registration.password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password Confirmation</label>
                                    <input type="password" placeholder="Password Confirmation" class="form-control" v-model="registration.password_confirmation">
                                </div>
                                <button type="submit" class="btn letsbtn w-100">{{ loading ? "Loading..." : "Register" }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    name: 'Register',
    data(){
        return{
            loading: false,
            registration: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            }
        }
    },
    methods: {
        Register(){
            this.loading= true
            this.$store.dispatch('Register', this.registration)
            .then(()=>{
                this.loading= false
                this.$swal({
                    title: 'Succesfully Registered !!',
                    icon: 'success'
                });
                this.$router.push('/login')
            }).catch(error=>{
                this.loading= false
                this.$swal({
                    title: 'Error Occurred !!',
                    icon: 'error'
                });
            })
        }
    },
    beforeCreate () {
        if(this.$store.state.token) {
            this.$router.push('/login')
        }
    }
}
</script>
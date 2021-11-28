<template>
    <section class="auth">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="card py-5">
                        <h2 class="text-center mb-2">Login Form</h2>
                        <form class="px-5 py-5" v-on:submit.prevent="Login">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" placeholder="Email address" class="form-control" v-model="login.email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" placeholder="Password" class="form-control" v-model="login.password">
                            </div>
                            <button type="submit" class="btn letsbtn w-100 mb-4">{{ loading ? "Loading..." : "Login" }}</button>
                            <div class="text-center">
                                <router-link to="/forgot-password">Forgot Password?</router-link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: 'Login',
    data(){
        return{
            loading: false,
            login: {
                email: '',
                password: '',
            },
            user:[],
        }
    },
    // computed: {
    //     Role(){
    //         let role = this.$store.state.role
    //         return role
    //     }
    // },
    methods: {
        Login(){
            this.loading= true
            this.$store.dispatch('Login', this.login)
            .then(res=>{
                this.loading= false
                let role = res.data.role
                if(role == 'admin'){
                    this.$router.push('/admin')
                } else if(role == 'user'){
                    this.$router.push('/user')
                } else if(role == 'student'){
                    this.$router.push('/student')
                }
                this.$swal({
                    title: 'Succesfully Logged in !!',
                    icon: 'success'
                });
            }).catch(()=>{
                this.loading= false
                this.$swal({
                    title: 'Invalid Username/Password !!!',
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
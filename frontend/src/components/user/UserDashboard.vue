<template>
    <div>
        <h1>User Dashboard</h1>
    </div>
</template>

<script>

export default {
    name: 'UserDashboard',
    data(){
        return{
            
        }
    },
    beforeCreate () {
        if(this.$store.state.token == null) {
            this.$router.push('/login')
        }
    }
}
</script>
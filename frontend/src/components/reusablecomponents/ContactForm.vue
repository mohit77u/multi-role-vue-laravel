<template>
    <div class="form">
        <form @submit.prevent="sendEmail">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Enter your name" v-model="name" name="name">
                <label for="floatingInput">Full name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Enter your email" v-model="email" name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px" v-model="message" name="message"></textarea>
                <label for="floatingTextarea2">Message</label>
            </div>
            <input @click="checkForm" type="submit" class="sendbtn" value="Send message">
            <div class="alert alert-danger" role="alert" v-if="error">
                {{error}}
            </div>
        </form>
    </div>
</template>
<script>

import emailjs from 'emailjs-com';
export default {
    name: 'ContactForm',
    data(){
        return{
            name: '',
            email: '',
            message: '',
            error: '',
        }
    },
    methods: {
        sendEmail(e) {
            try {
                emailjs.sendForm("service_gcxmere","template_nv7ie7z", e.target, 'user_nX1ksVts46OWr0S3uODen', {
                    name: this.name,
                    email: this.email,
                    message: this.meessage,
                })
                this.$swal('Your details submit succesfully, We will contact you shortly...');
            } catch (error) {
                console.log(error)
            }
            this.name = ''
            this.email = ''
            this.message = ''
        },
        checkForm(e) {
            if (this.name && this.email && this.message) {
                this.error = '';
                return true;
            }
            if (!this.name && !this.email && !this.message) {
                this.error = 'Please correct the above fields!';
            }
            e.preventDefault();
        },
    },
}
</script>

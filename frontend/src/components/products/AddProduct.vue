<template>
    <div>
        <section class="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="sidemain">
                            <h2 class="text-center my-5">Hi Admin!</h2>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <router-link class="nav-link" to="/admin" >Dashboard</router-link>
                                <router-link class="nav-link" to="/dashboard/add-job" >Add New Job</router-link>
                                <router-link class="nav-link" to="/dashboard/all-job">All Jobs</router-link>
                                <router-link class="nav-link active" to="/dashboard/products">Products</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="main-content">
                            <h2 class="text-center my-5">Admin(Add new Product)</h2>
                            <div class="add-jobs">
                                <form @submit.prevent="handleSubmit" enctype="multipart/form-data">
                                    <h5>Product Details</h5>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Product Name</label>
                                                <input type="text" placeholder="Product Name" class="form-control" v-model="product.name">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Featured Image</label>
                                                <input type="file" class="form-control" v-on:change="onChange">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Price</label>
                                                <input type="text" placeholder="Price" class="form-control" v-model="product.price">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Short Description</label>
                                                <textarea placeholder="Short Description" class="form-control" v-model="product.short_description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Description</label>
                                                <textarea placeholder="Description" class="form-control" v-model="product.description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Available Quantity</label>
                                                <input type="text" placeholder="Available Quantity" class="form-control" v-model="product.quantity">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <button type="submit" class="letsbtn">{{ loading ? "Adding..." : "Add Product" }}</button>
                                            </div>
                                        </div>
                                    </div>
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
import SideBar from '../admin/SideBar.vue'
export default {
    name: 'Dashboard',
    components: {
        SideBar
    },
    data(){
        return{
            loading: false,
            product: {
                name: '',
                price: '',
                quantity: '',
                description: '',
                short_description: '',
            },
            image: '',
            file: '',
        }
    },
    methods: {
       onChange(e) {
            this.file = e.target.files[0];
            console.log(e)
        },
        handleSubmit(){
            this.loading= true
            const config = {headers: {'content-type': 'multipart/form-data'}}

            let data = new FormData();
            data.append('name', this.product.name);
            data.append('file', this.file);
            data.append('price', this.product.price);
            data.append('quantity', this.product.quantity);
            data.append('short_description', this.product.short_description);
            data.append('description', this.product.description);
            axios.post('http://localhost:8000/api/products', data,config)
            .then(()=>{
                this.loading= false
                this.$swal({
                    title: 'Succesfully Product Created !!',
                    icon: 'success'
                });
                this.$router.push('/dashboard/products')
            }).catch(error=>{
                this.loading= false
                this.$swal({
                    title: 'Error Occurred !!',
                    icon: 'error'
                });
            })
        },
    },
}
</script>
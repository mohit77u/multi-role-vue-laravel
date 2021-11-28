<template>
    <div>
        <section class="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <SideBar />
                    </div>
                    <div class="col-sm-10">
                        <div class="main-content">
                             <div class="all-jobs" v-if="products">
                                <h2 class="text-center my-5">Admin(All Products)</h2>
                                <div class="add-new-btn mb-3">
                                    <router-link class="btn btn-outline-success" to="/dashboard/add-product" >Add New Poduct</router-link>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SI.NO</th>
                                                <th>Products Name</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(product,index) in products" :key="index">
                                                <td>{{ index+1 }}</td>
                                                <td>{{ product.name }}</td>
                                                <td><img v-bind:src="'http://localhost:8000' + product.path" alt=""></td>
                                                <td>{{ product.price }}</td>
                                                <td>{{ product.quantity }}</td>
                                                <td>{{ product.description }}</td>
                                                <td><router-link class="btn btn-outline-success" :to="{name: 'EditProduct', params: {id: product.id,}}">Edit</router-link></td>
                                                <td><button class="btn btn-outline-danger" @click="deleteProduct(product.id)">{{ loading ? "Deleting..." : "Delete" }}</button></td>
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
</template>
<script>
import axios from 'axios'
import SideBar from '../admin/SideBar.vue'
export default {
    name: 'AllProducts',
    components: {
        SideBar
    },
    data(){
        return{
            loading: false,
            products: [],
        }
    },
    methods: {
        fetchAllProducts() {
            axios.get('http://localhost:8000/api/products', this.products)
            .then(response => this.products = response.data)
            .catch(error=>{
                console.log(error)
            })           
            
        },
        deleteProduct(id) {
            this.loading= true
            axios.delete(`http://localhost:8000/api/products/${id}`)
            .then(response => {
                this.fetchAllProducts();
                this.loading= false
                this.$swal('Succesfully Job Deleted !!');
            })
            .catch(error=>{
                console.log(error)
                this.loading= false
            })           
            
        },
    },
    mounted() {
        this.fetchAllProducts()
    },
    
}
</script>
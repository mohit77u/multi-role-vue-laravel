import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'


Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        token: localStorage.getItem('token') || null,
    },
    getters: {
        loggedIn(state){
            return state.token !== null
        },
    },
    mutations: {
        setToken(state, token){
            state.token = token
        },
        removeToken(state){
            state.token = null;
        },
    },
    actions: {
        Register(context,registration){
            return new Promise((resolve,reject)=>{
                axios.post('http://localhost:8000/api/register',registration)
                .then(res=>{
                    resolve(res)
                }).catch(error=>{
                    reject(error)
                })
            })
            
        },
        RegisterAdmin(context,registration){
            return new Promise((resolve,reject)=>{
                axios.post('http://localhost:8000/api/addadmin',registration)
                .then(res=>{
                    resolve(res)
                }).catch(error=>{
                    reject(error)
                })
            })
            
        },
        Login(context,login){
            return new Promise((resolve,reject)=>{
                axios.post('http://localhost:8000/api/login',login)
                .then(res=>{
                    localStorage.setItem('token', res.data.token)
                    context.commit('setToken', res.data.token)
                    resolve(res)
                }).catch(error=>{
                    reject(error)
                })
            })
        },
        Logout({ commit }) {
            localStorage.removeItem('token');
            commit('removeToken');
        },
        User(){
            axios.get('http://localhost:8000/api/user',{
                headers:{
                    Authorization: 'Bearer ' + localStorage.getItem('token')
                }
            })
            .then(res=>{
                console.log(res)
            })
        }
    }
});
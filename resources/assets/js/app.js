import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

import HomeComponent from './components/home.component.vue'
import LoginComponent from './components/login.component.vue'



Vue.use(VueRouter)
Vue.use(VueResource)

const routes = [
	{
		path : '/',
		component : HomeComponent
	},
	{
		path : '/login',
		component : LoginComponent
	}
]

const router = new VueRouter({
	routes
})


const app = new Vue({
	router
}).$mount('#app')




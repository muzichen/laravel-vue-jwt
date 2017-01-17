import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

import HomeComponent from './components/home.component.vue'
import LoginComponent from './components/login.component.vue'
import auth from './auth.js'



Vue.use(VueRouter)
Vue.use(VueResource)

Vue.http.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('token')

const routes = [
	{
		path : '/home',
		component : HomeComponent,
		meta : { requiresAuth : true }
	},
	{
		path : '/login',
		component : LoginComponent 
	}
]

export const router = new VueRouter({
	routes
})

router.beforeEach((to, from, next) => {
	if(to.meta.requiresAuth) {
		if(auth.isLogin()) {
			next()
		} else {
			next({
				path : '/login'
			})
		}
	} else {
		next()
	}
})


const app = new Vue({
	router
}).$mount('#app')




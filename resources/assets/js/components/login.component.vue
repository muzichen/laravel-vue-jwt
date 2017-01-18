<template>
	<div class="row col-md-6 col-md-offset-3">
		
		<div class="alert alert-danger" v-if="error">
			{{ responseMessage }}
		</div>

		<div class="alert alert-success" v-if="success">
			{{ responseMessage }}
		</div>

		<form @submit.prevent="handleSubmit">

		
			<div class="form-group">
				<label for="">邮箱</label>
				<input type="text" class="form-control" id="" placeholder="请输入邮箱" v-model="authenticate.email">
			</div>

			<div class="form-group">
				<label for="password">密码</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="请输入密码" v-model="authenticate.password">
			</div>
		
			
			<button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</template>
<script>

	import { loginUrl } from '../config.js'

	export default {
		data() {
			return {
				error : false,
				success : false,
				errorMessage : '',
				authenticate : {
					email : '',
					password : ''
				}
			}
		},
		methods : {
			handleSubmit() {
				let authenticate = {
					email : this.authenticate.email,
					password : this.authenticate.password
				}
				this.$http.post(loginUrl, authenticate)
					.then(response => {
						console.log(response)
						this.error = false
						this.success = true
						localStorage.setItem('token', response.body.token);
						this.responseMessage = response.statusText
						this.$router.push({ path : 'home' })
					})
					.catch(error => {
						alert(123)
						console.log(error)
						this.error = true
						this.success = false
						this.responseMessage = error.statusText
					})
			}
		}
	}
</script>
<template>
	<div class="row col-md-6 col-md-offset-3">
		
		<div class="alert alert-danger" v-if="error">
			error
		</div>

		<form @submit.prevent="handleSubmit">

		
			<div class="form-group">
				<label for="">邮箱</label>
				<input type="text" class="form-control" id="" placeholder="请输入邮箱">
				<p class="alert alert-danger"></p>
			</div>

			<div class="form-group">
				<label for="password">密码</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="请输入密码">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</template>
<script>
	export default {
		data() {
			return {
				error : false,
				authenticate : {
					email : '',
					password : ''
				}
			}
		},
		methods : {
			handleSubmit() {
				console.log(this.$http)
			}
		}
	}
</script>
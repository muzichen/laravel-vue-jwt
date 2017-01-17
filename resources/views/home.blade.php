<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Jwt</title>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
		<div id="app">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Laravel Vue</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active">
									<router-link to="/login">登录</router-link>
								</li>
								<li>
									<router-link to="/register">注册</router-link>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<div class="wrapper">
					<router-view></router-view>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

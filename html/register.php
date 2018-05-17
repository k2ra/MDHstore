<?php include(HTML_DIR . 'component/header.php'); ?>
<body>
<!--header-->
	<div class="header">
	<?php include(HTML_DIR . 'component/topbar.php'); ?>
	</div>
		
		<div class="container">
		
			<div class="head-top">
			
		<div class="col-sm-8 col-md-offset-2 h_menu4">
			<?php include(HTML_DIR . 'component/menu.php'); ?>
		</div>
			<?php include(HTML_DIR . 'component/sideMenu.php');?>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Register</h1>
		<em></em>
		<h2><a href=".">Home</a><label>/</label>Register</a></h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
			<form method="post" action="?view=register&mode=add" >
				<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" placeholder="Name" required="" id="name">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Phone Number" required="">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
					   <a class="news-letter " href="#">
							 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
						   </a>
					<label class="hvr-skew-backward">
						<input type="submit" value="Submit">
					</label>
				
					</div>
					<div class="col-md-6 login-right">
					 <h3>Completely Free Account</h3>
					 
					 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
					 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
					<a href="?view=login" class="hvr-skew-backward">Login</a>

					</div>
				
					<div class="clearfix"> </div>
			</form>
		</div>

</div>

<!--//login-->

		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
		<?php include(HTML_DIR . 'component/footer.php'); ?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>
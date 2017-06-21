<!DOCTYPE html>
<head>
  <title>InternWala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

.nav-tabs-right {
  text-align: right;
  font-size: 0;
  margin-top:10px;
  
}
.nav-tabs-right>li {
  display: inline-block;
  clear: left;
  float: none;
  text-align: right;
}

.bt-login,.bt-login:hover, .bt-login:active, .bt-login:focus , input[type=submit]{
    background-color: cadetblue;
    color: #ffffff;
    padding-bottom: 10px;
    padding-top: 10px;
	width:100%;
    transition: background-color 300ms linear 0s;
}


.login-tab {
	margin: 0 auto;
	max-width: 380px;
}

.login-modal-header {
	background: #27ae60;
	color: red;
}

.login-modal-header .modal-title {
	color: #fff;
}

.login-modal-header .close {
	color: #fff;
}

.login-modal i {
	color: #000;
}

.login-modal form {
	max-width: 340px;
}

.tab-pane form {
	margin: 0 auto;
}


  </style>
</head>
<body>

<div class="container">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-tabs-right" role="tablist"> 
	<div class="navbar-header">
      <a class="navbar-brand" href="#"><b>INTERNWALA</b></a>
    </div>
    <li role="presentation" class="active"><a href="index.php" aria-controls="home" role="tab" data-toggle="tab">
	<button type="button" class="btn btn-info">
	HOME
	</button>
	</a></li>
	<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	  <button type="button" class="btn btn-info">
		SIGNUP
	  </button>
	<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="sigstd.php">As a Student</a></li>
        <li><a href="sigemp.php">As an Employer</a></li>
      </ul>
    </li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
	LOGIN
	</button></a></li>
  </ul>


  <div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home"></div>
  <div role="tabpanel" class="tab-pane fade" id="profile"></div>
  <div role="tabpanel" class="tab-pane fade" id="messages"></div>
  <div role="tabpanel" class="tab-pane fade" id="settings"></div>
  </div>

</div>

<!-- -Login Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content login-modal">
      		<div class="modal-header login-modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-center" id="loginModalLabel">LOGIN CREDENTIALS</h4>
      		</div>
      		<div class="modal-body">
      			<div class="text-center">
	      			<div role="tabpanel" class="login-tab">
					  	<!-- Nav tabs -->
					  	<ul class="nav nav-tabs" role="tablist">
					    	<li role="presentation" class="active"><a id="stdtab" href="#std" aria-controls="std" role="tab" data-toggle="tab">STUDENT</a></li>
					    	<li role="presentation"><a id="emptab" href="#emp" aria-controls="profile" role="tab" data-toggle="tab">EMPLOYER</a></li>
					    </ul>
					
					  	<!-- Tab panes -->
					 	<div class="tab-content">
					    	<div role="tabpanel" class="tab-pane active text-center" id="std">
					    		&nbsp;&nbsp;
					    		<span id="login_fail" class="response_error" style="display: none;">Login failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form action="login.php" method="POST">
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" class="form-control" id="login_username" placeholder="Username" name="username">
								    	</div>
								    	<span class="help-block has-error" id="email-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								      		<input type="password" class="form-control" id="password" placeholder="Password" name="password">
								    	</div>
								    	<span class="help-block has-error" id="password-error"></span>
								  	</div>
						  			<!--<button type="button" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In...."><a href= "login.php" style="color:white">Login</a></button>-->
									<input type="submit" value="Login"/>
						  			<div class="clearfix"></div>
									<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												Don't have an Account? Register (<a href="sigstd.php">Student</a> / <a href="sigemp.php">Employer</a>)
											</div>
										</div>
						  			</div>
								</form>
					    	</div>
					    	<div role="tabpanel" class="tab-pane" id="emp">
					    	    &nbsp;&nbsp;
					    	    <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form action="login1.php" method="POST">
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" class="form-control" id="username" placeholder="Username">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="username-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="text" class="form-control" id="remail" placeholder="Password">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
						  			<!--<button type="button" id="login_btn" class="btn btn-block bt-login" data-loading-text="Registering...."><a href= "login.php" style="color:white">Login</a></button>-->
									<input type="submit" value="Login"/>
									<div class="clearfix"></div>
									<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												Don't have an Account? Register (<a href="sigstd.php">Student</a> / <a href="sigemp.php">Employer</a>)
											</div>
										</div>
						  			</div>
								</form>
					    	</div>

						  	</div>
						</div>
	      				
	      			</div>
	      		</div>
	      		
	    	</div>
	   </div>
 	</div>
 	<!-- - Login Model Ends Here -->


</body>
</html>

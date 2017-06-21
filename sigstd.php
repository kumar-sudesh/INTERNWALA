<html>
<head>
<title>SIGN UP FORM</title>
  
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.signupbtn {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
	padding: 14px 20px;
    margin: 8px 0;
    color:white;
	width:100%;
}

.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container1 {
    padding: 16px;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<?php
include('header.php');
?>
<h2 style="margin:15px">Signup Form</h2>

<form action="insertstd.php" style="border:1px solid #ccc" method="post">
  <div class="container1">
	
	<label><b>Your Email:</b></label>
    <input type="text" placeholder="Enter Organisation Email" name="email" required>

    <label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password(Min. 6 words)" name="pswd" required>

    <label><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="fname" required>
	
	<label><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lname" required>
    <p>By creating an account you agree to our <a href="#">Terms & Conditions</a>.</p>

    
    <button type="submit" class="signupbtn">SIGNUP</button>
	<button type="button" class="cancelbtn">Cancel</button>
    <center>Already registered? <a href="#">Login</a></center>
	</div>
  </div>
</form>
<?php
include('footer.php');
?>
</body>	
</html>
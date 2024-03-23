<?php
require('database_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <form id="registrationForm" action="login.php" method="post">
        <h2>Sign Up</h2>
    
		<div class="input-box">
        <label>First Name</label>
          <input type="text" id="firstname" name="firstname" placeholder="First Name"  required> 
        </div>

		<div class="input-box">
        <label>Last Name</label>
          <input type="text" id="lastname" name="lastname" placeholder="Last Name"  required> 
        </div>

        <div class="input-box">
        <label>Username</label>
          <input type="text" id="username" name="username" placeholder="Username" required> 
        </div>

        <div class="input-box">
        <label>Email</label>
          <input type="email" id="email" name="email" placeholder="Email"  required> 
        </div>

        <div class="input-box">
        <label>Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required>
		    <span class="toggle-password" onclick="togglePassword()">
                <ion-icon name="eye-off"></ion-icon>
        </span>
        </div>
      
    
        <div class="input-box">
        <label>Confirm Password</label>
          <input type="password" id="confirmPassword" name="ConfirmPassword" placeholder="Confirm Password" required>
		  <span class="toggle-confirm-password" onclick="toggleConfirmPassword()">
    		<ion-icon name="eye-off"></ion-icon>
		  </span>
		</div>

        <button type="submit" id="register" name="create">Sign Up</button>
        <div class="signIn-link">
          <p>Already have an account? <a href="index.php" id="signInBtn">Sign In</a></p>         
        </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


				var firstname = $('#firstname').val();
				var lastname 		= $('#lastname').val();
				var username = $('#username').val();
				var email 		= $('#email').val();
				var password 	= $('#password').val();
				var confirmPassword 	= $('#confirmPassword').val();

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname, lastname: lastname, username: username, email: email, password: password, confirmPassword: confirmPassword},
					success: function(data){
					if(data.includes('Successfully Registered.')) {
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
								$('#registrationForm')[0].reset();
							} else {
							Swal.fire({
								'title': 'Error',
								'text': data,
								'type': 'error'
								});
						}	
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
			}else{
				
			}	

		});		

        $('#registrationForm').on('reset', function() {
            resetEyeIcons();
        });
    });

    function resetEyeIcons() {
        var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("confirmPassword");

        passwordInput.type = "password";
        document.querySelector(".toggle-password ion-icon").setAttribute("name", "eye-off");

        confirmPasswordInput.type = "password";
        document.querySelector(".toggle-confirm-password ion-icon").setAttribute("name", "eye-off");
    }

	function togglePassword() {
        var passwordInput = document.getElementById("password");
        var icon = document.querySelector(".toggle-password ion-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.setAttribute("name", "eye");
        } else {
            passwordInput.type = "password";
            icon.setAttribute("name", "eye-off");
        }
    }

    function toggleConfirmPassword() {
        var confirmPasswordInput = document.getElementById("confirmPassword");
        var icon = document.querySelector(".toggle-confirm-password ion-icon");

        if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
            icon.setAttribute("name", "eye");
        } else {
            confirmPasswordInput.type = "password";
            icon.setAttribute("name", "eye-off");
        }
    }
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
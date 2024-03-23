<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	

</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="username" id="username" placeholder="User Name"><br>

        <div class="password-container">
            <label>Password</label>
            <input type="password" name="password" id="password" class="password-input" placeholder="Password">
            <span class="toggle-password" onclick="togglePassword()">
                <ion-icon name="eye-off"></ion-icon>
            </span>
        </div>

        <button type="submit" value="submit" name="">Login</button>
		
        <div class="signUp-link">
          <p>Don't have an account? <a href="signUp.php" id="signUpBtn">Sign Up</a></p>         
        </div>
     </form>

<script>
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
</script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
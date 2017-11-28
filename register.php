<?php
include ("includes/classes/Account.php");
    $account = new Account();

include ("includes/handlers/signup-handlers.php");
include ("includes/handlers/login-handlers.php");
?>

<html>
<head>
	<title>Welcome to Spotify!</title>
</head>
<body>

    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to Your Account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g johnDoe" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" placeholder="Your password" name="loginPassword" required>
            </p>

            <button type="submit" name="loginButton">Log in</button>
        </form> <!--close tag form-->

        <form action="register.php" id="signupForm" method="POST">
            <h2>Register Your free Account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="e.g johndoe" required>
            </p>
            <p>
                <label for="firstName">First name</label>
                <input type="text" id="firstName" name="firstName" placeholder="e.g John" required>
            </p>
            <p>
                <label for="lastName">Last name</label>
                <input type="text" id="lastName" name="lastName" placeholder="e.g Doe" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="e.g johndoe@acme.ca" required>
            </p>
            <p>
                <label for="confirmEmail">Confirm email</label>
                <input type="email" id="confirmEmail" name="confirmEmail" placeholder="e.g johndoe@acme.ca" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password" required>
            </p>
            <p>
                <label for="confirmPassword">Confirm password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" required>
            </p>

            <button type="submit" name="signupButton">Sign up</button>
        </form> <!--close tag form-->

    </div> <!--closing tag inputContainer-->

</body>
</html>
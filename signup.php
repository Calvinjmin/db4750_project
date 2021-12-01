<html>

<head>
    <title>DB 4750 - Final Project</title>
</head>
<?php include("components/navbar.php"); ?>

<body>
    <form action="./userFunctions/signupDatabase.php" method="POST">
        <div style="width: 25%;    
                    position: absolute;
                    top:  35%;
                    left: 50%;
                    transform: translate(-50%,-50%);">

            <h2 class="subtitle">Sign Up</h2>
            <div class="field">
                <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Username" id ="usernameInput" name="username">
                    </div>
            </div>
            <div class="field">
                <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" placeholder="Password" id="passwordInput" name = "password">
                    </div>
            </div>
            <button class="button is-danger is-light" id="signUpButton" style="width: 100px;" type="submit">Sign Up</button>
        </div>
    </form>
</body>

<?php include("components/footer.php"); ?>

</html>
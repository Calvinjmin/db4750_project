<script>
    var username = "";
    var password = "";


</script>
<html>
    <head>
        <title>DB 4750 - Final Project</title>
    </head>
    <?php include("components/navbar.php"); ?>

    <body>
        <div id="formSignup">
            <form action="userFunctions/loginDatabase.php" method="POST">
                <div style="width: 25%;    
                            position: absolute;
                            top:  35%;
                            left: 50%;
                            transform: translate(-50%,-50%);">

                    <h2 class="subtitle">Log In</h2>
                    <div class="field">
                        <label class="label">Username</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Username" name="username">
                            </div>
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                            <div class="control">
                                <input class="input" type="password" placeholder="Password" name="password">
                            </div>
                    </div>
                    <input class="button is-success is-light" type="submit" style="width: 100px;" value= "Login"></input>
                    <a href="signup.php"><input class="button is-danger is-light" value="Sign Up" style="width: 100px;"></input></a>
                </div>
            </form> 
        </div>
    </body>

    <?php include("components/footer.php"); ?>
</html>
<?php include "./header.php"; ?>

<center>
    <div id="loading">
    </div>
</center>
<div id="maindiv">
    <!--  while using form use name of email input as "email" -->
    <!--  while using form use name of password input as "password" -->

    <!--<form method="post">
<input type="text" name="email" id="email">
<input type="text" name="password" id="password">
<input type="submit" value="submit" id="submit">
</form> -->
    <!-- start of frontend code -->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!--===============================================================================================-->

    <div class="limiter">
        <div class="container-login100" style="background-image: url('img/bg1.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title p-b-30">
                        Login Here
                    </span>

                    <div class="wrap-input100 validate-input m-b-23">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="Email" name="email" placeholder="Type your Email" required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Type your password" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#" onclick="return resetpass()">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->

    <!-- end of frontend code -->
</div>
<script>
    function loading(flag) {
        if (flag) {
            document.getElementById('maindiv').style.display = "none"
            document.getElementById('loading').style.display = "block"
        } else {
            document.getElementById('maindiv').style.display = "block"
            document.getElementById('loading').style.display = "none"
        }
    }
    loading(false)
</script>
<?php
// session_start();
if (isset($_POST['email'])) {
    extract($_POST);
?>
    <!--validating for signin using email and password-->
    <script>
        loading(true)

        function resetpass() {
            firebase.auth().sendPasswordResetEmail(firebase.auth().currentUser.email).then(function() {
                alert("Email Sent!!!!!!!!!!!!!")
            }).catch(function(error) {
                // An error happened.
            });
            return false;
        }

        var email = "<?php echo $email; ?>"
        var password = "<?php echo $password; ?>"

        firebase.auth().signInWithEmailAndPassword(email, password).then((user) => {
            //signin
            firebase.auth().onAuthStateChanged((user) => {
                firebase.auth().onAuthStateChanged((user) => {
                        if (user) {
                            document.location = './home.php';
                            // document.location = './profile.php';
                        } else {
                            alert("User Login Failed")
                            document.location = './';
                        }

                    })
                    .catch((error) => {
                        //error
                        var msg = error.message
                        alert(msg)
                        document.location = './'
                    })
            });
        }).catch((err)=>{
            alert(err);
            loading(false);
            document.location='./login.php';
        });
    </script>
<?php
    exit;
}
?>
<?php include "./footer.php"; ?>
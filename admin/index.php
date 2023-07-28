<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Based Activity Monitoring</title>
    <link rel="stylesheet" href="../css/style.css">

</head>


<body style=" background: linear-gradient(135deg, #71b7e6, #9b59b6);">
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-storage.js"></script>
    <script src="../JS/firebase-init.js"></script>

    <!-- boostrap code -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../img/bg1.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" onsubmit="return submitForm()" method="post">
					<span class="login100-form-title p-b-30">
						Login Here
					</span>

					<div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Email</span>
						<input class="input100" type="Email" id="inputEmail" name="inputEmail" placeholder="Type your Email" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="inputPassword" name="inputPassword" placeholder="Type your password" required>
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
var userData = []
    console.log("hey")
        function submitForm() {
            loading(true)
            var email = document.getElementById("inputEmail").value
            var password = document.getElementById("inputPassword").value
            console.log ("submitting")
            firebase.auth().signInWithEmailAndPassword(email, password).then((user) => {
                    //signin
                    uid = user.uid
                    if(uid == null){
                        uid = user.user.uid;
                    }
                    if (uid != null) {
                        firebase.database().ref('Admin/' + uid).on('value', (snapshot) => {
                            if (snapshot.hasChild('name')) {
                                alert("you are admin")
                                document.location = './dashboard.php';
                                console.log("sumbit")
                            } else {
                                alert("You are not an admin")
                            }
                        });
                    }else{
                        console.log('null')
                        alert('user id is been null')
                    }

                })
                .catch((error) => {
                    //error
                    var msg = error.message
                    alert(msg)
                    // document.location = './'
                })
            return false;
        }
</script>



<br>

</body>
</html>


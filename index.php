<!-- login page code -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AI Based Activity Monitoring</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body style=" background    : linear-gradient(135deg, #71b7e6, #9b59b6);">
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-storage.js"></script>
	<script src="./JS/firebase-init.js"></script>


	<!-- boostrap5 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<style>
		.divcss {
			background: linear-gradient(#5b61d2, #c0c3f3);
			background: linear-gradient(rgba(1, 1, 1, 0), rgba(1, 1, 1, 0)), url("./img/mainbg.png");
			background-position: top;
			background-size: 100% 100%;
			width: 350px;
			height: 87vh;
			max-height: 100%;
			margin-top: 2%;
			background-repeat: no-repeat;
			border: 2px solid #767474;
			border-radius: 10px 10px 10px 10px;
		}

		.headimg {
			width: 70;
			height: 70;
		}

		.headname {
			font-size: 24px;
		}

		@media only screen and (max-device-width: 480px) {
			.divcss {
				background: linear-gradient(#5b61d2, #c0c3f3);
				background: linear-gradient(rgba(1, 1, 1, 0), rgba(1, 1, 1, 0)), url("./img/mainbg.png");
				background-position: top;
				background-size: auto 100%;
				width: 350px;
				height: 80vh;
				max-height: 100%;
				margin-top: 2%;
				background-repeat: no-repeat;
				border: 2px solid #767474;
				border-radius: 10px 10px 10px 10px;
			}

			.headimg {
				width: 60;
				height: 60;
			}

			.headname {
				font-size: 24px;
			}
		}
	</style>
	<a class="text-dark headname " href="./" style="text-decoration: none;vertical-align: middle; ">
		<img src="./img/logo.jpeg" width="70" height="70" class="mx-3 my-2	headimg rounded-circle" alt="">
		AI Based Activity Monitoring
	</a>

	<hr class="mt-0" style="border-color: #FFFFFF;">
	<center>
		<!-- Corousel Start -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1500" style="width: 87%;">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="./img/bg.jpeg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="./img/bg.jpeg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="./img/bg.jpeg" alt="Third slide">
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
	</center>
	<!-- Corousel End -->

	<!-- Key Feature  -->

	<section id="feature" class="section-padding about-section" data-aos="zoom-in">
		<div class="container">
			<div class="row ">
				<div class="col-md-6">
					<div class="section_title mt-4">
						<!-- <div class="section_subtitle" style="margin-bottom: 5px;">
							<h3 class="section_main_title">	 Key Features</h3>
						</div><br> -->
						<h3 class="section_main_title">"Excuses don't burn your calories"</h3>
					</div>
					<div class="about-item">
						<h4> &#128073;<b> &nbsp;Step Goals</b>- Set daily step goals and stay on target.</h4>
						<h4> &#128073;<b>&nbsp;Count Calories</b>- See how many calories you've burned from your steps.</h4>
						<h4> &#128073;<b>&nbsp;Always On</b>-Works Seamlessly in the Background without any battery drain.
						</h4>
						<h4> &#128073;<b>&nbsp;Customize</b>-Choose a theme thats suits you.</h4>
					</div>
				</div>


				<div class="col-md-6">
					<center>
						<div class="divcss">


							<div class="row h-30">
								<div class="col " style="margin-top: 100px;">
									<center>
										<img src="./img/logo.jpeg" alt="LOGO" class="rounded-circle mb-3" height="90px" width="90px">
										<h4 style=" color: black;">AI Based Activity Monitoring</h4>
									</center>
								</div>
							</div>
							<div class="row h-50">

								<div class="col"></div>

								<div class="w-100"></div>
								<div class="col">
									<button type="button" class="btn  text-white mt-4" onclick="document.location='login.php'" style="background-color:#4747d1;  border-radius:20px 20px 20px 20px ;width:200px"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Login with
										Email</button><br><br>
									<button type="button" class="  btn  " style="background-color:#e6e6e6;  border-radius: 20px 20px 20px 20px;width:200px" onclick="signupwithgoogle()"><svg id="fi_2702602" enable-background="new 0 0 512 512" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg">
											<g>
												<path d="m120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308h-86.308c-34.255 44.488-52.823 98.707-52.823 155.785s18.568 111.297 52.823 155.785h86.308v-86.308c-12.142-20.347-19.131-44.11-19.131-69.477z" fill="#fbbd00"></path>
												<path d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216c-20.525 12.186-44.388 19.039-69.569 19.039z" fill="#0f9d58"></path>
												<path d="m139.131 325.477-86.308 86.308c6.782 8.808 14.167 17.243 22.158 25.235 48.352 48.351 112.639 74.98 181.019 74.98v-120c-49.624 0-93.117-26.72-116.869-66.523z" fill="#31aa52"></path>
												<path d="m512 256c0-15.575-1.41-31.179-4.192-46.377l-2.251-12.299h-249.557v120h121.452c-11.794 23.461-29.928 42.602-51.884 55.638l86.216 86.216c8.808-6.782 17.243-14.167 25.235-22.158 48.352-48.353 74.981-112.64 74.981-181.02z" fill="#3c79e6"></path>
												<path d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606c-48.352-48.352-112.639-74.981-181.02-74.981l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z" fill="#cf2d48"></path>
												<path d="m256 120v-120c-68.38 0-132.667 26.629-181.02 74.98-7.991 7.991-15.376 16.426-22.158 25.235l86.308 86.308c23.753-39.803 67.246-66.523 116.87-66.523z" fill="#eb4132"></path>
											</g>
										</svg> &nbsp;Login with Google
									</button>
								</div>

							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
		</div>
	</section>

	<!-- Sign Up  -->



	<hr class="hr" style="border-color: #FFFFFF;">

	<!-- Footer -->
	<section class="">
		<!-- Footer -->
		<footer class="text-center text-white">
			<!-- Grid container -->
			<div class="container p-2 pb-0">
				<section class="">
					<p class="d-flex justify-content-center align-items-center">
						<span>Dowload the App and start Counting your Steps / Calories...</span>
					</p>
					<div class="text-center mb-3">
						<button type="submit" class="btn btn-primary text"><i class="fa fa-android"></i> Download</button>
					</div>
			</div>
	</section>
	</div>
	<!-- Grid container -->

	<!-- Copyright -->
	<div class="text-center badge-dark" style="margin-bottom: 0; bottom:0;position:fixed;width:100%;">
		© 2021 Copyright:
		<a class="text-white" style="text-decoration: none;" href="#">AI Health Monitoring</a>
	</div>
	<!-- Copyright -->
	</footer>
	<!-- Footer -->
	</section>


</body>



<script>
	function signupwithgoogle() {
		var provider = new firebase.auth.GoogleAuthProvider();
		firebase.auth()
			.signInWithPopup(provider)
			.then((result) => {
				/** @type {firebase.auth.OAuthCredential} */
				var credential = result.credential;

				// This gives you a Google Access Token. You can use it to access the Google API.
				var token = credential.accessToken;
				// The signed-in user info.
				var user = result.user;
				if (user.uid != null) {
					firebase.database().ref('Users/' + user.uid).on('value', (snapshot) => {
						const data = snapshot.val()
						if (snapshot.hasChild('name')) {
							document.location = './home.php';
						} else {
							alert('User Not Registered Previously. Install Application First.')
							firebase.auth().signOut().then(() => {
								document.location = './index.php';
							}).catch((error) => {
								document.location = './index.php';
								console.log("Logout Unsucessful");
							});
						}
					});

				} else {
					alert("User login Failed");
					document.location = './logout.php';
				}

			}).catch((error) => {
				// Handle Errors here.
				var errorCode = error.code;
				var errorMessage = error.message;
				// The email of the user's account used.
				var email = error.email;
				// The firebase.auth.AuthCredential type that was used.
				var credential = error.credential;
				alert(errorMessage)
				document.location = './'

			});
	}
</script>




<?php include "./footer.php"; ?>
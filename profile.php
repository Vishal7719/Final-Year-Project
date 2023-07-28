<?php include "./header.php"; ?>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/profile.css">

<center>
<div id="loading">
</div>
</center>
<div id="maindiv" style="display: none; ">
<div class="container" >
  <div class="title">Edit Profile</div>
  <div class="profile-pic-div">
    <img src="" id="photo">
    <input type="file" accept="image/*" id="file">
    <label for="file" id="uploadBtn">Choose Photo</label>
  </div>
  <div class="content">
    <form method="POST" onsubmit="return submitdata();">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Name</span>
          <input type="text" placeholder="Enter your name" id="name" required>
        </div>
        <div class="input-box">
          <span class="details">Phone No.</span>
          <input type="number" placeholder="Enter your phone no" id="phone" required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="email" readonly placeholder="Enter your email" id="email" required>
        </div>
        <div class="input-box">
          <span class="details">Height</span>
          <input type="text" placeholder="Enter your height" id="height" required>
        </div>
        <div class="input-box">
          <span class="details">Weight</span>
          <input type="text" placeholder="Enter your weight" id="weight" required>
        </div>
        <div class="input-box">

          <span class="details">Gender</span>
        
          <div class="category">
            <div>
              <input type="radio" name="gender" required onclick="setGender('male')" id="male"
                style="height:auto; width:auto;display:inline;">
              <label for="male" style="display:inline;">
                Male&nbsp;&nbsp;
              </label>
            </div>
            <div>
              <input type="radio" name="gender" required onclick="setGender('female')" id="female"
                style="height:auto; width:auto;display:inline;">
              <label for="female" style="display:inline;">
                Female
              </label>
            </div>
          </div>
        </div>

      </div>
      <div class="button">
        <input type="submit" class="" id="submit" value="Update">
      </div>
      
    </form>
    <center><a href="" onclick="return resetpass() ">Click here for reset password</a></center>
  </div>
  </div>



<script src="./JS/profile.js"></script>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>




<?php include "./footer.php"; ?>
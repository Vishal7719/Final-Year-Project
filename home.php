<?php include "./header.php"; ?>

<iframe id="mainFrame" src="./dashboard.php" frameborder="0" style="width: 100%;">
</iframe>
<div style="position: fixed; right:25px; top: 7px; ">
  <a href="./logout.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
    </svg>
  </a>
</div>
<footer class="container-fluid text-center  " id="footer" style="bottom: 0px; position:fixed; ">
  <div class="wrapper">
    <nav>
      <input type="radio" name="tab" onclick="navigate('dashboard.php')" id="home" checked>
      <input type="radio" name="tab" onclick="navigate('changeGoal.php')" id="goal">
      <input type="radio" name="tab" onclick="navigate('FAQ.php')" id="FAQ">
      <input type="radio" name="tab" onclick="navigate('profile.php')" id="user">

      <label for="home" class="home"><a href="#"><i class="fas fa-home"></i><span class="text-hide-mobile">Dashboard</span></a></label>
      <label for="goal" class="goal"><a href="#"><i class="fas fa-walking"></i><span class="text-hide-mobile">Goal</span></a></label>
      <label for="FAQ" class="FAQ"><a href="#"><i class="fas fa-question-circle"></i><span class="text-hide-mobile">FAQ</span></a></label>
      <label for="user" class="user"><a href="#"><i class="fas fa-user-circle"></i><span class="text-hide-mobile">User</span></a></label>
      <div class="tab">
      </div>
    </nav>
  </div>
</footer>
<script>
  function navigate(path) {
    document.getElementById('mainFrame').setAttribute('src', path + '');
  }

  document.body.onresize = resizeWindow();

  function resizeWindow() {
    document.body.style.height = (window.innerHeight - 50) + 'px'
    document.getElementById('mainFrame').style.height = "100%";
  }

  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {} else {
      document.location = './';
    }
  });
</script>
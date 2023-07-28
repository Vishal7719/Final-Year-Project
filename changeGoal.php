<?php include "./header.php"; ?>
<!-- loading ui -->
<center>
<div id="loading">
</div>
</center>
<div id="maindiv">
    <!-- code here -->



<div class=" mx-auto mt-4" style=" border: 2px solid lightgrey; border-radius: 10px; width: 50%; ">
<form onsubmit="return submitdata();"  method="post" >
  <div class="form-group mx-4 mt-3">
    <label for="stepGoal">Step Goal:</label>
    <input type="number" class="form-control" id="stepGoal" >
    
  </div>
  <div class="form-group mx-4">
    <label for="caloriesGoal">Calories Goal:</label>
    <input type="number" class="form-control" id="caloriesGoal" >
  </div>
  <div class="text-center mb-3">
  <button type="submit" class="btn btn-primary text">Update</button></div>
</form>
</div>
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
loading(true)
         firebase.auth().onAuthStateChanged((user)=>{

        if(user){
            uid = user.uid
            getdata(uid)
        }else{
            alert('User Not Login Please Login')
            document.location='./'
        }
    })
    function getdata(uid) {
      
       
        firebase.database().ref('Goals/'+uid).on('value',(snapshot)=>{
            if(snapshot.child('stepGoal').exists()){

                const data = snapshot.val()
            
            document.getElementById('stepGoal').value = data.stepGoal; 
            document.getElementById('caloriesGoal').value = data.caloriesGoal;        
        }else{
                document.getElementById('stepGoal').value = "500"; 
                document.getElementById('caloriesGoal').value = "100";        

            }
        })
        loading(false)
    }
    function submitdata(){
        loading(true)
        var stepGoal = document.getElementById('stepGoal').value 
        var caloriesGoal = document.getElementById('caloriesGoal').value
        firebase.auth().onAuthStateChanged((user) => {
            if (user) {
                firebase.database().ref('Goals/'+user.uid).set({
                    stepGoal:stepGoal,
                    caloriesGoal:caloriesGoal
                }).then((result) => {
                    alert('Your new Step Goal is '+stepGoal+' and Calories Goal is '+caloriesGoal)
                    // document.location='./changeGoal.php'
                }).catch((err) => {
                    alert('Error : '+err)
                    // document.location='./changeGoal.php'
                });
            }
        });
        return false;
   
    }
    </script>

<!-- <form action="#" onsubmit="return submitdata();" method="post"> -->
<!--use above statement-->
<!-- start of frontend code -->
<!-- start of frontend code -->

<!-- end of frontend code -->
<!-- end of frontend code -->


<?php include "./footer.php"; ?>
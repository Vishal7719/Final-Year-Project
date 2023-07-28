
  const imgDiv = document.querySelector('.profile-pic-div');
  const img = document.querySelector('#photo');
  const file = document.querySelector('#file');
  const uploadBtn = document.querySelector('#uploadBtn');
  var gender = "none";
  var Imgname, ImgUrl;
  var tsk = "";

  function setGender(genderText) {
    gender = genderText;
  }

  // user validation
  firebase.auth().onAuthStateChanged((user) => {

    if (user) {
      uid = user.uid
      getdata(uid)
    } else {
      alert('User Not Login Please Login')
      document.location = './'
    }
  });

  function submitdata() {
    var name = document.getElementById('name').value
    var phone = document.getElementById('phone').value
    var email = document.getElementById('email').value
    var height = document.getElementById('height').value
    var weight = document.getElementById('weight').value
    // // var gender = document.getElementsByName('gender').value
    // console.log(gender)
    // if(gender==undefined){
    //   gender="none";
    // }

    firebase.auth().onAuthStateChanged((user) => {
      if (user) {
        console.log(user.uid);
        firebase.database().ref('Users/' + user.uid).update({
          email: email,
          gender: gender,
          height: height,
          name: name,
          phone: phone,
          weight: weight

        }).then((result) => {
          alert("Profile Updated")
          // document.location='./changeGoal.php'
        }).catch((err) => {
          alert('Error : ' + err)
          // document.location='./changeGoal.php'
        });

      }
      
    });
    return false;
  }



  // getting data
  function getdata(uid) {

    firebase.database().ref('Users/' + uid).on('value', (snapshot) => {
      const data = snapshot.val()
      document.getElementById('name').value = data.name
      document.getElementById('phone').value = data.phone
      document.getElementById('email').value = data.email
      document.getElementById('height').value = data.height
      document.getElementById('weight').value = data.weight
      if(data.gender!="none"){
        document.getElementById(data.gender).checked=true;
      }
      document.getElementById('maindiv').style.display = "block"
      document.getElementById('loading').style.display = "none"

      // var storage = firebase.storage();
      firebase.storage().ref('images/' + uid).getDownloadURL()
        .then((url) => {
          var img = document.getElementById('photo');
          img.setAttribute('src', url);
        })
        .catch((error) => {
          var img = document.getElementById('photo');
          img.setAttribute('src', "./img/image.jpg");
        });

    });
    return false;
  }


  // resset passs 
  function resetpass(){
  firebase.auth().sendPasswordResetEmail(firebase.auth().currentUser.email).then(function () {
    alert("Email Sent!!!!!!!!!!!!!")
  }).catch(function (error) {
    // An error happened.
  });
  return false;
}




  //if user hover on img div 

  imgDiv.addEventListener('mouseenter', function () {
    uploadBtn.style.display = "block";
  });

  //if we hover out from img div

  imgDiv.addEventListener('mouseleave', function () {
    uploadBtn.style.display = "none";
  });

  //lets work for image showing functionality when we choose an image to upload

  //when we choose a phooto to upload

  file.addEventListener('change', function () {
    //this refers to file
    const choosedFile = this.files[0];

    if (choosedFile) {

      const reader = new FileReader(); //FileReader is a predefined function of JS

      reader.addEventListener('load', function () {
        img.setAttribute('src', reader.result);

      });

      reader.readAsDataURL(choosedFile);
      var uploadTask = firebase.storage().ref('images/' + uid).put(this.files[0]);
      tsk = uploadTask;
      uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
        firebase.database().ref('Users/'+uid+'/image').set(downloadURL);
      });
    }
  });
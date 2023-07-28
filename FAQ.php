<?php include "./header.php"; ?>
<link rel="stylesheet" href="./css/faq.css">

<center>
<div id="loading"></div>
</center>

<div id="maindiv" style="display: none;">
<div class="container-fluid" id="content">
        <h2>Frequently Asked Questions(FAQ's)</h2>   
    </div>
    </div>
    


<script>  
  firebase.database().ref('FAQ').on('value', (snapshot) => {
    try {
      snapshot.forEach(s => {
        // console.log(s)
        const data = s.val();
        document.getElementById('content').innerHTML+= '<div class="que">\
            <div class="icon"></div>\
             <h5>'+data.question+'</h5>\
        </div>\
        <div class="ans">\
            <p>\
            '+data.answer+'\
            </p>\
        </div>'


      });
      
      document.getElementById('maindiv').style.display = "block"
      document.getElementById('loading').style.display = "none"
    } catch (e) {
      console.log(e);
    }
  })
</script>

<?php include "./footer.php"; ?>
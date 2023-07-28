<?php include "./header.php"; ?>
<center>
    <div id="loading">
    </div>
</center>
<div id="maindiv" style="display: none;">
    <!-- main code in between -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dash.css">
    <div class="container" id="mainContainerDiv">
        <center>
            <h2 class="mt-4" style="font-family: Casteller;">
                Dashboard
            </h2>
            <hr class="hr">
            <div class="row">
                <div class="col-lg-3">
                    <br>
                    <img src="./img/image.jpg" id="profileImage" alt="fetching" height="200px" width="200px" style="object-fit: cover;" class="rounded-circle">
                    <h3 class="mt-2">
                        Welcome
                    </h3>
                    <h3>
                        <span id="name" style="font-family: 'Times New Roman', Times, serif;">
                            User
                        </span>
                    </h3>
                </div>
                <div class="col-lg-9">
                    <h4>
                        Your Statistics
                    </h4>
                    <hr class="hr" style="width: 90%;">
                    <div class="row">
                        <div class="col-md-6">
                            <center>
                                <div class="card" style="background-color: rgba(255, 255, 255, 0.2); margin: 20px;">
                                    <div class="card-body">
                                        <h3>
                                            Steps &#127939;
                                        </h3>
                                        <br>
                                        <br>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar progress-bar-stripped" id="stepProgressBar" role="progressbar" style="width: 1%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br><br>
                                        <h3 id="stepProgress">
                                            1/100
                                        </h3>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <div class="card" style="background-color: rgba(255, 255, 255, 0.2); margin: 20px;">
                                    <div class="card-body">
                                        <h3>
                                            Calories &#128293;
                                        </h3>
                                        <br>
                                        <br>
                                        <div class="progress" style="height: 20px;">
                                            <div id="caloriesProgressBar" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 1%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br><br>
                                        <h3 id="calorieProgress">
                                            1/100
                                        </h3>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <center>
            <hr class="hr">
            <h3>
                History
            </h3>
            <hr class="hr">
        </center>
        <div class="row" id="statistics">
            <div class="col-md-6 " id="barChartDiv" style="border-radius: 20px; background-color: white; box-shadow: -30px 30px 20px rgba(0, 0, 0, 0.3);
     cursor: pointer;">
                <canvas class="my-4" id="barChart"></canvas>
            </div>
            <div class="col-md-6">
                <table class="table text-center table-hover table-stripped">
                    <thead>
                        <th>
                            Date
                        </th>
                        <th>
                            Steps
                        </th>
                        <th>
                            Calories
                        </th>
                    </thead>
                    <tbody id="statisticsBody" style="overflow: scroll;"></tbody>
                </table>
            </div>
        </div>
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
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>


<script src="./JS/dash.js"></script>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<!-- main code in between -->



<?php include "./footer.php"; ?>
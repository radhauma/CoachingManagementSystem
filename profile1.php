
    <!DOCTYPE html>
    <html>
    <head>
        <title>Coaching Management</title>
        <link rel="stylesheet" type="text/css" href="../admin/css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
            a{
                text-decoration: none;
            }
            a:hover{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
    <h2 align="center" style="color: blue">Super Admin (Main Center)</h2>
    <div class="header">

        <span style="font-size:30px;cursor:pointer" class="logo" onclick="openNav()">&#9776; open </span>

        <div class="header-right">
            <a href="profile.php">
                Bharat1 Agarwal (E10000)</a>
        </div>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php" class="logo"><span style="color:red;font-size:70px">CIMS</span></a>
        <a href="profile.php">Bharat1 Agarwal (E10000)</a>
        <a href="index.php">Home</a>
        <a href="add.php">Add/Update</a>
        <a href="view.php">View Details</a>
        <a href="incomingcomplaint.php">Incoming Complaint</a>
        <a href="update_password.php">Update Password</a>
        <a href="../../logout.php">Logout</a>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <img src="images/default_pic.png" alt="stack photo" class="img">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <div class="container" style="border-bottom:1px solid black">
                        <h2>Bharat1 Agarwal (Sadmin: Main Center)</h2>
                    </div>
                    <hr>
                    <ul class="container details">
                        <li><p><span class="glyphicon glyphicon-ok-sign" style="width:50px;"></span>E10000 ( SAdmin)</p></li>
                        <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+91 8888888888</p></li>
                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>coachingmanagement@gmail.com</p></li>
                        <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Main Center </p></li>
                        <li><p><span class="glyphicon glyphicon-tower" style="width:50px;"></span>Date Of Joining: 01-03-2023</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div align="center">
            <p><b><i>Address:</i></b>Hyderabad,507121</p>
            <p><b><i>Total Salery Per Month:</i></b>10000</p>
            <p><b><i>Qualification: </i></b>B-Tech &nbsp; &nbsp; <b><i>Marks Get in B-Tech: </i></b>100</p>
            <p><b><i>Experiance: </i></b>2Y </p>
            <p><button onclick="showsome()" >Update Details</button></p>
        </div>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }

            function showsome() {
                alert("To Update Details Kindly Refer Database Adminstator");
            }
        </script>
    </body>
    </html>

<?php
    session_start();
    mysql_connect("localhost","root","");
    mysql_select_db("study");
    $strSQL = "SELECT * FROM student WHERE id_student = '".$_SESSION['UserID']."' ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
  <meta charset="UTF-8">

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="jquery/jquery-3.1.1.js"> </script>
  <title></title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script>
  $(function (){
    $(".div1").show();

    $(".div2").hide();
    $(".div3").hide();
    $(".div4").hide();
    $(".div5").hide();
    $(".div6").hide();
    $(".div7").hide();
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $('.carousel').carousel();



    $(".button-collapse").sideNav();

    $("#menu1").click(function (){
      $(".div1").show();
      $(".div2").hide();
      $(".div3").hide();
      $(".div4").hide();
      $(".div5").hide();
      $(".div6").hide();
      $(".div7").hide();
    });
    $("#menu2").click(function (){
      $(".div2").show();
      $(".div1").hide();
      $(".div3").hide();
      $(".div4").hide();
      $(".div5").hide();
      $(".div6").hide();
      $(".div7").hide();
    });
    $("#menu3").click(function (){
      $(".div3").show();
      $(".div2").hide();
      $(".div1").hide();
      $(".div4").hide();
      $(".div5").hide();
      $(".div6").hide();
      $(".div7").hide();
    });
    $("#menu4").click(function (){
      $(".div4").show();
      $(".div2").hide();
      $(".div3").hide();
      $(".div1").hide();
      $(".div5").hide();
      $(".div6").hide();
      $(".div7").hide();
    });
    $("#menu5").click(function (){
      $(".div5").show();
      $(".div2").hide();
      $(".div3").hide();
      $(".div4").hide();
      $(".div1").hide();
      $(".div6").hide();
      $(".div7").hide();
    });
    $("#menu6").click(function (){
      $(".div6").show();
      $(".div2").hide();
      $(".div3").hide();
      $(".div4").hide();
      $(".div5").hide();
      $(".div1").hide();
      $(".div7").hide();
    });
    $("#menu7").click(function (){
      $(".div7").show();
      $(".div2").hide();
      $(".div3").hide();
      $(".div4").hide();
      $(".div5").hide();
      $(".div6").hide();
      $(".div1").hide();
    });

  });

  </script>

</head>
<body class="#f5f5f5 grey lighten-4">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>


 
  <nav>
    <div class="nav-wrapper   cyan lighten-1">
     <img src="img/17690832_1274463739255613_476908159_n.png" width='62px' ></img>
     
    </div>
  </nav>


  <div class="container">

    <br>


    <div class="row">

      <div class="col s3">







      </div>

      <div class="col s6">

        <div class="card-panel hoverable div1"> <h4>เปลี่ยนรหัสผ่าน</h4>

          <div class="row">
            <div class="col  m12">
              <div class="card">
                <div class="card-content">
                  <div class="row">
                    <form class="col s12" method="post" action="updatepass_submit.php">
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="oldpass" id="username" type="password" class="validate" required>
                          <label for="email">กรอกรหัสผ่านเดิม</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="newpass" id="password" type="password" class="validate" required>
                          <label for="password">กรอกรหัสผ่านใหม่</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="newpass2" id="password" type="password" class="validate" required>
                          <label for="password">กรอกรหัสผ่านใหม่อีกครั้ง</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <div class="input-field inline">
                            <button class="btn waves-effect waves-light" type="submit">ตกลง
                            </button>
                          </div>
                        </div>
                      </div>
                      <?php
                        if (!isset($_GET["error"])) {

                        }else {
                          $error = $_GET["error"];
                          if ($error==1) {
                            echo "กรอก password ไม่ถูกต้อง ";
                          }else {
                            echo "กรอก password ใหม่ ไม่ตรงกัน ";
                          }
                        }
                       ?>
                    </form>
                  </div>
                </div>
                <hr>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <footer class="page-footer   blue lighten-5">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
        
        </div>
        <div class="col l4 offset-l2 s12">

        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container ">
        <p class="darken-3-text">  © 2014 Copyright Text</p>
        <a class="darken-3-text right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
</body>
</html>

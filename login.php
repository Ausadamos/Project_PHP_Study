
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

        <div class="card-panel hoverable div1"> <h4>Login</h4>

          <div class="row">
            <div class="col  m12">
              <div class="card">
                <div class="card-content">
                  <div class="row">
                    <form class="col s12" method="post" action="login_check1.php">
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="username" id="username" type="text" class="validate" required>
                          <label for="email">Username</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="password" id="password" type="password" class="validate" required>
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <div class="input-field inline">
                            <button class="btn waves-effect waves-light" type="submit">Login
                            </button>
                          </div>
                        </div>
                      </div>
                      <?php
                        if (!isset($_GET["error"])) {

                        }else {
                          $error = $_GET["error"];
                          if ($error==404) {
                            echo "กรุณากรอก username หรือ password ให้ถูกต้อง";
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



    <ul id="slide-out" class="side-nav">
      <li><div class="userView">

        <div class="background">
          <img src="images/office.jpg">
        </div>
        <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
        <a href="#!name"><span class="white-text name">John Doe</span></a>
        <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
      </div></li>
      <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
      <li><a href="#!">Second Link</a></li>
      <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
















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
        
      </div>
    </div>
  </footer>
</body>
</html>

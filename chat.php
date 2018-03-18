<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Chat</title>

    <link rel="stylesheet" href="style.css" type="text/css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">

      // ask user for name with popup prompt
      var name = prompt("Enter your chat name:", "Guest");

      // default name is 'Guest'
    if (!name || name === ' ') {
       name = "Guest";
    }

    // strip tags
    name = name.replace(/(<([^>]+)>)/ig,"");

    // display name on page
    $("#name-area").html("You are: <span>" + name + "</span>");

    // kick off chat
      var chat =  new Chat();
    $(function() {

       chat.getState();

       // watch textarea for key presses
           $("#sendie").keydown(function(event) {

               var key = event.which;

               //all keys including return.
               if (key >= 33) {

                   var maxLength = $(this).attr("maxlength");
                   var length = this.value.length;

                   // don't allow new content if length is maxed out
                   if (length >= maxLength) {
                       event.preventDefault();
                   }
                }
                                                                                                      });
       // watch textarea for release of key press
       $('#sendie').keyup(function(e) {

          if (e.keyCode == 13) {

                  var text = $(this).val();
          var maxLength = $(this).attr("maxlength");
                  var length = text.length;

                  // send
                  if (length <= maxLength + 1) {

                chat.send(text, name);
                $(this).val("");

                  } else {

            $(this).val(text.substring(0, maxLength));

          }


          }
           });

    });
  </script>


             </head>
            <body onload="setInterval('chat.update()', 1000)">


              
              <nav>
                <div class="nav-wrapper  ">
                    <img src="img/17690832_1274463739255613_476908159_n.png" width='62px' ></img>
                                  </div>
              </nav>



<div class="card-panel hoverable div5">แชทส่วนตัว

 <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="card">

      <div class="card-content">
        <div id="page-wrap">

          <p id="name-area"></p>

          <div id="chat-wrap"><div id="chat-area"></div></div>

          <form id="send-message-area">
              <p><font color="#000000">Your message: </font></p>
              <textarea id="sendie" maxlength = '100' ></textarea>
          </form>
          <br>
          <br>

      </div>

      </div>

    </div>
  </div>
  <div class="col-md-3"></div>
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
      
    </div>
  </div>
</footer>


</body>
</html>

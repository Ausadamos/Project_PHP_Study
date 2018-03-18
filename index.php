<?php
    session_start();
    mysql_connect("localhost","root","");
    mysql_select_db("study");
    $strSQL = "SELECT * FROM student WHERE id_student = '".$_SESSION['UserID']."' ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
require('connect.php');
$sid =  $_SESSION["UserID"]


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
           <link rel="stylesheet" href="styles/timetablejs.css">
    <link rel="stylesheet" href="styles/demo.css">
          <script>
                   $(function (){
                        $(".div1").show();

                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                         $(".div7").hide();
                                         $(".div8").hide();
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
                                     $(".div8").hide();
                                    $(".div9").hide();
                           });
                            $("#menu2").click(function (){
                                  $(".div2").show();
                               $(".div1").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div7").hide();
                                  $(".div8").hide();
                                    $(".div9").hide();
                           });
                            $("#menu3").click(function (){
                                  $(".div3").show();
                               $(".div2").hide();
                                $(".div1").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div7").hide();
                                    $(".div8").hide();
                                    $(".div9").hide();
                           });
                            $("#menu4").click(function (){
                                  $(".div4").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div1").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div7").hide();
                                    $(".div8").hide();
                                    $(".div9").hide();
                           });
                            $("#menu5").click(function (){
                                  $(".div5").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div1").hide();
                                   $(".div6").hide();
                                    $(".div7").hide();
                                    $(".div8").hide();
                                    $(".div9").hide();
                           });
                            $("#menu6").click(function (){
                                  $(".div6").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div1").hide();
                                    $(".div7").hide();
                                    $(".div8").hide();
                                    $(".div9").hide();
                           });
                            $("#menu7").click(function (){
                                  $(".div7").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div1").hide();
                                    $(".div8").hide();
                                    $(".div9").hide();
                           });
                            $("#menu8").click(function (){
                                  $(".div8").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div1").hide();
                                    $(".div7").hide();
                                    $(".div9").hide();
                           });
                            $("#menu9").click(function (){
                                  $(".div9").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div1").hide();
                                    $(".div8").hide();
                                    $(".div7").hide();
                           });
                           $('#sendhomework_1').on('submit',function(e) {
                             e.preventDefault();
                             console.log("เข้าแล้ว");
                             var subject = $("#homework_hmw_id_1").val();
                             var std_id = $("#homework_std_id_1").val();
                             $.ajax({
                               type: 'POST',
                               data: {subject:subject,std_id:std_id},
                               url: 'send_homework.php',
                               success: function(data) {
                                 //location.reload();
                                 $('#show_homework').html(data);

                               }
                             });
                             return false;
                           });

                             var i2 = $('#i8').val(); //ชุด
                                  var i3 = $('#i100').val(); //ข้อมูลทั้งหมดที่มี
                                  console.log(i3);      console.log(i2);
                              for(let i=0; i < i2 ; i++ ){

                             $('#insert_Accessories_ByStudent_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log("เข้าแล้ว");
                     var tool = $("#tool_"+i).val();
                     var id_student_subject = $("#add_tool_"+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {id_student_subject:id_student_subject,tool:tool},
                        url: 'insert_Accessories_ByStudent.php',
                        success: function(data) {
                              alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();

                        }
                    });
                    return false;
                });


                         for(let i4=0; i4 < i3 ; i4++ ){
                                                      console.log('deleteTool_'+i4+'_'+i);
                                             $('#deleteTool_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                     console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#tool_'+i4+'_'+i).val();
                       console.log('Tool_'+i4+'_'+i);
                        console.log(tool);



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool},
                        url: 'delete_tool_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                             $('#editTool_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#tool_'+i4+'_'+i).val();
                     var NameTool = $('#NameTool_'+i4+'_'+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool,NameTool:NameTool},
                        url: 'edit_ac_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                                        }






                   }


                           var i2 = $('#i_i8').val(); //ชุด
                                  var i3 = $('#i_i100').val(); //ข้อมูลทั้งหมดที่มี
                                 // console.log(i3);      console.log(i2);
                              for(let i=0; i < i2 ; i++ ){

                             $('#i_insert_Accessories_ByStudent_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log("เข้าแล้ว");
                     var tool = $("#to_ol_"+i).val();
                     var id_student_subject = $("#a_add_tool_"+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {id_student_subject:id_student_subject,tool:tool},
                        url: 'insert_Accessories_ByStudent.php',
                        success: function(data) {
                              alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();

                        }
                    });
                    return false;
                });


                         for(let i4=0; i4 < i3 ; i4++ ){
                                                 //     console.log('deleteTool_'+i4+'_'+i);
                                             $('#delete_Tool_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#to_ol_'+i4+'_'+i).val();
                      // console.log('Tool_'+i4+'_'+i);
                      //  console.log(tool);



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool},
                        url: 'delete_tool_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                             $('#edit_Tool_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#to_ol_'+i4+'_'+i).val();
                     var NameTool = $('#Name_Tool_'+i4+'_'+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool,NameTool:NameTool},
                        url: 'edit_ac_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                                        }






                   }

                    var i2 = $('#i_i_i8').val(); //ชุด
                                  var i3 = $('#i_i_i100').val(); //ข้อมูลทั้งหมดที่มี
                                 // console.log(i3);      console.log(i2);
                              for(let i=0; i < i2 ; i++ ){

                             $('#i_i_insert_Accessories_ByStudent_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log("เข้าแล้ว");
                     var tool = $("#t_to_ol_"+i).val();
                     var id_student_subject = $("#a_a_add_tool_"+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {id_student_subject:id_student_subject,tool:tool},
                        url: 'insert_Accessories_ByStudent.php',
                        success: function(data) {
                              alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();

                        }
                    });
                    return false;
                });


                         for(let i4=0; i4 < i3 ; i4++ ){
                                                 //     console.log('deleteTool_'+i4+'_'+i);
                                             $('#delete_To_ol_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#t_to_ol_'+i4+'_'+i).val();
                      // console.log('Tool_'+i4+'_'+i);
                      //  console.log(tool);



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool},
                        url: 'delete_tool_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                             $('#e_edit_Tool_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#t_to_ol_'+i4+'_'+i).val();
                     var NameTool = $('#Na_me_Tool_'+i4+'_'+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool,NameTool:NameTool},
                        url: 'edit_ac_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                                        }






                   }

                   $('input.autocomplete').autocomplete({
    data: {
      "ไม้บรรทัด": null,
      "macbook": null,
      "AppleWatch": null,
      "เครื่องคิดเลข": null,
       "กรรไกร": null,
      "ยางลบ": null,

      "ดินสอ": null,
      "สมุดรายวิชา": null,
       "หนังสือรายวิชา": null,

      "กระดาษA4": null,
      "กระดาษรายงาน": null,
       "notebook": null,
         "โน๊คบุค": null,
       "แฟ้ม": null,
      "กาว": null,
       "ปากกาลูกลื่น": null,
        "ปากกาเน้นข้อความ": null,
         "ปลั๊กไฟ": null,
               "กบเหลาดินสอ": null,
      "Google": 'http://placehold.it/250x250'
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

                             $('#search_study').on('submit',function(e) {
                     e.preventDefault();
                     //console.log("เข้าแล้ว");
                     var id_login = $("#id_login").val();
                     var date = $("#date").val();



                    $.ajax({
                        type: 'POST',
                        data: {date:date,id_login:id_login},
                        url: 'search_study.php',
                        success: function(data) {
                             $('#div_show_search').html(data);
                                              console.log(data);
                              $('.modal').modal();
                              $('.collapsible').collapsible();

                                  var i2 = $('#ii_i8').val(); //ชุด
                                  var i3 = $('#ii_i100').val(); //ข้อมูลทั้งหมดที่มี
                                 // console.log(i3);      console.log(i2);
                              for(let i=0; i < i2 ; i++ ){

                             $('#ii_insert_Accessories_ByStudent_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log("เข้าแล้ว");
                     var tool = $("#tool_l_"+i).val();
                     var id_student_subject = $("#aa_add_tool_"+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {id_student_subject:id_student_subject,tool:tool},
                        url: 'insert_Accessories_ByStudent.php',
                        success: function(data) {
                              alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();

                        }
                    });
                    return false;
                });


                         for(let i4=0; i4 < i3 ; i4++ ){
                                                     // console.log('deleteTool_'+i4+'_'+i);
                                             $('#deleteTool_l_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#tool_l_'+i4+'_'+i).val();
                      // console.log('Tool_'+i4+'_'+i);
                      //  console.log(tool);



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool},
                        url: 'delete_tool_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                             $('#editTool_l_'+i4+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                     //console.log('deleteTool_'+i4+'_'+i);

                     var tool = $('#tool_l_'+i4+'_'+i).val();
                     var NameTool = $('#NameTool_l_'+i4+'_'+i).val();



                    $.ajax({
                        type: 'POST',
                        data: {tool:tool,NameTool:NameTool},
                        url: 'edit_ac_student.php',
                        success: function(data) {
                           alert("สำเร็จ");
                             //$('#div_show_result3_'+i4+'_'+i).html(data);
                             location.reload();
                        }
                    });
                    return false;
                });
                                        }
                              }



                        }
                    });
                    return false;
                });


                   // Open
                   $('.collapsible').collapsible();

         $('.modal').modal();

                   //-----ส่วนจบ--------
                   });


                   </script>

    </head>
    <body class="#f5f5f5 grey lighten-4">
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>



<nav>
  <div class="nav-wrapper  ">
          <img src="img/17690832_1274463739255613_476908159_n.png" width='62px' ></img>

  </div>
</nav>


      <div class="container ">

          <br>


           <div class="row">

      <div class="col s3">


        <ul class="collapsible popout" data-collapsible="accordion">
             <li>
        <div data-activates="slide-out" class="collapsible-header button-collapse"><i class="material-icons">menu</i>ประวัติส่วนตัว</div>

    </li>
    <li>
        <div class="collapsible-header" id="menu1"> <i class="large material-icons">today</i>วันนี้</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    <li>
      <div class="collapsible-header" id="menu2"> <i class="large material-icons">skip_next</i>พรุ่งนี้</div>
      <div class="collapsible-body"><span></span></div>
    </li>


    <li>
      <div class="collapsible-header" id="menu3"> <i class="large material-icons">fast_forward</i>ในอนาคต</div>
      <div class="collapsible-body"><span></span></div>
    </li>

    <li>
      <div class="collapsible-header" id="menu4"> <i class="large material-icons">search</i>ค้นหาการเรียน</div>
      <div class="collapsible-body"><span></span></div>
    </li>

    <li>
      <div class="collapsible-header" id="menu5"> <i class="large material-icons ">chat</i>สนทนาส่วนตัว</div>
      <div class="collapsible-body"><span></span></div>
    </li>

    <li>
      <div class="collapsible-header" id="menu6"> <i class="large material-icons ">mode_edit</i>เช็คชื่อ</div>
      <div class="collapsible-body"><span></span></div>
    </li>



     <li>
      <div class="collapsible-header"id="menu8"><i class="large material-icons">store</i>แจ้งลา</div>
      <div class="collapsible-body"><span></span></div>
    </li>

  </ul>






      </div>

      <div class="col s9 ">

          <div class="card-panel hoverable div1 "> งานประจำวัน  <?php    $date2 = date("Y-m-d"); echo $date2; ?>


         <div class="row">
        <div class="col  m12">
          <div class="card">




              <?php  $date = date("d-m-Y");
         $i99 = 0;
           // $date2 = date("Y-m-d");
  $date2 = "2017-03-13";
              //Getค่าจากlogin
             $login = $objResult["id_student"];
   // $login = 5;
            $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

        $sql = "SELECT `id_student_subject`, student.`id_student`, teacher_subject.`id_teacher_subject`, `timeIn`, `timeOut`, `date`, `status_study`,teacher.fname,teacher.lname,subject.nameSubject,subject.idsubject,building.name_building,building.Latitude,building.Longitude,room.name_room,building.id_building,id_emoji  FROM `student_subject`,subject,teacher,teacher_subject,student,university,room,building WHERE student.id_student=student_subject.id_student AND teacher.id_teacher = teacher_subject.id_teacher AND subject.id_subject = teacher_subject.id_subject AND subject.id_subject AND teacher_subject.id_teacher AND university.id_university = subject.id_university AND student_subject.date AND teacher_subject.id_teacher_subject = student_subject.id_teacher_subject AND teacher_subject.id_teacher =teacher.id_teacher AND teacher_subject.id_subject = subject.id_subject AND room.id_building = building.id_building AND room.id_room=student_subject.id_room AND student_subject.date LIKE '$date2' AND student.id_student=$login GROUP BY student_subject.id_student_subject ORDER BY student_subject.timeIn ASC ";
        $result = mysqli_query($con, $sql);
      // echo $sql;
        $i7 = 0;
        while ($row = mysqli_fetch_row($result)) {

            ?>

           <!--   <div class="col s6 m12"> -->
           <div>
    <div class="card horizontal ">
      <div class="card-image">

          <?php
          if($row[2] == 30 or $row[2] == 19){

                 echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
          }
          elseif ($row[2] == 20 or $row[2] == 25) {
                echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }
        elseif ($row[2] == 18) {
          echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }else{
             echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }

          ?>

      </div>
      <div class="card-stacked">

<?php

        echo "<div class='card-content'>";
        ?>
           <?php
           if($row[16] == 2){ ?>

              <img src="http://i.imgur.com/iMlPOFg.png" width='60px' >

         <?php  } elseif ($row[16] == 3) { ?>
                              <img src="http://i.imgur.com/15svXmL.png" width='60px' >

              <?php  } elseif ($row[16] == 4) { ?>
                           <img src="http://i.imgur.com/cjtjbUI.png" width='60px' >

              <?php  } elseif ($row[16] == 5) { ?>
             <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='60px' ></a>

              <?php  } elseif ($row[16] == 6) { ?>
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='60px' >

              <?php  } elseif ($row[16] == 7) { ?>
                      <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='60px' >
              <?php  } elseif ($row[16] == 1) { ?>
                     <img src="http://i.imgur.com/1EfL0K9.png" width='60px' >

                     <?php  } elseif ($row[16] == 8) { ?>
               <img src="http://developer.affectiva.com/images/emoji/smiley.png" width='60px' >

              <?php     } ?>
          <?php
    echo "<br>".$row[7].$row[8]."<br>".$row[10]."&nbsp".$row[9]."<br>".$row[3]." - ".$row[4]."<br>".$row[11]."&nbsp&nbspห้อง".$row[14];

    ?>



  <div class="chip">
     <a  href="#modal3__<?php echo $i7;?>"><i class="material-icons">room</i></a>

  คลิ๊กเพื่อดูแผนที่
  </div>

              <div id="modal3__<?php echo $i7;?>" class="modal">

    <div class="modal-content">
      <h5>แผนที่ห้องเรียน</h5>
     <?php
     if($row[15] == 2){
     ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1334.5926564183844!2d99.01277635374562!3d18.896037368616337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234acab26d49%3A0x673310a15bca3d4a!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491123069731" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
        }elseif ($row[15] == 1) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.395381227805!2d99.01195088347211!3d18.89636139839892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3cb54b7f9f2b%3A0xbed41f24ed04a2ca!2z4Lit4Liy4LiE4Liy4Lij4LmA4Liq4Liy4Lin4Lij4Lix4LiIIOC4meC4tOC4leC4ouC4p-C4o-C4o-C4mOC4meC4sCDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491124913274" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row[15] == 3) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.790289117024!2d99.01197131451185!3d18.89638238719125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234abdc71e2d%3A0x507c5a8a7d405678!2z4LiV4Li24LiB4LiI4Li44Lis4Liy4Lig4Lij4LiT4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491124970769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row[15] == 4) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cda2ad0a5d49f74!2z4Lio4Li54LiZ4Lii4LmM4Lin4Li04LiI4Lix4Lii4LmA4Lio4Lij4Lip4LiQ4LiB4Li04LiI4LmB4Lil4Liw4Lie4Lii4Liy4LiB4Lij4LiT4LmM4LiX4Liy4LiH4LiB4Liy4Lij4LmA4LiB4Lip4LiV4LijIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125104580" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row[15] == 5) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b879b7be77e05b3!2z4LiE4LiT4Liw4Lia4Lij4Li04Lir4Liy4Lij4LiY4Li44Lij4LiB4Li04LiI!5e0!3m2!1sth!2sth!4v1491125066697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row[15] == 6) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7732001434674!2d99.01548140300079!3d18.897140131872778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234a070dd16d%3A0x9562e819f4733ac0!2z4LiE4LiT4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LiB4Liy4Lij4Lib4Lij4Liw4Lih4LiH4LmB4Lil4Liw4LiX4Lij4Lix4Lie4Lii4Liy4LiB4Lij4LiX4Liy4LiH4LiZ4LmJ4LizIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125156509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row[15] == 7) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1122.2611481556214!2d99.01043583417673!3d18.89499812585422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c1cba8a79b38e2b!2z4Lit4Liy4LiE4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Lin4Lih4LmB4Lih4LmI4LmC4LiI4LmJIDcwIOC4m-C4tSDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491125183158" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }
      ?>
    </div>

  </div>
         <?php
            echo "<br>อุปกรณ์เตรียมความพร้อม";
    $sql25 = "SELECT tool_student_subject.nametool,tool_student_subject.id_tool_student_subject"
            . " FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row[0] AND tool_student_subject.status=1 ";
        $result25 = mysqli_query($con, $sql25);
       // echo $sql25;
          //echo "อาจารย์สั่ง";
            echo   "<ul class='collapsible' data-collapsible='expandable'>
             <li>
             <div class='collapsible-header'><i class='material-icons'>supervisor_account</i>อาจารย์</div>";
        while ($row25 = mysqli_fetch_row($result25)) {

                //echo $row25[0]."<br>"; ?>


      <div class="collapsible-body"><span><?php echo $row25[0]?></span></div>

          <?php
        }
       echo   "</li>";
        //-----------------------------------------------------------------------------
         //echo "ตัวเอง<br>";
          $sql26 = "SELECT tool_student_subject.nametool ,tool_student_subject.id_tool_student_subject "
            . " FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row[0] AND tool_student_subject.status=2 ";
        $result26 = mysqli_query($con, $sql26);

     $sql27 = "SELECT tool_student_subject.nametool "
            . "FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row[0] AND tool_student_subject.status=2 ";
        $result27 = mysqli_query($con, $sql27);
        $row27 = mysqli_fetch_row($result27);
        if(empty($row27)){
           // echo "ไม่มีข้อมูล";
              echo "  <li>     <div class='collapsible-header'><i class='material-icons'>perm_identity</i>นักศึกษา</div> <div class='collapsible-body'><span>";
               echo "ไม่มีข้อมูล";
                  echo     " </span></div></li>";

        } else {

          echo "  <li>     <div class='collapsible-header'><i class='material-icons'>perm_identity</i>นักศึกษา</div> <div class='collapsible-body'><span>"
            . "  <div class='row'>";
            while ($row26 = mysqli_fetch_row($result26)) {

                //echo $row26[0];    ?>



      <div class="col s9 push-s2"><span class="flow-text">

              <h6> <?php echo$row26[0] ?>

              </h6>


      </span></div>
          <div class="col s2 pull-s9 fixed-action-btn horizontal"><span class="flow-text">




           <a class="modal-trigger "><i class="medium material-icons ">settings_applications</i></a>

<ul>
      <li><a class="btn-floating red" href="#modal1_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">delete</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="#modal2_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">mode_edit</i></a></li>

    </ul>





          </span></div>


  <!-- Modal Structure -->
  <div id="modal1_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">

      <form action="delete_tool_student.php" method="post" id="deleteTool_<?php echo $i99;?>_<?php echo $i7;?>">

    <div class="modal-content">
        <center>
        <i class="large material-icons ">delete</i>
      <h5>ยืนยันการลบ ?</h5>
      <h6><?php echo$row26[0]?> </h6>
      </center>
    </div>
          <input type="hidden" id="tool_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row26[1] ?>">

          <div class="modal-footer">
         <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
</div>
      </form>
    <div id="div_show_result3_<?php $i99.'_'.$i7?>"></div>
  </div>


   <div id="modal2_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="editTool_<?php echo $i99;?>_<?php echo $i7;?>">
    <div class="modal-content">
       <center>
        <i class="large material-icons ">mode_edit</i>
      <h5>แก้ไขข้อมูล</h5>
      <h6> <input type="text" value="<?php echo$row26[0]?>" id="NameTool_<?php echo $i99;?>_<?php echo $i7;?>" ></h6>
      </center>

    </div>
        <input type="hidden" id="tool_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row26[1] ?>">
    <div class="modal-footer">
       <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
    </div>
        </form>
  </div>



          <?php

           $i99 ++;

        }
          echo     "</span></div></li>";

        }


    ?>


  <li>     <div class='collapsible-header'><i class='material-icons'>note_add</i>เพิ่มบันทึกความจำ</div> <div class='collapsible-body'><span>
              <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <form action="insert_Accessories_ByStudent.php" method="post" id="insert_Accessories_ByStudent_<?php echo $i7;?>">


          <input type="hidden"  name="id_student_subject" id="add_tool_<?php echo $i7;?>" value="<?php echo $row[0];?>">
          <i class="material-icons prefix ">mode_edit</i>   <input type="text" required=""  name="tool"class="autocomplete " id="tool_<?php echo $i7;?>">
               <label for="autocomplete-input">เพิ่มข้อมูล</label>
                <button class="btn waves-effect waves-light  pink lighten-14" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>








          </form>
                      </div>
      </div>
    </div>
  </div>

      </span></div></li>

           </ul>

          <div id="div_show_result2_<?php echo $i7;?>"></div>

  </div>
<div class='card-action'>
         <?php
            if($row[6] == 1){
                echo "สถานะการเรียนปกติ";
            }elseif ($row[6] == 0) {
                      echo "สถานะงดการเรียน";
                  }elseif ($row[6] == 3) {
                      echo "สถานะชดเชยการเรียน";
                  }
                  elseif ($row[6] == 5) {
                       echo "สถานะสอบ";
                  }


             echo     "</div>   ";
                   ?>

  </div>
    </div>
  </div>




     <?php
$i7++;

     }

     $i8 = $i7;
     $i100 = $i99;
     ?>

                   <input type="hidden" id="i100"value="<?php echo  $i100 ?>">
                        <input type="hidden" id="i8"value="<?php echo  $i8 ?>">




        </div>
      </div>
    </div>
       </div>
       <div class="card-panel hoverable div2"> งานสำหรับพรุ่งนี้ <?php    $datedate = date("Y-m-d", strtotime("+1 day", strtotime($date2)));

           echo $datedate; ?>


<div class="row">
        <div class="col  m12">
          <div class="card">




              <?php  $date = date("d-m-Y");
         $i99 = 0;
           // $date2 = date("Y-m-d");
               $date2 = "2017-03-13";

             $login = $objResult["id_student"];
   // $login = 5;
            $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

        $sql_ = " SELECT `id_student_subject`, student.`id_student`, teacher_subject.`id_teacher_subject`, "
                . " `timeIn`, `timeOut`, `date`, `status_study`,teacher.fname,teacher.lname,subject.nameSubject,subject.idsubject"
                . " ,building.name_building,building.Latitude,building.Longitude,room.name_room,building.id_building,id_emoji  "
                . " FROM `student_subject`,subject,teacher,teacher_subject,student,university,room,building WHERE "
                . " student.id_student=student_subject.id_student AND teacher.id_teacher = teacher_subject.id_teacher "
                . " AND subject.id_subject = teacher_subject.id_subject AND subject.id_subject AND teacher_subject.id_teacher "
                . " AND university.id_university = subject.id_university AND student_subject.date AND teacher_subject.id_teacher_subject "
                . " = student_subject.id_teacher_subject AND teacher_subject.id_teacher =teacher.id_teacher AND teacher_subject.id_subject = subject.id_subject "
                . " AND room.id_building = building.id_building AND room.id_room=student_subject.id_room AND student_subject.date "
                . " LIKE '$datedate' AND student.id_student=$login GROUP BY student_subject.id_student_subject ORDER BY student_subject.timeIn ASC ";
        $result_ = mysqli_query($con, $sql_);
      // echo $sql;
        $i7 = 0;
        while ($row_ = mysqli_fetch_row($result_)) {

            ?>

           <!--   <div class="col s6 m12"> -->
           <div>
    <div class="card horizontal ">
      <div class="card-image">

          <?php
          if($row_[2] == 30 or $row_[2] == 19){

                 echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
          }
          elseif ($row_[2] == 20 or $row_[2] == 25) {
                echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }
        elseif ($row_[2] == 18) {
          echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }else{
             echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }

          ?>

      </div>
      <div class="card-stacked">


<?php

        echo "<div class='card-content'>";
        ?>
           <?php
           if($row_[16] == 2){ ?>

              <img src="http://i.imgur.com/iMlPOFg.png" width='60px' >

         <?php  } elseif ($row_[16] == 3) { ?>
                              <img src="     http://i.imgur.com/15svXmL.png" width='60px' >

              <?php  } elseif ($row_[16] == 4) { ?>
                           <img src="http://i.imgur.com/cjtjbUI.png" width='60px' >

              <?php  } elseif ($row_[16] == 5) { ?>
             <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='60px' ></a>

              <?php  } elseif ($row_[16] == 6) { ?>
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='60px' >

              <?php  } elseif ($row_[16] == 7) { ?>
                      <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='60px' >
              <?php  } elseif ($row_[16] == 1) { ?>
                     <img src="http://i.imgur.com/1EfL0K9.png" width='60px' >

                     <?php  } elseif ($row_[16] == 8) { ?>
               <img src="http://developer.affectiva.com/images/emoji/smiley.png" width='60px' >

              <?php     } ?>
          <?php
    echo "<br>".$row_[7].$row_[8]."<br>".$row_[10]."&nbsp".$row_[9]."<br>".$row_[3]." - ".$row_[4]."<br>".$row_[11]."&nbsp&nbspห้อง".$row_[14];

    ?>



  <div class="chip">
     <a  href="#modal9__<?php echo $i7;?>"><i class="material-icons">room</i></a>

  คลิ๊กเพื่อดูแผนที่
  </div>

              <div id="modal9__<?php echo $i7;?>" class="modal">

    <div class="modal-content">
      <h5>แผนที่ห้องเรียน</h5>
     <?php
     if($row_[15] == 2){
     ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1334.5926564183844!2d99.01277635374562!3d18.896037368616337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234acab26d49%3A0x673310a15bca3d4a!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491123069731" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
        }elseif ($row_[15] == 1) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.395381227805!2d99.01195088347211!3d18.89636139839892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3cb54b7f9f2b%3A0xbed41f24ed04a2ca!2z4Lit4Liy4LiE4Liy4Lij4LmA4Liq4Liy4Lin4Lij4Lix4LiIIOC4meC4tOC4leC4ouC4p-C4o-C4o-C4mOC4meC4sCDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491124913274" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 3) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.790289117024!2d99.01197131451185!3d18.89638238719125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234abdc71e2d%3A0x507c5a8a7d405678!2z4LiV4Li24LiB4LiI4Li44Lis4Liy4Lig4Lij4LiT4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491124970769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 4) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cda2ad0a5d49f74!2z4Lio4Li54LiZ4Lii4LmM4Lin4Li04LiI4Lix4Lii4LmA4Lio4Lij4Lip4LiQ4LiB4Li04LiI4LmB4Lil4Liw4Lie4Lii4Liy4LiB4Lij4LiT4LmM4LiX4Liy4LiH4LiB4Liy4Lij4LmA4LiB4Lip4LiV4LijIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125104580" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 5) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b879b7be77e05b3!2z4LiE4LiT4Liw4Lia4Lij4Li04Lir4Liy4Lij4LiY4Li44Lij4LiB4Li04LiI!5e0!3m2!1sth!2sth!4v1491125066697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 6) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7732001434674!2d99.01548140300079!3d18.897140131872778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234a070dd16d%3A0x9562e819f4733ac0!2z4LiE4LiT4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LiB4Liy4Lij4Lib4Lij4Liw4Lih4LiH4LmB4Lil4Liw4LiX4Lij4Lix4Lie4Lii4Liy4LiB4Lij4LiX4Liy4LiH4LiZ4LmJ4LizIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125156509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 7) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1122.2611481556214!2d99.01043583417673!3d18.89499812585422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c1cba8a79b38e2b!2z4Lit4Liy4LiE4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Lin4Lih4LmB4Lih4LmI4LmC4LiI4LmJIDcwIOC4m-C4tSDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491125183158" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }
      ?>
    </div>

  </div>
         <?php
            echo "<br>อุปกรณ์เตรียมความพร้อม";
    $sql_25 = "SELECT tool_student_subject.nametool,tool_student_subject.id_tool_student_subject"
            . " FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row_[0] AND tool_student_subject.status=1 ";
        $result_25 = mysqli_query($con, $sql_25);
       // echo $sql25;
          //echo "อาจารย์สั่ง";
            echo   "<ul class='collapsible' data-collapsible='expandable'>
             <li>
             <div class='collapsible-header'><i class='material-icons'>supervisor_account</i>อาจารย์</div>";
        while ($row_25 = mysqli_fetch_row($result_25)) {

                //echo $row25[0]."<br>"; ?>


      <div class="collapsible-body"><span><?php echo $row_25[0]?></span></div>

          <?php
        }
       echo   "</li>";
        //-----------------------------------------------------------------------------
         //echo "ตัวเอง<br>";
          $sql_26 = "SELECT tool_student_subject.nametool ,tool_student_subject.id_tool_student_subject "
            . " FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row_[0] AND tool_student_subject.status=2 ";
        $result_26 = mysqli_query($con, $sql_26);

     $sql_27 = "SELECT tool_student_subject.nametool "
            . "FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row_[0] AND tool_student_subject.status=2 ";
        $result_27 = mysqli_query($con, $sql_27);
        $row_27 = mysqli_fetch_row($result_27);
        if(empty($row_27)){
           // echo "ไม่มีข้อมูล";
              echo "  <li>     <div class='collapsible-header'><i class='material-icons'>perm_identity</i>นักศึกษา</div> <div class='collapsible-body'><span>";
               echo "ไม่มีข้อมูล";
                  echo     " </span></div></li>";

        } else {

          echo "  <li>     <div class='collapsible-header'><i class='material-icons'>perm_identity</i>นักศึกษา</div> <div class='collapsible-body'><span>"
            . "  <div class='row'>";
            while ($row_26 = mysqli_fetch_row($result_26)) {

                //echo $row26[0];    ?>



      <div class="col s9 push-s2"><span class="flow-text">

              <h6> <?php echo$row_26[0] ?>

              </h6>


      </span></div>
          <div class="col s2 pull-s9 fixed-action-btn horizontal"><span class="flow-text">




           <a class="modal-trigger "><i class="medium material-icons ">settings_applications</i></a>

<ul>
      <li><a class="btn-floating red" href="#modal_1_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">delete</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="#modal_2_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">mode_edit</i></a></li>

    </ul>





          </span></div>


  <!-- Modal Structure -->
  <div id="modal_1_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">

      <form action="delete_tool_student.php" method="post" id="delete_Tool_<?php echo $i99;?>_<?php echo $i7;?>">

    <div class="modal-content">
        <center>
        <i class="large material-icons ">delete</i>
      <h5>ยืนยันการลบ ?</h5>
      <h6><?php echo$row_26[0]?> </h6>
      </center>
    </div>
          <input type="hidden" id="to_ol_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row_26[1] ?>">

          <div class="modal-footer">
         <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
</div>
      </form>
    <div id="div_show_result3_<?php $i99.'_'.$i7?>"></div>
  </div>


   <div id="modal_2_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="edit_Tool_<?php echo $i99;?>_<?php echo $i7;?>">
    <div class="modal-content">
       <center>
        <i class="large material-icons ">mode_edit</i>
      <h5>แก้ไขข้อมูล</h5>
      <h6> <input type="text" value="<?php echo$row_26[0]?>" id="Name_Tool_<?php echo $i99;?>_<?php echo $i7;?>" ></h6>
      </center>

    </div>
        <input type="hidden" id="to_ol_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row_26[1] ?>">
    <div class="modal-footer">
       <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
    </div>
        </form>
  </div>



          <?php

           $i99 ++;

        }
          echo     "</span></div></li>";

        }


    ?>


  <li>     <div class='collapsible-header'><i class='material-icons'>note_add</i>เพิ่มบันทึกความจำ</div> <div class='collapsible-body'><span>
              <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <form action="insert_Accessories_ByStudent.php" method="post" id="i_insert_Accessories_ByStudent_<?php echo $i7;?>">


          <input type="hidden"  name="id_student_subject" id="a_add_tool_<?php echo $i7;?>" value="<?php echo $row_[0];?>">
          <i class="material-icons prefix ">mode_edit</i>   <input type="text" required=""  name="tool"class="autocomplete " id="to_ol_<?php echo $i7;?>">
               <label for="autocomplete-input">เพิ่มข้อมูล</label>
                <button class="btn waves-effect waves-light  pink lighten-14" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>








          </form>
                      </div>
      </div>
    </div>
  </div>

      </span></div></li>

           </ul>

          <div id="d_div_show_result2_<?php echo $i7;?>"></div>

  </div>
<div class='card-action'>
         <?php
            if($row_[6] == 1){
                echo "สถานะการเรียนปกติ";
            }elseif ($row_[6] == 0) {
                      echo "สถานะงดการเรียน";
                  }elseif ($row_[6] == 3) {
                      echo "สถานะชดเชยการเรียน";
                  }
                  elseif ($row_[6] == 5) {
                       echo "สถานะสอบ";
                  }


             echo     "</div>   ";
                   ?>

  </div>
    </div>
  </div>




     <?php
$i7++;

     }

     $i8 = $i7;
     $i100 = $i99;
     ?>

                   <input type="hidden" id="i_i100"value="<?php echo  $i100 ?>">
                        <input type="hidden" id="i_i8"value="<?php echo  $i8 ?>">




        </div>
      </div>
    </div>



       </div>
        <div class="card-panel hoverable div3">ในอนาคต


<div class="row">
        <div class="col  m12">
          <div class="card">




              <?php  //$date = date("d-m-Y");
         $i99 = 0;


        $sql_ = " SELECT `id_student_subject`, student.`id_student`, teacher_subject.`id_teacher_subject`, "
                . " `timeIn`, `timeOut`, `date`, `status_study`,teacher.fname,teacher.lname,subject.nameSubject,subject.idsubject"
                . " ,building.name_building,building.Latitude,building.Longitude,room.name_room,building.id_building,id_emoji  "
                . " FROM `student_subject`,subject,teacher,teacher_subject,student,university,room,building WHERE "
                . " student.id_student=student_subject.id_student AND teacher.id_teacher = teacher_subject.id_teacher "
                . " AND subject.id_subject = teacher_subject.id_subject AND subject.id_subject AND teacher_subject.id_teacher "
                . " AND university.id_university = subject.id_university AND student_subject.date AND teacher_subject.id_teacher_subject "
                . " = student_subject.id_teacher_subject AND teacher_subject.id_teacher =teacher.id_teacher AND teacher_subject.id_subject = subject.id_subject "
                . " AND room.id_building = building.id_building AND room.id_room=student_subject.id_room AND student_subject.date "
                . " > '$datedate' AND student.id_student=$login AND ( student_subject.status_study = 0 || student_subject.status_study = 3 || student_subject.status_study = 5)"
                . " GROUP BY student_subject.id_student_subject ORDER BY student_subject.date,student_subject.timein  ";
         $sql_55 = " SELECT `id_student_subject`, student.`id_student`, teacher_subject.`id_teacher_subject`, "
                . " `timeIn`, `timeOut`, `date`, `status_study`,teacher.fname,teacher.lname,subject.nameSubject,subject.idsubject"
                . " ,building.name_building,building.Latitude,building.Longitude,room.name_room,building.id_building,id_emoji  "
                . " FROM `student_subject`,subject,teacher,teacher_subject,student,university,room,building WHERE "
                . " student.id_student=student_subject.id_student AND teacher.id_teacher = teacher_subject.id_teacher "
                . " AND subject.id_subject = teacher_subject.id_subject AND subject.id_subject AND teacher_subject.id_teacher "
                . " AND university.id_university = subject.id_university AND student_subject.date AND teacher_subject.id_teacher_subject "
                . " = student_subject.id_teacher_subject AND teacher_subject.id_teacher =teacher.id_teacher AND teacher_subject.id_subject = subject.id_subject "
                . " AND room.id_building = building.id_building AND room.id_room=student_subject.id_room AND student_subject.date "
                . " > '$datedate' AND student.id_student=$login AND ( student_subject.status_study = 0 || student_subject.status_study = 3 || student_subject.status_study = 5)"
                . " GROUP BY student_subject.id_student_subject ORDER BY student_subject.date,student_subject.timein  ";
        $result_ = mysqli_query($con, $sql_);
          $result_55 = mysqli_query($con, $sql_55);
      // echo $sql;
        $i7 = 0;

        if(empty($row_ = mysqli_fetch_row($result_))){
            echo "<br><h5>ไม่ข้อมูลการชดเชยการเรียน หรือ งดการเรียน</h5><br>";
        }else{


        while ($row_ = mysqli_fetch_row($result_55)) {

            ?>

           <!--   <div class="col s6 m12"> -->
           <div>
    <div class="card horizontal ">
      <div class="card-image">

          <?php
          if($row_[2] == 30 or $row_[2] == 19){

                 echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
          }
          elseif ($row_[2] == 20 or $row_[2] == 25) {
                echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }
        elseif ($row_[2] == 18) {
          echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }else{
             echo "<img src='https://pixabay.com/static/img/profile_image_dummy.svg'  width='200' height='150'>";
      }

          ?>

      </div>
      <div class="card-stacked">


<?php

        echo "<div class='card-content'>";
        ?>
           <?php
           if($row_[16] == 2){ ?>

              <img src="http://i.imgur.com/iMlPOFg.png" width='60px' >

         <?php  } elseif ($row_[16] == 3) { ?>
                              <img src="     http://i.imgur.com/15svXmL.png" width='60px' >

              <?php  } elseif ($row_[16] == 4) { ?>
                           <img src="http://i.imgur.com/cjtjbUI.png" width='60px' >

              <?php  } elseif ($row_[16] == 5) { ?>
             <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='60px' ></a>

              <?php  } elseif ($row_[16] == 6) { ?>
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='60px' >

              <?php  } elseif ($row_[16] == 7) { ?>
                      <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='60px' >
              <?php  } elseif ($row_[16] == 1) { ?>
                     <img src="http://i.imgur.com/1EfL0K9.png" width='60px' >

                     <?php  } elseif ($row_[16] == 8) { ?>
               <img src="http://developer.affectiva.com/images/emoji/smiley.png" width='60px' >

              <?php     } ?>
          <?php
    echo "<br>".$row_[5]."<br>".$row_[7].$row_[8]."<br>".$row_[10]."&nbsp".$row_[9]."<br>".$row_[3]." - ".$row_[4]."<br>".$row_[11]."&nbsp&nbspห้อง".$row_[14];

    ?>



  <div class="chip">
     <a  href="#modal9__<?php echo $i7;?>"><i class="material-icons">room</i></a>

  คลิ๊กเพื่อดูแผนที่
  </div>

              <div id="modal9__<?php echo $i7;?>" class="modal">

    <div class="modal-content">
      <h5>แผนที่ห้องเรียน</h5>
     <?php
     if($row_[15] == 2){
     ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1334.5926564183844!2d99.01277635374562!3d18.896037368616337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234acab26d49%3A0x673310a15bca3d4a!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491123069731" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
        }elseif ($row_[15] == 1) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.395381227805!2d99.01195088347211!3d18.89636139839892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3cb54b7f9f2b%3A0xbed41f24ed04a2ca!2z4Lit4Liy4LiE4Liy4Lij4LmA4Liq4Liy4Lin4Lij4Lix4LiIIOC4meC4tOC4leC4ouC4p-C4o-C4o-C4mOC4meC4sCDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491124913274" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 3) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.790289117024!2d99.01197131451185!3d18.89638238719125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234abdc71e2d%3A0x507c5a8a7d405678!2z4LiV4Li24LiB4LiI4Li44Lis4Liy4Lig4Lij4LiT4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491124970769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 4) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cda2ad0a5d49f74!2z4Lio4Li54LiZ4Lii4LmM4Lin4Li04LiI4Lix4Lii4LmA4Lio4Lij4Lip4LiQ4LiB4Li04LiI4LmB4Lil4Liw4Lie4Lii4Liy4LiB4Lij4LiT4LmM4LiX4Liy4LiH4LiB4Liy4Lij4LmA4LiB4Lip4LiV4LijIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125104580" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 5) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b879b7be77e05b3!2z4LiE4LiT4Liw4Lia4Lij4Li04Lir4Liy4Lij4LiY4Li44Lij4LiB4Li04LiI!5e0!3m2!1sth!2sth!4v1491125066697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 6) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7732001434674!2d99.01548140300079!3d18.897140131872778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234a070dd16d%3A0x9562e819f4733ac0!2z4LiE4LiT4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LiB4Liy4Lij4Lib4Lij4Liw4Lih4LiH4LmB4Lil4Liw4LiX4Lij4Lix4Lie4Lii4Liy4LiB4Lij4LiX4Liy4LiH4LiZ4LmJ4LizIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125156509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_[15] == 7) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1122.2611481556214!2d99.01043583417673!3d18.89499812585422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c1cba8a79b38e2b!2z4Lit4Liy4LiE4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Lin4Lih4LmB4Lih4LmI4LmC4LiI4LmJIDcwIOC4m-C4tSDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491125183158" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }
      ?>
    </div>

  </div>
         <?php
            echo "<br>อุปกรณ์เตรียมความพร้อม";
    $sql_25 = "SELECT tool_student_subject.nametool,tool_student_subject.id_tool_student_subject"
            . " FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row_[0] AND tool_student_subject.status=1 ";
        $result_25 = mysqli_query($con, $sql_25);
       // echo $sql25;
          //echo "อาจารย์สั่ง";
            echo   "<ul class='collapsible' data-collapsible='expandable'>
             <li>
             <div class='collapsible-header'><i class='material-icons'>supervisor_account</i>อาจารย์</div>";
        while ($row_25 = mysqli_fetch_row($result_25)) {

                //echo $row25[0]."<br>"; ?>


      <div class="collapsible-body"><span><?php echo $row_25[0]?></span></div>

          <?php
        }
       echo   "</li>";
        //-----------------------------------------------------------------------------
         //echo "ตัวเอง<br>";
          $sql_26 = "SELECT tool_student_subject.nametool ,tool_student_subject.id_tool_student_subject "
            . " FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row_[0] AND tool_student_subject.status=2 ";
        $result_26 = mysqli_query($con, $sql_26);

     $sql_27 = "SELECT tool_student_subject.nametool "
            . "FROM `tool_student_subject`,student_subject WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject"
            . " AND student_subject.id_student_subject = $row_[0] AND tool_student_subject.status=2 ";
        $result_27 = mysqli_query($con, $sql_27);
        $row_27 = mysqli_fetch_row($result_27);
        if(empty($row_27)){
           // echo "ไม่มีข้อมูล";
              echo "  <li>     <div class='collapsible-header'><i class='material-icons'>perm_identity</i>นักศึกษา</div> <div class='collapsible-body'><span>";
               echo "ไม่มีข้อมูล";
                  echo     " </span></div></li>";

        } else {

          echo "  <li>     <div class='collapsible-header'><i class='material-icons'>perm_identity</i>นักศึกษา</div> <div class='collapsible-body'><span>"
            . "  <div class='row'>";
            while ($row_26 = mysqli_fetch_row($result_26)) {

                //echo $row26[0];    ?>



      <div class="col s9 push-s2"><span class="flow-text">

              <h6> <?php echo$row_26[0] ?>

              </h6>


      </span></div>
          <div class="col s2 pull-s9 fixed-action-btn horizontal"><span class="flow-text">




           <a class="modal-trigger "><i class="medium material-icons ">settings_applications</i></a>

<ul>
      <li><a class="btn-floating red" href="#m_modal_1_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">delete</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="#m_modal_2_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">mode_edit</i></a></li>

    </ul>





          </span></div>


  <!-- Modal Structure -->
  <div id="m_modal_1_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">

      <form action="delete_tool_student.php" method="post" id="delete_To_ol_<?php echo $i99;?>_<?php echo $i7;?>">

    <div class="modal-content">
        <center>
        <i class="large material-icons ">delete</i>
      <h5>ยืนยันการลบ ?</h5>
      <h6><?php echo$row_26[0]?> </h6>
      </center>
    </div>
          <input type="hidden" id="t_to_ol_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row_26[1] ?>">

          <div class="modal-footer">
         <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
</div>
      </form>
    <div id="d_div_show_result3_<?php $i99.'_'.$i7?>"></div>
  </div>


   <div id="m_modal_2_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="e_edit_Tool_<?php echo $i99;?>_<?php echo $i7;?>">
    <div class="modal-content">
       <center>
        <i class="large material-icons ">mode_edit</i>
      <h5>แก้ไขข้อมูล</h5>
      <h6> <input type="text" value="<?php echo$row_26[0]?>" id="Na_me_Tool_<?php echo $i99;?>_<?php echo $i7;?>" ></h6>
      </center>

    </div>
        <input type="hidden" id="t_to_ol_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row_26[1] ?>">
    <div class="modal-footer">
       <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
    </div>
        </form>
  </div>



          <?php

           $i99 ++;

        }
          echo     "</span></div></li>";

        }


    ?>


  <li>     <div class='collapsible-header'><i class='material-icons'>note_add</i>เพิ่มบันทึกความจำ</div> <div class='collapsible-body'><span>
              <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <form action="insert_Accessories_ByStudent.php" method="post" id="i_i_insert_Accessories_ByStudent_<?php echo $i7;?>">


          <input type="hidden"  name="id_student_subject" id="a_a_add_tool_<?php echo $i7;?>" value="<?php echo $row_[0];?>">
          <i class="material-icons prefix ">mode_edit</i>   <input type="text" required=""  name="tool"class="autocomplete " id="t_to_ol_<?php echo $i7;?>">
               <label for="autocomplete-input">เพิ่มข้อมูล</label>
                <button class="btn waves-effect waves-light  pink lighten-14" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>








          </form>
                      </div>
      </div>
    </div>
  </div>

      </span></div></li>

           </ul>

          <div id="d_d_div_show_result2_<?php echo $i7;?>"></div>

  </div>
<div class='card-action'>
         <?php
            if($row_[6] == 1){
                echo "สถานะการเรียนปกติ";
            }elseif ($row_[6] == 0) {
                      echo "สถานะงดการเรียน";
                  }elseif ($row_[6] == 3) {
                      echo "สถานะชดเชยการเรียน";
                  }elseif ($row_[6] == 4) {
                       echo "สถานะยกเลิกเมค";
                  }
                  elseif ($row_[6] == 5) {
                       echo "สถานะสอบ";
                  }
                  elseif ($row_[6] == 6) {
                       echo "สถานะยกเลิกสอบ";
                  }

             echo     "</div>   ";
                   ?>

  </div>
    </div>
  </div>




     <?php
$i7++;

     }

     $i8 = $i7;
     $i100 = $i99;
     ?>

                   <input type="hidden" id="i_i_i100"value="<?php echo  $i100 ?>">
                        <input type="hidden" id="i_i_i8"value="<?php echo  $i8 ?>">
<?php
}
?>

        </div>
      </div>
    </div>






       </div>
        <div class="card-panel hoverable div4"> ค้นหาการเรียน


         <div class="row">
        <div class="col  m12">
          <div class="card">

            <div class="card-content">

                <form action="search_study.php" method="post" id="search_study">
                    <input type="hidden" id="id_login" name="id_login" value="<?php echo $login?>">
                    เลือกวันที่ต้องการ <input type="date"  id="date" name="date">

                    <input type="submit" value="ยืนยัน">
                </form>





            </div>
              <div id="div_show_search"></div>
          </div>
        </div>
      </div>





       </div>
        <div class="card-panel hoverable div5">สนทนาส่วนตัว


         <div class="row">
        <div class="col  m12">
          <div class="card">

            <div class="card-content">
               <a href="chat.php">chat</a>
            </div>

          </div>
        </div>
      </div>




       </div>
<div class="card-panel hoverable div6">เข้าเรียน

         <div class="row">
        <div class="col  m12">
          <div class="card">

            <div class="card-content">
              <?php

              $sql20 = "SELECT COUNT(student_subject.id_teacher_subject ),student_subject.status_checkclass,student_subject.id_teacher_subject,subject.nameSubject "
              ."FROM student_subject,subject,teacher_subject WHERE student_subject.id_teacher_subject=teacher_subject.id_teacher_subject AND"
              ." teacher_subject.id_subject=subject.id_subject AND student_subject.id_student=$login AND student_subject.status_checkclass=0 "
              ."GROUP BY student_subject.id_teacher_subject";
              $result20 = mysqli_query($con, $sql20);


              $sql200 = "SELECT COUNT(student_subject.id_teacher_subject ),student_subject.status_checkclass,student_subject.id_teacher_subject,subject.nameSubject "
              ."FROM student_subject,subject,teacher_subject WHERE student_subject.id_teacher_subject=teacher_subject.id_teacher_subject AND"
              ." teacher_subject.id_subject=subject.id_subject AND student_subject.id_student=$login AND student_subject.status_checkclass=2 "
              ."GROUP BY student_subject.id_teacher_subject";
              $result200 = mysqli_query($con, $sql200);
              $i=1;

             $Rows20 = mysqli_num_rows($result20);
             $Rows200 = mysqli_num_rows($result200);
             if ($Rows20 > 0 ) {
                   echo "<table>
                     <tr>
                       <th>ลำดับ</th>
                       <th>วิชา</th>
                       <th>จำนวนการขาด</th>
                     </tr>
                     ";
                while ( $row20 = mysqli_fetch_row($result20)) {
                      echo "<tr>
                        <td>$i</td>
                        <td>" . $row20[3] ."</td>
                        <td>" . $row20[0] . "</td>";
                      echo "</tr>";
                      $i++;
                 }
                 echo "</table>";
               }else {
                 echo "<h5>ไม่ข้อมูลการขาดเรียน</h5>";
               }
              ?>
            </div>

          </div>
        </div>
      </div>






       </div>


<div class="card-panel hoverable div8"> แจ้งลา



         <div class="row">

          <div class="card">

            <div class="card-content">

                    <div class="panel panel-primary">


                      <form action="insert2.php" method="post" class="form-horizontal" enctype="multipart/form-data">

        <div class="form-group">
            <i class="material-icons prefix">mode_edit</i>
        <label class="control-label col-sm-2" for="sick">Sick name</label>
        <div class="col-md-9">
        <input type="text" class="form-control" name="sick" id="sick" required>
      </div>
    </div>
    <?php
     $date2 = date("Y-m-d");
    $sqlsub = 'SELECT subject.nameSubject AS sub,subject.id_subject AS subid,student_subject.* FROM student_subject,subject,teacher_subject,student
    WHERE student_subject.id_student = "'.$sid.'" and student_subject.date = "'.$date2.'"
    and student_subject.id_student = student.id_student and student_subject.id_teacher_subject = teacher_subject.id_teacher_subject
    AND teacher_subject.id_subject = subject.id_subject GROUP BY sub';
    $resultsub = $conn->query($sqlsub);
    ?>
    <div class="form-group">
    <label class="control-label col-sm-2" for="sick">Subject</label>
    <div class="col-md-9">
    <select class="browser-default" name="sub" required>
      <option value="">กรุณาเลือกวิชา</option>
      <?php while($row = $resultsub->fetch_assoc()){ ?>
        <option value=<?=$row["id_student_subject"] ?>><?=$row["sub"] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
    <img id="output" src="img/image.jpg" height="200px" width="50%">

    <p>เลือกหลักฐานไฟล์แนบ</p>
  <input type="file" accept="image/*" name="image" onchange="loadFile(event)" required>


  <hr>
    <button type="submit" class="btn btn-success btn-md"><span class="glyphicon glyphicon-ok">ยืนยัน</span></button>
    <button type="reset" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-remove">รีเซ็ต</span></button>
    <hr>

  </form>
  </div>


          </div>
        </div>
       </div>
      </div>


















      </div>




    </div>



       <ul id="slide-out" class="side-nav">
<li><div class="userView">
  <?php

  $sql2 = "SELECT * FROM student,university WHERE student.university = university.id_university AND id_student = '$login' ORDER BY university";
  $result2 = $con->query($sql2);

  if ($result2->num_rows > 0) {
      $row2 = $result2->fetch_assoc();
      $stdfname = $row2["fname"];
      $stdlname = $row2["lname"];
      $stdcode = $row2["code"];
      $stduniversity = $row2["name"];
  }
  $con->close();
  ?>
  <div class="background">

  </div>
        <a href="#!user"><img class="circle" src="https://pixabay.com/static/img/profile_image_dummy.svg" width="70px"></a>

  <a href="#!name"><span class="black-text name"><?php echo $stdfname." ".$stdlname."<br>".$stdcode."<br>".$stduniversity; ?></span></a>
</div></li>

<li><a href="Logout.php">Logout</a></li>
<li><div class="divider"></div></li>
<li><a class="subheader">Subheader</a></li>
<li><a class="waves-effect" href="updatepass.php">เปลี่ยนรหัสผ่าน</a></li>
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
<script type="text/javascript">
        var loadFile = function(event) {
  var output = document.getElementById('output');

  output.src = URL.createObjectURL(event.target.files[0]);

};

        </script>
    </body>
</html>

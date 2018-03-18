<?php
  session_start();
  require('connect.php');
  $tid = $_SESSION["UserID"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <!--Import Google Icon Font-->
   
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="jquery/jquery-3.1.1.js"> </script>
        
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.css" />
    
    <script data-require="sweet-alert@*" data-semver="0.4.2" src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>

        <title></title>
  
          <script>
                   $(function (){
                        $(".div1").show();
                            
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                   $(".div7").hide(); $(".div8").hide();
                                   $(".div9").hide();
                                    $(".div10").hide();
                         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
                       $('.carousel').carousel(); 
             
                         $('select').material_select();
                          
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
                                    $(".div10").hide();
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
                                $(".div10").hide();
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
                                    $(".div10").hide();
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
                                    $(".div10").hide();
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
                                    $(".div10").hide();
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
                                    $(".div10").hide();
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
                                    $(".div10").hide();
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
                                    $(".div10").hide();
                           }); $("#menu9").click(function (){
                                  $(".div9").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div1").hide();
                                     $(".div8").hide();
                                   $(".div7").hide();
                                    $(".div10").hide();
                           }); $("#menu10").click(function (){
                                  $(".div10").show();
                               $(".div2").hide();
                                $(".div3").hide();
                                 $(".div4").hide();
                                  $(".div5").hide();
                                   $(".div6").hide();
                                    $(".div1").hide();
                                     $(".div8").hide();
                                   $(".div9").hide();
                                    $(".div7").hide();
                           });
                      $('#check_homework').on('submit',function(e) {
                             e.preventDefault();
                             console.log("เข้าแล้ว");
                             var id_teacherhw = $("#id_teacherhw").val();
                             $.ajax({
                               type: 'POST',
                               data: {id_teacherhw:id_teacherhw},
                               url: 'check_homework.php',
                               success: function(data) {
                                 //location.reload();
                                 $('#homework_card').html(data);

                               }
                             });
                             return false;
                           }); 
                           
                           
                              $('#check_list').on('submit',function(e) {
                     e.preventDefault();
                    var date  = $("#date555").val();
                    var id_teacherhw = $("#id_teacher").val();
                      var subject = $("#subjects112").val();
                     // console.log(date+id_teacherhw+subject);
                    $.ajax({
                        type: 'POST',
                        data: {id_teacherhw:id_teacherhw,date:date,subject:subject},
                        url: 'show_student.php',
                        success: function(data) {
                             
                            $('#show_student').html(data);
             
                                var  i89 = $("#i88").val();
                       
                               $('#edit_status_study').on('submit',function(e) { 
                                e.preventDefault();
                           
                              
                                
                          console.log('เข้าแล้วedit_status_study');
                    $.ajax({
                        type: 'POST',
                        data:  $('#edit_status_study').serialize(),
            
                        url: 'update_status_checkclass.php',
                        success: function(data) {
                            alert("สำเร็จ");
                            
                     
                        }
                    });
                    return false;
                });       
                   
                        
                   
                        }
                    });
                    return false;
                });       
                
                           
                           
                           
                           
                           
                           
                           
                           
                           
                        /*   $('#subjects112').change(function() {
                  $.ajax({
                    type: 'POST',
                    data: {subjects112: $(this).val()},
                    url: 'show_student.php',
                    success: function(data) {

                      $('#show_student').html(data);
                      $('#show_student').material_div();

                    }
                  });
                  return false;
                }); */
                
                
                
                
                
                    $('#subjects3').change(function() {
                    console.log("เข้าแล้ว");
                   $.ajax({
                       type: 'POST',
                       data: {subjects: $(this).val()},
                       url: 'select_subject_ajax.php',
                       success: function(data) {

                            $('#subjects4').html(data);
                            $('#subjects4').material_select();
                       }
                   });
                   return false;
               });
                        
                        
                 $('#buildings2').change(function() {
                     
                    $.ajax({
                        type: 'POST',
                        data: {buildings: $(this).val()},
                        url: 'select_room.php',
                        success: function(data) {
                             
                             $('#rooms3').html(data);
                             $('#rooms3').material_select();
                        }
                    });
                    return false;
                });   
                
                
                
               
                
                
                 $('#make_more').on('submit',function(e) {
                     e.preventDefault();
                     console.log("เข้าแล้ว");
                     var subject = $("#subjects2").val();
                     var date = $("#date").val();
                     var timein = $("#timein").val();
                     var idteacher = $("#idteacher").val();
                     var timeout = $("#timeout").val();
                     var room =  $("#rooms3").val();
                      var tool=  $("#tool").val();
                   var radio1 = $("input[name='group1']:checked").val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout,idteacher:idteacher,room3:room,tool:tool,group1:radio1},
                        url: 'insertMake_more.php',
                        success: function(data) {
                             
                          var t=   data;
                          console.log(t);
                             if(t === "ไม่สามารถเพิ่มการเมคได้เนื่องจากมีนักศึกษากำลังเรียนในช่วงเวลานี้ " || t ==="มีนักศึกษาอื่นเรียนห้องที่เลือกไว้ TT<br>"||t ==="ไม่สามารถเมคได้เนื่องจาก อาจารย์มีการสอนซ้ำเวลาไว้แล้ว" ||t ==="จำนวนโต้ะไม่เพียงพอ : จองห้องไม่ได้"){
                                 alert("ไม่สามารถทำรายการได้"+t);
                                  $('#div_show_result').html(data);
                             }else{
                                   alert("ทำรายการสำเร็จ");
                                   location.reload();
                             }
                        }
                    });
                    return false;
                });       
                
               
                
                 $('#subjects').change(function() {
                     console.log("เข้าแล้ว#subjects");
                    $.ajax({
                        type: 'POST',
                        data: {subjects: $(this).val()},
                        url: 'select_subject_ajax.php',
                        success: function(data) {
                           
                             $('#subjects2').html(data);
                             $('#subjects2').material_select();
                             
                             
                        }
                    });
                
                });  
                $('#subjects111').change(function() {
                     console.log("เข้าแล้ว#subjects");
                    $.ajax({
                        type: 'POST',
                        data: {subjects: $(this).val()},
                        url: 'select_subject_ajax.php',
                        success: function(data) {
                           
                             $('#subjects112').html(data);
                             $('#subjects112').material_select();
                             
                             
                        }
                    });
                
                });   
                
                     
       //  $('#section_miss_1').hide();$('#section_miss_2').hide();  $('#section_miss_3').hide();  $('#section_miss_4').hide();
         
           var i2 = $('#i6').val();
           console.log(i2);
           //var i;
          // var i4;
            for(let i=0; i < i2 ; i++ ){
                 console.log("#section_miss_".concat(i));
                   $("#section_miss_".concat(i)).hide();
            $("#section_miss2_".concat(i)).hide();
            
    $('#buildings3_'+[i]).change(function() {
                     
                    $.ajax({
                        type: 'POST',
                        data: {buildings: $(this).val()},
                        url: 'select_room.php',
                        success: function(data) {
                             
                             $('#rooms4_'+[i]).html(data);
                             $('#rooms4_'+[i]).material_select();
                        }
                    });
                    return false;
                });   
                
       
           
     
            $('#button_miss_'+i).click( function (){
                 console.log("เข้าแล้ว#button_miss_"+i);
                $("#section_miss_".concat(i)).show();
                    $("#section_miss2_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#section_miss_".concat(i4)).hide();
                      $("#section_miss2_".concat(i4)).hide();
                    }
                }
           
            });
            
             $('#button2_miss_'+i).click( function (){
                 console.log("เข้าแล้ว#button2_miss_"+i);
                $("#section_miss2_".concat(i)).show();
                         $("#section_miss_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#section_miss2_".concat(i4)).hide();
                      $("#section_miss_".concat(i4)).hide();
                    }
                }
           
            });
            
           
            $('#section_miss_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject = $("#subject_"+i).val();
                     var date = $("#date_"+i).val();
                     var timein = $("#timein_"+i).val();
                     var timeout = $("#timeout_"+i).val();
                     var status =  $("#status_"+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, status:status},
                        url: 'edit_status_study.php',
                        success: function(data) {
                            alert("สำเร็จ");
                             location.reload();
                             //$('#div_show_result_status').html(data);
                          
                               
                        }
                    });
                    return false;
                });  
                
               
            for(let i3=1; i3 <= 7 ; i3++ ){
             $('#editEmoji_'+i3+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                     console.log("เข้าแล้วกด emoji");
                     var subject = $("#subject_"+i3+'_'+i).val();
                     var date = $("#date_"+i3+'_'+i).val();
                     var timein = $("#timein_"+i3+'_'+i).val();
                     var timeout = $("#timeout_"+i3+'_'+i).val();
                     var emoji=  $("#Emoji_"+i3+'_'+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, emoji:emoji},
                        url: 'edit_emoji_study.php',
                        success: function(data) {
                              var emoji = data;
                              if(emoji == 'อัพเดตสำเร็จ'){
                                alert("เปลี่ยนอิโมจิสำเร็จ :)");
                                location.reload();
                            }else if (emoji == 'อัพเดตไม่สำเร็จ') {

                            
                                 alert("เปลี่ยนอิโมจิ ไม่สำเร็จ :)"+emoji); 
                            }
                             
                        }
                    });
                    return false;
                });  
            }
                
                
                $('#section_miss2_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject2 = $("#subject2_"+i).val();
                     var date2 = $("#date2_"+i).val();
                     var timein2 = $("#timein2_"+i).val();
                     var timeout2 = $("#timeout2_"+i).val();
                     var tool2 = $("#tool2_"+i).val();
                     var rooms2 = $("#rooms4_"+i).val();
                       
                      // console.log(rooms2);
                    var subject = $("#subject_"+i).val();
                     var date = $("#date_"+i).val();
                     var timein = $("#timein_"+i).val();
                     var timeout = $("#timeout_"+i).val();
                    
                   
                   
                    $.ajax({
                        type: 'POST',
                        data: {subject2:subject2,date2:date2,timein2:timein2,timeout2:timeout2, tool2:tool2,room2:rooms2,subject:subject,date:date,timein:timein,timeout:timeout},
                        url: 'edit_study.php',
                        success: function(data) {
                             //location.reload();
                           
                             
                              var edit = data;
                            if(edit == 'ไม่สำเร็จ เนื่องจากการจองมีการซ้อนทับ' || edit == 'จำนวนโต๊ะไม่พอกับจำนวนนักศึกษา') {

                            
                                   alert("แก้ไขข้อมูล ไม่สำเร็จ :)"+edit); 
                                   $('#div_show_result_status').html(data);
                             
                            }  else{
                                alert("แก้ไขสำเร็จ :)");
                                location.reload();
                            }
                            
                        }
                    });
                    return false;
                });  
                
      }
              
             var i2 = $('#i_i6').val();
          
            for(let i=0; i < i2 ; i++ ){
                // console.log("#section_miss_".concat(i));
                   $("#s_section_miss_".concat(i)).hide();
            $("#s_section_miss2_".concat(i)).hide();
            
    $('#buil_dings3_'+[i]).change(function() {
                     
                    $.ajax({
                        type: 'POST',
                        data: {buildings: $(this).val()},
                        url: 'select_room.php',
                        success: function(data) {
                             
                             $('#ro_oms4_'+[i]).html(data);
                             $('#ro_oms4_'+[i]).material_select();
                        }
                    });
                    return false;
                });   
                
       
           
     
            $('#b_button_miss_'+i).click( function (){
                 //console.log("เข้าแล้ว#button_miss_"+i);
                $("#s_section_miss_".concat(i)).show();
                    $("#s_section_miss2_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#s_section_miss_".concat(i4)).hide();
                      $("#s_section_miss2_".concat(i4)).hide();
                    }
                }
           
            });
            
             $('#b_button2_miss_'+i).click( function (){
                // console.log("เข้าแล้ว#button2_miss_"+i);
                $("#s_section_miss2_".concat(i)).show();
                         $("#s_section_miss_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#s_section_miss2_".concat(i4)).hide();
                      $("#s_section_miss_".concat(i4)).hide();
                    }
                }
           
            });
            
           
            $('#s_section_miss_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject = $("#sub_ject_"+i).val();
                     var date = $("#da_te_"+i).val();
                     var timein = $("#time_in_"+i).val();
                     var timeout = $("#time_out_"+i).val();
                     var status =  $("#sta_tus_"+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, status:status},
                        url: 'edit_status_study.php',
                        success: function(data) {
                            alert("สำเร็จ");
                             location.reload();
                             //$('#div_show_result_status').html(data);
                          
                               
                        }
                    });
                    return false;
                });  
                
               
            for(let i3=1; i3 <= 7 ; i3++ ){
             $('#edit_Emoji_'+i3+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้วกด emoji");
                     var subject = $("#sub_ject_"+i3+'_'+i).val();
                     var date = $("#da_te_"+i3+'_'+i).val();
                     var timein = $("#time_in_"+i3+'_'+i).val();
                     var timeout = $("#time_out_"+i3+'_'+i).val();
                     var emoji=  $("#Emo_ji_"+i3+'_'+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, emoji:emoji},
                        url: 'edit_emoji_study.php',
                        success: function(data) {
                              var emoji = data;
                              if(emoji == 'อัพเดตสำเร็จ'){
                                alert("เปลี่ยนอิโมจิสำเร็จ :)");
                                location.reload();
                            }else if (emoji == 'อัพเดตไม่สำเร็จ') {

                            
                                 alert("เปลี่ยนอิโมจิ ไม่สำเร็จ :)"+emoji); 
                            }
                             
                        }
                    });
                    return false;
                });  
            }
                
                
                $('#s_section_miss2_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject2 = $("#sub_ject2_"+i).val();
                     var date2 = $("#da_te2_"+i).val();
                     var timein2 = $("#time_in2_"+i).val();
                     var timeout2 = $("#time_out2_"+i).val();
                     var tool2 = $("#to_ol2_"+i).val();
                     var rooms2 = $("#ro_oms4_"+i).val();
                       
                      // console.log(rooms2);
                    var subject = $("#sub_ject_"+i).val();
                     var date = $("#da_te_"+i).val();
                     var timein = $("#time_in_"+i).val();
                     var timeout = $("#time_out_"+i).val();
                    
                   
                   
                    $.ajax({
                        type: 'POST',
                        data: {subject2:subject2,date2:date2,timein2:timein2,timeout2:timeout2, tool2:tool2,room2:rooms2,subject:subject,date:date,timein:timein,timeout:timeout},
                        url: 'edit_study.php',
                        success: function(data) {
                             //location.reload();
                           
                             
                              var edit = data;
                            if(edit == 'ไม่สำเร็จ เนื่องจากการจองมีการซ้อนทับ' || edit == 'จำนวนโต๊ะไม่พอกับจำนวนนักศึกษา') {

                            
                                   alert("แก้ไขข้อมูล ไม่สำเร็จ :)"+edit); 
                                   $('#div_show_result_status').html(data);
                             
                            }  else{
                                alert("แก้ไขสำเร็จ :)");
                                location.reload();
                            }
                            
                        }
                    });
                    return false;
                });  
                
      }  
        var i2 = $('#I2_i6').val();
          
            for(let i=0; i < i2 ; i++ ){
                // console.log("#section_miss_".concat(i));
                   $("#S2_section_miss_".concat(i)).hide();
            $("#S2_section_miss2_".concat(i)).hide();
            
    $('#B2_buildings3_'+[i]).change(function() {
                     
                    $.ajax({
                        type: 'POST',
                        data: {buildings: $(this).val()},
                        url: 'select_room.php',
                        success: function(data) {
                             
                             $('#R2_rooms4_'+[i]).html(data);
                             $('#R2_rooms4_'+[i]).material_select();
                        }
                    });
                    return false;
                });   
                
       
           
     
            $('#B2_button_miss_'+i).click( function (){
                 //console.log("เข้าแล้ว#button_miss_"+i);
                $("#S2_section_miss_".concat(i)).show();
                    $("#S2_section_miss2_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#S2_section_miss_".concat(i4)).hide();
                      $("#S2_section_miss2_".concat(i4)).hide();
                    }
                }
           
            });
            
             $('#B2_button2_miss_'+i).click( function (){
                // console.log("เข้าแล้ว#button2_miss_"+i);
                $("#S2_section_miss2_".concat(i)).show();
                         $("#S2_section_miss_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#S2_section_miss2_".concat(i4)).hide();
                      $("#S2_section_miss_".concat(i4)).hide();
                    }
                }
           
            });
            
           
            $('#S2_section_miss_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject = $("#S2_subject_"+i).val();
                     var date = $("#D2_date_"+i).val();
                     var timein = $("#T2_timein_"+i).val();
                     var timeout = $("#T2_timeout_"+i).val();
                     var status =  $("#S2_status_"+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, status:status},
                        url: 'edit_status_study.php',
                        success: function(data) {
                            alert("สำเร็จ");
                             location.reload();
                             //$('#div_show_result_status').html(data);
                          
                               
                        }
                    });
                    return false;
                });  
                
               
            for(let i3=1; i3 <= 7 ; i3++ ){
             $('#E2_editEmoji_'+i3+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้วกด emoji");
                     var subject = $("#S2_subject_"+i3+'_'+i).val();
                     var date = $("#D2_date_"+i3+'_'+i).val();
                     var timein = $("#T2_timein_"+i3+'_'+i).val();
                     var timeout = $("#T2_timeout_"+i3+'_'+i).val();
                     var emoji=  $("#E2_Emoji_"+i3+'_'+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, emoji:emoji},
                        url: 'edit_emoji_study.php',
                        success: function(data) {
                              var emoji = data;
                              if(emoji == 'อัพเดตสำเร็จ'){
                                alert("เปลี่ยนอิโมจิสำเร็จ :)");
                                location.reload();
                            }else if (emoji == 'อัพเดตไม่สำเร็จ') {

                            
                                 alert("เปลี่ยนอิโมจิ ไม่สำเร็จ :)"+emoji); 
                            }
                             
                        }
                    });
                    return false;
                });  
            }
                
                
                $('#S2_section_miss2_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject2 = $("#S2_subject2_"+i).val();
                     var date2 = $("#D2_date2_"+i).val();
                     var timein2 = $("#T2_timein2_"+i).val();
                     var timeout2 = $("#T2_timeout2_"+i).val();
                     var tool2 = $("#T2_tool2_"+i).val();
                     var rooms2 = $("#R2_rooms4_"+i).val();
                       
                      // console.log(rooms2);
                    var subject = $("#S2_subject_"+i).val();
                     var date = $("#D2_date_"+i).val();
                     var timein = $("#T2_timein_"+i).val();
                     var timeout = $("#T2_timeout_"+i).val();
                    
                   
                   
                    $.ajax({
                        type: 'POST',
                        data: {subject2:subject2,date2:date2,timein2:timein2,timeout2:timeout2, tool2:tool2,room2:rooms2,subject:subject,date:date,timein:timein,timeout:timeout},
                        url: 'edit_study.php',
                        success: function(data) {
                             //location.reload();
                           
                             
                              var edit = data;
                            if(edit == 'ไม่สำเร็จ เนื่องจากการจองมีการซ้อนทับ' || edit == 'จำนวนโต๊ะไม่พอกับจำนวนนักศึกษา') {

                            
                                   alert("แก้ไขข้อมูล ไม่สำเร็จ :)"+edit); 
                                   $('#D2_div_show_result_status').html(data);
                             
                            }  else{
                                alert("แก้ไขสำเร็จ :)");
                                location.reload();
                            }
                            
                        }
                    });
                    return false;
                });  
                
      }  
                         $('#search_study_ByTeacher').on('submit',function(e) {
                     e.preventDefault();
                     console.log("เข้าแล้วsearch_study_ByTeacher");
                     var id_login = $("#id_login").val();
                     var date = $("#date222").val();
                    
                        console.log(date);
                 
                    $.ajax({
                        type: 'POST',
                        data: {date:date,id_login:id_login},
                        url: 'search_study_ByTeacher.php',
                        success: function(data) {
                   $('.carousel').carousel(); 
              $('.modal').modal();
                           $('select').material_select();
                             $('#D3_div_show_search').html(data);
                   
                                  var i2 = $('#I3_i6').val();
                
            for(let i=0; i < i2 ; i++ ){
                     $('.carousel').carousel(); 
              $('.modal').modal();
                $('select').material_select();
                // console.log("#section_miss_".concat(i));
                   $("#S3_section_miss_".concat(i)).hide();
            $("#S3_section_miss2_".concat(i)).hide();
            
    $('#B3_buildings3_'+i).change(function() {
                     
                    $.ajax({
                        type: 'POST',
                        data: {buildings: $(this).val()},
                        url: 'select_room.php',
                        success: function(data) {
                             
                             $('#R3_rooms4_'+[i]).html(data);
                             $('#R3_rooms4_'+[i]).material_select();
                        }
                    });
                    return false;
                });   
                
       
           
     
            $('#B3_button_miss_'+i).click( function (){
                 
                $("#S3_section_miss_".concat(i)).show();
                    $("#S3_section_miss2_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#S3_section_miss_".concat(i4)).hide();
                      $("#S3_section_miss2_".concat(i4)).hide();
                    }
                }
           
            });
            
             $('#B3_button2_miss_'+i).click( function (){
                // console.log("เข้าแล้ว#button2_miss_"+i);
                $("#S3_section_miss2_".concat(i)).show();
                         $("#S3_section_miss_".concat(i)).hide();
                for(let i4=0; i4 < i2 ; i4++ ){
                    if(i4 !== i  ){
                     $("#S3_section_miss2_".concat(i4)).hide();
                      $("#S3_section_miss_".concat(i4)).hide();
                    }
                }
           
            });
            
           
            $('#S3_section_miss_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject = $("#S3_subject_"+i).val();
                     var date = $("#D3_date_"+i).val();
                     var timein = $("#T3_timein_"+i).val();
                     var timeout = $("#T3_timeout_"+i).val();
                     var status =  $("#S3_status_"+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, status:status},
                        url: 'edit_status_study.php',
                        success: function(data) {
                            alert("สำเร็จ");
                             location.reload();
                             //$('#div_show_result_status').html(data);
                          
                               
                        }
                    });
                    return false;
                });  
                
               
            for(let i3=1; i3 <= 7 ; i3++ ){
             $('#E3_editEmoji_'+i3+'_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้วกด emoji");
                     var subject = $("#S3_subject_"+i3+'_'+i).val();
                     var date = $("#D3_date_"+i3+'_'+i).val();
                     var timein = $("#T3_timein_"+i3+'_'+i).val();
                     var timeout = $("#T3_timeout_"+i3+'_'+i).val();
                     var emoji=  $("#E3_Emoji_"+i3+'_'+i).val();
                    $.ajax({
                        type: 'POST',
                        data: {subject:subject,date:date,timein:timein,timeout:timeout, emoji:emoji},
                        url: 'edit_emoji_study.php',
                        success: function(data) {
                              var emoji = data;
                              if(emoji == 'อัพเดตสำเร็จ'){
                                alert("เปลี่ยนอิโมจิสำเร็จ :)");
                                location.reload();
                            }else if (emoji == 'อัพเดตไม่สำเร็จ') {

                            
                                 alert("เปลี่ยนอิโมจิ ไม่สำเร็จ :)"+emoji); 
                            }
                             
                        }
                    });
                    return false;
                });  
            }
                
                
                $('#S3_section_miss2_'+i).on('submit',function(e) {
                     e.preventDefault();
                    // console.log("เข้าแล้ว");
                     var subject2 = $("#S3_subject2_"+i).val();
                     var date2 = $("#D3_date2_"+i).val();
                     var timein2 = $("#T3_timein2_"+i).val();
                     var timeout2 = $("#T3_timeout2_"+i).val();
                     var tool2 = $("#T3_tool2_"+i).val();
                     var rooms2 = $("#R3_rooms4_"+i).val();
                       
                      // console.log(rooms2);
                    var subject = $("#S3_subject_"+i).val();
                     var date = $("#D3_date_"+i).val();
                     var timein = $("#T3_timein_"+i).val();
                     var timeout = $("#T3_timeout_"+i).val();
                    
                   
                   
                    $.ajax({
                        type: 'POST',
                        data: {subject2:subject2,date2:date2,timein2:timein2,timeout2:timeout2, tool2:tool2,room2:rooms2,subject:subject,date:date,timein:timein,timeout:timeout},
                        url: 'edit_study.php',
                        success: function(data) {
                             //location.reload();
                           
                             
                              var edit = data;
                            if(edit == 'ไม่สำเร็จ เนื่องจากการจองมีการซ้อนทับ' || edit == 'จำนวนโต๊ะไม่พอกับจำนวนนักศึกษา') {

                            
                                   alert("แก้ไขข้อมูล ไม่สำเร็จ :)"+edit); 
                                   $('#D3_div_show_result_status').html(data);
                             
                            }  else{
                                alert("แก้ไขสำเร็จ :)");
                                location.reload();
                            }
                            
                        }
                    });
                    return false;
                });  
                
      }  
                            
                            
                             
                        }
                    });
                    return false;
                });      
                        // Open
                   $('.collapsible').collapsible();
 
         $('.modal').modal(); 
                  //-----จบ    
                   });
                   
                   </script>
                   
    </head>
    <body class="#f5f5f5 grey lighten-4">
   
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
        
          
        <ul class="collapsible popout" data-collapsible="accordion">
             <li>
        <div data-activates="slide-out" class="collapsible-header button-collapse"><i class="material-icons">menu</i>ประวัติส่วนตัว</div>
    
    </li>
      <li>
        <div class="collapsible-header" id="menu1"> <i class="large material-icons">today</i>การเรียนชดเชย</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    <li>
        <div class="collapsible-header" id="menu2"> <i class="large material-icons">alarm_on</i>วันนี้</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    <li>
      <div class="collapsible-header" id="menu3"> <i class="large material-icons">skip_next</i>พรุ่งนี้</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    
    <li>
      <div class="collapsible-header" id="menu4"> <i class="large material-icons">fast_forward</i>ในอนาคต</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    
    <li>
      <div class="collapsible-header" id="menu5"> <i class="large material-icons ">search</i>ค้นหาการสอน</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    
    <li>
      <div class="collapsible-header" id="menu6"> <i class="large material-icons ">chat</i>สนทนาส่วนตัว</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    
    <li>
      <div class="collapsible-header" id="menu7"> <i class="large material-icons">mode_edit</i>เช็คชื่อ</div>
      <div class="collapsible-body"><span></span></div>
    </li>
     
    
     <li>
      <div class="collapsible-header"id="menu9"><i class="large material-icons">store</i>แจ้งลา</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    
  </ul>
         
       
          
          
          
      
      </div>

      <div class="col s9">
          
       <div class="card-panel hoverable div1"> เพิ่มการเรียน
           
         <div class="row">
   
          <div class="card">
         
            <div class="card-content">
              <p>เลือกรายการ</p>
              
              
              <?php
                 $userTeacher =   $tid ;
         $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

   
?>
        
   <?php
        $sql15 = "SELECT teacher_subject.id_teacher_subject,teacher_subject.section , subject.nameSubject FROM `teacher_subject`,teacher,subject WHERE teacher_subject.id_teacher="
                . "teacher.id_teacher AND teacher_subject.id_subject=subject.id_subject "
                . "and teacher.id_teacher = $userTeacher GROUP BY subject.nameSubject";
        $result15 = mysqli_query($con, $sql15);
       
               
        $sql14 = "SELECT * FROM `building`";
  
        $result14 = mysqli_query($con,$sql14);      
        
        $sql16 = "SELECT * FROM `subject`";
  
        $result16 = mysqli_query($con,$sql16);  
        
        ?>
             <form action="insertMake_more.php" method="post" id="make_more">
                   
               
                      <input class="with-gap" name="group1" type="radio" id="test1" value="3">
      <label for="test1">ชดเชยการเรียน</label>
   
    
      <input name="group1" class="with-gap" type="radio" id="test2" value="5" >
      <label for="test2">การสอบ</label>
   
          <select name="subject" id="subjects" >
                <option value="" disabled selected>เลือกวิชาเรียน</option>
              
              <?php

              
                while ($row15 = mysqli_fetch_row($result15)) {
     
                    while ($row16 = mysqli_fetch_row($result16)){
                        if( $row16[1] == $row15[2] ){
                              echo "<option value='$row16[0]'>$row15[2]</option>";
                        }
                        
                    }
                    
                  
                    
                }
              
              
              ?>
       
          </select>
                 
                 
                 <select  name="subject2[]" id="subjects2"  multiple>
      
     
    </select>
 
 
                 <input type="date" name="date" id="date">
                 <input type="time" name="timein" id="timein">
                 <input type="hidden" value="<?php echo $userTeacher?>" name="idteacher" id="idteacher">
                 <input type="time" name="timeout" id="timeout">
                           
                   <select name="buildings2" id="buildings2">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row14 = mysqli_fetch_row($result14)) {
                                //echo $row14[0];
                                ?>
                                <option value="<?php echo $row14[0]; ?>"><?php echo $row14[1]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                   <select  name="room3" id="rooms3"></select>
                   
     <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea  class="materialize-textarea" name="tool" id="tool" value="" required=""></textarea>
          <label for="icon_prefix2">เพิ่มอุปกรณ์การเรียน</label>
        </div>
      </div>
          
         
              
     
          
                   
                   
       <button class="btn waves-effect waves-light" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
      </form>
                
                <div id="div_show_result"></div>
                

  
              
              
      
              
          
              
            </div>
             
           
          </div>
        
      </div>
       
       </div>
       <div class="card-panel hoverable div2"> การสอนสำหรับวันนี้
           
      
                
               
              <?php
              // echo date("d-m-Y");
     
             $date2 = date("Y-m-d");
             //   echo     $date2 = date("d-m-Y",strtotime("tomorrow"));
              //$date2 = "2017-03-13";
               echo $date2;
                 $date2 = "2017-03-13";
                         echo "<br>";
  $sql9 = "SELECT subject.nameSubject , student_subject.timeIn , student_subject.timeOut , "
      . "student_subject.status_study ,student_subject.id_teacher_subject,teacher_subject.section "
          . ",room.name_room,building.Latitude,building.Longitude,building.name_building,student_subject.id_room,building.id_building,student_subject.id_emoji  "
          . " FROM student_subject"
          . ",subject,teacher_subject,teacher,room,building"
                         . " WHERE "
                         . " teacher_subject.id_subject = subject.id_subject AND student_subject.id_teacher_subject = teacher_subject.id_teacher_subject "
                         . " AND teacher.id_teacher = teacher_subject.id_teacher AND student_subject.id_room = room.id_room AND room.id_building = building.id_building AND teacher.id_teacher = $userTeacher "
                         . " AND student_subject.date = '$date2'  GROUP BY student_subject.timeIn,teacher_subject.section,student_subject.status_study ORDER BY timeIn,teacher_subject.section ASC";
        $result9 = mysqli_query($con, $sql9);
        //echo $sql9;
 
        $i5 = 0; $i6 = 0;
       while ($row1 = mysqli_fetch_row($result9)) {  ?>
      
          <div class="row">
      <div class="col s12 m12">
        <div class="card-panel ">
            
            
            
            <br>
         <div class="col s2.4 pull-s0.6 fixed-action-btn horizontal">
           
  

             <?php 
           if($row1[12] == 2){ ?>
               
                          <a class="modal-trigger "> <img src="http://i.imgur.com/iMlPOFg.png" width='60px' ></a>

         <?php  } elseif ($row1[12] == 3) { ?>
                                   <a class="modal-trigger ">   <img src="     http://i.imgur.com/15svXmL.png" width='60px' ></a>

              <?php  } elseif ($row1[12] == 4) { ?>
                             <a class="modal-trigger "> <img src="http://i.imgur.com/cjtjbUI.png" width='60px' ></a>

              <?php  } elseif ($row1[12] == 5) { ?>
                      <a class="modal-trigger ">  <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='60px' ></a>

              <?php  } elseif ($row1[12] == 6) { ?>
                       <a class="modal-trigger ">  <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='60px' ></a>

              <?php  } elseif ($row1[12] == 7) { ?>
                      <a class="modal-trigger ">     <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='60px' ></a>
              <?php  } elseif ($row1[12] == 1) { ?>
                    <a class="modal-trigger ">  <img src="http://i.imgur.com/1EfL0K9.png" width='60px' ></a>
           
                     <?php  } elseif ($row1[12] == 8) { ?>
                    <a class="modal-trigger ">  <img src="https://userscontent2.emaze.com/images/889fd36c-f1b3-4a68-9af7-8f59d1cf4ba4/01ac2372f1903cf48c07d3c6995d4c11.png" width='60px' ></a>
           
              <?php     } ?>
     
<ul>
    <?php
    
    ?>
    <li><a class="btn-floating white" href="#modal1_1_<?php echo $i5;?>"><img src="http://i.imgur.com/1EfL0K9.png" width='44px' ></a></li>
      <li><a class="btn-floating red accent-2" href="#modal1_2_<?php echo $i5;?>"><img src="http://i.imgur.com/iMlPOFg.png" width='49px' ></a></li>
        <li><a class="btn-floating white" href="#modal1_3_<?php echo $i5;?>"><img src="     http://i.imgur.com/15svXmL.png" width='42px' ></a></li>
  <li><a class="btn-floating white" href="#modal1_4_<?php echo $i5;?>"><img src="http://i.imgur.com/cjtjbUI.png" width='41px' ></a></li>
  
  <li><a class="btn-floating white" href="#modal1_5_<?php echo $i5;?>"><img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='36px' ></a></li>
    <li><a class="btn-floating white" href="#modal1_6_<?php echo $i5;?>"><img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='40px' ></a></li>
    
        <li><a class="btn-floating white" href="#modal1_7_<?php echo $i5;?>"><img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='41px' ></a></li>
<?php

?>
    </ul>
           
   
         </div>
            
          <?php
for ($i7 = 1; $i7 <= 7; $i7++) {
  

    ?>  
           
   <div id="modal1_<?php echo $i7;?>_<?php echo $i5;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="editEmoji_<?php echo $i7;?>_<?php echo $i5;?>">
    <div class="modal-content">
       <center>
        
           <?php 
           if($i7 == 2){ ?>
               
                <img src="http://i.imgur.com/iMlPOFg.png" width='100px' >

         <?php  } elseif ($i7 == 3) { ?>
                           <img src="     http://i.imgur.com/15svXmL.png" width='100px' >

              <?php  } elseif ($i7 == 4) { ?>
                   <img src="http://i.imgur.com/cjtjbUI.png" width='100px' >

              <?php  } elseif ($i7 == 5) { ?>
             <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='100px' >

              <?php  } elseif ($i7 == 6) { ?>
              <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='100px' >

              <?php  } elseif ($i7 == 7) { ?>
                <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='100px' >

              <?php  } elseif ($i7 == 1) { ?>
           <img src="http://i.imgur.com/1EfL0K9.png" width='100px' >
           
              <?php     } ?>
     
                       
           
           
           
     
  
    

           
      <h5>แก้ไขอิโมจิ</h5> 
      <h6> <input type="hidden" value="<?php echo $i7;?>" id="Emoji_<?php echo $i7;?>_<?php echo $i5;?>"></h6>
      </center>
      
    </div>
           
        <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="timein_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="timeout_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row1[4]?>" name="subject"   id="subject_<?php echo $i7;?>_<?php echo$i5?>">
                                    <input type="hidden" value="<?php echo $date2?>" name="date"      id="date_<?php echo $i7;?>_<?php echo$i5?>">
    
        
        <div class="modal-footer">
       <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
    </div>
        </form>
  </div> 
            
         <?php
}
?>   
            
            
            
            
            
            <?php            
            //ทำลองจูด ละติจูดไว้แล้ว 7ละ 8ลอง 9อาคาร 10id_room
            echo $row1[0]."Section:".$row1[5]."<br>".$row1[1]." - ".$row1[2]."<br>"."ห้องเรียน : ".$row1[6];
                   
              ?>
  <div class="chip">
     <a  href="#modal3__<?php echo $i5;?>"><i class="material-icons">room</i></a>
    
  คลิ๊กเพื่อดูแผนที่   
  </div>
    
              <div id="modal3__<?php echo $i5;?>" class="modal">
                  
    <div class="modal-content">
      <h5>แผนที่ห้องเรียน</h5>
     <?php

     if($row1[11] == 2){
     ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1334.5926564183844!2d99.01277635374562!3d18.896037368616337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234acab26d49%3A0x673310a15bca3d4a!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491123069731" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
        }elseif ($row1[11] == 1) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.395381227805!2d99.01195088347211!3d18.89636139839892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3cb54b7f9f2b%3A0xbed41f24ed04a2ca!2z4Lit4Liy4LiE4Liy4Lij4LmA4Liq4Liy4Lin4Lij4Lix4LiIIOC4meC4tOC4leC4ouC4p-C4o-C4o-C4mOC4meC4sCDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491124913274" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 3) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.790289117024!2d99.01197131451185!3d18.89638238719125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234abdc71e2d%3A0x507c5a8a7d405678!2z4LiV4Li24LiB4LiI4Li44Lis4Liy4Lig4Lij4LiT4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491124970769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 4) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cda2ad0a5d49f74!2z4Lio4Li54LiZ4Lii4LmM4Lin4Li04LiI4Lix4Lii4LmA4Lio4Lij4Lip4LiQ4LiB4Li04LiI4LmB4Lil4Liw4Lie4Lii4Liy4LiB4Lij4LiT4LmM4LiX4Liy4LiH4LiB4Liy4Lij4LmA4LiB4Lip4LiV4LijIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125104580" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 5) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b879b7be77e05b3!2z4LiE4LiT4Liw4Lia4Lij4Li04Lir4Liy4Lij4LiY4Li44Lij4LiB4Li04LiI!5e0!3m2!1sth!2sth!4v1491125066697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 6) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7732001434674!2d99.01548140300079!3d18.897140131872778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234a070dd16d%3A0x9562e819f4733ac0!2z4LiE4LiT4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LiB4Liy4Lij4Lib4Lij4Liw4Lih4LiH4LmB4Lil4Liw4LiX4Lij4Lix4Lie4Lii4Liy4LiB4Lij4LiX4Liy4LiH4LiZ4LmJ4LizIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125156509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php  
          }elseif ($row1[11] == 7) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d561.1308221642522!2d99.01079719066632!3d18.89492411723536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c1cba8a79b38e2b!2z4Lit4Liy4LiE4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Lin4Lih4LmB4Lih4LmI4LmC4LiI4LmJIDcwIOC4m-C4tSDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491199437179" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }
      ?>
    </div>
   
  </div>
            <?php
            //----------------------------
            echo "<br> อุปกรณ์การเรียน : ";
            
        $sql17 = "SELECT tool_student_subject.nametool "
                . "FROM `tool_student_subject`,student_subject "
                . "WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject "
                . "AND student_subject.id_teacher_subject = $row1[4] AND student_subject.date = '$date2' "
                . "AND student_subject.timeIn='$row1[1]' "
                . "AND student_subject.timeOut='$row1[2]' AND tool_student_subject.status=1 GROUP BY student_subject.id_teacher_subject";
        
        $result17= mysqli_query($con, $sql17);
     //echo $sql17;
        
        while ($row17 = mysqli_fetch_row( $result17 )) {
            if((empty($row17[0]))){
                echo "ไม่มีอุปกรณ์การเรียน";
            }else{
            echo $row17[0];
            }
        
             $sql18[$i5] = "SELECT * FROM `building`";
  
        $result18[$i5] = mysqli_query($con,$sql18[$i5]);     
        //--------------------------------
        
            //------------------------------
                 echo "<br>สถานะการเรียน:"   ;
                 
               
                     

                    if( $row1[3] == 1){ ?>
         
              เรียนปกติ      <br><button type="button" id="button_miss_<?php echo$i5?>" class="waves-effect waves-light btn  ">เปลี่ยนสถานะ</button> 
              <button type="button" id="button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">แก้ไข</button> 
                                   <form action="edit_status_study.php" method="post" id="section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $date2?>" name="date" id="date_<?php echo$i5?>">
                                            
                                                 <select  name="status" id="status_<?php echo$i5?>">
                                                          <option value="" disabled selected >เลือกรายการ</option>
                  <option value="0">งดการเรียน</option>
                  </select>
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
              
         <form action="edit_study.php" method="post" id="section_miss2_<?php echo$i5?>">   
            <input type="hidden" value="<?php echo$row1[1]?>" name="timein2" id="timein2_<?php echo$i5?>">
            <input type="hidden" value="<?php echo$row1[2]?>" name="timeout2"  id="timeout2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="subject2_<?php echo$i5?>">
                                                       <input type="hidden" value="<?php echo $date2?>" name="date2" id="date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="buildings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row18[$i5] = mysqli_fetch_row($result18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row18[$i5][0]; ?>"><?php echo $row18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
             <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
              
                <br>
                       <?php
                    }elseif ($row1[3] == 0) { ?>
              
                         งดเรียน   <br><button type="button" id="button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">เปลี่ยนสถานะ</button> 
                   
                         
                          
                         
                           <form action="edit_status_study.php" method="post"  id="section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $date2?>" name="date" id="date_<?php echo$i5?>">
                                            
                                                 <select  name="status"   id="status_<?php echo$i5?>">
                                                          <option value="" disabled selected>เลือกรายการ</option>
                                                     <option value="1" >เรียนปกติ</option>
           
                  </select>
            <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                             <hr>
                 
                         <br>
                 <?php }elseif ($row1[3] == 3){ ?>
                      
                        ชดเชยการเรียน   <br> <button type="button" id="button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">ลบข้อมูล</button> 
                         <button type="button" id="button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button>  
                        
                         <form action="edit_status_study.php" method="post" id="section_miss_<?php echo$i5?>">   
                             <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="timein_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row1[2]?>" name="timeout" id="timeout_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="subject_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo $date2?>" name="date" id="date_<?php echo$i5?>">
                             
                             <input type="hidden" value="3" name="status" id="status_<?php echo$i5?>">
                               <br>   
              
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยันการลบ
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                              <form action="edit_study.php" method="post" id="section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row1[1]?>" name="timein2" id="timein2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row1[2]?>" name="timeout2"  id="timeout2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="subject2_<?php echo$i5?>">
                           วัน                      <input type="date" value="<?php echo $date2?>" name="date2" id="date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="buildings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row18[$i5] = mysqli_fetch_row($result18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row18[$i5][0]; ?>"><?php echo $row18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
                        
                         <br>
                       <?php
                  }elseif ($row1[3] == 5){ ?>
                  
                       สอบ  <br><button type="button" id="button_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">ลบข้อมูล</button> 
                           
                       <button type="button" id="button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button> 
                         <form action="edit_status_study.php" method="post" id="section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout" id="timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $date2?>" name="date" id="date_<?php echo$i5?>">
                                            
                                                 <input type="hidden"  value="5" id="status_<?php echo$i5?>">
                                                 <br>                   
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                          <form action="edit_study.php" method="post" id="section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row1[1]?>" name="timein2" id="timein2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row1[2]?>" name="timeout2"  id="timeout2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="subject2_<?php echo$i5?>">
                           วัน                      <input type="date" value="<?php echo $date2?>" name="date2" id="date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="buildings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row18[$i5] = mysqli_fetch_row($result18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row18[$i5][0]; ?>"><?php echo $row18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
              <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
                           <hr>
                      
                        <br>
                        <?php
                  }
                 
              
        }
        
        
         
         
         ?>
           </div>
      </div>
    </div>
         <?php
          $i5++;   
                         }
                 $i6 = $i5;  
   
              ?>
                   
                        <div id="div_show_result_status"></div>
                        <input type="hidden" id="i6"value="<?php echo  $i6 ?>">
          
              
            </div>
              
         
       
       
       
  
        <div class="card-panel hoverable div3">พรุ่งนี้
            <?php
           $datedate = date("Y-m-d", strtotime("+1 day", strtotime($date2)));  
           echo $datedate;
           ?>
                
               
              <?php
              // echo date("d-m-Y");
                  echo "<br>";
             // $date2 = date("Y-m-d");
             //   echo     $date2 = date("d-m-Y",strtotime("tomorrow"));
            //  $date2 = "2017-03-13";
                
              
  $sql_9 = "SELECT subject.nameSubject , student_subject.timeIn , student_subject.timeOut , "
      . "student_subject.status_study ,student_subject.id_teacher_subject,teacher_subject.section "
          . ",room.name_room,building.Latitude,building.Longitude,building.name_building,student_subject.id_room,building.id_building,student_subject.id_emoji  "
          . " FROM student_subject"
          . ",subject,teacher_subject,teacher,room,building"
                         . " WHERE "
                         . " teacher_subject.id_subject = subject.id_subject AND student_subject.id_teacher_subject = teacher_subject.id_teacher_subject "
                         . " AND teacher.id_teacher = teacher_subject.id_teacher AND student_subject.id_room = room.id_room AND room.id_building = building.id_building AND teacher.id_teacher = $userTeacher "
                         . " AND student_subject.date = '$datedate'  GROUP BY student_subject.timeIn,teacher_subject.section,student_subject.status_study ORDER BY timeIn,teacher_subject.section ASC";
        $result_9 = mysqli_query($con, $sql_9);
        //echo $sql9;
 
        $i5 = 0; $i6 = 0;
       while ($row_1 = mysqli_fetch_row($result_9)) {  ?>
      
          <div class="row">
      <div class="col s12 m12">
        <div class="card-panel ">
            
            
            
            <br>
         <div class="col s2.4 pull-s0.6 fixed-action-btn horizontal">
           
  

             <?php 
           if($row_1[12] == 2){ ?>
               
                          <a class="modal-trigger "> <img src="http://i.imgur.com/iMlPOFg.png" width='60px' ></a>

         <?php  } elseif ($row_1[12] == 3) { ?>
                                   <a class="modal-trigger ">   <img src="     http://i.imgur.com/15svXmL.png" width='60px' ></a>

              <?php  } elseif ($row_1[12] == 4) { ?>
                             <a class="modal-trigger "> <img src="http://i.imgur.com/cjtjbUI.png" width='60px' ></a>

              <?php  } elseif ($row_1[12] == 5) { ?>
                      <a class="modal-trigger ">  <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='60px' ></a>

              <?php  } elseif ($row_1[12] == 6) { ?>
                       <a class="modal-trigger ">  <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='60px' ></a>

              <?php  } elseif ($row_1[12] == 7) { ?>
                      <a class="modal-trigger ">     <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='60px' ></a>
              <?php  } elseif ($row_1[12] == 1) { ?>
                    <a class="modal-trigger ">  <img src="http://i.imgur.com/1EfL0K9.png" width='60px' ></a>
           
                     <?php  } elseif ($row_1[12] == 8) { ?>
                    <a class="modal-trigger ">  <img src="http://developer.affectiva.com/images/emoji/smiley.png" width='60px' ></a>
           
              <?php     } ?>
     
<ul>
    <?php
    
    ?>
    <li><a class="btn-floating white" href="#modal_1_1_<?php echo $i5;?>"><img src="http://i.imgur.com/1EfL0K9.png" width='44px' ></a></li>
      <li><a class="btn-floating red accent-2" href="#modal_1_2_<?php echo $i5;?>"><img src="http://i.imgur.com/iMlPOFg.png" width='49px' ></a></li>
        <li><a class="btn-floating white" href="#modal_1_3_<?php echo $i5;?>"><img src="     http://i.imgur.com/15svXmL.png" width='42px' ></a></li>
  <li><a class="btn-floating white" href="#modal_1_4_<?php echo $i5;?>"><img src="http://i.imgur.com/cjtjbUI.png" width='41px' ></a></li>
  
  <li><a class="btn-floating white" href="#modal_1_5_<?php echo $i5;?>"><img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='36px' ></a></li>
    <li><a class="btn-floating white" href="#modal_1_6_<?php echo $i5;?>"><img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='40px' ></a></li>
    
        <li><a class="btn-floating white" href="#modal_1_7_<?php echo $i5;?>"><img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='41px' ></a></li>
<?php

?>
    </ul>
           
   
         </div>
            
          <?php
for ($i7 = 1; $i7 <= 7; $i7++) {
  

    ?>  
           
   <div id="modal_1_<?php echo $i7;?>_<?php echo $i5;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="edit_Emoji_<?php echo $i7;?>_<?php echo $i5;?>">
    <div class="modal-content">
       <center>
        
           <?php 
           if($i7 == 2){ ?>
               
                <img src="http://i.imgur.com/iMlPOFg.png" width='100px' >

         <?php  } elseif ($i7 == 3) { ?>
                           <img src="     http://i.imgur.com/15svXmL.png" width='100px' >

              <?php  } elseif ($i7 == 4) { ?>
                   <img src="http://i.imgur.com/cjtjbUI.png" width='100px' >

              <?php  } elseif ($i7 == 5) { ?>
             <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='100px' >

              <?php  } elseif ($i7 == 6) { ?>
              <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='100px' >

              <?php  } elseif ($i7 == 7) { ?>
                <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='100px' >

              <?php  } elseif ($i7 == 1) { ?>
           <img src="http://i.imgur.com/1EfL0K9.png" width='100px' >
           
              <?php     } ?>
     
                       
           
           
           
     
  
    

           
      <h5>แก้ไขอิโมจิ</h5> 
      <h6> <input type="hidden" value="<?php echo $i7;?>" id="Emo_ji_<?php echo $i7;?>_<?php echo $i5;?>"></h6>
      </center>
      
    </div>
           
        <input type="hidden" value="<?php echo$row_1[1]?>" name="timein" id="time_in_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row_1[2]?>" name="timeout"  id="time_out_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row_1[4]?>" name="subject"   id="sub_ject_<?php echo $i7;?>_<?php echo$i5?>">
                                    <input type="hidden" value="<?php echo $datedate?>" name="date"      id="da_te_<?php echo $i7;?>_<?php echo$i5?>">
    
        
        <div class="modal-footer">
       <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
    </div>
        </form>
  </div> 
            
         <?php
}
?>   
            
            
            
            
            
            <?php            
            //ทำลองจูด ละติจูดไว้แล้ว 7ละ 8ลอง 9อาคาร 10id_room
            echo $row_1[0]."Section:".$row_1[5]."<br>".$row_1[1]." - ".$row_1[2]."<br>"."ห้องเรียน : ".$row_1[6];
                   
              ?>
  <div class="chip">
     <a  href="#modal6__<?php echo $i5;?>"><i class="material-icons">room</i></a>
    
  คลิ๊กเพื่อดูแผนที่   
  </div>
    
              <div id="modal6__<?php echo $i5;?>" class="modal">
                  
    <div class="modal-content">
      <h5>แผนที่ห้องเรียน</h5>
     <?php

     if($row_1[11] == 2){
     ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1334.5926564183844!2d99.01277635374562!3d18.896037368616337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234acab26d49%3A0x673310a15bca3d4a!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491123069731" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
        }elseif ($row_1[11] == 1) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.395381227805!2d99.01195088347211!3d18.89636139839892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3cb54b7f9f2b%3A0xbed41f24ed04a2ca!2z4Lit4Liy4LiE4Liy4Lij4LmA4Liq4Liy4Lin4Lij4Lix4LiIIOC4meC4tOC4leC4ouC4p-C4o-C4o-C4mOC4meC4sCDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491124913274" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_1[11] == 3) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.790289117024!2d99.01197131451185!3d18.89638238719125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234abdc71e2d%3A0x507c5a8a7d405678!2z4LiV4Li24LiB4LiI4Li44Lis4Liy4Lig4Lij4LiT4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491124970769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_1[11] == 4) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cda2ad0a5d49f74!2z4Lio4Li54LiZ4Lii4LmM4Lin4Li04LiI4Lix4Lii4LmA4Lio4Lij4Lip4LiQ4LiB4Li04LiI4LmB4Lil4Liw4Lie4Lii4Liy4LiB4Lij4LiT4LmM4LiX4Liy4LiH4LiB4Liy4Lij4LmA4LiB4Lip4LiV4LijIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125104580" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_1[11] == 5) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b879b7be77e05b3!2z4LiE4LiT4Liw4Lia4Lij4Li04Lir4Liy4Lij4LiY4Li44Lij4LiB4Li04LiI!5e0!3m2!1sth!2sth!4v1491125066697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row_1[11] == 6) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7732001434674!2d99.01548140300079!3d18.897140131872778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234a070dd16d%3A0x9562e819f4733ac0!2z4LiE4LiT4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LiB4Liy4Lij4Lib4Lij4Liw4Lih4LiH4LmB4Lil4Liw4LiX4Lij4Lix4Lie4Lii4Liy4LiB4Lij4LiX4Liy4LiH4LiZ4LmJ4LizIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125156509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php  
          }elseif ($row_1[11] == 7) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d561.1308221642522!2d99.01079719066632!3d18.89492411723536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c1cba8a79b38e2b!2z4Lit4Liy4LiE4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Lin4Lih4LmB4Lih4LmI4LmC4LiI4LmJIDcwIOC4m-C4tSDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491199437179" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }
      ?>
    </div>
   
  </div>
            <?php
            //----------------------------
            echo "<br> อุปกรณ์การเรียน : ";
            
        $sql_17 = "SELECT tool_student_subject.nametool "
                . "FROM `tool_student_subject`,student_subject "
                . "WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject "
                . "AND student_subject.id_teacher_subject = $row_1[4] AND student_subject.date = '$datedate' "
                . "AND student_subject.timeIn='$row_1[1]' "
                . "AND student_subject.timeOut='$row_1[2]' AND tool_student_subject.status=1 GROUP BY student_subject.id_teacher_subject";
        
        $result_17= mysqli_query($con, $sql_17);
     //echo $sql17;
        
        while ($row_17 = mysqli_fetch_row( $result_17 )) {
            if((empty($row_17[0]))){
                echo "ไม่มีอุปกรณ์การเรียน";
            }else{
            echo $row_17[0];
            }
        
             $sql_18[$i5] = "SELECT * FROM `building`";
  
        $result_18[$i5] = mysqli_query($con,$sql_18[$i5]);     
        //--------------------------------
        
            //------------------------------
                 echo "<br>สถานะการเรียน:"   ;
                 
               
                     

                    if( $row_1[3] == 1){ ?>
         
              เรียนปกติ      <br><button type="button" id="b_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn  ">เปลี่ยนสถานะ</button> 
              <button type="button" id="b_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">แก้ไข</button> 
                                   <form action="edit_status_study.php" method="post" id="s_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row_1[1]?>" name="timein" id="time_in_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row_1[2]?>" name="timeout"  id="time_out_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row_1[4]?>" name="subject" id="sub_ject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $datedate?>" name="date" id="da_te_<?php echo$i5?>">
                                            
                                                 <select  name="status" id="sta_tus_<?php echo$i5?>">
                                                          <option value="" disabled selected >เลือกรายการ</option>
                  <option value="0">งดการเรียน</option>
                  </select>
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
              
         <form action="edit_study.php" method="post" id="s_section_miss2_<?php echo$i5?>">   
            <input type="hidden" value="<?php echo$row_1[1]?>" name="time_in2" id="time_in2_<?php echo$i5?>">
            <input type="hidden" value="<?php echo$row_1[2]?>" name="time_out2"  id="time_out2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row_1[4]?>" name="subject2" id="sub_ject2_<?php echo$i5?>">
                                                       <input type="hidden" value="<?php echo $datedate?>" name="date2" id="da_te2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row_17[0]?>" name="tool2" id="to_ol2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="buil_dings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row_18[$i5] = mysqli_fetch_row($result_18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row_18[$i5][0]; ?>"><?php echo $row_18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="ro_oms4_<?php echo$i5?>"></select>
             
             
             
             
             
             <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
              
                <br>
                       <?php
                    }elseif ($row_1[3] == 0) { ?>
              
                         งดเรียน   <br><button type="button" id="b_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">เปลี่ยนสถานะ</button> 
                   
                         
                          
                         
                           <form action="edit_status_study.php" method="post"  id="s_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row_1[1]?>" name="timein" id="time_in_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row_1[2]?>" name="timeout"  id="time_out_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row_1[4]?>" name="subject" id="sub_ject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $datedate?>" name="date" id="da_te_<?php echo$i5?>">
                                            
                                                 <select  name="status"   id="sta_tus_<?php echo$i5?>">
                                                          <option value="" disabled selected>เลือกรายการ</option>
                                                     <option value="1" >เรียนปกติ</option>
           
                  </select>
            <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                             <hr>
                 
                         <br>
                 <?php }elseif ($row_1[3] == 3){ ?>
                      
                        ชดเชยการเรียน   <br> <button type="button" id="b_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">ลบข้อมูล</button> 
                         <button type="button" id="b_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button>  
                        
                         <form action="edit_status_study.php" method="post" id="s_section_miss_<?php echo$i5?>">   
                             <input type="hidden" value="<?php echo$row_1[1]?>" name="timein" id="time_in_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row_1[2]?>" name="timeout" id="time_out_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row_1[4]?>" name="subject" id="sub_ject_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo $datedate?>" name="date" id="da_te_<?php echo$i5?>">
                             
                             <input type="hidden" value="3" name="status" id="sta_tus_<?php echo$i5?>">
                               <br>   
              
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยันการลบ
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                              <form action="edit_study.php" method="post" id="s_section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row_1[1]?>" name="timein2" id="time_in2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row_1[2]?>" name="timeout2"  id="time_out2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row_1[4]?>" name="sub_ject2" id="sub_ject2_<?php echo$i5?>">
                           วัน                      <input type="date" value="<?php echo $datedate?>" name="da_te2" id="da_te2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row_17[0]?>" name="tool2" id="to_ol2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="buil_dings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row_18[$i5] = mysqli_fetch_row($result_18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row_18[$i5][0]; ?>"><?php echo $row_18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="ro_oms4_<?php echo$i5?>"></select>
             
             
             
             
             
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
                        
                         <br>
                       <?php
                  }elseif ($row_1[3] == 5){ ?>
                  
                       สอบ  <br><button type="button" id="b_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">ลบข้อมูล</button> 
                           
                       <button type="button" id="b_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button> 
                         <form action="edit_status_study.php" method="post" id="s_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row_1[1]?>" name="timein" id="time_in_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row_1[2]?>" name="timeout" id="time_out_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row_1[4]?>" name="subject" id="sub_ject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $datedate?>" name="date" id="da_te_<?php echo$i5?>">
                                            
                                                 <input type="hidden"  value="5" id="sta_tus_<?php echo$i5?>">
                                                 <br>                   
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                          <form action="edit_study.php" method="post" id="s_section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row_1[1]?>" name="timein2" id="time_in2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row_1[2]?>" name="timeout2"  id="time_out2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row_1[4]?>" name="subject2" id="sub_ject2_<?php echo$i5?>">
                           วัน                      <input type="date" value="<?php echo $datedate?>" name="date2" id="da_te2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row_17[0]?>" name="tool2" id="to_ol2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="buil_dings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row_18[$i5] = mysqli_fetch_row($result_18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row_18[$i5][0]; ?>"><?php echo $row_18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="ro_oms4_<?php echo$i5?>"></select>
             
             
             
             
             
              <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
                           <hr>
                      
                        <br>
                        <?php
                  }
                 
              
        }
        
        
         
         
         ?>
           </div>
      </div>
    </div>
         <?php
          $i5++;   
                         }
                 $i6 = $i5;  
   
              ?>
                   
                        <div id="d_div_show_result_status"></div>
                        <input type="hidden" id="i_i6"value="<?php echo  $i6 ?>">
          
            
            
             
      </div>
       
       
       
       
       

        <div class="card-panel hoverable div4"> ในอนาคต
           
       
        
              <?php
             //  echo date("d-m-Y");
               //   echo "<br>";
             // $date2 = date("Y-m-d");
             //   echo     $date2 = date("d-m-Y",strtotime("tomorrow"));
             // $date2 = "2017-03-13";
                
              
  $sql9 = " SELECT subject.nameSubject , student_subject.timeIn , student_subject.timeOut , "
      . " student_subject.status_study ,student_subject.id_teacher_subject,teacher_subject.section "
          . " ,room.name_room,building.Latitude,building.Longitude,building.name_building,student_subject.id_room"
          . " ,building.id_building,student_subject.id_emoji ,student_subject.date "
          . " FROM student_subject"
          . " ,subject,teacher_subject,teacher,room,building"
                         . " WHERE "
                         . " teacher_subject.id_subject = subject.id_subject AND student_subject.id_teacher_subject = teacher_subject.id_teacher_subject "
                         . " AND teacher.id_teacher = teacher_subject.id_teacher AND student_subject.id_room = room.id_room AND room.id_building = building.id_building AND teacher.id_teacher = $userTeacher "
                         . " AND student_subject.date > '$datedate' AND ( student_subject.status_study = 0 || student_subject.status_study = 3 || student_subject.status_study = 5) GROUP BY student_subject.timeIn,teacher_subject.section,student_subject.status_study ORDER BY timeIn,teacher_subject.section ASC";
        $result9 = mysqli_query($con, $sql9);
        //echo $sql9;
 
        $i5 = 0; $i6 = 0;
       while ($row1 = mysqli_fetch_row($result9)) {  ?>
      
          <div class="row">
      <div class="col s12 m12">
        <div class="card-panel ">
            
            
            
            <br>
         <div class="col s2.4 pull-s0.6 fixed-action-btn horizontal">
           
  

             <?php 
           if($row1[12] == 2){ ?>
               
                          <a class="modal-trigger "> <img src="http://i.imgur.com/iMlPOFg.png" width='60px' ></a>

         <?php  } elseif ($row1[12] == 3) { ?>
                                   <a class="modal-trigger ">   <img src="     http://i.imgur.com/15svXmL.png" width='60px' ></a>

              <?php  } elseif ($row1[12] == 4) { ?>
                             <a class="modal-trigger "> <img src="http://i.imgur.com/cjtjbUI.png" width='60px' ></a>

              <?php  } elseif ($row1[12] == 5) { ?>
                      <a class="modal-trigger ">  <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='60px' ></a>

              <?php  } elseif ($row1[12] == 6) { ?>
                       <a class="modal-trigger ">  <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='60px' ></a>

              <?php  } elseif ($row1[12] == 7) { ?>
                      <a class="modal-trigger ">     <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='60px' ></a>
              <?php  } elseif ($row1[12] == 1) { ?>
                    <a class="modal-trigger ">  <img src="http://i.imgur.com/1EfL0K9.png" width='60px' ></a>
           
                     <?php  } elseif ($row1[12] == 8) { ?>
                    <a class="modal-trigger ">  <img src="http://developer.affectiva.com/images/emoji/smiley.png" width='60px' ></a>
           
              <?php     } ?>
     
<ul>
    <?php
    
    ?>
    <li><a class="btn-floating white" href="#m2_modal1_1_<?php echo $i5;?>"><img src="http://i.imgur.com/1EfL0K9.png" width='44px' ></a></li>
      <li><a class="btn-floating red accent-2" href="#m2_modal1_2_<?php echo $i5;?>"><img src="http://i.imgur.com/iMlPOFg.png" width='49px' ></a></li>
        <li><a class="btn-floating white" href="#m2_modal1_3_<?php echo $i5;?>"><img src="     http://i.imgur.com/15svXmL.png" width='42px' ></a></li>
  <li><a class="btn-floating white" href="#m2_modal1_4_<?php echo $i5;?>"><img src="http://i.imgur.com/cjtjbUI.png" width='41px' ></a></li>
  
  <li><a class="btn-floating white" href="#m2_modal1_5_<?php echo $i5;?>"><img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='36px' ></a></li>
    <li><a class="btn-floating white" href="#m2_modal1_6_<?php echo $i5;?>"><img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='40px' ></a></li>
    
        <li><a class="btn-floating white" href="#m2_modal1_7_<?php echo $i5;?>"><img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='41px' ></a></li>
<?php

?>
    </ul>
           
   
         </div>
            
          <?php
for ($i7 = 1; $i7 <= 7; $i7++) {
  

    ?>  
           
   <div id="m2_modal1_<?php echo $i7;?>_<?php echo $i5;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="E2_editEmoji_<?php echo $i7;?>_<?php echo $i5;?>">
    <div class="modal-content">
       <center>
        
           <?php 
           if($i7 == 2){ ?>
               
                <img src="http://i.imgur.com/iMlPOFg.png" width='100px' >

         <?php  } elseif ($i7 == 3) { ?>
                           <img src="     http://i.imgur.com/15svXmL.png" width='100px' >

              <?php  } elseif ($i7 == 4) { ?>
                   <img src="http://i.imgur.com/cjtjbUI.png" width='100px' >

              <?php  } elseif ($i7 == 5) { ?>
             <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='100px' >

              <?php  } elseif ($i7 == 6) { ?>
              <img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='100px' >

              <?php  } elseif ($i7 == 7) { ?>
                <img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='100px' >

              <?php  } elseif ($i7 == 1) { ?>
           <img src="http://i.imgur.com/1EfL0K9.png" width='100px' >
           
              <?php     } ?>
     
                       
           
           
           
     
  
    

           
      <h5>แก้ไขอิโมจิ</h5> 
      <h6> <input type="hidden" value="<?php echo $i7;?>" id="E2_Emoji_<?php echo $i7;?>_<?php echo $i5;?>"></h6>
      </center>
      
    </div>
           
        <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T2_timein_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="T2_timeout_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row1[4]?>" name="subject"   id="S2_subject_<?php echo $i7;?>_<?php echo$i5?>">
                                    <input type="hidden" value="<?php echo$row1[13]?>" name="date"      id="D2_date_<?php echo $i7;?>_<?php echo$i5?>">
    
        
        <div class="modal-footer">
       <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
    </div>
        </form>
  </div> 
            
         <?php
}
?>   
            
            
            
            
            
            <?php            
            //ทำลองจูด ละติจูดไว้แล้ว 7ละ 8ลอง 9อาคาร 10id_room
            echo $row1[13]."<br>".$row1[0]."Section:".$row1[5]."<br>".$row1[1]." - ".$row1[2]."<br>"."ห้องเรียน : ".$row1[6];
                   
              ?>
  <div class="chip">
     <a  href="#modal45__<?php echo $i5;?>"><i class="material-icons">room</i></a>
    
  คลิ๊กเพื่อดูแผนที่   
  </div>
    
              <div id="modal45__<?php echo $i5;?>" class="modal">
                  
    <div class="modal-content">
      <h5>แผนที่ห้องเรียน</h5>
     <?php

     if($row1[11] == 2){
     ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1334.5926564183844!2d99.01277635374562!3d18.896037368616337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234acab26d49%3A0x673310a15bca3d4a!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491123069731" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
        }elseif ($row1[11] == 1) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.395381227805!2d99.01195088347211!3d18.89636139839892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3cb54b7f9f2b%3A0xbed41f24ed04a2ca!2z4Lit4Liy4LiE4Liy4Lij4LmA4Liq4Liy4Lin4Lij4Lix4LiIIOC4meC4tOC4leC4ouC4p-C4o-C4o-C4mOC4meC4sCDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491124913274" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 3) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.790289117024!2d99.01197131451185!3d18.89638238719125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234abdc71e2d%3A0x507c5a8a7d405678!2z4LiV4Li24LiB4LiI4Li44Lis4Liy4Lig4Lij4LiT4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491124970769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 4) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cda2ad0a5d49f74!2z4Lio4Li54LiZ4Lii4LmM4Lin4Li04LiI4Lix4Lii4LmA4Lio4Lij4Lip4LiQ4LiB4Li04LiI4LmB4Lil4Liw4Lie4Lii4Liy4LiB4Lij4LiT4LmM4LiX4Liy4LiH4LiB4Liy4Lij4LmA4LiB4Lip4LiV4LijIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125104580" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 5) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.7037155799832!2d99.01307814646708!3d18.895292731880307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b879b7be77e05b3!2z4LiE4LiT4Liw4Lia4Lij4Li04Lir4Liy4Lij4LiY4Li44Lij4LiB4Li04LiI!5e0!3m2!1sth!2sth!4v1491125066697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }elseif ($row1[11] == 6) {
              ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7732001434674!2d99.01548140300079!3d18.897140131872778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234a070dd16d%3A0x9562e819f4733ac0!2z4LiE4LiT4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LiB4Liy4Lij4Lib4Lij4Liw4Lih4LiH4LmB4Lil4Liw4LiX4Lij4Lix4Lie4Lii4Liy4LiB4Lij4LiX4Liy4LiH4LiZ4LmJ4LizIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1491125156509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php  
          }elseif ($row1[11] == 7) {
                ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d561.1308221642522!2d99.01079719066632!3d18.89492411723536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c1cba8a79b38e2b!2z4Lit4Liy4LiE4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Lin4Lih4LmB4Lih4LmI4LmC4LiI4LmJIDcwIOC4m-C4tSDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguYHguKHguYjguYLguIjguYk!5e0!3m2!1sth!2sth!4v1491199437179" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php
          }
      ?>
    </div>
   
  </div>
            <?php
            //----------------------------
            echo "<br> อุปกรณ์การเรียน : ";
            
        $sql17 = " SELECT tool_student_subject.nametool "
                . " FROM `tool_student_subject`,student_subject "
                . " WHERE tool_student_subject.id_student_subject = student_subject.id_student_subject "
                . " AND student_subject.id_teacher_subject = $row1[4] AND student_subject.date = '$row1[13]' "
                . " AND student_subject.timeIn='$row1[1]' "
                . " AND student_subject.timeOut='$row1[2]' AND tool_student_subject.status=1 GROUP BY student_subject.id_teacher_subject";
        
        $result17= mysqli_query($con, $sql17);
     //echo $sql17;
        
        while ($row17 = mysqli_fetch_row( $result17 )) {
            if((empty($row17[0]))){
                echo "ไม่มีอุปกรณ์การเรียน";
            }else{
            echo $row17[0];
            }
        
             $sql18[$i5] = "SELECT * FROM `building`";
  
        $result18[$i5] = mysqli_query($con,$sql18[$i5]);     
        //--------------------------------
        
            //------------------------------
                 echo "<br>สถานะการเรียน:"   ;
                 
               
                     

                    if( $row1[3] == 1){ ?>
         
              เรียนปกติ      <br><button type="button" id="B2_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn  ">เปลี่ยนสถานะ</button> 
              <button type="button" id="B2_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">แก้ไข</button> 
                                   <form action="edit_status_study.php" method="post" id="S2_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T2_timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="T2_timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S2_subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $row1[13]?>" name="date" id="D2_date_<?php echo$i5?>">
                                            
                                                 <select  name="status" id="S2_status_<?php echo$i5?>">
                                                          <option value="" disabled selected >เลือกรายการ</option>
                  <option value="0">งดการเรียน</option>
                  </select>
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
              
         <form action="edit_study.php" method="post" id="S2_section_miss2_<?php echo$i5?>">   
            <input type="hidden" value="<?php echo$row1[1]?>" name="timein2" id="T2_timein2_<?php echo$i5?>">
            <input type="hidden" value="<?php echo$row1[2]?>" name="timeout2"  id="T2_timeout2_<?php echo$i5?>">
            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="S2_subject2_<?php echo$i5?>">
             <input type="hidden" value="<?php echo $row1[13]?>" name="date2" id="D2_date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="T2_tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="B2_buildings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row18[$i5] = mysqli_fetch_row($result18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row18[$i5][0]; ?>"><?php echo $row18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="R2_rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
             <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
              
                <br>
                       <?php
                    }elseif ($row1[3] == 0) { ?>
              
                         งดเรียน   <br><button type="button" id="B2_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">เปลี่ยนสถานะ</button> 
                   
                         
                          
                         
                           <form action="edit_status_study.php" method="post"  id="S2_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T2_timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="T2_timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S2_subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $row1[13]?>" name="date" id="D2_date_<?php echo$i5?>">
                                            
                                                 <select  name="status"   id="S2_status_<?php echo$i5?>">
                                                          <option value="" disabled selected>เลือกรายการ</option>
                                                     <option value="1" >เรียนปกติ</option>
           
                  </select>
            <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                             <hr>
                 
                         <br>
                 <?php }elseif ($row1[3] == 3){ ?>
                      
                        ชดเชยการเรียน  <br> <button type="button" id="B2_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">ลบข้อมูล</button> 
                         <button type="button" id="B2_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button>  
                        
                         <form action="edit_status_study.php" method="post" id="S2_section_miss_<?php echo$i5?>">   
                             <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T2_timein_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row1[2]?>" name="timeout" id="T2_timeout_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S2_subject_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo $row1[13]?>" name="date" id="D2_date_<?php echo$i5?>">
                             
                             <input type="hidden" value="3" name="status" id="S2_status_<?php echo$i5?>">
                               <br>   
              
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยันการลบ
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                              <form action="edit_study.php" method="post" id="S2_section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row1[1]?>" name="timein2" id="T2_timein2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row1[2]?>" name="timeout2"  id="T2_timeout2_<?php echo$i5?>">
            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="S2_subject2_<?php echo$i5?>">
                           วัน <input type="date" value="<?php echo $row1[13]?>" name="date2" id="D2_date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="T2_tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="B2_buildings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row18[$i5] = mysqli_fetch_row($result18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row18[$i5][0]; ?>"><?php echo $row18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="R2_rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
                        
                         <br>
                       <?php
                  }elseif ($row1[3] == 5){ ?>
                  
                       สอบ  <br><button type="button" id="B2_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">ลบข้อมูล</button> 
                           
                       <button type="button" id="B2_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button> 
                         <form action="edit_status_study.php" method="post" id="S2_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T2_timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout" id="T2_timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S2_subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $row1[13]?>" name="date" id="D2_date_<?php echo$i5?>">
                                            
                                                 <input type="hidden"  value="5" id="S2_status_<?php echo$i5?>">
                                                 <br>                   
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                          <form action="edit_study.php" method="post" id="S2_section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row1[1]?>" name="timein2" id="T2_timein2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row1[2]?>" name="timeout2"  id="T2_timeout2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="S2_subject2_<?php echo$i5?>">
                           วัน                      <input type="date" value="<?php echo $row1[13]?>" name="date2" id="D2_date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="T2_tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="B2_buildings3_<?php echo$i5?>">
                            <option value="" disabled selected>เลือกอาคารเรียน</option>
                            <?php
                            while ($row18[$i5] = mysqli_fetch_row($result18[$i5])) {
                                //echo $row14[0];
                             ?>
                        
                                <option value="<?php echo $row18[$i5][0]; ?>"><?php echo $row18[$i5][1]; ?></option>
                                
                                <?php
                          }
                            
                            ?>
                        </select>
                   <select  name="room4" id="R2_rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
              <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
                           <hr>
                      
                        <br>
                        <?php
                  }
                 
              
        }
        
        
         
         
         ?>
           </div>
      </div>
    </div>
         <?php
          $i5++;   
                         }
                 $i6 = $i5;  
   
              ?>
                   
                        <div id="D2_div_show_result_status"></div>
                        <input type="hidden" id="I2_i6"value="<?php echo  $i6 ?>">
          
              
       
       
       
       
       
       </div>
        <div class="card-panel hoverable div5"> ค้นหาการสอน
       
       
         <div class="row">
        <div class="col  m12">
          <div class="card">
           
            <div class="card-content">
             <form action="search_study_ByTeacher.php" method="post" id="search_study_ByTeacher">
                    <input type="hidden" id="id_login" name="id_login" value="<?php echo $userTeacher?>">
                    เลือกวันที่ต้องการ <input type="date"  id="date222" name="date">
                    
                    <input type="submit" value="ยืนยัน">
                </form>
                
            </div>
                  <div id="D3_div_show_search"></div>
          </div>
        </div>
      </div>
       
       
       
       
       </div>
        <div class="card-panel hoverable div6">สนทนาส่วนตัว
         
       
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
<div class="card-panel hoverable div7">เช็คชื่อ

         <div class="row">
        <div class="col  m12">
          <div class="card">
          
            <div class="card-content">
                <?php
        $sql15 = "SELECT teacher_subject.id_teacher_subject,teacher_subject.section , subject.nameSubject "
                . " FROM `teacher_subject`,teacher,subject WHERE teacher_subject.id_teacher="
                . "teacher.id_teacher AND teacher_subject.id_subject=subject.id_subject "
                . "and teacher.id_teacher = $userTeacher GROUP BY subject.nameSubject";
        $result15 = mysqli_query($con, $sql15);


        $sql14 = "SELECT * FROM `building`";

        $result14 = mysqli_query($con,$sql14);

        $sql16 = "SELECT * FROM `subject`";

        $result16 = mysqli_query($con,$sql16);

        ?>
                <form  method="post" id="check_list">

          <select name="subject" id="subjects111" >
                <option value="" disabled selected>เลือกวิชาเรียน</option>

              <?php


                while ($row15 = mysqli_fetch_row($result15)) {

                    while ($row16 = mysqli_fetch_row($result16)){
                        if( $row16[1] == $row15[2] ){
                              echo "<option value='$row16[0]'>$row15[2]</option>";
                        }

                    }



                }


              ?>

          </select>


                 <select  name="subjects2" id="subjects112"></select>
                  
                      วันที่<input type="date" name="date" id="date555">

                    <input type="hidden" value="<?php echo $userTeacher?>" name="idteacher" id="id_teacher">

                
                 
                   <button class="btn waves-effect waves-light" type="submit">ยืนยัน</button>
                 </form>
  <div name="show_student" id="show_student">

                   </div>
                
           
            </div>

          </div>
        </div>
      </div>






       </div>
       
<div class="card-panel hoverable div8" id="homework_card"> โพสการบ้าน
          <form id="check_homework" class="" action="" method="post">
            <input type="hidden" id="id_teacherhw" name="id_teacherhw" value="<?php echo $userTeacher ?>">
            <button class="waves-effect waves-light btn" type="submit">ตรวจการบ้าน</button>
          </form>
         <div class="row">
        <div class="col  m12">
          <div class="card">
           
            <div class="card-content">
              <?php
              $sql15 = "SELECT teacher_subject.id_teacher_subject,teacher_subject.section , subject.nameSubject FROM `teacher_subject`,teacher,subject WHERE teacher_subject.id_teacher="
              . "teacher.id_teacher AND teacher_subject.id_subject=subject.id_subject "
              . "and teacher.id_teacher = $userTeacher GROUP BY subject.nameSubject";
              $result15 = mysqli_query($con, $sql15);


              $sql14 = "SELECT * FROM `building`";

              $result14 = mysqli_query($con,$sql14);

              $sql16 = "SELECT * FROM `subject`";

              $result16 = mysqli_query($con,$sql16);

              ?>
              <form action="post_homework.php" method="post">

                <select name="subject3" id="subjects3" >
                  <option value="" disabled selected>เลือกวิชาเรียน</option>

                  <?php


                  while ($row15 = mysqli_fetch_row($result15)) {

                    while ($row16 = mysqli_fetch_row($result16)){
                      if( $row16[1] == $row15[2] ){
                        echo "<option value='$row16[0]'>$row15[2]</option>";
                      }

                    }



                  }


                  ?>

                </select>


                <select  name="subjects4" id="subjects4"></select>
                <b>เรื่อง</b>
                <input type="text" name="name">
                <b>กำหนดส่ง</b>
                <input type="datetime-local" name="date">
                <button class="waves-effect waves-light btn" type="submit">ยืนยัน</button>
              </form>
            </div>

          </div>
        </div>
      </div>





       </div>
       
     
        <div class="card-panel hoverable div9"> แจ้งลา
           
       
       
        <div class="row">
        <div class="col  m12">
          <div class="card">
           
              <h5>รายการแจ้งลาของนักศึกษา</h5>
            <?php
            $sqlse = 'SELECT subject.nameSubject as name,subject.id_subject AS subid FROM subject,teacher,teacher_subject
            WHERE teacher.id_teacher = "'.$tid.'" AND teacher_subject.id_subject = subject.id_subject AND teacher_subject.id_teacher = teacher.id_teacher GROUP BY name';
            $rese = $conn->query($sqlse);

            ?>
            <select class="browser-default" name="sub" id="sub">
              <option value="">กรุณาเลือกวิชา</option>
              <?php while($rowse = $rese->fetch_assoc()){ ?>
                <option value=<?=$rowse["subid"] ?>><?=$rowse["name"] ?></option>
                <?php } ?>
            </select>
            <button type="button" class="btn btn-success btn-md" id="show"><span class="glyphicon glyphicon-ok">Ok</span></button>
            </div>
            <div class="col-md-9" id="baila">

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

  $sql2 = "SELECT * FROM teacher,university WHERE teacher.id_university = university.id_university AND id_teacher='$tid'";
  $result2 = $con->query($sql2);

  if ($result2->num_rows > 0) {
      $row2 = $result2->fetch_assoc();
      $stdfname = $row2["fname"];
      $stdlname = $row2["lname"];
      $stduniversity = $row2["name"];
  }
  $con->close();
  ?>
  <div class="background">
   
  </div>
        <a href="#!user"><img class="circle" src="https://pixabay.com/static/img/profile_image_dummy.svg" width="70px"></a>
  
  <a href="#!name"><span class="black-text name"><?php echo $stdfname." ".$stdlname."<br><br>".$stduniversity; ?></span></a>
</div></li>

<li><a href="Logout.php">Logout</a></li>
<li><div class="divider"></div></li>
<li><a class="subheader">Subheader</a></li>

</ul>
          
          
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
      <script type="text/javascript">
        $(document).ready(function(){
          $('#show').click(function(){
            var sub = $('#sub').val();
            if(sub!=""){
              $.post('baila.php',{
                  sub : sub
              },function(data){
                $('#baila').html(data);
              });
            }else{
              alert("กรุณาเลือกรายการ");
            }
          });
        });
        </script>
    </body>
</html>

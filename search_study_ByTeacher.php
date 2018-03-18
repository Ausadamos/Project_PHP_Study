
 <?php
              
             
                $date2 = $_POST["date"];

$userTeacher = $_POST["id_login"];
              

            $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");




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
                    <a class="modal-trigger ">  <img src="http://developer.affectiva.com/images/emoji/smiley.png" width='60px' ></a>
           
              <?php     } ?>
     
<ul>
    <?php
    
    ?>
    <li><a class="btn-floating white" href="#m3_modal1_1_<?php echo $i5;?>"><img src="http://i.imgur.com/1EfL0K9.png" width='44px' ></a></li>
      <li><a class="btn-floating red accent-2" href="#m3_modal1_2_<?php echo $i5;?>"><img src="http://i.imgur.com/iMlPOFg.png" width='49px' ></a></li>
        <li><a class="btn-floating white" href="#m3_modal1_3_<?php echo $i5;?>"><img src="     http://i.imgur.com/15svXmL.png" width='42px' ></a></li>
  <li><a class="btn-floating white" href="#m3_modal1_4_<?php echo $i5;?>"><img src="http://i.imgur.com/cjtjbUI.png" width='41px' ></a></li>
  
  <li><a class="btn-floating white" href="#m3_modal1_5_<?php echo $i5;?>"><img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/7/24/1437734325876/7a10ee58-a0f2-437a-984a-083b3dcc1437-bestSizeAvailable.png?w=300&q=55&auto=format&usm=12&fit=max&s=12a0bb984e57e26e7eb40f86b03a0a31" width='36px' ></a></li>
    <li><a class="btn-floating white" href="#m3_modal1_6_<?php echo $i5;?>"><img src="https://s-media-cache-ak0.pinimg.com/originals/1d/b7/19/1db7193c482f5ef2157f34fd1f70262c.png" width='40px' ></a></li>
    
        <li><a class="btn-floating white" href="#m3_modal1_7_<?php echo $i5;?>"><img src="    https://s-media-cache-ak0.pinimg.com/originals/ec/be/ea/ecbeead081c8d3da20a2a59824c9fe33.png" width='41px' ></a></li>
<?php

?>
    </ul>
           
   
         </div>
            
          <?php
for ($i7 = 1; $i7 <= 7; $i7++) {
  

    ?>  
           
   <div id="m3_modal1_<?php echo $i7;?>_<?php echo $i5;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="E3_editEmoji_<?php echo $i7;?>_<?php echo $i5;?>">
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
      <h6> <input type="hidden" value="<?php echo $i7;?>" id="E3_Emoji_<?php echo $i7;?>_<?php echo $i5;?>"></h6>
      </center>
      
    </div>
           
        <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T3_timein_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="T3_timeout_<?php echo $i7;?>_<?php echo$i5?>">
                                   <input type="hidden" value="<?php echo$row1[4]?>" name="subject"   id="S3_subject_<?php echo $i7;?>_<?php echo$i5?>">
                                    <input type="hidden" value="<?php echo $date2?>" name="date"      id="D3_date_<?php echo $i7;?>_<?php echo$i5?>">
    
        
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
     <a  href="#modal77__<?php echo $i5;?>"><i class="material-icons">room</i></a>
    
  คลิ๊กเพื่อดูแผนที่   
  </div>
    
              <div id="modal77__<?php echo $i5;?>" class="modal">
                  
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
                . " AND student_subject.id_teacher_subject = $row1[4] AND student_subject.date = '$date2' "
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
         
              เรียนปรกติ      <br><button type="button" id="B3_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn  ">เปลี่ยนสถานะ</button> 
              <button type="button" id="B3_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">แก้ไข</button> 
                                   <form action="edit_status_study.php" method="post" id="S3_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T3_timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="T3_timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S3_subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $date2?>" name="date" id="D3_date_<?php echo$i5?>">
                                            
                                                 <select  name="status" id="S3_status_<?php echo$i5?>">
                                                          <option value="" disabled selected >เลือกรายการ</option>
                  <option value="0">งดการเรียน</option>
                  </select>
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
              
         <form action="edit_study.php" method="post" id="S3_section_miss2_<?php echo$i5?>">   
            <input type="hidden" value="<?php echo$row1[1]?>" name="timein2" id="T3_timein2_<?php echo$i5?>">
            <input type="hidden" value="<?php echo$row1[2]?>" name="timeout2"  id="T3_timeout2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="S3_subject2_<?php echo$i5?>">
                                                       <input type="hidden" value="<?php echo $date2?>" name="date2" id="D3_date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="T3_tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="B3_buildings3_<?php echo$i5?>">
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
             
                   <select  name="room4" id="R3_rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
             <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
              
                <br>
                       <?php
                    }elseif ($row1[3] == 0) { ?>
              
                         งดเรียน   <br><button type="button" id="B3_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">เปลี่ยนสถานะ</button> 
                   
                         
                          
                         
                           <form action="edit_status_study.php" method="post"  id="S3_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T3_timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout"  id="T3_timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S3_subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $date2?>" name="date" id="D3_date_<?php echo$i5?>">
                                            
                                                 <select  name="status"   id="S3_status_<?php echo$i5?>">
                                                          <option value="" disabled selected>เลือกรายการ</option>
                                                     <option value="1" >เรียนปรกติ</option>
           
                  </select>
            <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                             <hr>
                 
                         <br>
                 <?php }elseif ($row1[3] == 3){ ?>
                      
                        เมค   <br> <button type="button" id="B3_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn">ลบข้อมูล</button> 
                         <button type="button" id="B3_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button>  
                        
                         <form action="edit_status_study.php" method="post" id="S3_section_miss_<?php echo$i5?>">   
                             <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T3_timein_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row1[2]?>" name="timeout" id="T3_timeout_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S3_subject_<?php echo$i5?>">
                             <input type="hidden" value="<?php echo $date2?>" name="date" id="D3_date_<?php echo$i5?>">
                             
                             <input type="hidden" value="3" name="status" id="S3_status_<?php echo$i5?>">
                               <br>   
              
               <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยันการลบ
    <i class="material-icons right">send</i>
  </button>
                            </form>
                             
                              <form action="edit_study.php" method="post" id="S3_section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row1[1]?>" name="timein2" id="T3_timein2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row1[2]?>" name="timeout2"  id="T3_timeout2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="S3_subject2_<?php echo$i5?>">
                           วัน                      <input type="date" value="<?php echo $date2?>" name="date2" id="D3_date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="T3_tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="B3_buildings3_<?php echo$i5?>">
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
                   <select  name="room4" id="R3_rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
     
                        
                         <br>
                       <?php
                  }elseif ($row1[3] == 5){ ?>
                  
                       สอบนอกตาราง  <br><button type="button" id="B3_button_miss_<?php echo$i5?>" class="waves-effect waves-light btn ">ลบข้อมูล</button> 
                           
                       <button type="button" id="B3_button2_miss_<?php echo$i5?>" class="waves-effect waves-light btn">แก้ไข</button> 
                         <form action="edit_status_study.php" method="post" id="S3_section_miss_<?php echo$i5?>">   
                                       <input type="hidden" value="<?php echo$row1[1]?>" name="timein" id="T3_timein_<?php echo$i5?>">
                                           <input type="hidden" value="<?php echo$row1[2]?>" name="timeout" id="T3_timeout_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject" id="S3_subject_<?php echo$i5?>">
                                                 <input type="hidden" value="<?php echo $date2?>" name="date" id="D3_date_<?php echo$i5?>">
                                            
                                                 <input type="hidden"  value="5" id="S3_status_<?php echo$i5?>">
                                                 <br>                   
           <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
                            </form>
                          <form action="edit_study.php" method="post" id="S3_section_miss2_<?php echo$i5?>">   
             เวลาเข้า<input type="time" value="<?php echo$row1[1]?>" name="timein2" id="T3_timein2_<?php echo$i5?>">
             เวลาออก<input type="time" value="<?php echo$row1[2]?>" name="timeout2"  id="T3_timeout2_<?php echo$i5?>">
                                            <input type="hidden" value="<?php echo$row1[4]?>" name="subject2" id="S3_subject2_<?php echo$i5?>">
                           วัน                      <input type="date" value="<?php echo $date2?>" name="date2" id="D3_date2_<?php echo$i5?>">
             อุปกรณ์ <input type="text" value="<?php echo$row17[0]?>" name="tool2" id="T3_tool2_<?php echo$i5?>">                              
                                   
             
             
             <select name="buildings3" id="B3_buildings3_<?php echo$i5?>">
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
                   <select  name="room4" id="R3_rooms4_<?php echo$i5?>"></select>
             
             
             
             
             
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
                   
                        <div id="D3_div_show_result_status"></div>
                        <input type="hidden" id="I3_i6"value="<?php echo  $i6 ?>">
          
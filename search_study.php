<?php

$date2 = $_POST["date"];

$login = $_POST["id_login"];
        
         $i99 = 0;
          
       
  
           

            $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

        $sql = " SELECT `id_student_subject`, "
                . " student.`id_student`, teacher_subject.`id_teacher_subject`, "
                . " `timeIn`, `timeOut`, `date`, `status_study`,teacher.fname,teacher.lname,subject.nameSubject,subject.idsubject,building.name_building,building.Latitude"
                . " ,building.Longitude,room.name_room,building.id_building,id_emoji  "
                . " FROM `student_subject`,subject,teacher,teacher_subject,student,university,room,building WHERE "
                . " student.id_student=student_subject.id_student AND teacher.id_teacher = teacher_subject.id_teacher "
                . " AND subject.id_subject = teacher_subject.id_subject AND subject.id_subject AND teacher_subject.id_teacher "
                . " AND university.id_university = subject.id_university AND student_subject.date AND teacher_subject.id_teacher_subject "
                . " = student_subject.id_teacher_subject AND teacher_subject.id_teacher =teacher.id_teacher AND teacher_subject.id_subject = subject.id_subject AND room.id_building = building.id_building "
                . " AND room.id_room=student_subject.id_room AND student_subject.date LIKE '$date2' AND student.id_student=$login GROUP BY student_subject.id_student_subject ORDER BY student_subject.timeIn ASC ";
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
                              <img src="     http://i.imgur.com/15svXmL.png" width='60px' >

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
     <a  href="#modal10__<?php echo $i7;?>"><i class="material-icons">room</i></a>
    
  คลิ๊กเพื่อดูแผนที่
  </div>
    
              <div id="modal10__<?php echo $i7;?>" class="modal">
                  
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
      <li><a class="btn-floating red" href="#modal97_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">delete</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="#modal98_<?php echo $i99;?>_<?php echo $i7;?>"><i class="material-icons">mode_edit</i></a></li>
     
    </ul>
           
          
           
     

          </span></div>
        
           
  <!-- Modal Structure -->
  <div id="modal97_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">
      
      <form action="delete_tool_student.php" method="post" id="deleteTool_l_<?php echo $i99;?>_<?php echo $i7;?>">
      
    <div class="modal-content">
        <center>
        <i class="large material-icons ">delete</i>
      <h5>ยืนยันการลบ ?</h5> 
      <h6><?php echo$row26[0]?> </h6>
      </center>
    </div>
          <input type="hidden" id="tool_l_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row26[1] ?>">

          <div class="modal-footer">
         <button class="btn waves-effect waves-light red" type="submit" name="action">ยืนยัน
    <i class="material-icons right">send</i>
  </button>
</div>
      </form>
    <div id="div_show_result3_<?php $i99.'_'.$i7?>"></div>
  </div>
          
  
   <div id="modal98_<?php echo $i99;?>_<?php echo $i7;?>" class="modal">
       <form action="edit_ac_student.php" method="post" id="editTool_l_<?php echo $i99;?>_<?php echo $i7;?>">
    <div class="modal-content">
       <center>
        <i class="large material-icons ">mode_edit</i>
      <h5>แก้ไขข้อมูล</h5> 
      <h6> <input type="text" value="<?php echo$row26[0]?>" id="NameTool_l_<?php echo $i99;?>_<?php echo $i7;?>" ></h6>
      </center>
      
    </div>
        <input type="hidden" id="tool_l_<?php echo $i99;?>_<?php echo $i7;?>" value="<?php echo $row26[1] ?>">
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
          <form action="insert_Accessories_ByStudent.php" method="post" id="ii_insert_Accessories_ByStudent_<?php echo $i7;?>">
          
              
          <input type="hidden"  name="id_student_subject" id="aa_add_tool_<?php echo $i7;?>" value="<?php echo $row[0];?>">
          <i class="material-icons prefix ">mode_edit</i>   
          <input type="text" required=""  name="tool"class="autocomplete " id="tool_l_<?php echo $i7;?>">    
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
                      echo "สถานะเมค";
                  }elseif ($row[6] == 4) {
                       echo "สถานะยกเลิกเมค";
                  }
                  elseif ($row[6] == 5) {
                       echo "สถานะสอบ";
                  }
                  elseif ($row[6] == 6) {
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

                   <input type="hidden" id="ii_i100"value="<?php echo  $i100 ?>">
                        <input type="hidden" id="ii_i8"value="<?php echo  $i8 ?>">
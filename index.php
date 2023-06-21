
<?php
require 'code/database/connect.php';

session_start();

 $user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
 if ($user == []){
  $check_login = false;
 } else{
  $check_login = true;
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=3" />    
    <title>Quản Lý Học Sinh - DTNT Yên Bái</title>   
    <link rel="stylesheet" href="/code/css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="code/img/logo.png"> 
  </head>
  <body>
    <div class="sidebar">
    <div class="logo-details">
      <img class="logo_img" src="../code/img/logo.png" alt="">
        <div class="logo_name">Quản lí học sinh</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <?php if($check_login == 1){ ?>    <a href="../../index.php"> <?php }
            else{ if($check_login == 0){ ?> <a href="/code/php/login.php"> <?php }} ?>
        <i class='bx bx-home'></i>
          <span class="links_name">Trang chủ</span>
        </a>
         <span class="tooltip">Trang chủ</span>
      </li>
      <li>
      <?php if($check_login == 1){ ?>     <a href="/code/php/don.php"> <?php }
            else{ if($check_login == 0){ ?> <a href="/code/php/login.php"> <?php }} ?>
       <i class='bx bx-paper-plane' ></i>
         <span class="links_name">Đơn xin nghỉ</span>
       </a>
       <span class="tooltip">Đơn xin nghỉ</span>
     </li>
     
     <li>
        <?php if($check_login == 1){ ?>     <a href="/code/php/htr.php"> <?php }
            else{ if($check_login == 0){ ?> <a href="/code/php/login.php"> <?php }} ?>
       <i class='bx bx-history'></i>
       <span class="links_name">Lịch sử</span>
       </a>
       <span class="tooltip">Lịch sử</span>
     </li>
    <li>
    <?php if($check_login == 1){ ?>     <a href=""> <?php }
            else{ if($check_login == 0){ ?> <a href="/code/php/login.php"> <?php }} ?>
      <i class='bx bx-user'   ></i>
        <span class="links_name">Thông tin tài khoản</span>
      </a>
      <span class="tooltip">thông tin</span>
    </li>
    <li>
      <a href="#">
      <i class='bx bx-phone-call'></i>
        <span class="links_name">Liên hệ hỗ trợ</span>
      </a>
      <span class="tooltip">SĐT: 0347028868</span>
    </li>
  
   
    
     <li class="profile">
         <div class="profile-details">
           <!-- <img src="profile.jpg" alt="profileImg"> -->
           <div class="name_job">
             <?php if($check_login==1){  ?> 
              <div class="name"> <?php echo $user['fullname']?></div>
             <div class="job"> <?php echo 'Lớp: '; echo $user['class'] ?></div>
              
             <?php }
             else{if($check_login==0){ ?> 
              <div class="name"> Liên hệ hỗ trợ</div>
             <div class="job">Zalo:0347028868 <br> SĐT:0347028868 </div>
               <?php }} ?>           
            </div>
         </div>
         <a href="/code/php/log_out.php">
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>  
    </ul>
    <div class="chxh">
                <a class="ct"></a>
                </div>
  </div>

  <section class="home-section">
    <div class="home">
      </div>
  </section>

  <script src="code/js/script.js"></script>

  </body>
</html>
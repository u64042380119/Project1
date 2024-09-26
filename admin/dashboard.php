<?php

include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}

$select_contents = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
$select_contents->execute([$tutor_id]);
$total_contents = $select_contents->rowCount();

$select_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
$select_playlists->execute([$tutor_id]);
$total_playlists = $select_playlists->rowCount();


$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE tutor_id = ?");
$select_comments->execute([$tutor_id]);
$total_comments = $select_comments->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ผู้ดูแลระบบ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>
<?php

include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}

$select_contents = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
$select_contents->execute([$tutor_id]);
$total_contents = $select_contents->rowCount();

$select_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
$select_playlists->execute([$tutor_id]);
$total_playlists = $select_playlists->rowCount();


$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE tutor_id = ?");
$select_comments->execute([$tutor_id]);
$total_comments = $select_comments->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ผู้ดูแลระบบ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>
   
<section class="dashboard">

   <h1 class="heading">ผู้ดูแลระบบ</h1>

   <div class="box-container">

      <div class="box">
         <h3>ยินดีต้อนรับ!</h3>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="profile.php" class="btn">ดูโปรไฟล์</a>
      </div>

      <div class="box">
         <h3><?= $total_contents; ?></h3>
         <p>รวมเนื้อหาทั้งหมด</p>
         <a href="add_content.php" class="btn">เพิ่มเนื้อหาใหม่</a>
      </div>

      <div class="box">
         <h3><?= $total_playlists; ?></h3>
         <p>รวมเพลย์ลิสต์</p>
         <a href="add_playlist.php" class="btn">เพิ่มเพลย์ลิสต์ใหม่</a>
      </div>

      <div class="box">
         <h3><?= $total_contents; ?></h3>
         <p>ดูเนื้อหา</p>
         <a href="contents.php" class="btn">ดูเนื้อหา</a>
      </div>

      <div class="box">
         <h3><?= $total_comments; ?></h3>
         <p>รวมความคิดเห็น</p>
         <a href="comments.php" class="btn">ดูความคิดเห็น</a>
      </div>

      <!--<div class="box">
         <h3>เลือกอย่างรวดเร็ว</h3>
         <p>เข้าสู่ระบบหรือลงทะเบียน</p>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">เข้าสู่ระบบ</a>
            <a href="register.php" class="option-btn">ลงทะเบียน</a>
         </div>
      </div>-->

   </div>

</section>















<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>

</body>
</html>


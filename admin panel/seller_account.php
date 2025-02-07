<?php
    include '../components/connect.php';
    if(isset($_COOKIE['seller_id'])){
       $seller_id = $_COOKIE['seller_id'];
    }else{
        $seller_id ='';
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sprinkle City</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body >
      <div class="main-container">
          <?php include  '../components/admin_header.php';  ?>
          <section class="user-container">
    <div class="heading">
        <h1>registered sellers</h1>
        <img src="../image/separator-img.png">
    </div>
     <div class="box-container">
        <?php
           $select_sellers = $conn->prepare("SELECT * FROM `sellers`");
           $select_sellers->execute();

           if($select_sellers->rowCount() > 0){
            while($fetch_sellers = $select_sellers->fetch(PDO::FETCH_ASSOC)){
                $user_id =$fetch_sellers['id'];
        ?>
        <div class="box">
            <img src="../uploaded_file/<?= $fetch_sellers['image']; ?>">
            <p>user id : <span><?= $user_id; ?></span></p>
            <p>user name : <span><?= $fetch_sellers['name']; ?></span></p>
            <p>user email : <span><?= $fetch_sellers['email']; ?></span></p>


        </div>
        <?php
            }
        }else{
            echo '
            <div class="empty">
                <p>no sellers registerd yet!</p>
            </div>
            ';
           

        }
    
        ?>           
     </div>
</section>

</div>







   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <script src="../js/admin_script.js"></script>
   <?php include  '../components/alert.php';  ?>

</body>
</html>

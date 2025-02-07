<?php
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }


?>
<!DOCTYPE html>
<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sprinkle City</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
   </head>
<body>
<?php include 'components/user_header.php';  ?>

<div class="banner">
    <div class="detail">
        <h1>about us</h1>
        <p>rftghjkhgj</p>
        <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
    </div>
</div>
<div class="chef">
    <div class="box-container">
        <div class="box">
            <div class="heading">
                <span>alex do</span>
                <h1>Masterchef</h1>
                <img src="image/separator-img.png">
            </div>
            <p>stdrfhgjkkgjabout chef</p>
            <div class="flex-btn">
                <a href="" class="btn">explore our menu</a>
                <a href="menu.php" class="btn">visit our shop</a>
            </div>
        </div>
        <div class="box">
            <img src="image/ceaf.png" class="img">
        </div>
    </div>
</div>

<div class="story">
    <div class="heading">
        <h1>our story</h1>

        <img src="image/separator-img.png">
    </div>
    <p>frygtuyhijuuhiojji<br>tfdgyshkujikd<br>fdghjskdhbskjndvhbskj</p>
    <a href="menu.php" class="btn">our service</a>
</div>
<div class="container">
    <div class="box-container">
        <div class="img-box">
            <img src="image/about.png" alt="">
        </div>
        <div class="box">
            <div class="heading">
                <h1>TakingIce Cream To New Heights</h1>
                <img src="image/separator-img.png" alt="">
            </div>
            <p>etdrfytguyhydrftgyhurdftgyhufghjfdghjhgfgvhbjnhgfhj</p>
            <a href="" class="btn">learn more</a>
        </div>
    </div>
</div>

<div class="team">
    <div class="heading">
        <span>our team</span>
        <h1>quality and passion with our services</h1>
        <img src="image/separator-img.png" alt="">
    </div>
    <div class="box-container">
        <div class="box">
            <img src="image/team-1.jpg" class="img">
            <div class="content">
                <img src="image/shape-19.png" alt="" class="shap">
                <h2>refel jonson</h2>
                <p>cofee chef</p>

            </div>
        </div>
        <div class="box">
            <img src="image/team-2.jpg" class="img">
            <div class="content">
                <img src="image/shape-19.png" alt="" class="shap">
                <h2>fiona jonson</h2>
                <p>pastry chef</p>

            </div>
        </div>
        <div class="box">
            <img src="image/team-3.jpg" class="img">
            <div class="content">
                <img src="image/shape-19.png" alt="" class="shap">
                <h2>tom jonson</h2>
                <p>cofee chef</p>

            </div>
        </div>
    </div>
</div>

<div class="testimonial">
    <div class="heading">
        <h1>testimonial</h1>
        <img src="image/separator-img.png" >
    </div>
    <div class="testimonial-container">
        <div class="slide-row" id="slide">
            <div class="slide-col">
                <div class="user-text">
                    <p>sdfghjkhgfdfhjgfghfkugghl</p>
                    <h2>Zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (1).jpg">
                </div>                   
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p>sdfghjkhgfdfhjgfghfkugghl</p>
                    <h2>Zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (2).jpg">
                </div>                   
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p>sdfghjkhgfdfhjgfghfkugghl</p>
                    <h2>Zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (3).jpg">
                </div>                   
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p>sdfghjkhgfdfhjgfghfkugghl</p>
                    <h2>Zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (4).jpg">
                </div>                   
            </div>
        </div>
    </div>
    <div class="indicator">
        <span class="btn1 active"></span>
        <span class="btn1"></span>
        <span class="btn1"></span>
        <span class="btn1"></span>
    </div>
</div>   
    
     
          

   
<?php include 'components/footer.php'; ?>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <script src="js\user_script.js"></script>
   <?php include  'components/alert.php';  ?> 
</body>
</html>
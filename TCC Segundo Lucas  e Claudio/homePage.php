<?php

include_once "php/config.php";
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="homePage.css">
    </head>
<script src="https://unpkg.com/@phosphor-icons/web"></script>
<!-- STYLESHEET -->

<div class="sidebar">
    <?php
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) == 1) {
        $row = mysqli_fetch_assoc($sql);
        }
    ?>
        <div class="menu-btn">
            <i class="ph-bold ph-caret-left"></i>
        </div>
        <div class="head">
        <div class="details">
            <img src="php/images/<?php echo $row['img']; ?>">
        </div>
            <div class="user-details">
                <p class="title"><?php echo $row['status']; ?>
            </p>
                <p class="name"><div class="name-user">
                    <span>
                        <?php echo $row['fname'] . " " . $row['lname'] ?>
                    </span>
                    </div></p>
            </div>
        </div>
        <div class="nav">
            <div class="menu">
                <p class="title">Main</p>
                <ul>
                <li  class="active">
                        <a href="#">
                        <i class="icon fa-solid fa-house"></i>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li>
                    <a href="users.php">
                        <i class="icon fas fa-message"></i>
                        <span class="text">Messages</span>
                    </a>
                    </li>
                    <li>
                        <a href="paint.php">
                            <i class="icon fa-solid fa-palette"></i>
                            <span class="text">Paint</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa-solid fa-gamepad"></i>
                            <span class="text">Games</span>
                            <i class="arrow ph-bold ph-caret-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="tictactoe.php">
                                    <span class="text">Tic Tac Toe</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Snack Game</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Tetris</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Pac Man</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Learn Three</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-chart-bar"></i>
                            <span class="text">Income</span>
                            <i class="arrow ph-bold ph-caret-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <span class="text">Earnings</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Funds</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Declines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">Payouts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu">
                <p class="title">Settings</p>
                <ul>
                    <li>
                        <a href="">
                            <i class="icon ph-bold ph-gear"></i>
                            <span class="text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <p class="title">Account</p>
            <ul>
                <li>
                    <a href="#">
                        <i class="icon ph-bold ph-info"></i>
                        <span class="text">Help</span>
                    </a>
                </li>
                <li>
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">
                    <i class="icon ph-bold ph-sign-out"></i>
                    <span class="text">Logout</span>
                </a>
                    <div class="buttonUser">
                        
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"></script>
<script src="script.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     <div class="container">
 
         <div class="slide">
 
             
             <div class="item" style="background-image: url(https://i.ibb.co/qCkd9jS/img1.jpg);">
                 <div class="content">
                     <div class="name">Switzerland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(php/images/1705174635Black Hole Wallpapers Hd.jpg);">
                 <div class="content">
                     <div class="name">Finland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(https://i.ibb.co/NSwVv8D/img3.jpg);">
                 <div class="content">
                     <div class="name">Iceland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(https://i.ibb.co/Bq4Q0M8/img4.jpg);">
                 <div class="content">
                     <div class="name">Australia</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(https://i.ibb.co/jTQfmTq/img5.jpg);">
                 <div class="content">
                     <div class="name">Netherland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
             <div class="item" style="background-image: url(https://i.ibb.co/RNkk6L0/img6.jpg);">
                 <div class="content">
                     <div class="name">Ireland</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button>See More</button>
                 </div>
             </div>
 
         </div>
 
         <div class="button">
             <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
             <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
         </div>
 
     </div>

<script src="javaScript/homePage.js"></script>
</div>
<script>
    $(".menu > ul > li").click(function (e) {
    // remove active from already active
    $(this).siblings().removeClass("active");
    // add active to clicked
    $(this).toggleClass("active");
    // if has sub menu open it
    $(this).find("ul").slideToggle();
    // close other sub menu if any open
    $(this).siblings().find("ul").slideUp();
    // remove active class of sub menu items
    $(this).siblings().find("ul").find("li").removeClass("active");
  });
  
  $(".menu-btn").click(function () {
    $(".sidebar").toggleClass("active");
  });
  
</script>
</body>

</html>
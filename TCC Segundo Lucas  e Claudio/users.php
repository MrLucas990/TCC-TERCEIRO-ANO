<?php
session_start();
include_once "php/config.php";
include_once "header.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <title>Document</title>
</head>


<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <a href="homePage.php" class="exit"><i class="fas fa-arrow-left"></i></a>
          <?php
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
          if (mysqli_num_rows($sql) == 1) {
            $row = mysqli_fetch_assoc($sql);
          }
          ?>

          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span>
              <?php echo $row['fname'] . " " . $row['lname'] ?>
            </span>
            <p>
              <?php echo $row['status']; ?>
            </p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">

      </div>
    </section>
  </div>
  <script src="javascript/users.js"></script>
</body>
</html>
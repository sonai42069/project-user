<?php 
session_start();
include "header.php"; 
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {

 ?>
<body>
     <h1>Hello, <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h1>
    <a href="php/logout.php">Logout</a> 
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>

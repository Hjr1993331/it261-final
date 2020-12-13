<?php 
include('config.php'); 

session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('includes/header.php');
?>

<!-- starts thx.php--> 

<nav>  

<?php 
//Notification message
if(isset($_SESSION['success'])) :?>
<div class="goal">

<h3><?php echo $_SESSION['success'];
    
    
    unset($_SESSION['success']);
    
    ?>
    
    </h3>  
    
    </div><!--closing goal div-->
    <?php endif ?>
    
  <div class="goal">  
<?php
    if(isset($_SESSION['UserName'])) : ?>
<h3> Hello,
<b><?php echo $_SESSION['UserName']; ?>
    </b>!</h3>

<br>
<p><a href="index.php?logout='1' ">Log out!</a></p>

</div> <!-- closing goal div-->

<?php endif ?>

    
       
    </nav> 
 </div> <!--closing id top-->     
    
<div id="wrapper">   


<div id="topthx">
<h1 class="top_thx"><?php echo $mainHead; ?></h1>
<main class="thx">   
<img class="check" src="images/check.jpg" alt="check!">    
  
    <div class="marvel">
        <p class="thxform">Thank you very much for getting in touch! Hijiri will get in touch with you shortly! Please visit <a href="index.php">Index Page</a>, if you want to see more information about Epic Rap Battle of History! If you want to log out the page, you have to click "log out"!</p>
    </div>    

</main> 
</div> <!-- ends topthx--> 
    
    
<!-- ends thx.php-->     
<?php 
include('includes/footer.php');
?>
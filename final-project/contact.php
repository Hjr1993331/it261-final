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

<!-- starts contact.php-->

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

    
<div id="topcontact">
<h1 class="top_thx"><?php echo $mainHead; ?></h1>
  
    

<main class="contact">
<?php include('includes/form.php'); ?>
</main>
    

</div> <!-- end topcontact -->
    
<!-- ends contact.php-->    
<?php 
include('includes/footer.php');
?>
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

<!-- starts index.php-->

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



<div class="homeimage">
<img src="images/logo.png" alt="Main Page!">
</div>


<main class="<?php echo $class; ?>">
    <h1><?php echo $mainHead ; ?></h1>
    
<p>What is Epic Rap Battles of History?</p>
<p>Epic Rap Battles of History is a YouTube web series and music project.</p>  
<p>They already have season 6 and made 81 videos! I have been watching them since 2013. I'm going to choose 10 best music videos!</p>    
</main>

<section class="videos">
<h2>Latest video!</h2>
<div class='embed-container'><iframe src='https://www.youtube.com/embed/Ver1OZdK2bA' allowfullscreen></iframe></div>
</section>
    
<!-- ends index.php-->    

<?php
include('includes/footer.php');
?>
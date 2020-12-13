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

<!-- starts about.php--> 

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


<main class="<?php echo $class; ?>">

    <div class="first one">
    <h1 class="toppage"><?php echo $mainHead ; ?></h1>    
    <p>Epic Rap Battles of History is a YouTube web series and music project created by Peter "Nice Peter" Shukoff and Lloyd "EpicLLOYD" Ahlquist. The series pits historical and pop culture figures against one another in a rap battle format. The characters portrayed are often determined by suggestions from viewers in the comments sections of the videos.</p>
    </div> 
    
    <div class="first two">
    <?php echo randImages($photo); ?>
    </div>
    
    <div class="second three">
    <?php echo randImages($photo); ?>
    </div> 
    
    <div class="second four">
    <p>As of August 2, 2020, the channel has over 14.6 million subscribers and approximately 3.527 billion total video views. Following an extended hiatus, the channel returned with a bonus battle in December 2018, and the sixth season debuted on April 20, 2019.</p><p>(If you refresh the page, you can see more images!)</p>
    </div>

</main>

 <section class="about2page">
<h3>Crews and Members</h3>
<table class="members">
<?php foreach($members as $fullName => $image) : ?>
<tr>
    <td>
    <img class="member" src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $fullName ?>">
    </td>
    
    <td>
    <?php echo str_replace('/', ' ', $fullName); ?> 
    </td>
    
    <td>
    <?php echo substr($image, 6); ?> 
    </td>
</tr>    
     
<?php endforeach ; ?>
</table>     
     
     
         

</section>
    
<!-- end about.php-->
    
<?php
include('includes/footer.php');
?>
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

<!-- starts daily.php-->

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


<div id="topswitch">
<h1 class="top_switch"><?php echo $mainHead; ?></h1>
<blockquote>"Every great video is filled with obstacles that a hero must overcome to achieve his goal. Sometimes great obstacles, however, don’t just stay on the script page. Instead, they become part of a shoot’s actual production. Making videos are epic endeavors, especially when they're helmed by filmmakers with grand visions. But along with those high standards and incredible goals come all sorts of production nightmares”</blockquote>    
</div>
<main class="switchpage">

    <h3 class="today">Today is <b><?php echo $today; ?></b>!</h3>    
    <p class="todo"><?php echo $content; ?></p>
<ul class="day2">
<li class="day"><a href="daily.php?today=Monday">Monday</a></li> 
<li class="day"><a href="daily.php?today=Tuesday">Tuesday</a></li> 
<li class="day"><a href="daily.php?today=Wednesday">Wedneday</a></li> 
<li class="day"><a href="daily.php?today=Thursday">Thursday</a></li> 
<li class="day"><a href="daily.php?today=Friday">Friday</a></li> 
<li class="day"><a href="daily.php?today=Saturday">Saturday</a></li> 
<li class="day"><a href="daily.php?today=Sunday">Sunday</a></li>     
    
    
    </ul>  


</main>


<aside class="switch2page">
<h2><?php echo $epic; ?> Day!</h2>
    
<img src="images/<?php echo $pic; ?>.png" alt="<?php echo $alt; ?>">    

</aside>



<!-- ends daily.php-->
<?php
include('includes/footer.php');
?>
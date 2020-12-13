<?php

$name = '';
$email = '';
$tel = '';
$gender = '';
$epicrap = '';
$comment = '';
$privacy = '';
$country = '';


$nameErr = '';
$emailErr = '';
$telErr = '';
$tel2Err = '';
$genderErr = '';
$epicrapErr = '';
$privacyErr = '';
$commentErr = '';
$countryErr = '';





if($_SERVER['REQUEST_METHOD']== 'POST') {
    
    
//contact page
    
if(empty($_POST['name'])) {
    $nameErr = 'Please fill out your name!';
} else {
    $name = $_POST['name'];
}

if(empty($_POST['email'])) {
    $emailErr = 'Please fill out your Email!';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['privacy'])) {
    $privacyErr = 'Are you a robot? I don\'t think so!';
} else {
    $privacy = $_POST['privacy'];
}
    
 if(empty($_POST['epicrap'])) {
    $epicrapErr = 'If you don\'t know the songs, click Product page!';
    } else {
        $epicrap = $_POST['epicrap'];
    }  
    
if($_POST['country'] == 'NULL') {
    $countryErr = 'Where are you living? Please select!';
    } else {
        $country = $_POST['country'];
    }    

if(empty($_POST['gender'])) {
    $genderErr = 'Please check one!';
    } else {
        $gender = $_POST['gender'];
    } 
    
if($gender == 'Male') {
                $Male ='checked';
            }elseif($gender == 'Female') {
                $Female = 'checked';            
            }
        
if(empty($_POST['comment'])) {
    $commentErr = 'Please write your comment.';
    } else {
        $comment = $_POST['comment'];
    }     

function ourEpicrap() {
        $myReturn = ''; 
       if(!empty($_POST['epicrap'])) {   
       $myReturn =  implode(',', $_POST['epicrap']) ;   
            } return $myReturn;  //end if  
        
    } //end function
    
//function myCountry() {
//        $myReturn = ''; 
//       if(!empty($_POST['country'])) {   
//       $myReturn =  implode(',', $_POST['country']) ;   
//            } return $myReturn;  //end if  
//        
//    } //end function    
    
    if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Please fill out your phone number!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Don\'t forget add hyphen!';
} else{
$tel = $_POST['tel'];
}
}
    
    

    if(isset($_POST['name'],
             $_POST['gender'],
             $_POST['privacy'],
             $_POST['comment'],
             $_POST['country'],
             $_POST['tel'])) {
        
    $to = 'szemeo@mystudentswa.com';
    $subject = 'Hijiri\'s Website Confimation Email ' .date('m/d/Y');
    $body = ''.$name.' has filled out your form ' .PHP_EOL.'';
    $body .= 'Email: '.$email.' '.PHP_EOL.''; 
    $body .= 'Gender: '.$gender.' '.PHP_EOL.''; 
    $body .= ''.$name.'\'s living continent: '.$country.' '.PHP_EOL.'';     
    $body .= ''.$name.'\'s phone number: '.$tel.' '.PHP_EOL.'';     
    $body .= ''.$name.'\'s favorite Songs: '.ourEpicrap(). ' ' .PHP_EOL.''; 
    $body .= 'Comments: '.$comment.''.PHP_EOL.'';    
        
    $headers = array(
    'From' => 'no-reply@studentswa.com',
    'Reply-to' => ' '.$email.'');    
        
    mail($to, $subject, $body, $headers) ;
        header('Location: thx.php');
    }//end isset
}



// end contact page






// switch page

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
    
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Monday' :
    $today = 'Monday';    
    $epic = 'Planning';
    $pic = 'planning';
    $alt = 'Planning day!';
    $content = 'Planning is most important things to do when they are making videos!'; 
    break;
        
    case 'Tuesday' :
    $today = 'Tuesday';    
    $epic = 'Preparing';
    $pic = 'preparing';
    $alt = 'Preparing Day!';
    $content = 'They are going to ready to get custumes, actors/actresses, and materials!'; 
    break;
        
    case 'Wednesday' :
    $today = 'Wednesday';   
    $epic = 'Making up';
    $pic = 'makingup';
    $alt = 'Making up Day!';
    $content = 'Making up is very important when they are shooting new videos!'; 
    break;   
        
    case 'Thursday' :
    $today = 'Thursday';    
    $epic = 'Shooting';
    $pic = 'shooting';
    $alt = 'Shooting Day!';
    $content = 'Shooting is the hardest work becasue they have to make acting perfectly!'; 
    break; 
        
    case 'Friday' :
    $today = 'Friday';    
    $epic = 'Editting';
    $pic = 'editting';
    $alt = 'Editting Day!';
    $content = 'Edditing are very difficult tasks for creating new videos!'; 
    break; 
        
    case 'Saturday' :
    $today = 'Saturday';    
    $epic = 'Recording';
    $pic = 'recording';
    $alt = 'Recording Day!';
    $content = 'Voice recording demands very high quality; otherwise, people do not watch the video!'; 
    break; 
        
    case 'Sunday' :
    $today = 'Sunday';    
    $epic = 'Uploading';
    $pic = 'uploading';
    $alt = 'Uploading Day!';
    $content = 'Done! Now all viewers are available to watch the new video!'; 
    break;     
        
}


//  end switch page




define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


// crews and members

$members['Nice/Peter'] = 'peter_Nice Peter portrayed many characters in Epic Rap Battles of History. He also battled EpicLLOYD in Nice Peter vs EpicLLOYD and Nice Peter vs EpicLLOYD 2. Nice Peter has also hosted one ERB News. He also appeared as a guest rapper and made a cameo appearance as Darth Vader in the Dis Raps For Hire episode "This Guy". Peter Alexis Shukoff, more commonly known by his stage name, Nice Peter, was born on August 15th, 1979, in Rochester, New York. As a child, he Irish danced in school. Peter graduated from the School of Arts in Rochester in 1997 and attended SUNY Fredonia. He is the co-writer and creator of Epic Rap Battles of History, along with EpicLLOYD.';

$members['Epic/Lloyd'] = 'lloyd_EpicLLOYD portrayed many characters in Epic Rap Battles of History. He also battled Nice Peter in Nice Peter vs EpicLLOYD and Nice Peter vs EpicLLOYD 2. He also made a brief cameo appearance as himself as Gandalf in partial makeup in Freddy Krueger vs Wolverine. Lloyd Leonard Ahlquist, better known as EpicLLOYD, was born on January 18th, 1977, in Staten Island, New York. Along with Nice Peter, he is the co-writer/creator of Epic Rap Battles of History and has been in the majority of the videos, but doesn\'t have a speaking part in all of them, often making brief cameo appearances.';

$members['Morgan/Christensen'] = 'morga_Morgan Christensen portrayed the Stormtrooper(s) in Darth Vader vs Hitler, Hitler vs Vader 2, and Hitler vs Vader 3.Morgan Christensen is an actor, writer, and member of the Epic Rap Battles of History crew. He began as a costumer for Cleopatra vs Marilyn Monroe and has intermittently worked as a costuming assistant since Batman vs Sherlock Holmes, as well as a senior production assistant since Donald Trump vs Hillary Clinton. As of Season 6, he has been credited as costume designer on all battles, as well as property master on Ronald McDonald vs The Burger King. Outside of ERB, he is known for his work on the short films "Trailer Park Gigolo", "Open House", and "TL;DR (Too Long; Didn\'t Read)". As of June 15th, 2019, he has become a user on this Wiki. His account can be found here.';

$members['Dante/Cimadamore'] = 'dante_Dante Cimadamore portrayed Nikola Tesla in Nikola Tesla vs Thomas Edison and several cameos in twelve episodes of Epic Rap Battles of History. Furthermore, he held the claws of the bald eagle that lifted Abe Lincoln in Barack Obama vs Mitt Romney and supplied additional vocals for the end of Freddie Mercury\'s verses and the outro of Frank Sinatra vs Freddie Mercury. He was also the body actor for both George Washington and Thomas Jefferson in Theodore Roosevelt vs Winston Churchill, with Nice Peter\'s face later added on. He often gives ERB fans hints about the upcoming rap battles, starting with Steve Jobs vs Bill Gates. He also made a cameo appearance in the Dis Raps For Hire episode "Diamond" as a corporate douche. He also made a cameo appearance as himself in Nice Peter vs EpicLLOYD 2. ';

$members['Jon/Na'] = 'jonna_Jon Na portrayed Genghis Khan\'s descendants in Genghis Khan vs Easter Bunny, Hikaru Sulu in Christopher Columbus vs Captain Kirk, and himself in Nice Peter vs EpicLLOYD 2. Na made his cameo appearance during the line, "That I wake up and come to work to look at your hungover face!", giving the memory card to Josh Best for the editors to edit. He later made an appearance again during the interlude between Nice Peter\'s third and fourth verses, saying, "Get your mark," telling Peter and EpicLLOYD to be ready for filming their final verses.';

$members['Mary/Gutfleisch'] = 'amary_Mary Gutfleisch, also known as Mary Doodles, is a former member of the Epic Rap Battles of History crew. She used to make most of the props and costumes for the series. She left around the time between the Season 2 and Season 3 break, in which she was replaced by Sulai Lopez. Mary is also a YouTuber who makes videos of herself making drawings and paintings, some of which include the Epic Drawings of History. She made her first cameo appearance in Christopher Columbus vs Captain Kirk as a hot alien. After two seasons without making another appearance, Mary returned with her first rapping role in Ghostbusters vs Mythbusters as Kari Byron and a cameo appearance in Jim Henson vs Stan Lee as Walt Disney\'s animators. She returned again in Season 5 to portray Jessie from Team Rocket in Ash Ketchum vs Charles Darwin. She is currently engaged to ERB crew member, Dante Cimadamore.';

$members['Kassem/G'] = 'kasse_KassemG appeared as himself in Nice Peter vs EpicLLOYD and Cleopatra vs Marilyn Monroe. He also portrayed Lando Calrissian in Hitler vs Vader 3. Kassem Gharaibeh, more commonly known by his nickname, KassemG, was born on October 10th, 1983, in Amman, Jordan. He is a comedian and YouTuber mostly known for his online series California On, Going Deep, and Street Music. His main YouTube channel has over 2.5 million subscribers and 442 million views. He is also one of the co-founders of Maker Studios (now Disney Digital), the studio that used to produce Epic Rap Battles of History.';

$members['Atul/Singh'] = 'aatul_Atul Singh portrayed one of the Indian Independence March Extras in Gandhi vs Martin Luther King Jr., the hand of Ronald McDonald in Rasputin vs Stalin, one of the body actors for Boba Fett in Hitler vs Vader 3, Stedman Graham in Oprah Winfrey vs Ellen DeGeneres, himself in Nice Peter vs EpicLLOYD 2, Jason Voorhees in Freddy Krueger vs Wolverine, and an abandoned kid in Ronald McDonald vs The Burger King. He also appeared as a bully in Dis Raps For Hire - Episode 6.';

$members['Javi/Sánchez/Blanco'] = 'ajavi_Javi Sánchez-Blanco portrayed John Schrank in Theodore Roosevelt vs Winston Churchill and himself in Nice Peter vs EpicLLOYD 2.';

$members['Lilly/Singh'] = 'lilly_Lilly Singh portrayed Wonder Woman, Stevie Wonder\'s children and partners in Wonder Woman vs Stevie Wonder. She also made a cameo appearance as Wonder Woman through reused footage in The Joker vs Pennywise. Lilly Saini Singh, better known as IISuperwomanII, was born on September 26, 1988 in the Scarborough district of Toronto, Canada. She is an actress, vlogger, comedian, rapper, and YouTube personality. Her YouTube channel has over 12 million subscribers and is one of the most subscribed channel on the site. Her website can be found here. She is also presently hosting the NBC late-night variety show A Little Late with Lilly Singh.';



// end crews and members





// switch every page


switch(THIS_PAGE) {
    case 'index.php':
     $title = 'Epic Rap Battle of History';  
     $class = 'homemain';    
     $mainHead = '10 Best Epic Rap Battle of History Videos!';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Findex.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break;    
        
    case 'about.php':
     $title = 'About Epic Rap Battle of History'; 
     $class = 'aboutpage';      
     $mainHead = 'About Page!';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fabout.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fabout.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break; 
        
    case 'product.php':
     $title = 'Product of Epic Rap Battle of History';    
     $mainHead = 'Product Page!';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fproduct.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fproduct.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break; 
        
    case 'daily.php':
     $title = 'Daily Epic Rap Battle of History';    
     $mainHead = 'Daily Page!';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fdaily.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fdaily.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break; 
        
    case 'contact.php':
     $title = 'Contact Me!';    
     $mainHead = 'Contact Me';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fcontact.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fcontact.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break;  
        
     case 'thx.php':
     $title = 'Thank you Page';    
     $mainHead = 'Thank you!';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fthx.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fthx.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break;  
        
    case 'register.php':
     $title = 'Register Page';    
     $mainHead = 'Register Page!';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fregister.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fregister.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break;  
        
    case 'login.php':
     $title = 'Login Page';    
     $mainHead = 'Login Page!';
     $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Flogin.php';
     $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Flogin.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en';    
    break;      
    


}//end switch


// end switch every page



// random image


$photo[0] = 'epic';
$photo[1] = 'homeimage2';
$photo[2] = 'homeimage3';
$photo[3] = 'homeimage4';
    
   function randImages($photo) {
       $myReturn = '';
    $i = rand(0, count($photo)-1);
    $selectedImages = 'images/'.$photo[$i].'.jpg';
    $myReturn = '<img src="'.$selectedImages.'" alt="My random home images">';
       return $myReturn;
   }


// end random image




// nav page

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['product.php'] = 'Product';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';


function makeLinks($nav) {
    $myReturn = '' ;
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$myReturn .= '<li><a href=" '.$key.' " class="active"> '.$value.' </a></li>';    
    
}  else {
$myReturn .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';      
    
}  //end else
    
} //end foreach  
    
return $myReturn;    
} //end function


// end nav page



// this will be our config file that we will link to the credentials.php
ob_start(); // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); // We want to see our errors

include('credentials.php');

// very bottom of your config file!

function myerror($myFile, $myLine, $errorMsg) {
    
    if(defined('DEBUG')  && DEBUG) {
        
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    } else {
        echo "I'm sorry, we have encountered an error.";
        die();
    }
    
}
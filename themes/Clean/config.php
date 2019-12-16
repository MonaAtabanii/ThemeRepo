<?php
/*
config.php

Stores configuration data for our application

dollar sign underscore means super global

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo 'the constant is storing: ' .THIS_PAGE;

//die;

function randomize ($arr)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($arr))
	{//Generate random item from array and return it
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}





// default:
        $title =THIS_PAGE;
        $sitename = 'Just Clean Theme with Randomize Function';
        $slogan= 'Let\'s Have Some Fun!';
        $pageHeader = 'Any PageHeader';
        $subHeader = 'Any SubHeader';
        $sloganIcon='';//will be replaced in contact.php by cats icons
        $banner = 'ITC-240 EC-Widgets, Using Randomize and Rotate';



        $cats[] = '<img src="img/cat1.jpg" />';
        $cats[] = '<img src="img/cat2.jpg" />';
        $cats[] = '<img src="img/cat3.jpg" />';
        $cats[] = '<img src="img/cat4.jpg" />';
        $cats[] = '<img src="img/cat5.jpg" />';
        $cats[] = '<img src="img/cat6.jpg" />';
        $cats[] = '<img src="img/cat7.jpg" />';
        $cats[] = '<img src="img/cat11.jpg" />';
        


switch(THIS_PAGE){
        
    case 'index.php':
        $title = 'Template';
        $pageHeader = 'Put page ID here';
        $subHeader = 'Put more information about page here.';
    break;

     case 'daily.php':
        $title = 'Daily Cat Page';
        $pageHeader = 'My lovely cat for today';
        $subHeader = 'All our sweet cats';
    break;
   case 'contact.php':
        $title = 'My Contact page - Using Randomize Function';
        $pageHeader = 'Please contact us';
        $subHeader = 'We appreciate your feedback';
        $sloganIcon= randomize($cats);
    break;
    case 'about.php':
        $config->title = 'About Us'; //equlivant to . (dot) in other language when working with object
        $config->slogan = 'Curiosity Killed the Cat!';
        $config->banner = 'ITC-240 EC-Widgets';
    break;    
        
   
    
}


/*BEgin array of images to be used on contact.php on the function named Randomize*/





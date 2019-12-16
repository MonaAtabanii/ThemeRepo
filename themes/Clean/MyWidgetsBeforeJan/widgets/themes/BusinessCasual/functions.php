<?php
/*

functions.php

Theses are the functions for the Business Casual Theme

*//

//functions go at the bottom
function makeLinks($nav){
    $myReturn = ' ';
    foreach($nav as $url => $text){
        if (THIS_PAGE ==$url){//current page
            $myReturn .= '
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
                </li>
            ';
        }else{//all other pages
            $myReturn .= '
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
                </li>
            ';
        }

    }//end foreach
    return $myReturn;        
}//end makeLinks
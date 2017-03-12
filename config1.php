<?php
/*
config.php - stores application configuration info

*/

define('DEBUG',TRUE); #we want to see all errors


// database credentials
include 'credentials.php';
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder


// allows the current page to know its own name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// here are our page links:
$nav1["template.php"] = "Template";
$nav1["about.php"] = "About";
$nav1["contact.php"] = "Contact";
$nav1["reserve.php"] = "Reserve";


$banner = "Gadgets"; // default banner data

switch(THIS_PAGE)
{
    case "template.php":
        $title = "Template Title Tag";
        $banner = "Gadgets (template)";
    break;

    case "about.php":
        $title = "About Title Tag";

    break;

    default:
        $title = THIS_PAGE;
        $banner = "Gadgets";
}


/*
' . XXX . '
*/



function makeLinks($nav){
    $myReturn = '';

    foreach($nav as $page => $text)
    {
        if(THIS_PAGE == $page)
        {
            $myReturn .= '
            <li class="active">
                <a href="' . $page . '">' . $text    . '</a>
            </li>
        '   ;
        }else{
            $myReturn .= '
            <li>
                <a href="' . $page . '">' . $text    . '</a>
            </li>
            ';
        }



    }
    return $myReturn;
}




/*
<li class="active">
                        <a href="template.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="post.html">Sample Post</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
*/

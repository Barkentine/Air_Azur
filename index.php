<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
    include("View/v_header.php");

    // If action is not defined set it to *accueil*.
    if(!isset($_REQUEST['action']))
    {
        $action = 'accueil';
    }
    else
    {
        $action = $_REQUEST['action'];
    }

    switch ($action)
    {
        //case 'value':
        case 'accueil':
            include("View/v_homepage.php");
            break;
        default:
            break;
    }
    include("View/v_footer.php") ;
?>


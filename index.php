<?php header('Content-Type: text/html; charset=utf-8'); ?>

<?php
    include("View/v_header.php");

    if(!isset($_REQUEST['action']))
    {
        $action = 'accueil';
    }
    else
    {
        $action = $_REQUEST['action'];
    }
    switch ($action) {
        //case 'value':
        case 'value':
            break;
        default:
            break;
    }
    include("View/v_footer.php") ;
?>


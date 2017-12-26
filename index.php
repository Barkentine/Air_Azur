<?php header('Content-Type: text/html; charset=utf-8'); ?>

<?php
    if(!isset($_REQUEST['action']))
    {
        $action = 'accueil';
    }
    else
    {
        $action = $_REQUEST['action'];
    }
    switch ($action) {
        case 'value':
            include("view/v_header.php");
            break;
        default:
            break;
    }
    include("view/v_footer.php") ;
?>


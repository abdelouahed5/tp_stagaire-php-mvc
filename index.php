<?php
require_once "controllers/stagaireController.php " ;

if(isset($_GET["page"])){
    $page=$_GET["page"];
    switch ($page) {
        case 'list':
            index();
            break;
        case 'create':
            create();
            break;
        case 'edit':
            edit();
            break;
        case 'store':
            store();
            break;
        case 'update':
            update();
            break;
        case 'destroy':
            destroy();
            break;
    
    }
    
}
?>
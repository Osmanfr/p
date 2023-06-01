<?php 
    $rep=filter_input(INPUT_GET, "rep");
    switch ($rep) {
        case "": 
            include "index.php";
            break;
            case "style/style.css":
        header("Content-type: text/css");
            include "../view/style.css";
            break; 
        case "update.php";
        
           include "../view/menus.php";
            break;  
            include "view.php";
            /* $commandes=new commandes();
            $list=$commandes->list(); */
        default:
            echo "Bienvenus!";
            break;
    }
<?php
global $params;

//check if user has role member
if (!isMember()) {
    logout();
    header ("location:/home");
} else {
    /* $params[2] is de action
       $params[3] is een getal die de delete action nodig heeft
    */
    switch ($params[2]) {

        case 'home':
            include_once "../Templates/member/memberhome.php";
            break;
        case 'logout':
            logout();
            header("Location: /home");
            break;

        default:
            break;
    }
}
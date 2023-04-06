<?php
require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';

session_start();
//var_dump($_SESSION);
//var_dump($_POST);
$message="";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
print_r($request);
$title = "Marvel";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        //var_dump($products);die;
        include_once "../Templates/categories.php";
        break;

    case 'admin':
        include_once "admin.php";
        break;

    case 'category':
        break;

    case 'login':
        $titleSuffix = ' | Login';
        if(isset($_POST['login'])){
            $result = checkLogin();
            switch ($result){
                case 'MEMBER':
                    header("Location: /member/home");
                    break;
                case 'FAILURE':
                    $message = "Email en/of wachtwoord kloppen niet";
                    include_once "../Templates/inloggen.php";
                    break;
                case 'INCOMPLETE':
                    $message = "Formulier niet volledig ingevuld";
                    include_once "../Templates/inloggen.php";
                    break;
            }
        }
        else {
            include_once "../Templates/inloggen.php";
        }
        break;

    case 'member':
        header("Location: /home");
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}








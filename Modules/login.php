<?php

function checkLogin():string
{
    global $pdo;
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if($email !== false && !empty($password)){
        $query = $pdo->prepare("SELECT * FROM `user` WHERE `email` = :u AND `password` = :p");
        $query->bindParam(':u', $email);
        $query->bindParam(':p', $password);
        $query->setFetchMode(PDO::FETCH_CLASS, 'User');
        $query->execute();
        $user = $query->fetch();

        if($user){
            $_SESSION['user'] = $user;
            if($_SESSION['user']->role == "member"){
                return "MEMBER";
            }
            else{
                return "INCOMPLETE";
            }
        }
        return "FAILURE";
    }
    return "INCOMPLETE";
}

function isAdmin():bool
{
    //controleer of er ingelogd is en de user de rol member heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role == "member")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function isMember():bool
{
    //controleer of er ingelogd is en de user de rol member heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role === "member")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

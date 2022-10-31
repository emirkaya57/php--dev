<?php
session_start();
require 'router.php';
require 'safe.php';

if ($_SERVER["REQUEST_MEtHOD"] == "POST") {
    $username=security($_POST["username"]);
    $password=security($_POST["password"]);
    $databaseUser='admin';
    $databasePass='202cb962ac59075b964b07152d234b70';


    if (empty($username)&& empty($password)) {
        echo('<h3>alanlar boş bırakılmaz</h3>');
        comeback(4);
    }else {
        $password=md5($password);        
        if ($databaseUser != $username || $databasePass != $password) {
            echo("<h2>Kullanıcı adı ve Şifre hatalı..</h2>");
            comeback(3);
        }else {
            session_regenerate_id(true);
            $_SESSION["LogedIn"]=true;
            $_SESSION["username"]=$username;
            $_SESSION["LogedIP"]=$_SERVER["REMOTE_ADDR"];
            $_SESSION["userAgent"]=$_SERVER["HTTP_USER_AGENT"];
            echo 'Giriş Yapıldı Sayfaya Yönlendiriliyorsunuz';
            go('profile.php',3);
        }
    }
}else {
    go("index.php",2);
    exit ('bu sayfaya yetkiniz yok. Yönlendiriliyorsunuz... ');
}

?>
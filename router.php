<?php
function go($url,$time=0){
    if ($time !=0 ) {
        header("Refresh:$time;url=$url");

    }else {
    header("Location:$url");
    }
}


function comeback($time=0){
    $url=$_SERVER["HTTP_RETERER"];
    if ($time !=0) {
        header("Refresh:$time; url=$url");
    }else {
        header("Location:$url");
    }
}
?>
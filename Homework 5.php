<?php
/*  1.  Validate user file using explode methods
accepted types are "csv", "zip"*/
//function
function userFile($file){
    $menu = explode('.',$file);
    $ext = end($menu);

    if ($ext == "csv" && "zip"){
        echo (" <br><br><br><br>You can upload this file <br><br><br><br>");
    } else{
        echo ("<br><br><br><br> You can't upload this file <br><br><br><br>");
}
}
userfile("practice.csv");

/* 2. Create a youtube Thumbnail generator 
	https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg */

    function thumbnail($vdoUrl){
        $youtube = "https://img.youtube.com/vi/<insert-youtube-vdo-id-here>/0.jpg";
        $url_1= explode("?si=",$vdoUrl)[0];
        $array = explode ('/', $url_1);
        $vid_id = end($array);
        $img = str_replace("<insert-youtube-vdo-id-here>", $vid_id, $youtube);
        echo '<img src = " '.$img.'"<br><br>';
     }
thumbnail("https://youtu.be/yTsINmrAK4I?si=dTe7NEyzPkH2F4qG");
    

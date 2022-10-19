<?php 
require_once('../_config.php');
$getAnime = file_get_contents("https://api.consumet.org/meta/anilist/random-anime");
$getAnime = json_decode($getAnime, true);
$id = $getAnime['id'];
$newURL = "$websiteUrl/anilist/anime?id=$id";
header('Location: '.$newURL);
?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7019583978897934"
    crossorigin="anonymous"></script>
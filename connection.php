<?php
const host ="localhost:3307";
const username ="root";
const password ="roopass";
const database ="webproj";
$baglanti =mysqli_connect(host, username, password, database);

if(mysqli_connect_errno()>0){
    die ("hata:".mysqli_connect_errno());
}
?>
<?php
  session_start();

  function connect() {
    return new PDO("mysql:dbname=shop", "root");
  }

  function img_tag($code) {
    if (file_exists("/shop/images/$code.jpg")) $name = $code;
    else $name = 'noimage';
    return '<img src="/shop/images/' . $name . '.jpg" alt="">';
  }
?>

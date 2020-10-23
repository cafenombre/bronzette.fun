<?php
include('../config/db.php');
//Ajout d'un build
if (isset($_POST["build"]))
{
  addBuild($conn, $_POST["build"], $_POST["type"]);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

if (isset($_POST["deletebuild"]))
{
    delBuild($conn, $_POST["deletebuild"]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
<?php

require('conex.php');

$id = $_GET['id'];

$sql = 'DELETE FROM portfolio WHERE id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: paraport.php");
}
// ___________________________________________________________
$id = $_GET['id'];

$sql = 'DELETE FROM about WHERE id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: parabout.php");
}
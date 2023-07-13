<?php
$mysqli = new mysqli("localhost","root","","curso");

$id = $_GET['id'];

$sql = "DELETE FROM alumno  WHERE id='$id'";
$query = mysqli_query($mysqli, $sql);

if ($query) {
    Header("Location: ../views/index.php");
}

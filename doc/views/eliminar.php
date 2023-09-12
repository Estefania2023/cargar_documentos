<?php
      include '../includes/db.php';

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM documento WHERE id ='$id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location:index.php");
    }

?>


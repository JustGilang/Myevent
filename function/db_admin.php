<?php
include '../config/config.php';

switch($_GET['act']){
    case 'event_edit' :
        $id = $_POST['id'];
        $e_stats = $_POST['stats'];
        $sql = mysqli_query($conn, "UPDATE _event SET stats='".$e_stats."' WHERE id_event='".$id."' ");
        if($sql){
            header('Location:../users/admin/_event.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/admin/_event.php"
            </script>
            ';
        }
    break;

    case 'event_delete' :
        $sql = mysqli_query($conn,"DELETE FROM _event WHERE id_event='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../users/admin/_event.php');
		}
    break;

    case 'member_edit' :
        $id= $_POST['id'];
        $eo_username = $_POST['username'];
        $eo_password = $_POST['password'];
        $eo_stats = $_POST['stats'];

        $sql = mysqli_query($conn, "UPDATE _member SET 
        m_username='".$m_username."',
        m_password='".$m_password."', 
        stats='".$m_stats."' WHERE id_member='".$id."'
        ");
        if($sql){
            header('Location:../users/admin/_member.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/admin/_member.php"
            </script>
            ';
        }
    break;

    case 'member_delete' :
        $sql = mysqli_query($conn,"DELETE FROM _member WHERE id_member='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../users/admin/_member.php');
		}
    break;

    case 'eo_edit' :
        $id= $_POST['id'];
        $eo_username = $_POST['username'];
        $eo_password = $_POST['password'];
        $eo_stats = $_POST['stats'];

        $sql = mysqli_query($conn, "UPDATE _eo SET 
        eo_username='".$eo_username."',
        eo_password='".$eo_password."',
        stats='".$eo_stats."' WHERE id_eo='".$id."'
        ");
        if($sql){
            header('Location:../users/admin/_eo.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/admin/_eo.php"
            </script>
            ';
        }
    break;

    case 'eo_delete' :
        $sql = mysqli_query($conn,"DELETE FROM _eo WHERE id_eo='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../users/admin/_eo.php');
		}
    break;
}
?>
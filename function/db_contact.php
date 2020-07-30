<?php
include '../config/config.php';

switch($_GET['act']){
    case 'contact_add':
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subjek = $_POST['subjek'];
        $pesan = $_POST['pesan'];
        
        $sql = mysqli_query($conn, "INSERT INTO _contact (firstname, lastname, email, subjek, pesan) VALUES
        ('".$firstname."', '".$lastname."', '".$email."', '".$subjek."', '".$pesan."')");
        
        if($sql){
            echo '
            
                Berhasil menambahkan data
            
            ';
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "Location:index.php"
            </script>
            ';
        }
    break;
}
?>
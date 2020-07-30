<?php
include '../config/config.php';
switch($_GET['act']){
    
    case 'register' :
        $r_id = $_POST['id'];
        $r_username = $_POST['username'];
        $r_email = $_POST['email'];
        $r_pass = $_POST['pass'];
        $_blank = '-';
        $r_stats = 'AKTIF';

        $sql = mysqli_query($conn, "INSERT INTO _member (id_member, m_nama, m_jenkel, m_tgl_lahir, m_email, m_cp, m_nama_instansi, m_alamat, m_photo, m_username, m_password, stats) VALUES 
        ('".$r_id."', '".$_blank."', '".$_blank."', '".$_blank."', '".$r_email."', '".$_blank."', '".$_blank."', '".$_blank."', '".$_blank."', '".$r_username."', '".$r_pass."', '".$r_stats."') ");

        if($sql){
            header('Location:../users/member/_login.php?msg=registrasi Berhasil');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/member/_login.php?msg=registrasi gagal"
            </script>
            ';
        }
    break;

    case 'trans_add' :

        //menentukan file upload 
        $target_dir = "../img/transaksi/";//alamat lokasi folder gmbr akan disimpan
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);//detail spesifikasi lokasi dan nama file
        $uploadOk=1;

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                //Proses Files and DB
                //Files Data
                $fil_name=$_FILES["foto"]["name"];
                
                $id = $_POST['id'];
                $id_booking = $_POST['id_booking'];
                $tanggal = $_POST['tanggal'];
                $waktu = $_POST['waktu'];
                $file = "-";
                $nominal = $_POST['nominal'];
                $status = "pending";
                
                //Inserting Database
                $sql = mysqli_query($conn, "INSERT INTO _transaksi (id_transaksi, id_booking, t_tanggal, t_waktu, t_gambar, t_nominal) VALUES 
                    ('".$id."', '".$id_booking."', '".$tanggal."', '".$waktu."', '".$fil_name."', '".$nominal."') ");
        
                if(!$sql){
                    echo 'mysqli Error!';
                    mysqli_close($conn);
                    exit;
                }

                $update = mysqli_query($conn, "UPDATE _booking SET stats='".$status."' WHERE id_booking = '".$id_booking."' ");
                echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
                header( "refresh:3;url=../users/member/_profile_event.php?msg=data transaksi sukses" );
                echo 'You\'ll be redirected in about 3 secs. If not, click <a href="../users/member/_profile_event.php?msg=data transaksi sukses">here</a>.';
            } else {
                echo 'Sorry, there was an error uploading your file, , click <a href="../users/member/_profile_event.php?msg=data transaksi sukses">here</a>.';
            }
        }
    break;

    case 'book_add' :
        $id = $_POST['id'];
        $id_member = $_POST['id_member'];
        $id_event = $_POST['id_event'];
        $waktu = $_POST['waktu'];
        $tanggal = $_POST['tanggal'];
        $status = 'belum terbayar';

        if($id_member == null){
            echo '
                <script>
                    alert("Login Dulu !");
                    window.location = "Location:../users/member/_login.php"
                </script>
            ';
        } else {
            $sql = mysqli_query($conn, "INSERT INTO _booking (id_booking, id_member, id_event, b_waktu, b_tgl, stats) VALUES 
            ('".$id."', '".$id_member."', '".$id_event."', '".$waktu."', '".$tanggal."', '".$status."') ");

            if($sql){
                header('Location:../users/member/_profile_event.php?msg=Event Ditambahkan');
            } else {
                echo '
                <script>
                    alert("Gagal menambahkan data !");
                    window.location = "../index.php"
                </script>
                ';
            }
        }
        
    break;

    case 'book_delete' :
        $sql = mysqli_query($conn, "DELETE FROM _booking WHERE id_booking='".$_GET['id']."' ");
		if (isset($sql)) {
			# code...
			header('Location:../users/member/_profile_event.php?msg=Event Ditambahkan');
		}
    break;

    case 'p_info':
        $m_id = $_POST['id'];
        $m_nama = $_POST['nama'];
        $m_jenkel = $_POST['jenkel'];
        $m_email = $_POST['email'];
        $m_cp = $_POST['cp'];
        $m_alamat = $_POST['alamat'];
        $m_instansi = $_POST['instansi'];
        $m_kta = $_POST['kta'];
        $m_tanggal = $_POST['tanggal'];

        $sql = mysqli_query($conn, "UPDATE _member SET
        m_nama = '".$m_nama."',
        m_jenkel = '".$m_jenkel."',
        m_email = '".$m_email."',
        m_cp = '".$m_cp."',
        m_alamat = '".$m_alamat."',
        m_nama_instansi = '".$m_instansi."',
        m_no_identitas = '".$m_kta."', 
        m_tgl_lahir = '".$m_tanggal."' WHERE id_member = '".$m_id."' ");

        //menentukan file upload 
        $target_dir = "gambar/";//alamat lokasi folder gmbr akan disimpan
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);//detail spesifikasi lokasi dan nama file
        $uploadOk=1;

        if (file_exists($target_file)) {
            header('Location:../users/member/_profile_info.php');
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            header('Location:../users/member/_profile_info.php');
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                //Proses Files and DB
                //Files Data
                $fil_name=$_FILES["foto"]["name"];
                
                //Inserting Database
                $sql = mysqli_query($conn, "UPDATE _member SET 
                    m_photo='".$fil_name."' WHERE id_member='".$m_id."' ");
                if(!$sql){
                    echo 'mysqli Error!';
                    mysqli_close($conn);
                    exit;
                }

                echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
                header( "refresh:3;url=../users/member/_profile_info.php" );
                echo 'You\'ll be redirected in about 3 secs. If not, click <a href="../users/member/_profile_info.php">here</a>.';
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    break;

    case 'p_secure':
        $m_id = $_POST['id'];
        $m_username = $_POST['username'];
        $m_password = $_POST['password'];

        $sql = mysqli_query($conn, "UPDATE _member SET m_username = '".$m_username."', m_password = '".$m_password."' WHERE id_member = '".$m_id."' ");
        if($sql){
            header('Location:../users/member/_profile_secure.php?msg= Data Updated');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/member/_profile_secure.php"
            </script>
            ';
        }
    break;
}
?>
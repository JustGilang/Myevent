<?php
include '../config/config.php';

switch($_GET['act']){
    case 'register' :
        $r_id = $_POST['id_eo'];
        $r_username = $_POST['username'];
        $r_email = $_POST['email'];
        $r_pass = $_POST['pass'];
        $_blank = '-';
        $r_stats = 'AKTIF';

        $sql = mysqli_query($conn, "INSERT INTO _eo (id_eo, eo_nama, eo_email, eo_cp, eo_instansi, eo_nama_kampus, eo_photo, eo_username, eo_password, stats) VALUES
        ('".$r_id."', '".$_blank."', '".$_blank."', '".$_blank."', '".$_blank."', '".$_blank."', '".$_blank."', '".$r_username."', '".$r_pass."', '".$r_stats."') ");
        
        if($sql){
            header('Location:../users/eo/_login.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "Location:../users/eo/_login.php"
            </script>
            ';
        }
    break;

    case 'event_add' :
        //menentukan file upload 
        $target_dir = "gambar/";//alamat lokasi folder gmbr akan disimpan
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);//detail spesifikasi lokasi dan nama file
        $uploadOk=1;

        // Check if file already exists
        if (file_exists($target_file)) {
            header( "url=../users/eo/_profile_event.php?alert=data sudah ada" );
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            header( "url=../users/eo/_profile_event.php?alert=error" );
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                //Proses Files and DB
                //Files Data
                $fil_name=$_FILES["foto"]["name"];

                $id = $_POST['id'];
                $id_eo = $_POST['id_eo'];
                $e_kategori = $_POST['kategori'];
                $e_judul    = $_POST['judul'];
                $e_kota = $_POST['kota'];
                $e_waktu    = $_POST['waktu'];
                $e_tenggal  = $_POST['tanggal'];
                $e_tempat   = $_POST['tempat'];
                $e_htm      = $_POST['harga'];
                $e_desc     = $_POST['desc'];
                $e_kuota     = $_POST['kuota'];
                //$e_gambar   = $_POST['e_gambar'];
                $_blank      = '-';
                $stats      = 'Pending';
                
                //Inserting Database
                $sql = mysqli_query($conn, "INSERT INTO _event (id_event, id_eo, e_kategori, e_judul, e_kota, e_waktu, e_tanggal, e_tempat, e_htm, e_desc, e_gambar, e_kuota, stats) VALUES
                ('".$id."', '".$id_eo."', '".$e_kategori."', '".$e_judul."', '".$e_kota."', '".$e_waktu."', '".$e_tenggal."', '".$e_tempat."', '".$e_htm."', '".$e_desc."', '".$fil_name."', '".$e_kuota."', '".$stats."')");
                if(!$sql){
                    echo 'mysqli Error!';
                    mysqli_close($conn);
                    exit;
                }

                echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
                header( "refresh:3;url=../users/eo/_profile_event.php?alert=berhasil" );
                echo 'You\'ll be redirected in about 3 secs. If not, click <a href="/toko/?halaman=pesanin">here</a>.';
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    break;

    case 'event_edit' :

        $id         = $_POST['id'];
        $e_kategori = $_POST['kategori'];
        $e_judul    = $_POST['judul'];
        $e_kota     = $_POST['kota'];
        $e_waktu    = $_POST['waktu'];
        $e_tenggal  = $_POST['tanggal'];
        $e_tempat   = $_POST['tempat'];
        $e_htm      = $_POST['harga'];
        $e_desc     = $_POST['desc'];
        $e_kuota    = $_POST['kuota'];
                
        //Inserting Database
        $sql = mysqli_query($conn, "UPDATE _event SET 
            e_kategori='".$e_kategori."',
            e_kota = '".$e_kota."',
            e_judul='".$e_judul."',
            e_kota = '".$e_kota."',
            e_waktu='".$e_waktu."',
            e_tanggal='".$e_tenggal."',
            e_tempat='".$e_tempat."',
            e_htm='".$e_htm."',
            e_desc='".$e_desc."',
            e_kuota='".$e_kuota."' WHERE id_event='".$id."' ");

        //menentukan file upload 
        $target_dir = "gambar/";//alamat lokasi folder gmbr akan disimpan
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);//detail spesifikasi lokasi dan nama file
        $uploadOk=1;

        // Check if file already exists
        if (file_exists($target_file)) {
            header('Location:../users/eo/_profile_event.php');
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            header('Location:../users/eo/_profile_event.php');
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                //Proses Files and DB
                //Files Data
                $fil_name=$_FILES["foto"]["name"];
                
                //Inserting Database
                $sql = mysqli_query($conn, "UPDATE _event SET 
                    e_gambar='".$fil_name."' WHERE id_event='".$id."' ");
                if(!$sql){
                    echo 'mysqli Error!';
                    mysqli_close($conn);
                    exit;
                }

                echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
                header( "refresh:3;url=../users/eo/_profile_event.php?alert=berhasil" );
                echo 'You\'ll be redirected in about 3 secs. If not, click <a href="/toko/?halaman=pesanin">here</a>.';
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    break;

    case 'event_delete' :
        $sql = mysqli_query($conn,"DELETE FROM _event WHERE id_event='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../users/eo/_profile_event.php');
		}
    break;

    case 'trans_edit' :
        $id = $_POST['id'];
        $stats = $_POST['stats'];
        $sql = mysqli_query($conn, "UPDATE _booking SET stats='".$stats."' WHERE id_booking ='".$id."'");
        if($sql){
            $koplo = mysqli_query($conn, "SELECT * FROM _booking WHERE id_booking = '$id'");
            $d = mysqli_fetch_array($koplo);
            $trans = mysqli_query($conn, "SELECT * FROM _event WHERE id_event = '".$d['id_event']."'");
            $data = mysqli_fetch_array($trans);
            $tambah = $data['e_kuota'] - 1;
            $update = mysqli_query($conn, "UPDATE _event SET e_kuota='".$tambah."' WHERE id_event='".$data['id_event']."'");
            header('Location:../users/eo/_profile_transaksi_dtl.php?id='.$d['id_event']);
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/eo/_profile_transaksi_dtl.php"
            </script>
            ';
        }
    break;

    case 'trans_delete' :
        $sql = mysqli_query($conn,"DELETE FROM _transaksi WHERE id_transaksi='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../users/eo/_profile_transaksi.php');
		}
    break;

    case 'p_info' :
        $eo_id = $_POST['id'];
        echo $eo_id;
        $eo_nama = $_POST['nama'];
        echo $eo_nama;
        $eo_email = $_POST['email'];
        echo $eo_email;
        $eo_cp = $_POST['cp'];
        echo $eo_cp;
        $eo_instansi = $_POST['instansi'];
        echo $eo_instansi;
        $eo_univ = $_POST['universitas'];
        echo $eo_univ;
        $eo_kta = $_POST['kta'];
        echo $eo_kta;

        $sql = mysqli_query($conn, "UPDATE _eo SET
        eo_nama = '".$eo_nama."',
        eo_email = '".$eo_email."',
        eo_cp = '".$eo_cp."',
        eo_instansi = '".$eo_instansi."',
        eo_nama_kampus = '".$eo_univ."',
        eo_no_identitas = '".$eo_kta."' WHERE id_eo = '".$eo_id."' ");
        if($sql){
            header('Location:../users/eo/_profile_info.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/eo/_profile_info.php"
            </script>
            ';
        }
    break;

    case 'p_secure' :
        $eo_id = $_POST['id'];
        $eo_username = $_POST['username'];
        $eo_pass = $_POST['pass'];

        $sql = mysqli_query($conn, "UPDATE _eo SET
        eo_username = '".$eo_username."',
        eo_password = '".$eo_pass."' WHERE id_eo = '".$eo_id."' ");
        if($sql){
            header('Location:../users/eo/_profile_secure.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../users/eo/_profile_secure.php"
            </script>
            ';
        }
    break;
}
?>
<?php 
  include '../config/config.php';
  session_start();
  
  $usrnm = $_POST['username'];
  $pass  = $_POST['pass'];
  
  $query_adm  = mysqli_query($conn, "SELECT id_adm FROM _admin WHERE username='$usrnm'");
  $query_eo   = mysqli_query($conn, "SELECT id_eo FROM _eo WHERE eo_username='$usrnm'");
  $query_mmbr = mysqli_query($conn, "SELECT id_member FROM _member WHERE m_username='$usrnm'");

  $count1 = mysqli_num_rows($query_adm);
  $count2 = mysqli_num_rows($query_eo);
  $count3 = mysqli_num_rows($query_mmbr);

  if($count1 > 0){
    $queryId = mysqli_query($conn, "SELECT id_adm FROM _admin WHERE username='$usrnm' AND pass='$pass'");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Email Atau Password Salah.");
          window.location = "../index.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id_adm'] = $arrayId['id_adm'];
      $_SESSION['status'] = "login";
      if(isset($_SESSION['id_adm'])){
        echo '
        <script>
          alert("Login Sukses!");
          window.location = "../users/admin/index.php"
        </script>
        ';
      }
    }
  } elseif ($count2 > 0){
    $queryId = mysqli_query($conn, "SELECT id_eo FROM _eo WHERE eo_username='$usrnm' AND eo_password='$pass'");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Email Atau Password Salah.");
          window.location = "../index.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id_eo'] = $arrayId['id_eo'];
      $_SESSION['status'] = "login";
      if(isset($_SESSION['id_eo'])){
        echo '
        <script>
          alert("Login Sukses!");
          window.location = "../users/eo/index.php"
        </script>
        ';
      }
    }
  } elseif($count3 > 0){
    $queryId = mysqli_query($conn, "SELECT id_member FROM _member WHERE m_username='$usrnm' AND m_password='$pass'");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Email Atau Password Salah.");
          window.location = "../index.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id_member'] = $arrayId['id_member'];
      $_SESSION['status'] = "login";
      if(isset($_SESSION['id_member'])){
        header('Location: ../index.php?masuk');
      }
    }
  } else {
    echo '
      <script>
        alert("Email tidak terdaftar.");
        window.location = "../index.php"
      </script>
    ';
  }
?>
<?php
include '../../config/config.php';
?>
<?php
$q=mysqli_query($conn, "SELECT * FROM _transaksi WHERE id_booking='".$_GET['id']."'");
$r=mysqli_fetch_array($q);

$q1=mysqli_query($conn, "SELECT * FROM _booking WHERE id_booking='".$r['id_booking']."'");
$r1=mysqli_fetch_array($q1);

$q2=mysqli_query($conn, "SELECT * FROM _member WHERE id_member='".$r1['id_member']."'");
$r2=mysqli_fetch_array($q2);

$q3=mysqli_query($conn, "SELECT * FROM _event WHERE id_event='".$r1['id_event']."'");
$r3=mysqli_fetch_array($q3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
@import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);
*{
  margin: 0;
  box-sizing: border-box;

}
body{
  background: #E0E0E0;
  font-family: 'Roboto', sans-serif;
  background-image: url('');
  background-repeat: repeat-y;
  background-size: 100%;
}
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}

#invoiceholder{
  width:100%;
  hieght: 100%;
  padding-top: 50px;
}
#headerimage{
  z-index:-1;
  position:relative;
  top: -50px;
  height: 350px;
  background-image: url('http://michaeltruong.ca/images/invoicebg]].jpg');

  -webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), inset 0 -2px 4px rgba(0,0,0,.15);
	-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), inset 0 -2px 4px rgba(0,0,0,.15);
	box-shadow:inset 0 2px 4px rgba(0,0,0,.15), inset 0 -2px 4px rgba(0,0,0,.15);
  overflow:hidden;
  background-attachment: fixed;
  background-size: 1920px 80%;
  background-position: 50% -90%;
}
#invoice{
  position: relative;
  top: 20px;
  margin: 0 auto;
  width: 700px;
  background: #FFF;
}

[id*='invoice-']{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
  padding: 30px;
}

#invoice-top{min-height: 120px;}
#invoice-mid{min-height: 120px;}
#invoice-bot{ min-height: 250px;}

.logo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
	background-size: 60px 60px;
}
.clientlogo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  float:left;
  margin-left: 20px;
}
.title{
  float: right;
}
.title p{text-align: right;}
#project{margin-left: 52%;}
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  padding: 5px 0 5px 15px;
  border: 1px solid #EEE
}
.tabletitle{
  padding: 5px;
  background: #EEE;
}
.service{border: 1px solid #EEE;}
.item{width: 50%;}
.itemtext{font-size: .9em;}

#legalcopy{
  margin-top: 30px;
}
form{
  float:right;
  margin-top: 30px;
  text-align: right;
}


.effect2
{
  position: relative;
}
.effect2:before, .effect2:after
{
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%;
  top: 100%;
  max-width:300px;
  background: #777;
  -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.effect2:after
{
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}



.legal{
  width:70%;
}
</style>
<body>
<div id="invoiceholder">

<div id="invoice" class="effect2">
  
  <div id="invoice-top">
    <div class="logo"></div>
    <div class="info">
      <h2>Eventkita.my.id</h2>
      <p> eventkita.my.id@gmail.com </br>
          0895 9882 9982
      </p>
    </div><!--End Info-->
    <div class="title">
      <h1>Invoice #<?php echo $r['id_transaksi'];?></h1>
      <p>Issued: <?php echo $r['t_tanggal'];?></p>
    </div><!--End Title-->
  </div><!--End InvoiceTop-->


  
  <div id="invoice-mid">
    
    <div class="clientlogo"></div>
    <div class="info">
      <h2><?= $r2['m_nama']?></h2>
      <p><?= $r2['m_email']?></br>
         +62<?= $r2['m_cp']?></br>
    </div>

    <div id="project">
      <h2>Address :</h2>
      <p><?= $r2['m_alamat']?></p>
    </div>   

  </div><!--End Invoice Mid-->
  
  <div id="invoice-bot">
    
    <div id="table">
      <table>
        <tr class="tabletitle">
          <td class="item" colspan="2"><h2>Event Description</h2></td>
          <td class="Hours" align="right"><h2>Harga</h2></td>
        </tr>
        
        <tr class="service">
          <td class="tableitem" colspan="2"><p class="itemtext"><?php echo $r3['e_judul'];?></p></td>
          <td class="tableitem" align="right"><p class="itemtext"><?php echo $r['t_nominal'];?></p></td>
        </tr>
        
      </table>
    </div><!--End Table-->
    

    
    <div id="legalcopy">
      <p class="legal"><strong>Terima Kasih Telah Membayar !</strong>  Anda dapat menikuti event dengan menunjukan struk pembayaran ini </p><br>
      <a href="_profile_event.php">Kembali</a>
    </div>
    
  </div><!--End InvoiceBot-->
</div><!--End Invoice-->
</div><!-- End Invoice Holder-->
</body>
</html>
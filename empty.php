
<title>Hapus</title>
<body style="background-color:#b3ccff">
<center> 
<h1 style="background-color:DodgerBlue">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN PELAJARAN 2017 </h1> 
<br>




<?php
$host='localhost';
$user='id3330016_irfan';
$pass='12345';
$database='id3330016_dbstbifix';

$conn= new mysqli($host,$user,$pass,$database);
//mysql_select_db();

$query1 = "DELETE FROM `dokumen` WHERE 1";
$query2 = "DELETE FROM `upload` WHERE 1";
$hasil1 = mysqli_query ($conn,$query1);
$hasil2 = mysqli_query ($conn,$query2);

$files = glob('files/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}



 
echo "Data telah dihapus.";
?>

<br>
<a> Kembali ke tabel ? </a> <a href="hasil_tokenisasi.php"> YA </a> 

<h4 style="background-color:DodgerBlue">Irfan Ardhiyanto (15.01.53.0061) <br> Apriana Panca K (15.01.53.0065) <br> Fadilla Maulida (15.01.53.0082)</h4> 
</center>
</body>

<?php


//membuat koneksi ke database
$host='localhost';
$user='id3330016_irfan';
$pass='12345';
$database='id3330016_dbstbifix';

$conn= new mysqli($host,$user,$pass,$database);
//mysql_select_db();
?>

<title>Hasil Tokenisasi</title>
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.upload {background-color: #6666ff ;} 
.upload:hover {background: #b3b3ff;}

.home {background-color: #6666ff ;} 
.home:hover {background: #b3b3ff;}

.kosong {background-color: #ff4d4d;} 
.kosong:hover {background:  #ff0000;}
</style>
<body style="background-color:#b3ccff">
<center> 
<h1 style="background-color:DodgerBlue">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN PELAJARAN 2017 </h1> 
<br>
<input type="button" value="Upload File PDF" onclick="window.open('upload.php')" button class="btn upload">  </button> 
<input type="button" value="Home" onclick="window.open('index.php')" button class="btn home">  </button> <br> <br>
<input type="button" value="Kosongkan Tabel" onclick="window.open('empty.php')" button class="btn kosong">  </button> <br> <br>


<center> 
<h3>
HASIL TOKENISASI DAN STEMMING </h3>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming Nazief Adriani</th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From dokumen" ;  //menampikan SEMUA
$hasil= Mysqli_query ($conn, $queri);    //fungsi untuk SQL
// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil, MYSQLI_ASSOC))

{
$id = $data['dokid'];
 echo "   
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        <td>".$data['tokenstem2']."</td>
        
        </tr> 
        ";
        
}

?>

</table>

<h4 style="background-color:DodgerBlue">Irfan Ardhiyanto (15.01.53.0061) <br> Apriana Panca K (15.01.53.0065) <br> Fadilla Maulida (15.01.53.0082)</h4> 
</center>
</body>
</html>
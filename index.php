<?php
// Parameter untuk database MySQL
$host = "localhost";
$user = "id6675937_gmc";
$pass = "tsani888";
$name  = "id6675937_gmc";
$table= "data";
 
// Baca parameter get  /simpandata.php?suhu=x <===

// Buat koneksi ke database MySQL
$conn = mysqli_connect($host, $user, $pass, $name);
 
// Periksa apakah koneksi sudah berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
 
// Perintah SQL untuk menyimpan data suhu ke tabel sensor
$sql = "SELECT * FROM `data` ";
//INSERT INTO `data` (`id`, `key`, `created_at`, `content`) VALUES (NULL, 'dddd', CURRENT_TIMESTAMP, //'dsfdsfdsfd'), (NULL, 'dssf', CURRENT_TIMESTAMP, 'dssfds')
 
$query = mysqli_query($conn,$sql);
// Jalankan dan periksa apakah perintah berhasil dijalankan

if (mysqli_num_rows($query)>0){
    while ($data = mysqli_fetch_array($query)){
        $slot1 = $data["slot1"];
        $slot2 = $data["slot2"];
        $slot3 = $data["slot3"];
        $slot4 = $data["slot4"];
        $slot5 = $data["slot5"];
    }
}
$now = "SELECT DATE_ADD(`created_at`, INTERVAL 7 HOUR) FROM data ";
$nowquery = mysqli_query($conn,$now);
while ($datanow = mysqli_fetch_array($nowquery)){
    $time = end($datanow);
}
//<meta http-equiv=\"refresh\" content=\"3\">
echo "<html><head> <title>Projek TA</title><style>
  .skillbar{font-family:'Open Sans','sans-serif';position:relative;display:block;margin-bottom:15px;width:100%;background:#eee;height:35px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;-webkit-transition:0.4s linear;-moz-transition:0.4s linear;-ms-transition:0.4s linear;-o-transition:0.4s linear;transition:0.4s linear;-webkit-transition-property:width,background-color;-moz-transition-property:width,background-color;-ms-transition-property:width,background-color;-o-transition-property:width,background-color;transition-property:width,background-color}
  .skillbar-title{position:absolute;left:0;font-weight:bold;font-size:13px;color:#FFFFFF;background:#6adcfa;-webkit-border-top-left-radius:3px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-topleft:3px;-moz-border-radius-bottomleft:3px;border-top-left-radius:3px;border-bottom-left-radius:3px}
  .skillbar-title span{display:block;background:rgba(0,0,0,0.1);padding:0 20px;height:35px;line-height:35px;-webkit-border-top-left-radius:3px;-webkit-border-bottom-left-radius:3px;-moz-border-radius-topleft:3px;-moz-border-radius-bottomleft:3px;border-top-left-radius:3px;border-bottom-left-radius:3px}
  .skillbar-bar{height:35px;background:#6adcfa;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;width:10%;}
  .skill-bar-percent{position:absolute;right:10px;top:0;font-size:11px;height:35px;line-height:35px;color:#444;color:rgba(0,0,0,0.4)}
  </style></head><body><br><div class=\"skillbar-title\" style=\"background:#00CCFF;height:5px;width:400px;left:20%\" align=\"center\"></div><div align=\"center\"><h2>LAHAN PARKIR GAJAH MADA CINEMA</h2></div>
  <div class=\"skillbar-title\" style=\"background:#00CCFF;height:5px;width:400px;left:45%\" align=\"center\"></div><br><br>
  
  <div class=\"skillbar-title\" style=\"background:#FFFFFF;height:100px;width:200px;left:30%;color:#000000\" align=\"LEFT\"><span>Keterangan :</span><span>
  <div class=\"skillbar-title\" style=\"background:#00FF33;height:10px;width:10px;left:5%;top:48%;color:#000000\" align=\"LEFT\"></div> &nbsp; &nbsp; &nbsp; KOSONG
  <div class=\"skillbar-title\" style=\"background:#FF0000;height:10px;width:10px;left:51%;top:48%;color:#000000\" align=\"LEFT\"></div>  &nbsp; &nbsp; &nbsp; &nbsp; TERISI</span></div> ";
   if ($slot3 == 1){
    echo "<div class=\"skillbar-title\" style=\"background:#FF0000;height:100px;width:200px;left:55%\" align=\"center\"><span>SLOT 3</span></div><br><br><br><br><br><br><br><br>";
  }else {
    echo "<div class=\"skillbar-title\" style=\"background:#00FF33;height:100px;width:200px;left:55%\" align=\"center\"><span>SLOT 3</span></div><br><br><br><br><br><br><br><br>";
  }
  if ($slot5 == 1){
    echo "<div class=\"skillbar-title\" style=\"background:#FF0000;height:100px;width:200px;left:30%\" align=\"center\"><span>SLOT 5</span></div>";  
  }else {
    echo "<div class=\"skillbar-title\" style=\"background:#00FF33;height:100px;width:200px;left:30%\" align=\"center\"><span>SLOT 5</span></div>";      
  }
  if ($slot2 == 1){
    echo "<div class=\"skillbar-title\" style=\"background:#FF0000;height:100px;width:200px;left:55%\" align=\"center\"><span>SLOT 2</span></div><br><br><br><br><br><br><br><br>";  
  }else {
    echo "<div class=\"skillbar-title\" style=\"background:#00FF33;height:100px;width:200px;left:55%\" align=\"center\"><span>SLOT 2</span></div><br><br><br><br><br><br><br><br>";      
  }
  if ($slot4 == 1){
    echo "<div class=\"skillbar-title\" style=\"background:#FF0000;height:100px;width:200px;left:30%\" align=\"center\"><span>SLOT 4</span></div>";
  }else {
    echo "<div class=\"skillbar-title\" style=\"background:#00FF33;height:100px;width:200px;left:30%\" align=\"center\"><span>SLOT 4</span></div>";
  }
  if ($slot1 == 1){
    echo "<div class=\"skillbar-title\" style=\"background:#FF0000;height:100px;width:200px;left:55%\" align=\"center\"><span>SLOT 1</span></div><br><br><br><br><br><br><br><br>";  
  }else {
    echo "<div class=\"skillbar-title\" style=\"background:#00FF33;height:100px;width:200px;left:55%\" align=\"center\"><span>SLOT 1</span></div><br><br><br><br><br><br><br><br>";      
  }
  echo "<div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PINTU MASUK&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;PINTU KELUAR</div><br><br> </body></html>";
 
 
echo "Update at : " .$time;
$conn->close();
?>
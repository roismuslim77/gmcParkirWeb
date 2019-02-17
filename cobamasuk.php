<?php 
include "konekk.php";
$mac = $_GET['mca'];
$ip = $_GET['ipa'];
$mydate = gmdate("Y-m-d H:i:s", time()+60*60*7); 
$subnow = (preg_replace('/[^A-Za-z0-9\  ]/', '',substr($mydate,11,8)));
$datenow = (preg_replace('/[^A-Za-z0-9\  ]/', '',substr($mydate,8,2)));
$cekmm = mysqli_query($conn,"select * from member where mac='$mac' && ip='$ip'");
$num = mysqli_num_rows($cekmm);

if ($num == 1){
   // inisialisasi data time in
    $cekin = mysqli_query($conn,"select time_in from timeMember where mac='$mac'");
    $timein = mysqli_num_rows($cekin);
	if ($timein == 0){ //data di table time_member masih kosong
		//input data time in
		echo "ok";
		$input_time = mysqli_query($conn,"INSERT INTO `timeMember`(`idData`, `mac`, `time_in`, `time_out`) VALUES (null,'$mac','$mydate',0)");
	} else { //data di table time_member masih kosong
	    $cektime = mysqli_query($conn,"select time_in from timeMember where mac='$mac'");
	    while ($confg = mysqli_fetch_array($cektime)){
	        $datawaktu = $confg['time_in'];
	    }    
        $dates = (preg_replace('/[^A-Za-z0-9\  ]/', '',substr($datawaktu,8,2)));
	    $subin = (preg_replace('/[^A-Za-z0-9\  ]/', '',substr($datawaktu,11,8)));
	    $waktu = $subnow-$subin;
	    if ($datenow > $dates){
	        echo "next day";
	        $input_time2 = mysqli_query($conn,"INSERT INTO `timeMember`(`idData`, `mac`, `time_in`, `time_out`) VALUES (null,'$mac','$mydate',0)");
	    } if ($datenow == $dates){
	       echo "today";
	       if ($waktu >= 90000){
	           echo "update time out";
	       } else {
	           echo "kurang";
	       }
	    }
	    
		//input data time out
	}
} else {
    echo "notfond";
}

?>
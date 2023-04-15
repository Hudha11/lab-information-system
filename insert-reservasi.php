<?php

include('connection/conn.php');

if(isset($_POST['submit'])) {    
   $nama = $_POST['nama'];
   $nik = $_POST['nik'];
   $tempatLahir = $_POST['tempatLahir'];
   $tglLahir = $_POST['tglLahir'];
   $usia = $_POST['usia'];
   $gender = $_POST['gender'];
   $alamat = $_POST['alamat'];
   $statusNikah = $_POST['statusNikah'];
   $pekerjaan = $_POST['pekerjaan'];
   $golDarah = $_POST['golDarah'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $jamkes = $_POST['jamkes'];
   $noJamkes = $_POST['noJamkes'];

   $jenisPemeriksaan = $_POST['jenisPemeriksaan'];
   $harga = $_POST['harga'];
   $tglDaftar = $_POST['tglDaftar'];
   $tglReservasi = $_POST['tglReservasi'];

   $sql = "INSERT INTO reservasi (nama, nik, tempatLahir, tglLahir, usia, gender, alamat, statusNikah, pekerjaan, golDarah, phone, email, jamkes, noJamkes,
               jenisPemeriksaan, harga, tglDaftar, tglReservasi)
            VALUES ('$nama', '$nik', '$tempatLahir', '$tglLahir', '$usia', '$gender', '$alamat', '$statusNikah', '$pekerjaan', '$golDarah', '$phone', '$email', '$jamkes', '$noJamkes',
               '$jenisPemeriksaan', '$harga', '$tglDaftar', '$tglReservasi')";

   if (mysqli_query($conn, $sql)) {
      $last_id = mysqli_insert_id($conn);
      if($last_id){
         // generate no rm
         $code = rand(1,99999);
         $noRM = "RM_".$code."".$last_id;
         // update progres
         $progres = "O";
         // query
         $queryrsv = "UPDATE reservasi SET noRM = '".$noRM."', progres = '".$progres."' WHERE id = '".$last_id."'";

         $res = mysqli_query($conn, $queryrsv);
      }
      header("Location: confirmation.php");
       
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }
   mysqli_close($conn);
}


?>
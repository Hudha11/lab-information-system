<?php
    include 'connection/conn.php';
	// $conn = dbcon();
    $k = $_POST['x'];
	$sql = "SELECT * FROM pemeriksaan WHERE id ={$k}";
	$result = mysqli_query($conn, $sql);

    while($rows = mysqli_fetch_array($result)) {
        $data['harga'] = $rows["harga"];
    }
    echo json_encode($data);


?>
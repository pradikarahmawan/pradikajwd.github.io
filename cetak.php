<?php

$conn= mysqli_connect("localhost", "root", "", "tiket");
if( isset($_POST["submit"])){
$nama = $_POST['nama'];
$nik = $_POST['identitas'];
$hp = $_POST['hp'];
$wisata = $_POST['destinasi'];
$tanggal = $_POST['tgl'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];
$hdewasa = $_POST['hardewasa'];
$hanak = $_POST['haranak'];
$total = $_POST['jumlah'];

$query = "INSERT INTO pesan
            VALUES
            ('$nama','$nik','$hp','$wisata','$tanggal','$dewasa','$anak','$hdewasa', '$hanak', '$total')";
$hasil= mysqli_query($conn, $query);
{
	echo "<table> <tr> <td> <h1> Kartu Pemesanan </h1> </tr>";
    echo " <tr> <td> Nama Pemesan  </td> <td>: " . $nama. "<br> </td> </tr> ";
    echo " <tr> <td> Nomor Identitas  </td> <td>: " . $nik. "<br> </td> </tr>";
    echo " <tr> <td> No HP  </td> <td>: " . $hp. "<br> </tr> </td>";
    echo " <tr> <td> Tempat Wisata  </td> <td>: " . $wisata. "<br> </td></tr>";
    echo " <tr> <td> Tanggal Kunjungan  </td> <td>: " . $tanggal. "<br> </td></tr>";
    echo " <tr> <td> Pengunjung Dewasa  </td> <td>: " . $dewasa. "<br> </td></tr>";
    echo " <tr> <td> Pengunjung Anak Anak  </td> <td>: " . $anak. "<br> </td></tr>";
    echo " <tr> <td> Harga Tiket Dewasa  </td> <td>: " . $hdewasa. "<br> </td></tr>";
    echo " <tr> <td> Harga Tiket Anak  </td> <td>: " . $hanak. "<br> </td></tr>";
    echo " <tr> <td> Total Harga  </td> <td>: " . $total. "</td> </tr>";
    echo "</table>";
}
}
?>
<script>	  
		window.print();
	</script>
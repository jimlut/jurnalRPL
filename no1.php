<form method="POST">
<input type="number" name="num" />
<input type="submit" name="submit" />
</form>
<?php
if (isset($_POST['submit'])) $input = $_POST['num']; 
else $input = 1 ;

$input1 = 4;
$input2 = 7; 

echo "Input $input : ";
showData($input); 



function showData($n) {  
	$angka_sebelumnya=0;
	$angka_sekarang=1;
	echo "$angka_sebelumnya $angka_sekarang";
	for ($i=0; $i<$n; $i++)
	{
 		 // hitung angka yang akan ditampilkan
  		$output = $angka_sekarang + $angka_sebelumnya;
  		echo " $output";
  
  		//siapkan angka untuk perhitungan berikutnya
  		$angka_sebelumnya = $angka_sekarang;
  		$angka_sekarang = $output;
	}

	echo "<br>";
}


?>

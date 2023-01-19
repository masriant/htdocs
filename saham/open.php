<!DOCTYPE html>
<html>
<head>
	<title>Transaksi Lot Saham</title>
	<link rel="stylesheet" type="text/css" href="css/cssnya.css"> 
</head>
<body>
	
	<div class="kotak">
		<!-- <div class="border">
			<?php include 'fungsi.php' ?>
		</div> -->
		<form class="inputan" action="open.php" method="POST">
			<h2>Program Menghitung LOT Saham</h2>
			<input type="number" name="lot" placeholder="masukkan jumlah lot" autofocus>
			<input type="number" name="harga" placeholder="masukkan harga saham">
			<input type="submit" name="hitung" value="Hitung Volume">
		</form>
		<div class="hasil">
		<?php 
			$lot=$_POST["lot"];
			$harga=$_POST["harga"];
			$volum=$lot*$harga*100;
			$feebuy=($lot*$harga*100)*(0.15/100);
			$feesell=($lot*$harga*100)*(0.25/100);
			$buy=$volum+$feebuy;
			$sell=$volum-$feesell;

 
			
			
            // echo "Lot Awal Offer = ";
            // echo number_format("$offer"), "<br/><br/>";




            $t = $harga;
            if($t < 200){
                echo "1";
            }elseif($t < 500 ){
                echo "2";
            }elseif($t < 2000 ){
                echo "5";
            }elseif($t < 5000 ){
                echo "10";
            }else{
                echo "25";
            }



            $bid=$harga-$t;
            echo "Lot Awal Bid = ";
            echo number_format("$bid"), "<br/><br/>";











            // echo "Lot Bid Level 9 = ";
            // echo number_format("$lot"), "<br/><br/>";


            // echo "Jumlah Lot = ";
			// echo number_format("$lot");
			// echo " x Rp. ";
			// echo number_format("$harga");
			// echo " /lembar Saham<br/>";
			    // echo "Total = Rp.$volum Lembar<br/>";
			// echo "Total Rp. ";
            // echo number_format("$volum"), "<br/>";
			    // echo number_format("$volum",2);



            // echo "Fee Beli 0.15% : ";
			// echo number_format("$feebuy",2);
			// echo " - Bayar : ";
			// echo number_format("$buy",2), "<br/>";
			// echo " Fee Jual 0.25% : ";
			// echo number_format("$feesell",2);
			// echo " - Terima : ";
			// echo number_format("$sell",2);
			
		exit();
		?>
		</div>
	</div>
</body>
</html>

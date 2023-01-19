<html>
<head>
<script>

function startCalc()
{interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.jumlah_lot.value;
two = document.autoSumForm.harga_saham5.value;
three = document.autoSumForm.harga_saham1.value;
four = document.autoSumForm.harga_saham3.value;
five = document.autoSumForm.total.value;

// three = document.autoSumForm.angka1.value; 
// three = document.autoSumForm.angka2.value; 
// four = document.autoSumForm.angka3.value; 

document.autoSumForm.lima.value = one * (1);
document.autoSumForm.satu.value = one * (1/5);
document.autoSumForm.tiga.value = one * (3/5);


document.autoSumForm.lima5.value = (two * 100) * (one * 1);
document.autoSumForm.satu1.value = (three * 100) * (one * 1/5);
document.autoSumForm.tiga3.value = (four * 100) * (one * 3/5);

document.autoSumForm.total.value = ((two * one) + (three * (one * 1/5)) + (four * (one * 3/5)))*100 ;



}
function stopCalc()
{clearInterval(interval);}


</script>

<link rel="stylesheet" type="text/css" href="css/cssnya.css"> 
</head>

<body bgcolor="#E6E6FA">
    <div class="kotak1">
<form name='autoSumForm'>
<table border='0' width='80%'  align='center' >

<tr>
<td><b>Jumlah Lot</b> </td>
<td><input type='number' name='jumlah_lot' style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();" autofocus /></td>
</tr>
<tr>
<td><b>Harga</b> </td>
<td><input type='text' name='harga_saham5' value="Harga 1" style="text-align:right;"  size='23'   onFocus="startCalc();" onBlur="stopCalc();" /></td>
<td><input type='text' name='harga_saham1' value="Harga 2" style="text-align:right;"  size='23'   onFocus="startCalc();" onBlur="stopCalc();" /></td>
<td><input type='text' name='harga_saham3' value="Harga 3" style="text-align:right;"  size='23'   onFocus="startCalc();" onBlur="stopCalc();" /></td>
</tr>






<!-- <tr>
<td><b></b> </td>
<td><input type='hidden' name="feebuy" value="1" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
</tr>
<tr>
<td><b></b> </td>
<td><input type='hidden' name="feesell" value="1" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
</tr> -->



<tr>
<td><b>Buy Lot</b></td>
<td><input type=text value='0' name="lima" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input type=text value='0' name="satu" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input type=text value='0' name="tiga" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>


<!-- <td><input readonly type='text' name="angka1" value="Buy Offer" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td> -->
<!-- <td><input readonly type=text value='0' name="lima5" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td> -->
</tr>

<tr>
<td><b>Intruksi</b></td>
<td><input readonly type='text' name="angka1" value="Buy Offer" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
<td><input readonly type='text' name="angka2" value="Buy Bid Level 1" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
<td><input readonly type='text' name="angka3" value="Buy Bid level 9" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
<!-- <td><input readonly type=text value='0' name="satu" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td> -->
<!-- <td><input readonly type=text value='0' name="satu1" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td> -->
</tr>

<tr>
<td><b>Total</b></td>
<td><input readonly type=text value='0' name="lima5" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input readonly type=text value='0' name="satu1" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input readonly type=text value='0' name="tiga3" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<!-- <td><input readonly type=text value='0' name="tiga" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td> -->
<!-- <td><input type='text' name="angka3" value="Buy Bid 9" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td> -->
</tr>

<tr>
<td><b>Total Equity Asset</b></td>
<td><input readonly type="text" value='0' name="total" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<!-- <td><input readonly type=text value='0' name="satu1" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input readonly type=text value='0' name="tiga3" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td> -->
<!-- <td><input readonly type=text value='0' name="tiga" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td> -->
<!-- <td><input type='text' name="angka3" value="Buy Bid 9" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td> -->
</tr>



<tr><td colspan='2'>
</td></tr>
</table>
</form>
</div>


<div class="kotak">
<form class="inputan" action="openlow.php" method="POST">
            <h2>Program LOT Saham</h2>
            <input type="number" name="lot" placeholder="masukkan jumlah lot" autofocus>
            <input type="number" name="harga" placeholder="masukkan harga saham">
            <input type="submit" name="hitung" value="Hitung Volume">
        </form>
        <div class="hasil">
        <?php
        $lot=$_POST["lot"];
        $harga=$_POST["harga"];
        $volum=$lot*$harga*100;
        


        $k=$harga;
        if($k <= 200){
            echo "1";
        }elseif($k <= 500 ){
            echo "2";
        }elseif($k <= 2000 ){
            echo "5";
        }elseif($k <= 5000 ){
            echo "10";
        }else{
            echo "25";
        };

    $bid=$harga-$k;

    foreach ($list as $peserta_oa) {
        switch ($peserta_oa->status_tes) {
            case 1: $hasil = 'SELESAI'; break;
            case 2: $hasil = 'ON PROGRESS'; break;
            default: $hasil = 'BELUM DIKERJAKAN'; break;
        }
            $row[] = $hasil;
    }
        
        echo "<br>";
        echo " $bid <br>";


        echo "<br>";

            echo "Jumlah Lot = ";
			echo number_format("$lot");
			echo " x Rp. ";
			echo number_format("$harga");
			echo " /lembar Saham<br/>";
			    // echo "Total = Rp.$volum Lembar<br/>";
			echo "Total Rp. ";
            echo number_format("$volum"), "<br/>";
			    // echo number_format("$volum",2);


        exit();
        ?>
        </div>
        

<!-- <form action="">
    <?php
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
    

    ?> -->
    
</form>




</body>
</html>
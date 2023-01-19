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


</head>
<body bgcolor="#E6E6FA">
<form name='autoSumForm' >
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

<tr>
<td><b>Buy Lot</b></td>
<td><input type=text value='0' name="lima" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input type=text value='0' name="satu" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input type=text value='0' name="tiga" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
</tr>

<tr>
<td><b>Intruksi</b></td>
<td><input readonly type='text' name="angka1" value="Buy Offer" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
<td><input readonly type='text' name="angka2" value="Buy Bid Level 1" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
<td><input readonly type='text' name="angka3" value="Buy Bid level 9" style="text-align:right;"  size='23'  onFocus="startCalc();" onBlur="stopCalc();"  /></td>
</tr>

<tr>
<td><b>Total</b></td>
<td><input readonly type=text value='0' name="lima5" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input readonly type=text value='0' name="satu1" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
<td><input readonly type=text value='0' name="tiga3" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
</tr>

<tr>
<td><b>Total Equity Asset</b></td>
<td><input readonly type="text" value='0' name="total" size='23' onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
</tr>



<tr><td colspan='2'>
</td></tr>
</table>
</form>

</body>
</html>
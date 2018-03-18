<form action="ogrencibilgisi.php" method="POST">
<table border="1" align="center">
<th colspan="2">Ogrenci Bilgisi</th>
<tr>
	<td>Adi:</td>
	<td><input type="text" name="adi"></td>
</tr>
<tr>
	<td>Soyadi:</td>
	<td><input type="text" name="soyadi"></td>
</tr>
<tr>
	<td>Ogr No:</td>
	<td><input type="text" name="no"></td>
</tr>
<tr>
	<td>Cinsiyet:</td>
	<td>
			Bay<input type="radio" name="cins" value="bay">
			Bayan<input type="radio" name="cins" value="bayan">
	</td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="kaydet" value="Kaydet">
	<input type="reset" name="temizle" value="Temizle">
	</td>
</tr>
<tr>
	<td align="center" colspan="2"><a href='index.php'>anamenuye don</a></td>
</tr>
</table>
</form>
<?php
	if(!file_exists("bilgi.txt"))
	{
		fopen("bilgi.txt","w");
	}
	if ($_POST["kaydet"])
	{
		if($_POST["adi"]=="" || $_POST["soyadi"]=="" || $_POST["no"]=="")
		{
			echo"Eksik bilgileri doldurunuz";
		}
		else
		{
			$dosya=fopen("bilgi.txt","a");
			$yazilacak=$_POST["adi"]."-".$_POST["soyadi"]."-".$_POST["no"]."-".$_POST["cins"]."\n";
			fputs($dosya,$yazilacak);
			echo"********Sisteme Kaydiniz Yapilmistir*********";
		}
	}
?>

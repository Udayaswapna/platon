<html>
    <head>
        <title>
            multiple images
        </title>
    </head>
    <body>
<form action="#" enctype="multipart/form-data" method="post">
<input multiple="" name="img[]" type="file" />
<input name="submit" type="submit" />
</form>

<?php

mysql_connect("localhost","root","");
mysql_select_dB("multiple");
if(isset($_POST["submit"])){
$filename = $_FILES['img']['name'];
$file_tmp = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];
$filesize = $_FILES['img']['size'];
for($i=0; $i<=count($file_tmp); $i++){
if(!empty($file_tmp[$i])){
$name = addslashes($filename[$i]);
$temp = addslashes(file_get_contents($file_tmp[$i]));
if(mysql_query("Insert into multiple(name,image) values('$name','$temp')")){
}
else{
echo "failed";
echo "<br />";
}
}
}
}
$res = mysql_query("SELECT * FROM img");
while($row = mysql_fetch_array($res)){
$displ = $row['image'];




echo '<img src="data:image/jpeg;base64,&#39;.base64_encode($displ).&#39;" />';
echo "<br />";
}
?>

</html>
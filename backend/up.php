<?php
include('../dbclass.php');
$tit=str_replace("'","''",$_POST['tit']);
$info=str_replace("'","''",$_POST['info']);
$lnk=str_replace("'","''",$_POST['lnk']);
$txt=str_replace("'","''",$_POST['txt']);
$img[0]=$_FILES['img'];

$uploaddir = '/backend/imgups/';
//$uploaddir = '/michettas/backend/imgups/';
$uploadfile[0] = $uploaddir . basename($img[0]['name']);


$newfilename=array();//superfluo?
$index=0;//lo uso per array newfilename


foreach ($uploadfile as $thisfile){
	$x=1;
	//$newfilename=$uploadfile;
	$newfilename[$index]=$thisfile;

	while(is_file($_SERVER['DOCUMENT_ROOT'].$newfilename[$index])){
		//$newfilename=$uploadfile;
		$newfilename[$index]=$thisfile;

		$fn=explode(".",$newfilename[$index]);
		$fp=(count($fn))-2;
		$fn[$fp].=$x;

		$newfilename[$index]=implode(".",$fn);
		$x++;
	}

	if (move_uploaded_file($img[$index]['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$newfilename[$index])) {
		echo "File ".$newfilename[$index]." is valid, and was successfully uploaded.\n";
	} else {
		echo $newfilename[$index]."\n\n";
		echo "Possible file upload attack!\n";
	}

	$index++;
}


$que="update art set pos=pos+1";
if (!mysqli_query($conn, $que)){
	http_response_code(500);
	echo $qu."<br>";
	echo("Error shift: " . mysqli_error($conn));
}

$q="insert into art (tit,info,link,testo,img,pos) values ('".$tit."','".$info."','".$lnk."','".$txt."','".str_replace(" ","%20",$newfilename[0])."',1)";
if (!mysqli_query($conn, $q)) {
    http_response_code(500);
    echo $q."\n";
    echo "Error insert table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

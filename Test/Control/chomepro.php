<?php
//chomepro
include("connection.php");
$title="";
if(isset($_POST["title"])){
    $title=$_POST["title"];
}

$content="";
if(isset($_POST["content"])){
    $content=$_POST["content"];
}

$target_path="images/";
$target_path=$target_path.basename($_FILES['uploadedfile'] ['name']);


if($_POST["title"] != '' &&  $_POST['content'] !=''){

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
        echo "The file".basename($_FILES['uploadedfile'] ['name']).
        "has been uploaded";
    }

$sql="insert into home (title,content,picture) values ('$title','$content','$target_path')" ;

$query=mysql_query($sql) or die("cannot connect");
//header("Location:chome.php");
header("Location:admin.php? msg=Inserted");

}
else{
    echo "Blank field";
}


/*$sql="insert into home (title,content) values('$title','$content')" ;

$query=mysql_query($sql) or die("cannot connect");
echo " title..." . $title;
header("Location:chome.php");
header("Location:chome.php? msg=Inserted");*/
?>
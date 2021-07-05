<?php
//echo "<script>alert('i am seller_form_validate');</script>";
$validation=FALSE;
$username=$_POST['username'];
$org=$_POST['org'];
$link=mysqli_connect("localhost","root","",$username);
$sql="CREATE TABLE org(
    org VARCHAR(255)
)";
if($link->query($sql)){
    //echo "<script>alert('org created successfullly');</script>";
    $sql="INSERT INTO org (org) VALUES ('$org')";
    if($link->query($sql)){
        //echo "<script>alert('inserted $org into org table');</script>";
    }
    else{
        //echo "<script>alert('sorry, can not insert $org into org table');</script>";

    }
}

else{
    //echo "<script>alert('sorry ,org can not created');</script>";
}
$sql="CREATE TABLE income(
    item VARCHAR(255),
    price int(11),
    quantity int(11),
    payment VARCHAR(255),
    ctgrs VARCHAR(255)

)";
if($link->query($sql)){
    //echo "<script>alert('congo, income table created successfully...');</script>";
}
else{
    //echo "<script>alert('error ,can not create income table.');</script>";
}

$sql="CREATE TABLE shop(
    item VARCHAR(255),
    price int(11),
    quantity int(11),
    ctgrs VARCHAR(255),
    dt VARCHAR(255),
    org VARCHAR(255),
    seller_admin VARCHAR(255),
    img VARCHAR(255)
)";

if($link->query($sql)){
    //echo "<script>alert('congo, $username you are now seller on amazon');</script>";
}
else{
    //echo "<script>alert('error ,$username fill the form again...');</script>";
}
//echo "<script>sell_on_amazon();</script>";

?>
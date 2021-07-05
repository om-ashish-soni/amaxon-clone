<?php
$item=$_POST['item'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$ctgrs=$_POST['ctgrs'];
$username=$_POST['username'];
$dt=$_POST['dt'];
$seller_admin=$_POST['seller_admin'];
$org=str_replace('_',' ',$_POST['org']);
if(isset($_FILES['img'])&& !empty($_FILES['img'])){
    $filename=$_FILES['img']['name'];
        $tempname=$_FILES['img']['tmp_name'];
        date_default_timezone_set('Asia/Kolkata');
        $date_time_image=date('Y_m_d_H_i_s');
        $date_time_image.=$username;
        $date_time_image.=$filename;
        $filename=$date_time_image;
        $folder="img/".$filename;
        $folder=strtolower($folder);
        if(move_uploaded_file($tempname,$folder)){
            //echo "<script>alert('congo, moved $filename into $folder');</script>";
            // echo $folder;
        }
        else{
            //echo "<script>alert('sorry, cant move $filename into $folder');</script>";
        }
}else{
    //echo "<script>alert('sorry, your code for image doesnt work properly');</script>";
}

// $dt=date()
$link=mysqli_connect("localhost","root","",$username);

$sql="INSERT INTO shop (item,price,quantity,ctgrs,dt,seller_admin,img) VALUES ('$item','$price','$quantity','$ctgrs','$dt','$seller_admin','$folder')";
if($link->query($sql)){
    //echo "<script>alert('congo added you product / published ');</script>";
    $link_to_ctgrs=mysqli_connect("localhost","root","","ctgrs");
    $sql_to_ctgrs="INSERT INTO $ctgrs (item,price,quantity,seller,dt,seller_admin,times_now) VALUES ('$item','$price','$quantity','$org','$dt','$seller_admin','$folder')";
    if($link_to_ctgrs->query($sql_to_ctgrs)){
        //echo "<script>alert('congo , in this $ctgrs your product has been added');</script>";
    }else{
        //echo "<script>alert('error,in this $ctgrs  your product can not be published ');</script>";
    }
}
else{
    //echo "<script>alert('error, your product can not be published ');</script>";
}

//echo "<script>sell_on_amazon();</script>";


?>
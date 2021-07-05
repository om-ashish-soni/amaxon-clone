
<?php
if(isset($_POST['username']) && !empty($_POST['username'])){
    $username=$_POST['username'];
    echo $username;
    echo "<br>";

    $link=mysqli_connect("localhost","root","");
    $sql="CREATE DATABASE $username";

    if($link->query($sql)){
        //echo "<script>alert('database created successfully')</script>";
        echo "<br>";

        $link_to_create_cart=mysqli_connect("localhost","root","",$username);
        $sql_to_create_cart="CREATE TABLE cart(
            item VARCHAR(255),
            price int(11),
            category VARCHAR(255),
            quantity int(11),
            img VARCHAR(255),
            seller VARCHAR(255),
            dt VARCHAR(255)
        )";
        if($link_to_create_cart->query($sql_to_create_cart)){
            //echo "<script>alert('cart created successfully')</script>";
            $link_to_create_details=$link_to_create_cart;
            $sql_to_create_details="CREATE TABLE details(
                username VARCHAR(255),
                email VARCHAR(255),
                passwd VARCHAR(255)
            )";
            if($link_to_create_details->query($sql_to_create_details)){
                //echo "<script>alert('details added successfully');</script>";
                
            }
            else{
                //echo "<script>alert('error details cant added');</script>";
            }
            $_SESSION['entry']="yes";
            $_SESSION['username']=$username;
            ?>
        <form action="index.php" method="POST" id="signin_form">
            <input type="hidden" value="entry" name="type">
        </form>
        <script type= "text/javascript"> 
        document.getElementById('signin_form').submit();
        </script>
        <?php
            // header('Location:index.php');
        }
        else{
            //echo "<script>alert('Sorry cart can't created')</script>";
        }
        echo "<br>";
    }
    else{
        //echo "<script>alert('sorry can't created database')</script>";
        ?>
        <form action="index.php" method="POST" id="login_form1">
        <input type="hidden" value="login" name="type">
        </form>
        <script type= "text/javascript"> 
        document.getElementById('login_form1').submit();
        </script>
        <?php
    }

}

?>
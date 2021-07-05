
<?php
if(isset($_POST['username']) && !empty($_POST['username'])){
    $username=$_POST['username'];
    $link=mysqli_connect("localhost","root","",$username);
    $sql="SELECT * FROM cart";
    
    if($link){
        //echo "<script>alert('$username logged in successfully');</script>";
        $_SESSION['entry']="yes";
        $_SESSION['username']=$username;
        ?>
        <form action="index.php" method="POST" id="login_form">
            <input type="hidden" value="entry" name="type">
        </form>
        <script type= "text/javascript"> 
        document.getElementById('login_form').submit();
        </script>
        <?php
    }
    else{
        //echo "<script>alert('cant log in');</script>";
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
<br>
<!-- <button class="close_button" onclick="remove_seller_form()" >X</button> -->
<script>
// alert('i am seller_form');
</script>
<form action="index.php" method="POST" >
<input value="seller_form_validate" name="type" type="hidden" />
<div>
<?php 
$username=$_SESSION['username'];
?>
<input type="hidden" value="<?php echo htmlspecialchars($username) ?>" name="username" />


<input type="text" placeholder="company / business name" name="org" required/>
<br>
<input type="email" placeholder="email" required/>
<br>
<input type="password" placeholder="password" required/>
<br>
<!-- <input type="text" placeholder="company/business name" /> -->
<br>
<input type="checkbox" required/><label>agree license/terms & conditions policy</label>
<br>


</div>
<button type="submit">submit</button>
</form>
<style>
    input{
        border-radius:4px;
        box-shadow:1px 2px 5px 4px gray;
        border:none;
        margin:4px;
    }
</style>
<div>
<span class="long_btn2">amaxon</span>
<span style="margin-left:30px;font-size:40px;">
-the complete clone of amazon
</span>
<br>
<br><br><br>
<center>
<div class="login"  id="login" >
<form action="index.php"  method="POST">
<input class="long_btn" type="text" name="username" placeholder="username" />
<br>
<input class="long_btn" type="password" name="password" placeholder="password" />
<br>
<input type="hidden" value="login_validate" name="type" />

<button class="long_btn" type="submit">submit</button>
</form>
<button class="long_btn" onclick="signin()">new user</button>
</div>

<div class="signin" id="signin">
<form action="index.php"  method="POST">
<input class="long_btn" type="text" name="username" placeholder="username" />
<br>
<input class="long_btn" type="password" name="password" placeholder="password" />
<br>
<input type="hidden" value="signin_validate" name="type" />
<button class="long_btn" type="submit">submit</button>
</form>
<button class="long_btn" onclick="login()">Already a user?</button>
</div>

</div>
<style>
    .long_btn{
        width:300px;
        border-radius:10px;
        box-shadow:0.9px 0.9px 1.2px 2px gray;
        outline:none;
        border:none;
        margin:4px;
    }
    .long_btn2{
        width:500px;
        background-color:#febd69;
        font-size:100px;
        border-radius:10px;
        outline:none;
        border:none;]
        float:left;
        margin:4px;
    }
</style>
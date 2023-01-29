<h2><?php echo $msg ?? '';?></h2>


<?php $title = "login" ?>
<div class="formPost">
<form method="POST" action="" class="loginForm" >

  <label>Username</label>
  <input name="username" type="text" class="form-text">
  <label>Password</label>
  <input name="password" type="password" class="form-text" >
  <input type="submit" value="Login" name="Login" class="LoginBtn"  onclick="toggleLogin()">

    <a href = "<?php echo 'index.php?module=Register'?>"  id="logoutBtn"> Register </a>

</form>
</div>

<script>
    console.log(document.title)
</script>

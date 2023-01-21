<h2>Register Form</h2>


<form method="POST" action="">

  <label>First Name</label>
  <input name="fname" type="text">
  <label>Last Name</label>
  <input name="lname" type="text">
  <label>Email</label>
  <input name="email" type="text">
  <label>Password</label>
  <input name="password" type="text">
    <label>Phone</label>
    <input name="phone" type="text">
  <label>Gender:</label>
<div class="genderForm">
    <div class="gender">
    <input type="radio" id="male" name="gender" value="M">
    <label for="male">Male</label>
    </div>

    <div class="gender">
        <input type="radio" id="female" name="gender" value="F">
        <label for="female">Female</label>
    </div>

    <div class="gender">
        <input type="radio" id="notsay" name="gender" value="Prefer Not to say">

        <label for="notsay">Non-Binary</label>
    </div>

  <input type="submit" value="Register" name="Register" class="register btn btn-primary">
</div>

  <a href = "<?php echo 'index.php?module=Login' ?>"> Home </a>

</form>

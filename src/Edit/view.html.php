<?php
echo $user['id']; ?>

<form method="POST" action="">

  <label>First Name</label>
  <input name="fname" type="text" value=" <?php echo $user['first_name'] ?>">
  <label>Last Name</label>
  <input name="lname" type="text" value=" <?php echo $user['last_name'] ?>">
  <label>Email</label>
  <input name="email" type="text" value=" <?php echo $user['email'] ?>">
  <label>Password</label>
  <input name="password" type="text" value=" <?php echo $user['password'] ?>" >
  <label>Phone</label>
  <input name="phone" type="text"  value=" <?php echo $user['phone'] ?>" >
  <label>Gender:</label>
  <div class="genderForm">
    <div class="gender">
    <input type="radio" id="male" name="gender" value=" <?php echo $user['gender'] ?>">
    <label for="male">Male</label>
    </div>

    <div class="gender">
    <input type="radio" id="female" name="gender" value="F">
    <label for="female">Female</label>
    </div>

    <div class="gender">
    <input type="radio" id="notsay" name="gender" value="Prefer Not to say">
    <label for="notsay">Non Binary</label>
  </div>
    <input type="submit" value="Update" name="Update" class="register btn btn-primary"">
  </div>

  <a href = "<?php echo 'index.php?module=Login' ?>"> Home </a>

</form>


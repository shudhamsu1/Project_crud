<div id="profile" ">
    <div class="profileTitle ">
        Hi!
      <?php echo $user['first_name']; ?>
      <?php echo $user['last_name']; ?>
    </div >

    <div id="profileBody" class="card " style="width: 18rem;  ">
        <img src="src/PictureUpload/image/<?php echo $user['profile_image']; ?>" class="card-img-top" alt="...">

        <a href='index.php?module=PictureUpload&id=<?php echo $user['id'];?> ' class="card-link">Upload image</a>

        <div class="card-body ">
            <h5 class="card-title "> Email :<?php echo $user['email']  ?></h5>
            <p class="card-text "> You are an <?php echo $user['role'] ?> </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> Phone Number:<?php echo $user['phone'] ?></li>
            <li class="list-group-item">Gender:<?php echo $user['gender'] ?></li>
            <li class="list-group-item"> Signed up on <?php echo $user['created_at'] ?> </li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
<a href = "<?php echo 'index.php?module=Login' ?> "  class="btn btn-primary btn-lg " id="logoutBtn">Logout</a>
</div>




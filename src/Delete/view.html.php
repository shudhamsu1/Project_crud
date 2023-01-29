<?php

if($deleteUser){
  echo 'Deleted successfully';
} else {
  echo "Delete was not successful";
} ?>

<a href = "<?php echo 'index.php?module=Admin' ?> "  class="btn btn-primary btn-lg " id="logoutBtn">Go Back</a>
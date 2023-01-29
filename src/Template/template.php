<?php $title = "user management" ?>

<html>

<head>
  <title>  <?php echo $title?></title>
    <style>
        <?php include "style.css" ?>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

            <a href="<?php echo 'index.php?module=Login' ?>" class="navbar-brand fs-1 cms">Content Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href= "<?php echo 'index.php?module=Login'?>" class="nav-link sideNav fs-1" id="loginnav" >Logout</a>
                    </li>



                </ul>
            </div>

    </div>
</nav>

 <div class="content">
<?php

if(isset($msg)) echo $msg;
include $view;

?>
 </div>


<script > <?php include "script.js" ?> </script>

</body>
<footer class="footer sticky-lg-bottom">
  <?php echo date('Y')?> © All Right Reserved
</footer>


</html><?php

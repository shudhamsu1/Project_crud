<?php use Php\Project\Includes\Database; ?>
<div id="page">
  <h2>List of users</h2>


  <table id="userTable">
<!--    <tr>-->
<!--      <th> ID </th>-->
<!--      <th> First Name</th>-->
<!--      <th> Last Name</th>-->
<!--      <th> Email</th>-->
<!--      <th> Password</th>-->
<!--      <th> Phone Number</th>-->
<!--      <th> Profile image</th>-->
<!--      <th> Role</th>-->
<!--      <th> Gender</th>-->
<!--      <th> Created</th>-->
<!--      <th> Last Updated</th>-->
<!--    </tr>-->

    <?php
      $dbConnect = new Database();
      $users = $dbConnect->findall();
//      echo "<pre>";
//      print_r($users);
//      echo "</pre>"
    ?>
    <?php
    echo "<tr class='admintr'>";
        foreach(array_keys($users[0]) as $header){
        echo "<th class='adminth'>$header</th>";

        }
        echo "<th class='adminth'> Edit</th>";
        echo "<th class='adminth'> Update</th>";
        echo "<th class='adminth'> Delete</th>";
        echo "</tr>";

    //populate the rows
    foreach($users as $row) {
    echo "<tr class='admintr'>";
        foreach($row as $cell) {
        echo "<td class='admintd'> $cell</td>";
        }
        echo "<td class='admintd'><a href= 'index.php?module=Edit'>Edit</a></td>";
        echo "<td class='admintd'><a href='#'>Update</a></td>";
        echo "<td class='admintd'><a href='#'>Delete</a></td>";
        echo "</tr>";
    }
    ?>


  </table>


</div>
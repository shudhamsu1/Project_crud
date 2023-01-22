<?php use Php\Project\Includes\Database; ?>
<div id="page">
  <h2>List of users</h2>


  <table id="userTable">
      <tr class="admintr">
          <th class='adminth' >ID</th>
          <th class='adminth' >First Name</th>
          <th class='adminth' >Last Name</th>
          <th class='adminth' >Email</th>
          <th class='adminth' >Password</th>
          <th class='adminth' >Phone</th>
          <th class='adminth'> Profile image</th>-->
          <th class='adminth' >Role</th>
          <th class='adminth' >Gender</th>
          <th class='adminth' >Created At</th>
          <th class='adminth'>Updated At</th>
          <th class='adminth'> View</th>
         <th class='adminth'> Update</th>
         <th class='adminth'> Delete</th>
      </tr>

    <?php
//      $dbConnect = new Database();
//      $users = $dbConnect->findall();
//      echo "<pre>";
//      print_r($users);
//      echo "</pre>"
    ?>
<!--    --><?php
//    echo "<tr class='admintr'>";
//        foreach(array_keys($users[0]) as $header){
//        echo "<th class='adminth'>$header</th>";
//
//        }
//        echo "<th class='adminth'> Edit</th>";
//        echo "<th class='adminth'> Update</th>";
//        echo "<th class='adminth'> Delete</th>";
//        echo "</tr>";
//
//    //populate the rows
//    foreach($users as $row) {
//    echo "<tr class='admintr'>";
//
//        foreach($row as $cell) {
//        echo "<td class='admintd'> $cell</td>";
//        }
//        echo "<td class='admintd'><a href= 'index.php?module=Edit'>Edit</a></td>";
//        echo "<td class='admintd'><a href='#'>Update</a></td>";
//        echo "<td class='admintd'><a href='#'>Delete</a></td>";
//        echo "</tr>";
//    }
//    ?>
<!--here is update is edit-->
    <?php foreach($users as $adminuser):
      $id = $adminuser['id'];?>

        <tr class='admintr' >
            <td class='admintd' ><?php echo $adminuser['id']; ?></td>
            <td class='admintd' ><?php echo $adminuser['first_name']; ?></td>
            <td class='admintd' ><?php echo $adminuser['last_name']; ?></td>
            <td class='admintd' ><?php echo $adminuser['email']; ?></td>
            <td class='admintd' ><?php echo $adminuser['password']; ?></td>
            <td class='admintd' ><?php echo $adminuser['phone']; ?></td>
            <td class='admintd' > <img src="src/PictureUpload/image/<?php echo $adminuser['profile_image']; ?>" id="adminImg"> </td>
            <td class='admintd' ><?php echo $adminuser['role']; ?></td>
            <td class='admintd' ><?php echo $adminuser['gender']; ?></td>
            <td class='admintd' ><?php echo $adminuser['created_at']; ?></td>
            <td class='admintd' ><?php echo $adminuser['updated_at']; ?></td>

            <td class='admintd'><a href='index.php?module=View&id= <?php echo $adminuser['id'];?> '>view</a></td>
            <td class='admintd'><a href= 'index.php?module=Edit&id=<?php echo $adminuser['id'];?> '>Update</a></td>
            <td class='admintd'><a href='index.php?module=Delete&id=<?php echo $adminuser['id'];?>' >Delete</a></td>

<!--            <td><a href='view.php?id=--><?php //echo $user['id']; ?><!--'>View</a> -->
<!--                <a href='edit.php?id=--><?php //echo $user['id']; ?><!--'>Edit</a> -->
<!--                <a href='delete.php?id=--><?php //echo $user['id']; ?><!--'>Delete</a></td>-->

        </tr>
    <?php endforeach; ?>
  </table>


</div>
//create table header
<?php
//here the array is users I can use this to directly create a table from database
echo "<tr>";
  foreach(array_keys($users[0]) as $header){
  echo "<th>$header</th>";
  }
  echo "</tr>";

//populate the rows
foreach($users as $row) {
echo "<tr>";
  foreach($row as $cell) {
  echo "<td>$cell</td>";
  }
  echo "</tr>";
}
?>




//for($i=0; $i
<count($user); $i++) {?>
//<!--          <td> --><?php // echo $user[$i]['id'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['first_name'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['last_name'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['email'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['password'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['phone'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['profile_image'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['role'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['gender'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['created_at'] ?><!--</td>-->
//<!--        <td> --><?php // echo $user[$i]['updated_at'] ?><!--</td>

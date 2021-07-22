<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Mobile</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->first_name."</td>";
  echo "<td>".$row->last_name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->phone."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>

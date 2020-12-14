<?php

  // Insert the content of connection.php file
  require_once 'db_connect.php';
  use Dompdf\Dompdf;

?>	

  <head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;

    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    td.a {
      text-align: right;
      font-weight: bold;
    }
  </style>
  </head>
<body>

  <table width='100%'>
    <tr>
      <th>User Details</th>
    </tr>
  </table>
  <table width='100%'>
    <tr>
      <th>ID</th>
      <th>User Name</th>
      <th>Visits</th>
      <th>status</th>
    </tr>
    <?php
    $sql = "SELECT us.id, us.name , vs.visits,vs.status
	FROM users us join visits vs on vs.id = us.id ORDER BY us.id";

    $result = mysqli_query($conn, $sql);
    $i=0;
    while ($row = mysqli_fetch_assoc($result)) {
    
      ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['visits'] ?></td>
          <td><?php echo $row['status'] ?></td>
        </tr>
      <?php
      $i++;
     }
    ?>
  </table>
    </body>


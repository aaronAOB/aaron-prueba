<head>

<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.8">
<title> tabla</title>

<style>
    table, td, th {
        border: 1px solid black;
        text-aligne: left;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 15px;
        
    }
    </style>
    </head>
    <body>
        <a href="index.html">Inicio</a>
             
    <table>
      <tr>
        <td>ID</td>
          <th>nombre</th>
          <th>anticuedad</th>
     </tr>
    <?php>
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if ($conn-> connect_error) {
      die("Connection failed: ". $conn->connect_error);
    }

    $sql = "SELECT ID, nombre, anticuedad FROM cotejamientos ORDER BY id ASC";
    $result = $conn->query($sql);
    
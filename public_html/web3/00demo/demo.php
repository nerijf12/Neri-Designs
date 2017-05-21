<?php require_once('Connections/conndirectory.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conndirectory, $conndirectory);
$query_rsdirectory = "SELECT * FROM directory ORDER BY lname_dir ASC";
$rsdirectory = mysql_query($query_rsdirectory, $conndirectory) or die(mysql_error());
$row_rsdirectory = mysql_fetch_assoc($rsdirectory);
$totalRows_rsdirectory = mysql_num_rows($rsdirectory);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Demo Page</title>
</head>

<body>
<h1>My Directory</h1>
<p>see the table below for info</p>
<p>&nbsp;</p>
<table border="2" cellpadding="5" cellspacing="5">
  <tr>
    <td>id_dir</td>
    <td>fname_dir</td>
    <td>lname_dir</td>
    <td>email_dir</td>
    <td>phone_dir</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rsdirectory['id_dir']; ?></td>
      <td><?php echo $row_rsdirectory['fname_dir']; ?></td>
      <td><?php echo $row_rsdirectory['lname_dir']; ?></td>
      <td><?php echo $row_rsdirectory['email_dir']; ?></td>
      <td><?php echo $row_rsdirectory['phone_dir']; ?></td>
    </tr>
    <?php } while ($row_rsdirectory = mysql_fetch_assoc($rsdirectory)); ?>
</table>
<p>©2013me</p>
</body>
</html>
<?php
mysql_free_result($rsdirectory);
?>
'
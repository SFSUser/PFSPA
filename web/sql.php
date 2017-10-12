
<?php


// The variables have not been adequately sanitized to protect against SQL Injection attacks: http://us3.php.net/mysql_real_escape_string

function getEnvParam($name, $pred){
  if(isset($_ENV[$name])){
    return $_ENV[$name];
  }
  return $pred;
}
function getRequest($name, $pred){
    if(isset($_REQUEST[$name])){
      return $_REQUEST[$name];
    }
    return $pred;
}

	$hostname = getEnvParam('MYSQL_SERVICE_HOST', 'localhost');
	$username = getEnvParam('MYSQL_USER', 'root');
	$password = getEnvParam('MYSQL_PASSWORD', '0000');
	$database = getEnvParam('MYSQL_DATABASE', 'siim');
  $sql = getRequest("sql", "SHOW TABLES FROM `$database`");

  if(isset($_FILES["file"]) && file_exists($_FILES["file"]["tmp_name"])){
    $file = $_FILES['file']['tmp_name'];
    echo "<b>Archivo subido!</b>: ";
    echo $file . "<br>";
    echo "<hr> <b>Cotenido del archivo: </b><br>";
    echo "<textarea style='width:100%;height:200px;' readonly=''>";
    $text = file_get_contents($file);
    echo $text;
    echo "</textarea><hr>";
  }
?>
  <html>
  <head></head>
  <body>
    <form method="POST" accept=".sql" enctype="multipart/form-data">
      <input name=file type="file"/>
      <textarea style="width:100%" name="sql"><?= $sql ?></textarea><hr>
      <button>Enviar</button>
    </form>
    <hr>
<?php

	$link = mysql_connect("$hostname", "$username", "$password");
		if (!$link) {
			echo "<p>Could not connect to the server '" . $hostname . "'</p>\n";
        	echo mysql_error();
		}else{
			echo "<p>Successfully connected to the server '" . $hostname . "'</p>\n";
//			printf("MySQL client info: %s\n", mysql_get_client_info());
//			printf("MySQL host info: %s\n", mysql_get_host_info());
//			printf("MySQL server version: %s\n", mysql_get_server_info());
//			printf("MySQL protocol version: %s\n", mysql_get_proto_info());
		}
    echo "<hr>";

	if ($link && !$database) {
		echo "<p>No database name was given. Available databases:</p>\n";
		$db_list = mysql_list_dbs($link);
		echo "<pre>\n";
		while ($row = mysql_fetch_array($db_list)) {
     		echo $row['Database'] . "\n";
		}
		echo "</pre>\n";
	}
	if ($database) {
    $dbcheck = mysql_select_db("$database");
		if (!$dbcheck) {
        	echo mysql_error();
		}else{
			echo "<p>Successfully connected to the database '" . $database . "'</p><hr>\n";
			// Check tables
			//$sql = "SHOW TABLES FROM `$database`";
			$result = mysql_query($sql);
			if (mysql_num_rows($result) > 0) {
				echo "<pre>\n";
				while ($row = mysql_fetch_row($result)) {
					echo "{$row[0]}\n";
				}
				echo "</pre>\n";
			} else {
				echo "<p>The database '" . $database . "' no results.</p>\n";
				echo mysql_error();
			}
		}

}
?>
  </body>
</html>

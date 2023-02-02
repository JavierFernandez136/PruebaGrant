 <?php 

/* $sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "pruebagrant";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}   */
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = "us-cdbr-east-06.cleardb.net";
$cleardb_username = "b2d9bfb036dabe";
$cleardb_password = "85ce87a2";
$cleardb_db = "heroku_f2b31d735064bd2";
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
 

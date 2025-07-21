$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_DATABASE');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');

$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);

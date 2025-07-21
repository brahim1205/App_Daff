<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../vendor/autoload.php';

// 🛠️ Instancier le routeur
$router = new \App\Core\Router(); // remplace le namespace si besoin

// 📦 Charger les routes
require_once __DIR__ . '/../../router/route.web.php';

// 🔍 Voir les méthodes disponibles
var_dump(get_class_methods($router));
exit;

// ✅ Ensuite tu remplaces var_dump par la bonne méthode, ex :
// $router->run();

<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host'] = 'adnext.mysql';
//$config['db']['port'] = '3306';
$config['db']['user'] = 'adnext';
$config['db']['pass'] = 'CKZrIC3aXWqq4Nfk';
$config['db']['dbname'] = 'adnext';

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

//$container['view'] = new \Slim\Views\PhpRenderer("templates/");

$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler('logs/app.log');
    $logger->pushHandler($file_handler);
    return $logger;
};

$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

$app->get('/automobile/marques.{format}', function (Request $request, Response $response, array $args) {
    //$this->logger->addInfo('Utilisation de la route hello');
    $format = $args['format'];
    $mapper = new AutomobileMapper($this->db);
    $response->getBody()->write($mapper->getAll($format));
    return $response;
});

$app->get('/automobile/{brand}/models.{format}', function (Request $request, Response $response, array $args) {
    $brand = $args['brand'];
    $format = $args['format'];
    $mapper = new ModeleMapper($this->db);
    $response->getBody()->write($mapper->getAllByBrand($brand,$format));
    return $response;
});

//TODO Gérer un 404

/*$app->get('/automobile/{brand}/{model}', function (Request $request, Response $response) {
    $brand = $args['brand'];
    $model = $args['model'];
    $mapper = new ModeleMapper($this->db);
    $components = $component_mapper->getComponents();
    $response = $this->view->render($response, "viewmodel.phtml", ["components" => $components]);
    return $response;
});*/

$app->run();

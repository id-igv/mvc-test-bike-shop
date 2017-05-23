<?php
    /*
        Main entrence of this app
    */
    
    // example.com/controller_name/action_name/possible_params...
    
    error_reporting(E_ALL);
    
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', __DIR__ . DS . '..' . DS);
    define('VIEW', ROOT . 'View' .  DS);
    define('ROUTES', ROOT . 'Config' .  DS . 'routes.php');
    define('DB_PARAMS', ROOT . 'Config' .  DS . 'db_connection.php');
    
    spl_autoload_register(function ($className) {
        $file_to_require = ROOT . str_replace('\\', DS, "{$className}.php");
        
        if (!file_exists($file_to_require)) {
            throw new \Exception('<br>File <b>' . $file_to_require . '</b> not found. Error log: file -> ' . __FILE__ . '; line -> ' . __LINE__ . '<br>');
            
        }
        
        require_once($file_to_require);
    });
    
    $container = new \Library\Container();
    $request = new \Library\Request();
    
    $router = new \Library\Router(ROUTES, $request);
    
    // fills in $container to be able get access to global app params
    $container->set('router', $router);
    $container->set('request', $request);
    
    //------------DB-CONNECTION
    try {
        extract( require(DB_PARAMS));
        
        $conn = new \PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $container->set('pdo_connection', $conn);
        
    } catch(\PDOException $e) {
        // !!
        // !!
        // USE FLASH MESSAGES
        echo "<br>Connection failed: " . $e->getMessage() . '<br>';
    } catch(\Exception $e) {
        // !!
        // !!
        // USE FLASH MESSAGES
        echo '<br>' . $e->getMessage() . '<br>';
    }
    //-------------------------
    
    $route = $router->getCurrentRoute();
    $controller = 'Controller\\' . $route->get_controller() . 'Controller';
    $controller = new $controller();
    $controller->set_container($container);
    $action = $route->get_action() . 'Action';
    echo $controller->$action();
?>
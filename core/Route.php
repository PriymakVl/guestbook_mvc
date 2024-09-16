<?php

class Route
{
	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		
		
		$url = explode('?', $_SERVER['REQUEST_URI'])[0];

	
		$routes = explode('/', $url);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = ucfirst($routes[1]);
		}

		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		// добавляем префиксы
		$controller_name = $controller_name . '_Controller';
		$action_name = 'action_'.$action_name;

		// подцепляем файл с классом модели (файла модели может и не быть)

		// подцепляем файл с классом контроллера
		$controller_path = "controllers/" . $controller_name . '.php';

		if(file_exists($controller_path)) {
			include $controller_path;
		}
		else {
			echo 'not controller';
			exit;
		}

		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action)) {
			// вызываем действие контроллера
			$controller->$action();
		}
		else {
			echo 'not action';
			exit;
		}
	
	}
	
}
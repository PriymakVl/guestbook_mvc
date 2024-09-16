<?php

class View {

     public static function render($content, $data = null) {
        // преобразуем элементы массива в переменные
        if(is_array($data)) {
            extract($data);
        }
        // создаем путь к  шаблону
        $content = 'views/' . $content . '.php';

        // подключаем layout
        include 'views/layouts/layout.php';
    }
    
}
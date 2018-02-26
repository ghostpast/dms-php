<?php
    // Подключаем фреймворк Yii2
    require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
    
    // Загрузка конфигурации приложения
    $config = require(__DIR__ . '/../config/web.php');
    
    // Создание и конфигурация приложения
    (new yii\web\Application($config))->run();
?>

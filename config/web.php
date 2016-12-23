<?php
    return [
        'id' => 'carshowroom',
        'basePath' => realpath(__DIR__ . '/../'),
        'components' => [
            'request' => [
                'cookieValidationKey' => 'your secret key here',    
            ],    
        ]
    ]
?>

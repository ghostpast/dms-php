<?php
    return [
        'id' => 'dms-plus',
        'basePath' => realpath(__DIR__ . '/../'),
        'components' => [
            'request' => [
                'cookieValidationKey' => 'your secret key here',    
            ],    
        ]
    ]
?>

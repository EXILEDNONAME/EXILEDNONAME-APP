<?php

return array(

    'dir' => ['files'],

    'disks' => ['Files'],

    'route' => [
        'prefix' => 'dashboard/file-manager',
        'middleware' => array('web', 'auth'), //Set to null to disable middleware filter
    ],

    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',
    'roots' => null,
    'options' => array(),
    'root_options' => array(

    ),

);

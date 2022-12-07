<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],


        'permits' => [
            'driver' => 'local',
            'root' => storage_path('app/public/permits'),
            'url' => env('APP_URL') . '/storage/permits',
            'visibility' => 'public',
        ],
        'monitoring' => [
            'driver' => 'local',
            'root' => storage_path('app/public/monitoring'),
            'url' => env('APP_URL') . '/storage/monitoring',
            'visibility' => 'public',
        ],
        'legal' => [
            'driver' => 'local',
            'root' => storage_path('app/public/legal'),
            'url' => env('APP_URL') . '/storage/legal',
            'visibility' => 'public',
        ],
        'complaint' => [
            'driver' => 'local',
            'root' => storage_path('app/public/complaint'),
            'url' => env('APP_URL') . '/storage/complaint',
            'visibility' => 'public',
        ],
        'complaintaction' => [
            'driver' => 'local',
            'root' => storage_path('app/public/complaintaction'),
            'url' => env('APP_URL') . '/storage/complaintaction',
            'visibility' => 'public',
        ],

        'slf' => [
            'driver' => 'local',
            'root' => storage_path('app/public/slf'),
            'url' => env('APP_URL') . '/storage/slf',
            'visibility' => 'public',
        ],
        'mrf' => [
            'driver' => 'local',
            'root' => storage_path('app/public/mrf'),
            'url' => env('APP_URL') . '/storage/mrf',
            'visibility' => 'public',
        ],
        'rca' => [
            'driver' => 'local',
            'root' => storage_path('app/public/rca'),
            'url' => env('APP_URL') . '/storage/rca',
            'visibility' => 'public',
        ],
        'lce' => [
            'driver' => 'local',
            'root' => storage_path('app/public/lce'),
            'url' => env('APP_URL') . '/storage/lce',
            'visibility' => 'public',
        ],
        'dump_site' => [
            'driver' => 'local',
            'root' => storage_path('app/public/dump_site'),
            'url' => env('APP_URL') . '/storage/dump_site',
            'visibility' => 'public',
        ],
        'copy_plan' => [
            'driver' => 'local',
            'root' => storage_path('app/public/copy_plan'),
            'url' => env('APP_URL') . '/storage/copy_plan',
            'visibility' => 'public',
        ],
        'copy_form' => [
            'driver' => 'local',
            'root' => storage_path('app/public/copy_form'),
            'url' => env('APP_URL') . '/storage/copy_form',
            'visibility' => 'public',
        ],
        'copy_resolution' => [
            'driver' => 'local',
            'root' => storage_path('app/public/copy_resolution'),
            'url' => env('APP_URL') . '/storage/copy_resolution',
            'visibility' => 'public',
        ],
        'ten_yr_file' => [
            'driver' => 'local',
            'root' => storage_path('app/public/ten_yr_file'),
            'url' => env('APP_URL') . '/storage/ten_yr_file',
            'visibility' => 'public',
        ],
        'copy_report' => [
            'driver' => 'local',
            'root' => storage_path('app/public/copy_report'),
            'url' => env('APP_URL') . '/storage/copy_report',
            'visibility' => 'public',
        ],
        'avatars' => [
            'driver' => 'local',
            'root' => storage_path('app/public/avatars'),
            'url' => env('APP_URL') . '/storage/avatars',
            'visibility' => 'public',
        ],
        'iec' => [
            'driver' => 'local',
            'root' => storage_path('app/public/iec'),
            'url' => env('APP_URL') . '/storage/iec',
            'visibility' => 'public',
        ],
        // mov
        'mov' => [
            'driver' => 'local',
            'root' => storage_path('app/public/mov'),
            'url' => env('APP_URL') . '/storage/mov',
            'visibility' => 'public',
        ],

        'PD1586' => [
            'driver' => 'local',
            'root' => storage_path('app/public/PD1586'),
            'url' => env('APP_URL') . '/storage/PD1586',
            'visibility' => 'public',
        ], 'RA9275' => [
            'driver' => 'local',
            'root' => storage_path('app/public/RA9275'),
            'url' => env('APP_URL') . '/storage/RA9275',
            'visibility' => 'public',
        ], 'RA8749' => [
            'driver' => 'local',
            'root' => storage_path('app/public/RA8749'),
            'url' => env('APP_URL') . '/storage/RA8749',
            'visibility' => 'public',
        ], 'RA6969' => [
            'driver' => 'local',
            'root' => storage_path('app/public/RA6969'),
            'url' => env('APP_URL') . '/storage/RA6969',
            'visibility' => 'public',
        ],
    ],



    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];

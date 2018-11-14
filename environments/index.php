<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
return [
    'development' => [
        'path' => 'dev',
        'setWritable' => [
            'console/runtime',
            'frontend.conf/runtime',
            'frontend.conf/web/assets',
            'backend/runtime',
            'backend/web/assets',
            'api/runtime',
            'api/web/assets',
        ],
        'setExecutable' => [
            'yii',
            'yii_test',
        ],
        'setCookieValidationKey' => [
            'common/config/codeception-local.php',
            'frontend.conf/config/main-local.php',
            'backend/config/main-local.php',
            'api/config/main-local.php',
        ],
    ],
    'testing' => [
        'path' => 'test',
        'setWritable' => [
            'console/runtime',
            'frontend.conf/runtime',
            'frontend.conf/web/assets',
            'backend/runtime',
            'backend/web/assets',
            'api/runtime',
            'api/web/assets',
        ],
        'setExecutable' => [
            'yii',
            'yii_test',
        ],
        'setCookieValidationKey' => [
            'common/config/codeception-local.php',
            'frontend.conf/config/main-local.php',
            'backend/config/main-local.php',
            'api/config/main-local.php',
        ],
    ],
    'simulation' => [
        'path' => 'simu',
        'setWritable' => [
            'console/runtime',
            'frontend.conf/runtime',
            'frontend.conf/web/assets',
            'backend/runtime',
            'backend/web/assets',
            'api/runtime',
            'api/web/assets',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'frontend.conf/config/main-local.php',
            'backend/config/main-local.php',
            'api/config/main-local.php',
        ],
    ],
    'production' => [
        'path' => 'prod',
        'setWritable' => [
            'console/runtime',
            'frontend.conf/runtime',
            'frontend.conf/web/assets',
            'backend/runtime',
            'backend/web/assets',
            'api/runtime',
            'api/web/assets',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'frontend.conf/config/main-local.php',
            'backend/config/main-local.php',
            'api/config/main-local.php',
        ],
    ],
];

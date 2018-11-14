<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'user'   => ['class' => 'api\modules\user\Module'],
        'shop'   => ['class' => 'api\modules\shop\Module'],
        'cms'    => ['class' => 'api\modules\cms\Module'],
        'bbs'    => ['class' => 'api\modules\bbs\Module'],
        'common' => ['class' => 'api\modules\common\Module'],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'enableSession' => false,
            'loginUrl' => null,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'pluralize' => false,
                    'controller' => 'user/account',
                    'extraPatterns' => [
                        'GET login'  => 'login',
                        'GET logout' => 'logout',
                        'GET error'  => 'error',
                    ],
                ],
            ],
        ],
        'response' => [
            'class' => 'yii\web\Response',
            'formatters' => [
                \yii\web\Response::FORMAT_JSON => [
                    'class' => 'yii\web\JsonResponseFormatter',
                    'prettyPrint' => YII_DEBUG, // use "pretty" output in debug mode
                    'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
                ],
            ],
            'on beforeSend' => function ($event) {
                $response = $event->sender;

                // gii处理
                if (substr(Yii::$app->requestedRoute, '0', '4') == 'gii/' && YII_ENV_DEV) {
                    return;
                }

                // 错误信息格式化
                if (!$response->isSuccessful && !YII_DEBUG) {
                    $exception = Yii::$app->getErrorHandler()->exception;
                    if ($exception->getCode() > 100000) {
                        $response->data = ['code' => $exception->getCode(), 'message' => $exception->getMessage()];
                    } else {
                        $response->data = ['code' => 100000, 'message' => '系统未知错误'];
                    }
                }

                // 处理非数组输出
                if (!is_array($response->data)) {
                    $response->data = ['message' => $response->data];
                }

                // 数据组装
                $response->data = [
                    'success' => $response->isSuccessful,
                    'data' => $response->data,
                    'timestamp' => time(),
                ];

                $response->statusCode = 200;
            },
        ],
    ],
    'params' => $params,
];

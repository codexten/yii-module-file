<?php

use codexten\yii\base\Module;
use codexten\yii\modules\enquiry\models\Enquiry;

return [
    'modules'=>[
        'file' => [
            'class' => Module::class,
            'viewPath' => '@moduleFile/views',
            'controllerNamespace' => 'codexten\yii\modules\file\controllers',
        ],
    ]
];
<?php
return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/test-local.php',
    require __DIR__ . '/main1.php',
    require __DIR__ . '/main-local.php',
    require __DIR__ . '/test.php',
    [
    ]
);
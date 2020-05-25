<?php
use \yii\web\Request;

$baseUrl = str_replace(['/frontend/web', '/backend/web'], '', (new Request)->getBaseUrl());

return [
    '@bower' => '@vendor/bower-asset',
    '@npm' => '@vendor/npm-asset',
    '@web' => '@app/web'
];

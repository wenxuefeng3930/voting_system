<?php
namespace app\modules\v1;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        // 从config.php加载配置来初始化模块
        \Yii::configure($this, require __DIR__ . '/config.php');
    }
}
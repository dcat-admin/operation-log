<?php

namespace Dcat\Admin\OperationLog;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\OperationLog\Http\Middleware\LogOperation;

class OperationLogServiceProvider extends ServiceProvider
{
    protected $middleware = [
        'middle' => [
            LogOperation::class,
        ],
    ];

    public function register()
    {
    }

    public function init()
    {
        parent::init();
    }

    public function settingForm()
    {
        return new Setting($this);
    }
}

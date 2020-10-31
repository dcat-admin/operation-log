<?php

namespace Dcat\Admin\OperationLog;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return '操作日志';
    }

    public function form()
    {
        $this->text('key1')->required();
        $this->text('key2')->required();
    }
}

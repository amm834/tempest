<?php

namespace App;

use Tempest\Http\Get;
use Tempest\View\View;
use function Tempest\view;

class DashboardController
{

    #[Get('/dashboard')]
    public function __invoke(): ViewΩ
    {
        return view('dashboard.view.php');
    }
}

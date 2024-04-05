<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use Hashids\Hashids;

use Myth\Auth\Models\useModel;


use Config\Services;

class IndexController extends BaseController
{
    public function inicio()
    {
        return view('admin/inicio_views');
    }
}

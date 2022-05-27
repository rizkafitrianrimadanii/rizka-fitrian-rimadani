<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function index()
    {
		$data['listKamar']=$this->kamar->distinct()->find();
        return view('Dashboard',$data);
    }

}

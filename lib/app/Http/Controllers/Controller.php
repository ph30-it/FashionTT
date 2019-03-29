<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function ordertable($M_name,$rela_name)
	{
		
		if (request()->orderby) {
			$data = $M_name::with($rela_name)->orderBy(request()->orderby,request()->sta)->paginate(10);
		}else{
			$data = $M_name::with($rela_name)->paginate(10);
		}
		return $data;
	}
}

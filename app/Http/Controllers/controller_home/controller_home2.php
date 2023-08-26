<?php

namespace App\Http\Controllers\controller_home;

use App\Models\establishment_type;
use App\Models\finishing_levels;
use App\Models\finishing_status;
use App\Models\governorates;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class controller_home2
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function controller_home2_fun(Request $request , $id_establishment_type)
    {
        $finishing_levels = finishing_levels::get();
        $finishing_status = finishing_status::get();
        $governorates = governorates::get();
        return view('home2', compact('finishing_levels', 'finishing_status', 'governorates', 'id_establishment_type'));
    }
}

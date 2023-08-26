<?php

namespace App\Http\Controllers\controller_home;

use App\Models\establishment_type;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class controller_home
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function controller_home_fun()
    {
        $establishment_type = establishment_type::get();
        return view('home', ['establishment_type' => $establishment_type]);
    }
}

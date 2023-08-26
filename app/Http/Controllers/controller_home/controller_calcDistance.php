<?php

namespace App\Http\Controllers\controller_home;

use App\Models\cost_status_level;
use App\Models\establishment_type;
use App\Models\user_choices;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class controller_calcDistance
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function calcDistance_fun(Request $request)
    {

        $cost_status_level = cost_status_level::get();
        $establishment_type =  establishment_type::where('id', $request->establishment_type_id)->get('Percentages')->first();
        foreach ($cost_status_level as  $value_cost_status_level) {
            if (
                $value_cost_status_level->id_finishing_level == $request->finishing_levels  and
                $value_cost_status_level->id_finishing_status  == $request->finishing_status
            ) {
                $res = $value_cost_status_level->cost * $establishment_type->Percentages * array_sum($request->calc_dis_input) ;
                user_choices::create([
                    'id_user'=>Auth::user()->id,
                    'id_finishing_level'=>$request->finishing_levels,
                    'id_finishing_status'=>$request->finishing_status,
                    'id_governorates'=>$request->governorates,
                    'id_establishment_type'=>$request->establishment_type_id,
                    'total_cost'=>$res,

                ]);
                return view('resaults', compact('res'));
            }
        }
    }
}

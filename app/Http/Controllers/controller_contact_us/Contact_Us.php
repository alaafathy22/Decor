<?php

namespace App\Http\Controllers\controller_contact_us;

use App\Http\Controllers\Controller;
use App\Models\contact_us as ModelsContact_us;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use function PHPUnit\Framework\isNull;

class Contact_Us extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contact_us_fun(Request $request)
    {

        ModelsContact_us::create([
            'name' => $request->name,
            'number' => $request->number_phone,
            'details' => $request->message,
        ]);
        return redirect()->route('home')->with('status-success', 'تم إرسال رسالتك نشكرك جداً');
    }
}

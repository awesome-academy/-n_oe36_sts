<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
class LanguageController extends Controller
{
    public function index(Request $request,$language)
    {
        if($language){
            Session::put('language',$language);
        }
        return redirect()->back();
    }
}

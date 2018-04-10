<?php
/**
 * Created by PhpStorm.
 * User: Користувач
 * Date: 06.04.2018
 * Time: 0:56
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class DefaultController extends Controller

{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sAdmin()
    {
        $user = Auth::user();

        if($user != null && $user->hasRole('sadmin')) {
            return view('s-admin');
        }else{
            return view('welcome');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $user = Auth::user();

        if($user != null && $user->hasRole('user')) {
            return view('users');
        }else{
            return view('welcome');
        }
    }
}
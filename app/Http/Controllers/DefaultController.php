<?php
/**
 * Created by PhpStorm.
 * User: Користувач
 * Date: 06.04.2018
 * Time: 0:56
 */
namespace App\Http\Controllers;


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
        return view('s-admin');
    }
}
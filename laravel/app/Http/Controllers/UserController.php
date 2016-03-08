<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;
use Illuminate\Support\Facades\View;
use Redirect;
use App\Quotation;

class UserController extends Controller
{
    public function index () {
        if (!Auth::check())
            return Redirect::route('user-login');

        return View::make('admin');
    }
}

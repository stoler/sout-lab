<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Auth;
use Redirect;

class AdminController extends Controller
{
    public function index () {
        if (!Auth::check())
            return Redirect::route('user-login');

        $users = new UserController();
        $reviews = new ReviewController();
        $advant = new AdvantController();
        $data = array(
            'arUsers' => $users->getList(),
            'arReview' => $reviews->getList(),
            'advant' => $advant->getItem(1),
        );

        return View::make('admin', $data);
    }
}

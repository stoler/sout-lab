<?php
/**
 * Created by PhpStorm.
 * User: stoler
 * Date: 07.03.2016
 * Time: 17:18
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use View;
use Redirect;

class AuthController extends Controller {
    protected $auth;

    public function getLogin () {
        return View::make('login');
    }

    public function postLogin () {
        $rules = array(
            'name' => 'required',
            'password' => 'required',
        );

        $messages = array(
            'required' => 'Поле :attribute должно быть заполнено',
        );

        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return Redirect::route('user-login')->withErrors($validator);
        }

        $auth = Auth::attempt(array(
            'email' => Input::get('name'),
            'password' => Input::get('password'),
        ), false);

        if (!$auth) {
            return Redirect::route('user-login') -> withErrors(array(
                'Ошибка авторизации'
            ));
        }

        return Redirect::route('admin');
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('user-login');

    }
}
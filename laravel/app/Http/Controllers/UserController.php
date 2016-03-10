<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Hash;
use Redirect;
use App\Quotation;
use App\Models\MainModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $userTable = 'users';

    public function getList () {
        if (!Auth::check())
            return Redirect::route('user-login');
        $users = new MainModel($this->userTable);
        return $users->getList();
    }

    public function getItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');
        $users = new MainModel($this->userTable);
        return $users->getItem($id);
    }

    public function addItem () {
        if (!Auth::check())
            return Redirect::route('user-login');
        $arUser = array(
            'email' => 'required|email',
            'password' => 'required',
        );

        $messages = array(
            'required' => 'Поле :attribute должно быть заполнено',
            'email' => 'Ошибка при заполнении поля',
        );

        $validator = Validator::make(Input::all(), $arUser, $messages);

        if ($validator->fails()) {
            return json_encode(array('error' => $validator->errors()->messages()));
        }

        $arField = array(
            array(
                'name' => $_POST['email'],
                'password' => Hash::make($_POST['password']),
                'email' => $_POST['email']
            )
        );

        $users = new MainModel($this->userTable);
        $users->addItem($arField);
        return Redirect::route('admin');
    }

    public function deleteItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');

        $users = new MainModel($this->userTable);
        $users->deleteItem($id);

        return Redirect::route('admin');
    }

    public function updateItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');

        $arField = array();
        if ($_POST['email']) {
            $arField['email'] = $_POST['email'];
            $arField['name'] = $_POST['email'];
        }

        if ($_POST['password']) {
            $arField['password'] = Hash::make($_POST['password']);
        }

        $users = new MainModel($this->userTable);
        $users->updateItem($id, $arField);

        return Redirect::route('admin');
    }

}

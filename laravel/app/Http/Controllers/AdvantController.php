<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\MainModel;
use App\Http\Requests;
use Auth;
use Redirect;

class AdvantController extends Controller
{
    protected $advantTable = 'advant';

    public function getItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');

        $advant = new MainModel($this->advantTable);
        return $advant->getItem($id);
    }

    public function updateItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');

        $arField = array();
        if ($_POST['advant']) {
            $arField['text'] = $_POST['advant'];
        }

        $advant = new MainModel($this->advantTable);
        $advant->updateItem($id, $arField);

        return Redirect::route('admin');
    }
}

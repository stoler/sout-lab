<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Redirect;
use App\Models\MainModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    protected $reviewTable = 'review';

    public function getList () {
        if (!Auth::check())
            return Redirect::route('user-login');
        $reviews = new MainModel($this->reviewTable);
        return $reviews->getList(array(), 'sort');
    }

    public function getItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');
        $reviews = new MainModel($this->reviewTable);
        return $reviews->getItem($id);
    }

    public function addItem () {
        if (!Auth::check())
            return Redirect::route('user-login');
        $arReview = array(
            'name' => 'required',
            'company' => 'required',
            'description' => 'required',
            'link' => 'required',
        );

        $messages = array(
            'required' => 'Поле :attribute должно быть заполнено',
        );

        $validator = Validator::make(Input::all(), $arReview, $messages);

        if ($validator->fails()) {
            return json_encode(array('error' => $validator->errors()->messages()));
        }

        $arField = array(
            array(
                'name' => $_POST['name'],
                'company' => $_POST['company'],
                'description' => $_POST['description'],
                'link' => $_POST['link'],
                'sort' => ((isset($_POST['sort']) && !empty($_POST['sort'])) ? (int)$_POST['sort'] : 0),
            )
        );

        $reviews = new MainModel($this->reviewTable);
        $reviews->addItem($arField);
        return Redirect::route('admin');
    }

    public function deleteItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');

        $reviews = new MainModel($this->reviewTable);
        $reviews->deleteItem($id);

        return Redirect::route('admin');
    }

    public function updateItem ($id) {
        if (!Auth::check())
            return Redirect::route('user-login');

        $arField = array();
        if ($_POST['name']) {
            $arField['name'] = $_POST['name'];
        }

        if ($_POST['company']) {
            $arField['company'] = $_POST['company'];
        }

        if ($_POST['link']) {
            $arField['link'] = $_POST['link'];
        }

        if ($_POST['description']) {
            $arField['description'] = $_POST['description'];
        }

        if ($_POST['sort']) {
            $arField['sort'] = $_POST['sort'];
        }


        $reviews = new MainModel($this->reviewTable);
        $reviews->updateItem($id, $arField);

        return Redirect::route('admin');
    }
}

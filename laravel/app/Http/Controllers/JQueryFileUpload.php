<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use UploadHandler;

class JQueryFileUpload extends Controller
{
    public function index () {
        if (!Auth::check())
            return Redirect::route('user-login');
        $upload_handler = new UploadHandler();
    }
}

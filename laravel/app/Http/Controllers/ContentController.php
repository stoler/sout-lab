<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Auth;
use Redirect;
use Excel;
use App\Http\Requests;
use App\Models\ContentModel;

class ContentController extends Controller
{
    public function index () {
        return view('welcome');
    }

    public function importToExcel () {
        if (!Auth::check())
            return Redirect::route('user-login');

        $contentData = ContentModel::getContent();

        Excel::create('Filename', function($excel) use($contentData) {

            $excel->sheet('Sheet', function($sheet) use($contentData) {
                $sheet->fromArray($contentData, null, 'A1', true);
            });

        })->download('xls');

    }

    public function exportFromExcel () {
        if (!Auth::check())
            return Redirect::route('user-login');

        Excel::load('upload/filetest.xls', function($reader) {

            // Getting all results
            //$arData = $reader->toArray();

            ContentModel::setContent($reader->toArray());

            // ->all() is a wrapper for ->get() and will work the same
            //$results = $reader->all();

        });
    }
}

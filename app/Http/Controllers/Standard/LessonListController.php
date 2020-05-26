<?php

namespace App\Http\Controllers\standard;

use App\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonListController extends Controller
{
    public function index()
    {
        $language_datas = Language::all();
        return view('standard.lesson-list', ['language_datas' => $language_datas]);
    }
}

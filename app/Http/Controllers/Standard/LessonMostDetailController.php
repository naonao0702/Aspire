<?php

namespace App\Http\Controllers\standard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonMostDetailController extends Controller
{
    public function index($language_id)
    {
        $lang_data = $language_id;
        dd($lang_data);
    }
}

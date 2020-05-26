<?php

namespace App\Http\Controllers\standard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LessonChapter;

class LessonDetailController extends Controller
{
    public function index($language_data)
    {
        $language_id = $language_data;
        $chapter_datas = LessonChapter::where('language_id', '=', $language_id)
            ->OrderBy('chapter_num', 'asc')
            ->get();

        return view('standard.lesson-detail', ['chapter_datas' => $chapter_datas]);
    }
}

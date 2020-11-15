<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\LessonChapter;
use App\ChapterItem;
use App\ClearItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DynamicController extends Controller
{
    public function index()
    {
        $language_datas = Language::all();
        // dd($language_datas);
        return view('standard.lesson-list', ['language_datas' => $language_datas]);
    }
    
    public function mypage()
    {
        $user = \Auth::user();

        return view('standard.my-page', ['user' => $user]);
    }
    
    public function lessonDetail($language_data)
    {
        $language_id = $language_data;
        $chapter_datas = LessonChapter::where('language_id', '=', $language_id)
            ->OrderBy('chapter_num', 'asc')
            ->get();
        
        $language_datas = Language::where('language_id', '=', $language_id)->first();

        return view('standard.lesson-detail', ['chapter_datas' => $chapter_datas, 'language_datas' => $language_datas]);
    }
    
    public function lessonItem($language_id, $chapter_num)
    {
        $login_user = Auth::user();
        $user_id = $login_user->id;
        $id = $language_id;
        $chapter = $chapter_num;
        $datas = ChapterItem::where('language_id', $id)->where('chapter_num', $chapter)
            ->OrderBy('chapter_item_num', 'asc')
            ->get();

        foreach ($datas as $data) {
            $item_id = $data->item_id;
            if (!empty(DB::table('clear_items')->where('item_id', '=', $item_id)->where('user_id', '=', $user_id)->first())) {
                $data->role = 'clear';
            } else {
                $data->role = 'yet';
            }
        }
        $complete = count(ClearItem::where('user_id', $user_id)->where('language_id', $id)->where('chapter_num', $chapter)->get());
        $all = count(ChapterItem::where('language_id', $id)->where('chapter_num', $chapter)->get());
        $proportion = floor($complete / $all * 100);
        
        return view('standard.chapter-item', ['datas' => $datas, 'proportion' => $proportion]);
    }
}

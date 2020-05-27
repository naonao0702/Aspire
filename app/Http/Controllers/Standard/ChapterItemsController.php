<?php

namespace App\Http\Controllers\standard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChapterItem;

class ChapterItemsController extends Controller
{
    public function index($language_id, $chapter_num)
    {
        $id = $language_id;
        $chapter = $chapter_num;
        $datas = ChapterItem::where('language_id', $id)->where('chapter_num', $chapter)
            ->OrderBy('chapter_item_num', 'asc')
            ->get();
        $complete = count(ChapterItem::where('language_id', $id)->where('chapter_num', $chapter)->where('is_complete', 1)->get());

        $all = count(ChapterItem::where('language_id', $id)->where('chapter_num', $chapter)->get());

        $proportion = floor($complete / $all * 100);
        return view('standard.chapter-item', ['datas' => $datas, 'proportion' => $proportion]);
    }
}

<?php

namespace App\Http\Controllers\standard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChapterItem;
use Illuminate\Support\Facades\Auth;
use App\ClearItem;
use Illuminate\Support\Facades\DB;

class ChapterItemsController extends Controller
{
    public function index($language_id, $chapter_num)
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
            // if (isset(DB::table('clear_item')->select('item_id')->where('item_id', '=', $data->item_id)->where('user_id', '=', $user_id)->first()) {
            //     $role = DB::table('clear_item')->select('item_id')->where('item_id', '=', $data->item_id)->where('user_id', '=', $user_id)->first();
            // });
        }
        $complete = count(ClearItem::where('user_id', $user_id)->where('language_id', $id)->where('chapter_num', $chapter)->get());

        $all = count(ChapterItem::where('language_id', $id)->where('chapter_num', $chapter)->get());

        $proportion = floor($complete / $all * 100);



        return view('standard.chapter-item', ['datas' => $datas, 'proportion' => $proportion]);
    }
}

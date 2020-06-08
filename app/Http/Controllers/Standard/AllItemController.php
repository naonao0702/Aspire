<?php

namespace App\Http\Controllers\Standard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ChapterItem;
use App\ClearItem;

class AllItemController extends Controller
{
    // public function __construct()
    // {
    // }
    public function all_clear($language_id, $chapter_num)
    {
        $login_user = Auth::user();
        $user_id = $login_user->id;
        $user_name = $login_user->name;
        $clear_datas = ClearItem::where('language_id', $language_id)
            ->where('chapter_num', $chapter_num)
            ->where('user_id', $user_id)
            ->get();

        $all_datas = ChapterItem::where('language_id', $language_id)
            ->where('chapter_num', $chapter_num)
            ->get();

        foreach ($all_datas as $all_data) {
            $count = 0;
            foreach ($clear_datas as $clear_data) {
                if ($all_data->item_id == $clear_data->item_id) {
                    $count += 1;
                }
            }
            if ($count == 0) {
                $clear = new ClearItem();
                $clear->user_id = $user_id;
                $clear->language_id = $all_data->language_id;
                $clear->chapter_num = $all_data->chapter_num;
                $clear->chapter_item_num = $all_data->chapter_item_num;
                $clear->user_name = $user_name;
                $clear->item_id = $all_data->item_id;
                $clear->save();
            }
        }
        return redirect(route('lesson-item', [
            'language_id' => $language_id,
            'chapter_num' => $chapter_num,
            // 'user_id' => $user_data->id,
        ]));
    }


    public function all_not_clear($language_id, $chapter_num)
    {
        $login_user = Auth::user();
        $user_id = $login_user->id;
        $user_name = $login_user->name;
        $clear_datas = ClearItem::where('language_id', $language_id)
            ->where('chapter_num', $chapter_num)
            ->where('user_id', $user_id)
            ->get();

        $all_datas = ChapterItem::where('language_id', $language_id)
            ->where('chapter_num', $chapter_num)
            ->get();

        foreach ($all_datas as $all_data) {
            foreach ($clear_datas as $clear_data) {
                if ($all_data->item_id == $clear_data->item_id) {
                    $del_data = ClearItem::find($clear_data->clear_id);
                    $del_data->delete();
                }
            }
        }
        return redirect(route('lesson-item', [
            'language_id' => $language_id,
            'chapter_num' => $chapter_num,
            // 'user_id' => $user_data->id,
        ]));
    }
}

<?php

namespace App\Http\Controllers\standard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChapterItem;
use App\ClearItem;
use Illuminate\Support\Facades\Auth;

class CompleteController extends Controller
{
    public function complete($item_id)
    {
        $data = ChapterItem::find($item_id);
        $user_data = \Auth::user();

        $clear_data = new ClearItem();
        $clear_data->language_id = $data->language_id;
        $clear_data->chapter_num = $data->chapter_num;
        $clear_data->chapter_item_num = $data->chapter_item_num;
        $clear_data->user_id = $user_data->id;
        $clear_data->user_name = $user_data->name;

        $clear_data->save();


        return redirect(route('lesson-item', [
            'language_id' => $data->language_id,
            'chapter_num' => $data->chapter_num,
            // 'user_id' => $user_data->id,
        ]));
    }

    public function notcomplete($language_id, $chapter_num, $chapter_item_num)
    {
        $user_data = \Auth::user();
        $clear_data = ClearItem::where('user_id', $user_data->id)
            ->where('language_id', $language_id)
            ->where('chapter_num', $chapter_num)
            ->where('chapter_item_num', $chapter_item_num)
            ->get();

        $clear_id = $clear_data[0]['clear_id'];

        $delete_data = ClearItem::find($clear_id);

        // $chapter_data = ClearItem::find($item_id);
        $delete_data->delete();

        return redirect(route('lesson-item', [
            'language_id' => $language_id,
            'chapter_num' => $chapter_num,
            // 'user_id' => $user_data->id,
        ]));
    }

    public function all($language_id, $chapter_num)
    {
        $data = ChapterItem::where('language_id', $language_id)
            ->where('chapter_num', $chapter_num)
            ->get();
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $data[$i]->is_complete = 1;
            $data[$i]->save();
        }
        return redirect(route('lesson-item', [
            'language_id' => $data[0]->language_id,
            'chapter_num' => $data[0]->chapter_num,
        ]));
    }

    public function notall($language_id, $chapter_num)
    {
        $data = ChapterItem::where('language_id', $language_id)
            ->where('chapter_num', $chapter_num)
            ->get();
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $data[$i]->is_complete = 0;
            $data[$i]->save();
        }
        return redirect(route('lesson-item', [
            'language_id' => $data[0]->language_id,
            'chapter_num' => $data[0]->chapter_num,
        ]));
    }
}

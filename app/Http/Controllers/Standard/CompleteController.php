<?php

namespace App\Http\Controllers\standard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChapterItem;

class CompleteController extends Controller
{
    public function complete($item_id)
    {
        $data = ChapterItem::find($item_id);
        if ($data->is_complete == 1) {
            $data->is_complete = 0;
        } elseif ($data->is_complete == 0) {
            $data->is_complete = 1;
        }
        $data->save();

        return redirect(route('lesson-item', [
            'language_id' => $data->language_id,
            'chapter_num' => $data->chapter_num,
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

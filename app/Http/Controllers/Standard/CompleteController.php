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
}

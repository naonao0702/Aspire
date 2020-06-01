<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChapterItem extends Model
{
    protected $table = 'chapter_items';

    protected $primaryKey = 'item_id';

    public function clear_item()
    {
        return $this->hasMany('App\ClearItem');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClearItem extends Model
{
    protected $table = 'clear_items';

    protected $primaryKey = 'clear_id';

    public function chapter_item()
    {
        return $this->belongsTo('App\Chapter_Item');
    }
}

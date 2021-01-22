<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id')->with('childs')->orderBy('sort');
    }

    public static function tree() {

    	return self::whereParentId(0)
    		->with('childs')
    		->orderBy('sort')
    		->get();

    }
}

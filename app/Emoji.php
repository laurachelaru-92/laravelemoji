<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emoji extends Model
{
    protected $table = 'emoji';

    // protected $fillable = [
    //     'slug',
    //     'character',
    //     'unicodeName',
    //     'codePoint',
    //     'group',
    //     'subGroup',
    // ];

    protected $guarded = [];
}

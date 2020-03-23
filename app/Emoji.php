<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emoji extends Model
{
    protected $fillable = [
        'slug',
        'character',
        'unicodeName',
        'codePoint',
        'group',
        'subGroup'
    ];

    protected $table = 'emoji';

}

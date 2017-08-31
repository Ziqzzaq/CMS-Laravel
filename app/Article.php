<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'contents',
        'user_id'
    ];

    /*
     * Artykuł ma swojego autora
     */
    public function user()
    {
        return$this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    protected $fillable = ['date'];

    /**
     * ユーザー関連付け
     * 1対多
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

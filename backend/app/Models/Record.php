<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    /**
    * 参照させたいSQLのテーブル名を指定
    */
    protected $table = 'record'

    /**
    * ユーザーとのリレーション設定
    */
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}

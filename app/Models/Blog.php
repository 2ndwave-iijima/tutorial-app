<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /* 
     * The attribues that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ // リクエストからのDB変更許可カラム指定
        'title',
        'content',
        'created_user_id',
        'created_at',
        'updated_at'
    ];

    /**
     * ユーザーに関連しているプロフィール情報のリレーション
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_user_id');
    }

    
}
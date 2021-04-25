<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // 出品中
    const STATE_SELLING = 'selling';

    // 購入済み
    const STATE_BOUGHT = 'bought';


    // 1対多のリレーション定義
    public function secondaryCategory()
    {
        return $this->belongsTo(SecondaryCategory::class);
    }

    // 出品中かどうかを返すアクセサ
    //  isStateSellingで参照できる
    public function getIsStateSellingAttribute()
    {
        return $this->state === self::STATE_SELLING;
    }
}
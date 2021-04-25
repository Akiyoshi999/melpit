<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrimaryCategory extends Model
{
    public function secondaryCategories()
    {
        // 第1引数：Eloquent Modelの完全修飾クラス名
        // 第2引数：外部キーのカラム名を追加。省略した場合(primary_category_id)
        // 第3引数：キーのカラム名。省略した場合:id
        return $this->hasMany(SecondaryCategory::class);
    }
}
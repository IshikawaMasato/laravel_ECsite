<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    //Categoryテーブルと紐づけ
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //税金の計算処理（四捨五入も）
    public function taxInclusivePrice()
    {
        return round($this->price * 1.1);
    }
}

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
    //public_flagの表示の変更
    public function public_flag()
    {
        if($this->public_flag==0)
        {
            return '公開中'; 
        }else{
            return '非公開' ;
        }
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
        'public_flag' => 'required|boolean',
    ];
}

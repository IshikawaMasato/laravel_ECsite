<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

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
        'public_flag' => 'required|boolean',
    ];
}

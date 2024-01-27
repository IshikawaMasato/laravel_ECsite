<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product; 

class UserController extends Controller{

    public function index(){
        //全件取得
        $items=product::where('public_flag',0)->get();//公開中のデータのみ

        //一覧画面へ
        return view('user.index',['items'=>$items]);
    }

    public function detail($id){
        //IDでしていして取得
        $item=Product::with('category')
            ->find($id);//IDで1件取得

        //詳細画面へ
        //公開中（public_flag==0）の時は表示する
        if ( $item->public_flag == 0 ){
            return view('user.detail',['item'=>$item]);
        }else{
            //非公開だった時の処理
            $msg = "このページは存在しません。";
            return view('user.detail',['msg'=>$msg]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product; 

class UserController extends Controller{

    public function index(){
        //全件取得
        $items=product::where('public_flag',0)->get();

        //税率の加算
        // $taxInclusivePrice =TaxInclusivePrice($items->price);
        
        //一覧画面へ
        return view('user.index',['items'=>$items]);
        // return view('user.index',['items'=>$items,'taxInclusivePrice'=>$taxInclusivePrice]);
    }

    public function detail($id){
        //IDでしていして取得
        $item=product::find($id);
        
        //税率の加算
        // $taxInclusivePrice =TaxInclusivePrice($item->price);
        
        //詳細画面へ
        if ( $item->public_flag == 0 ){
            return view('user.detail',['item'=>$item]);
        }else{
            //非公開だった時の処理
            $msg = "このページは存在しません。";
            return view('user.detail',['msg'=>$msg]);
        }
    }

    //税率の加算関数
    function TaxInclusivePrice($price){
        return $price*1.1;
    }
}

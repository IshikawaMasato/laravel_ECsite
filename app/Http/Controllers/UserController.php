<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product; 
use App\Models\category; 

class UserController extends Controller{

    public function index(){
        //全件取得
        $items=product::where('public_flag',0)->get();//公開中のデータのみ
        $categorys= category::where('delete_flag',0)->get();
        //一覧画面へ
        return view('user.index',['items'=>$items,'categorys'=>$categorys]);
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
            $msg = "申し訳ございません。この商品は現在非公開となっております。";
            return view('user.detail',['msg'=>$msg]);
        }
    }

    public function search(Request $request){
        $categorys= category::where('delete_flag',0)->get();

        $query=product::where('public_flag',0);//公開中のデータのみ
        if($request->keyword){
            //keywordが入力されていたら検索
            $query->where('name','LIKE',"%{$request->keyword}%");
        }
        if($request->category!=0){
            //カテゴリが選択されていたら検索
            $query->where('category_id',$request->category);
        }
        $items=$query->get();
        
        //一覧画面へ
        return view('user.index',['items'=>$items,'categorys'=>$categorys]);
    }
    
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\product; 
use App\Models\category;
use Intervention\Image\Laravel\Facades\Image;

class AdminController extends Controller
{
    //管理者TOPへ
    public function index()
    {
        return view('admin.index');
    }
    //一覧画面へ遷移
    public function product_list()
    {
        $items = product::where('delete_flag',0)->get();
        return view('admin.product_list',['items'=>$items]);
    }
    //登録画面へ遷移
    public function product_register(Request $request)
    {
        $categorys= category::where('delete_flag',0)->get();
        return view('admin.product_register',['categorys'=>$categorys]);
    }
    public function product_create(Request $request)
    {
        // リクエストから画像ファイルと商品データを取得します。
        $image = $request->file('img');
        $productData = $request->validate(Product::$rules);

        // 画像ファイルをstorage/public/avatarディレクトリに保存し、ファイル名を取得します。
        $imageFileName = $image->store('public/avatar');

        // データベースに商品データと画像ファイル名を保存します。
        Product::create(array_merge($productData, ['img_path' => basename($imageFileName)]));

        return redirect('/admin/product_register');
    }

    public function product_edit($id)
    {
        //IDでしていして取得
        $item=Product::with('category')
            ->find($id);//IDで1件取得
            
        $categorys= category::where('delete_flag',0)
        ->where('delete_flag',0)
        ->get();

        return view('admin.product_edit',['item'=>$item,'categorys'=>$categorys]);
    }
    public function product_update(Request $request, $id)
    {
        // IDに基づいて更新対象の商品を取得します
        $product = Product::find($id);

        $productData = $request->validate(Product::$rules);

        if ($request->hasFile('img')) {
            // 新しい画像がアップロードされた時、既存の画像を置換
            $image = $request->file('img');
            $imageFileName = $image->store('public/avatar');
            $productData['img_path'] = basename($imageFileName);
        }

        // 商品データを更新
        $product->update($productData);
        return redirect('/admin/product_edit/' . $id);
    }

    public function product_delete($id){
        $product = Product::find($id);
        $product->update(['delete_flag' => 1]);
        return redirect('/admin/product_list');
    }
    //一覧画面へ遷移
    public function category_list()
    {
        $items = Category::where('delete_flag',0)->get();
        return view('admin.category_list',['items'=>$items]);
    }
    //登録画面へ遷移
    public function category_register(Request $request)
    {
        return view('admin.category_register');
    }
    public function category_create(Request $request)
    {
        $categoryData = $request->validate(Category::$rules);
        Category::create($categoryData);

        return redirect('/admin/category_register');
    }

    public function category_edit($id)
    {
        //IDでしていして取得
        $item=Category::find($id);//IDで1件取得
        return view('admin.category_edit',['item'=>$item]);
    }
    public function category_update(Request $request, $id)
    {
        // IDに基づいて更新対象の商品を取得します
        $category = Category::find($id);

        $categoryData = $request->validate(Category::$rules);
        // 商品データを更新
        $category->update($categoryData);
        return redirect('/admin/category_edit/' . $id);
    }

    public function category_delete($id){
        $category = Category::find($id);
        $category->update(['delete_flag' => 1]);
        return redirect('/admin/category_list');
    }
}

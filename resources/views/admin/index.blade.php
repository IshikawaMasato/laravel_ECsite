@extends('layouts.admin_baselayout')
@section('content')
<h1>管理者画面</h1>
<a href="/admin/product_list">商品一覧</a>
<a href="/admin/product_register">商品登録</a>
<a href="/admin/category_list">カテゴリ一覧</a>
<a href="/admin/category_register">カテゴリ登録</a>
<a href="/admin/order_list">注文一覧</a>
@endsection

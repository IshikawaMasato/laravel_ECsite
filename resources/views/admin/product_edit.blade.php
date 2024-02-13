@extends('layouts.admin_baselayout')
@section('content')
<h1>product_edit</h1>
    <form action="{{ route('product_update', ['id' => $item->id]) }}"  method="post" enctype="multipart/form-data">
    @csrf    
        <table>
            <tr>
                <th>商品名</th>
                <td><input type="text" name="name" placeholder="商品名を入力してください" value="{{ $item->name }}"></td>
            </tr>
            <tr>
                <th>金額（税抜き）</th>
                <td><input type="number" name="price" placeholder="税抜き価格を入力してください" value="{{ $item->price }}"></td>
            </tr>
            <tr>
                <th>画像</th>
                <td><input type="file" name="img" accept="image/*" value="{{ $item->img_path }}"></td>
            </tr>
            <tr>
                <th>説明</th>
                <td>
                    <textarea name="description" placeholder="商品の説明を入力してください" >{{ $item->description }}</textarea>
                </td>
            </tr>
            <tr>
                <th>公開設定</th>
                <td>
                    <label><input type="radio" name="public_flag" value="0" {{ $item->public_flag == 0 ? 'checked' : '' }}>公開</label>
                    <label><input type="radio" name="public_flag" value="1" {{ $item->public_flag == 1 ? 'checked' : '' }}>非公開</label>
                </td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>
                    <select name="category_id">
                        <option disabled selected>カテゴリーを選択してください</option>
                        @foreach($categorys as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
@endsection
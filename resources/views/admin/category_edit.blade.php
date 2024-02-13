@extends('layouts.admin_baselayout')
@section('content')
<h1>category_edit</h1>
    <form action="{{ route('category_update', ['id' => $item->id]) }}"  method="post">
    @csrf    
        <table>
            <tr>
                <th>カテゴリー名</th>
                <td><input type="text" name="name" placeholder="商品名を入力してください" value="{{ $item->name }}"></td>
            </tr>
            <tr>
                <th>公開設定</th>
                <td>
                    <label><input type="radio" name="public_flag" value="0" {{ $item->public_flag == 0 ? 'checked' : '' }}>公開</label>
                    <label><input type="radio" name="public_flag" value="1" {{ $item->public_flag == 1 ? 'checked' : '' }}>非公開</label>
                </td>
            </tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
@endsection
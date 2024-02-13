@extends('layouts.admin_baselayout')
@section('content')
<h1>product_list</h1>
    <table>
        <tr>
            <th>画像</th>
            <th>名前</th>
            <th>カテゴリー</th>
            <th>税抜き金額</th>
            <th>税込み金額</th>
            <th>説明</th>
            <th>公開・非公開</th>
            <th>登録日</th>
            <th>更新日</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>
                    <img src="{{ asset('storage/avatar/'.$item->img_path) }}" alt="{{ $item->name.'の画像' }}">
            </td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category->name }}</td>
            <td>{{ $item->price."円" }}</td>
            <td>{{ $item->taxInclusivePrice()."円" }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->public_flag() }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td><a href="{{ route('product_edit', ['id' => $item->id]) }}">編集</a></td>
            <td><a href="{{ route('product_delete', ['id' => $item->id]) }}">削除</a></td>
        </tr>
        @endforeach
    </table>
@endsection
@extends('layouts.admin_baselayout')
@section('content')
<h1>category_list</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>公開・非公開</th>
            <th>登録日</th>
            <th>更新日</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->public_flag() }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td><a href="{{ route('category_edit', ['id' => $item->id]) }}">編集</a></td>
            <td><a href="{{ route('category_delete', ['id' => $item->id]) }}">削除</a></td>
        </tr>
        @endforeach
    </table>
@endsection
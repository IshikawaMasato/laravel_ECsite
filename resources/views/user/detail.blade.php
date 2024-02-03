@extends('layouts.baselayout')
@section('content')
<h1>detail</h1>
@isset($msg)
    <p>{{$msg}}</p>
@else
    <table>
        <tr>
            <th>画像</th>
            <th>名前</th>
            <th>カテゴリー</th>
            <th>税抜き金額</th>
            <th>税込み金額</th>
            <th>説明</th>
        </tr>
        <tr>
            <td>
                    <img src="{{ asset('img/'.$item->img_path) }}" alt="{{ $item->name.'の画像' }}">
            </td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category->name }}</td>
            <td>{{ $item->price."円" }}</td>
            <td>{{ $item->taxInclusivePrice()."円" }}</td>
            <td>{{ $item->description }}</td>
        </tr>
    </table>
@endisset
@endsection
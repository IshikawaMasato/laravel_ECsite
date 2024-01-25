<h1>index</h1>
<table>
    <tr>
        <th>画像</th>
        <th>名前</th>
        <th>税抜き金額</th>
        <th>税込み金額</th>
        <th>説明</th>
    </tr>
    @foreach($items as $item)
        <tr>
            <td>
                <img src="{{ asset('img/'.$item->img_path) }}" alt="{{ $item->name.'の画像' }}">
            </td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price."円" }}</td>
            <td>{{ $item->taxInclusivePrice()."円" }}</td>
            <td>{{ $item->description }}</td>
            <td><a href="{{ route('user.detail', ['id' => $item->id]) }}">詳細</a></td>
        </tr>
    @endforeach
</table>
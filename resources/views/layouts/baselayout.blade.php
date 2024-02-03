<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <form action="/search">
            @csrf
            <select name="category">
                <option value="0">全て</option>
                @foreach($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <input type="text" name="keyword">
            <input type="submit" value="検索">
        </form>
        <a href="">アカウント</a>
        <a href="">注文履歴</a>
        <a href="">カート</a>
    </header>
    
    @yield("content")
    
    <footer>
        &copy;laravel課題_ECサイト_2024
    </footer>
</body>
</html>

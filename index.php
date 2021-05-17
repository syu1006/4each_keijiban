<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet"type="text/css" href="style.css">    
</head>
    
<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <ul class="menu">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>お問合わせ</li>
        <li>その他</li>
        </ul>
    </header> 
    <main>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                <h2>入力フォーム</h2>    
            
                <div>   
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>
            
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>
            
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="35" rows="7"name="comments"></textarea>
                </div>
            
                <div>
                    <input type="submit" class="submit" value="送信する">
                </div>
            </form>
            
            <div class="box1">
                <h2>タイトル</h2>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</p>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</p>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</p>
            </div>
            
            <div class="box2">
                <h2>タイトル</h2>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中</p>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</p>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身</p>
            </div>    
            
        </div>
        
        <div class="right">
            <h2>人気の記事</h2>
            <p>PHPオススメ本</p>
            <p>PHP MyAdminの使い方</p>
            <p>今人気のエディタ</p>
            <p>HTMLの基礎</p>
            
            <h2>オススメリンク</h2>
            <p>インターノウス株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Bracketsのダウンロード</p>
            
            <h2>カテゴリ</h2>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>JavaScript</p>
        </div>
    </main>      
    
    <footer>
         copyright©internous │ 4each blog the which provides A to Z about programming 
    </footer>
</body>

</html>
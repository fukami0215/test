<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
<link rel="stylesheet"type="text/css" href="style.css">
    </head>
    <body>
        
        <?php
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=lesson01_fukami;host=localhost;","root","mysql");
        $stmt=$pdo->query("select*from 4each_keijiban");
        
        
        
        ?>
        
        <header>
      <img src="4eachblog_logo.jpg">
        </header>
        <div class="box01">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
            </ul>
        </div>
        <main>
        <h1>プログラミングに役立つ書籍</h1>
　　　
    <form method="post" action="insert.php">
    <div>
        <h2>お問い合わせフォーム</h2>
        <label>名前</label>
        <br>
        <input type="text" class="text" size="35" name="handlename">
        
        <div>
        <label>タイトル</label>
        <br>
        <input type="text" class="text" size="35" name="title">
        </div>
        </div>
        <div>
        <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>
        <div>
        <input type="submit" class="submit" value="投稿する">
        </div>
    </form>
       
    <div class="box002">
        <div class="kiji">
    
        <div class='contents'>
        <?php
            while($row=$stmt->fetch())
            {     echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<dov class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']. "</div>";
            echo"</div>";
            echo"</div>";}
            ?>
        </div>
        </div>
 
        
            </div>
        </main>
        <div class="right">
        <div class="box004">
            <h2>人気の記事</h2>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP　Mydminの使い方</li>
            <li>今人気のエディタ</li>
            <li>HTMLの基礎</li>
            </ul>
        </div>
        
        <div class="box005">
            <h2>オススメリンク</h2>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>braketsのダウンロード</li>
            </ul>
        </div>
        <div class="box006">
        <h2>カテゴリ</h2>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>Mysql</li>
            <li>JAvascript</li>
            </ul>
        </div>
        </div>
        
  
    </body>
</html>
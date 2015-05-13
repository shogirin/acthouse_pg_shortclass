Lesson3:PHPによるWebプログラミング
====

# PHPマニュアル
<http://php.net/manual/ja/>

## PHP定義済みの変数
* $_GET：getメソッドにより送信された値
* $_POST：postメソッドにより送信された値
* $_COOKIE：クッキーの値
* $_ REQUEST：$_GET、$_POST、$_COOKIEをまとめたもの
* $_SERVER：サーバーの環境情報やクライアント（Webブラウザー）の情報
* $_SESSION：セッションに格納した値

## GET/POST
GETとPOSTの違いは、GETメソッドの場合、送信値はURLに連結した形で送信される。  
例えば、formタグで送信する際は、method属性でgetとpostを設定する。
<http://www.atmarkit.co.jp/ait/articles/1407/02/news038.html>
+ [GET](http://www.phpbook.jp/appli/form/index2.html)
+ [POST](http://www.phpbook.jp/appli/form/index3.html)

## COOKIE/SESSION

###COOKIE
アクセスした Web サイトからPC上に配布される小さいファイル。  
cookieを用いることで、各ページ間を移動したり、再度サイトを訪れてもcookieで配布したデータを共有することができる。  
各ブラウザの設定で、所持しているcookieを参照することができる。  
<http://www.phpbook.jp/tutorial/cookie/>

###SESSION
HTTP通信の都合上、単純には実現できない一連の通信をセッションとして扱う為の仕組み。  
cookieだけで実現するには、保持内容がローカルから安易に参照できてしまう為、サーバー側に一時ファイルやDB、物理メモリーなどに保持内容を投げ、cookieはその取得手段として用いられる。  
<http://www.phpbook.jp/tutorial/session/>

# 課題：サンプルプログラムを作ろう(PHP-Lv2)
+ [URLエンコードツール](https://github.com/shogirin/acthouse_pg_shortclass/blob/master/practice_php/url_encode_Q.php)
+ [簡易連投クイズ](https://github.com/shogirin/acthouse_pg_shortclass/blob/master/practice_php/quiz_Q.php)
+ [合言葉制秘密のページ](https://github.com/shogirin/acthouse_pg_shortclass/blob/master/practice_php/secret_Q.php)
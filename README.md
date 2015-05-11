はじめてのWebプログラム入門ショート講座
====

対象条件：HTML,CSSの理解がある。

# まずはプログラマーの気分を味わう
<http://www.hackertyper.com/>  
　※上記の気分は、現実とのイメージと大分異なる場合があります。

# Webプログラムとは？

## ノンプログラムとプログラミングサイトの違い
* **静的Webページ**：アップロードされたHTMLがそのまま表示
* **動的Webページ**：プログラムによりHTML内容が状況により変化

<http://genxbeats.com/post/id/static-page-vs-dynamic-page>

### 動的Webページを実現するには
* **クライアントサイド**からのアプローチ：**JavaScript**, Flash, Java, Silverlight, ActiveX
* **サーバーサイド**からのアプローチ：PHP,Ruby,Python,Perl,Java,C#,Javascript(node.js),etc

# プログラムの基本を学ぼう
PHPを使って、どの言語にも共通する基本概念を覚えよう  
<http://sandbox.onlinephpfunctions.com/>

* 変数  
 ・基本(プリミティブ型)：<http://www.atmarkit.co.jp/ait/articles/1403/20/news105.html>  
 ・配列 ：<http://www.atmarkit.co.jp/ait/articles/1404/16/news044.html>
* 制御命令  
・条件分岐(if,else)：<http://www.atmarkit.co.jp/ait/articles/1404/07/news025.html>  
・繰り返し(for,while)：<http://www.atmarkit.co.jp/ait/articles/1405/14/news031.html>
* 関数：<http://www.phpbook.jp/tutorial/function/index2.html>  
・引数  
・戻り値  

<http://dotinstall.com/lessons/basic_php_beginner>  
<http://codeprep.jp/ja/books/book/34>

# プログラムの実行環境を理解しよう
サーバーを手に入れる(VirtualBox)  
<https://www.virtualbox.org/>  
<http://ftp.jaist.ac.jp/pub/Linux/CentOS/6.6/isos/x86_64/>  

## Linuxについて
* なぜLinuxOSなのか
* Linuxの種類

<http://linux.pgtop.net/>

### GUIとCUI
* GUI：ウィンドウやアイコンなどを、マウスやタッチ操作で行う
* CUI：キーボード入力と画面の文字表示のみでコンピュータを操作

## CUIで操作
<http://www.pxt.jp/ja/diary/article/292/>

### SSHを利用してネットーワーク越しにサーバーを操作する
ネットワーク通信の基本

* IPアドレスとホスト
* ポート

<http://x68000.q-e-d.net/~68user/net/net-1.html>  
<http://www.cman.jp/network/term/port.html>

### viエディタの使い方
<http://net-newbie.com/linux/commands/vi.html>  
<http://dotinstall.com/lessons/basic_vim>  

## WebサーバーとDBサーバー
* Web：Apache,Nginx, etc
* DB：Mysql, PostgreSQL, etc

## LAMPでサーバーサイドを構築しよう
データベース(DB)連動型のWebアプリケーションを開発するのに長らく定番のオープンソースソフトの組み合わせ

* L：Linux
* A：Apache
* M：Mysql
* P：PHP,Perl, Python  

<https://www.apachefriends.org/jp/index.html>

# Webサーバ(Apache)設定
Hello worldを出力させる。

* 設定ファイルの書き方
* ファイルパーミッション

<http://www.adminweb.jp/apache/>  
<http://www.tku.ac.jp/~densan/local/permission/permission.htm>

# サンプルプログラムを作ろう:PHP-LV1
## おみくじ
## 丁半
## 今月カレンダー

# PHP定義済みの変数
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

# サンプルプログラムを作ろう:PHP-LV2
## URLエンコードツール
## カレンダー
## 簡易クイズ
## 合言葉制、秘密のページ

# DBサーバ(Mysql)入門
* データベース
* テーブル
* カラム
* レコード
* SQL
* インデックス
* トランザクション

<http://dotinstall.com/lessons/basic_mysql_v2>  

## SQLを操作する
学習サイトを使ってsqlを習得する  

* SELECT/UPDATE/DELETE/INSERT
* CREATE DROP ALTER

<http://sqlzoo.net/wiki/SQL_Tutorial>

## DB設計
mysql workbenchを使って、テーブル設計を体験する

<http://dev.mysql.com/downloads/workbench/>

# サンプルプログラムを作ろう:PHP-LV3
## 投票システム
## 画像投稿掲示板
## アカウント制掲示板
  
#フロントエンドからのアプローチ

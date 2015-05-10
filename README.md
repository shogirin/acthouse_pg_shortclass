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
 ・基本(プリミティブ型)  
 ・配列  
* 制御命令  
・条件分岐(if,else)  
・繰り返し(for,while)
* 関数  
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

# サンプルプログラムを作ろう:LV1
## おみくじ
## 丁半
## 今月カレンダー
## URLエンコードツール
## 簡易クイズ

# HTTPの仕組み
## GET/POST
## セッション管理

<http://www.atmarkit.co.jp/ait/articles/1407/02/news038.html>

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

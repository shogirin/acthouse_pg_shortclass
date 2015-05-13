Lesson2:環境の構築
====

# プログラムの実行環境を理解しよう
サーバーを手に入れる(VirtualBox)  
<https://www.virtualbox.org/>  
<http://ftp.jaist.ac.jp/pub/Linux/CentOS/6.6/isos/x86_64/>  

## ネットワークの設定


# Linuxについて
* [Linuxの種類](http://linux.pgtop.net/)
* [なぜLinuxOSなのか](http://www.obenri.com/_myserver/linux.html)

## GUIとCUI
* GUI：ウィンドウやアイコンなどを、マウスやタッチ操作で行う
* CUI：キーボード入力と画面の文字表示のみでコンピュータを操作

### CUIで操作
<http://www.pxt.jp/ja/diary/article/292/>

### SSHを利用してネットーワーク越しにサーバーを操作する
ネットワーク通信の基本

* [IPアドレスとホスト](http://x68000.q-e-d.net/~68user/net/net-1.html)  
* [ポート](http://www.cman.jp/network/term/port.html)

<http://starzero.hatenablog.com/entry/20120807/1344356398>
<http://d.hatena.ne.jp/Loups-garous/20120917/1347900472>
<http://te2u.hatenablog.jp/entry/2013/09/12/215031>

### vi(vim)エディタの使い方
<http://net-newbie.com/linux/commands/vi.html>  
<http://dotinstall.com/lessons/basic_vim>  

# WebサーバーとDBサーバー
* Web：Apache,Nginx, etc
* DB：Mysql, PostgreSQL, etc

## LAMPでサーバーサイドを構築しよう
データベース(DB)連動型のWebアプリケーションを開発するのに長らく定番のオープンソースソフトの組み合わせ

* L：Linux
* A：Apache
* M：Mysql
* P：PHP,Perl, Python  

[XAMPP](https://www.apachefriends.org/jp/index.html)をインストール  
__使い方__
+ https://www.apachefriends.org/faq_linux.html
+ http://t.vowshe.info/jq/ref/XAMPP_install_tips.htm

## Webサーバ(Apache)設定
Hello worldを出力させる。
* [設定ファイルの書き方](http://www.adminweb.jp/apache/)

### ブラウザで表示できない時は・・・
* [ファイルパーミッション](http://www.tku.ac.jp/~densan/local/permission/permission.htm)
* [SELinuxを無効化する](http://rfs.jp/server/security/selinux01.html)
* [外部へのアクセス公開](http://agrimo.jp/wp/?page_id=882)


# 課題：環境を再構築しよう
VMに作成した仮想環境を削除し、もう一度LinuxのインストールからWebサーバーによる「hello world」の出力までを構築する。

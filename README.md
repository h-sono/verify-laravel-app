### LAMP(Linux, Apache, MySQL, PHP)環境構築

- ```$ sudo apt update```
- taskselのインストール：```$ sudo apt install -y tasksel```
- taskselでLAMPに必要なソフトウェアをインストール：```$ sudo tasksel install lamp-server```
- apache2のバージョン確認：```$ apache2 -v```
- apache2のステータス確認：```$ sudo service apache2 status```
- apache2起動：```$ sudo service apache2 start```
- MySQLバージョン確認：```$ mysql --version```
- バージョン確認：```$ php -v```

## UbuntuへのLaravelインストール手順

### パッケージ管理ツール：composerインストール

- パッケージ最新化：```$ sudo apt update```
- 依存関係インストール：```$ sudo apt install curl php-cli php-mbstring git unzip```
- composerインストール

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

- composerコマンドを使えるようにする。root権限だと基本的に使用できないため。
  - composer.pharファイルを移動(mkdirでcomposerディレクトリを作成)：```$ sudo mv composer.phar /usr/local/bin/composer```
  - composerディレクトリに実行権限をつける：```$ sudo chmod +x /usr/local/bin/composer```
- バージョン確認：```$ composer --version```
- 上記でcomposerコマンドが使用できない場合は以下のように実行・
- ```$ php /usr/local/bin/composer/composer.phar -v```(/usr/local/bin/composer/配下にcomposer.pharファイルを配置した場合)

※参考：<https://getcomposer.org/download/>

### Laravelインストール(Ubuntu)

- インストールと同時にプロジェクトを作成：```$ composer create-project　--prefer-dist laravel/laravel プロジェクト名```
  - <https://readouble.com/laravel/10.x/ja/installation.html>
  - <https://mat0401.info/blog/laravel-installation/>

## WindowsでLaravel使用

- LAMP(Linux, Apache, MySQL, PHP)環境構築している前提。

### パッケージ管理ツール：composerインストール

- <https://getcomposer.org/download/> からインストール。

### phpのパスを通す

- コントロールパネル＞システムとセキュリティ＞システム＞システムの詳細設定＞環境変数＞システム環境変数＞新規 で追加。
- パスは```C:\xampp\php\php.exe```で通している。

### php,composerのバージョン確認

- ```$ php -v```：8.1.2
- ```$ composer -V```：2.5.5

### Laravelのインストール

- ```$ composer global require laravel/installer```

### プロジェクト作成等

- ```$ laravel new {プロジェクト名}```
- 作成したプロジェクトに移動し```$ php artisan -V```でLaravelのバージョン確認。Laravel Framework 10.4.1を使用。
- 開発用サーバー起動：```$ php artisan serve```。

### 開発サーバー起動

- ```$ C:\Users\sonob\github\php>```配下にphpプロジェクト配置。
- ```$ php artisan serve```
- ```C:\Users\sonob\github\php\verify-laravel-app>php artisan serve```

### 必要なVsCode拡張機能
- Laravel Snippets
- PHP Debug
- PHP Intelephense

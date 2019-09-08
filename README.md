# Slimで学ぶMiddleware入門 サンプルコード

## 概要

このサンプルコードは、Slim Framework のスケルトンをインストールしたものに、いくつかMiddlewareを追加してあります。

追加したMiddlewareと、それぞれコミットした内容は、以下になります。
* AdditionalResponseHeaderMiddleware
  * 独自のHTTPレスポンスヘッダーを出力するMiddleware
  * コミット内容→  [9e660ed](https://github.com/nauleyco/slim-sample/commit/9e660ed678e34fadbf28f54a0e916bfb930ae88a)
* MaintenanceMiddleware
  * メンテナンス中にするMiddleware
  * コミット内容→  [730278a](https://github.com/nauleyco/slim-sample/commit/730278a2416e15a903e2f2f1ebf2181c9b437877)
 
 参考：Slimのスケルトンのリポジトリ < https://github.com/slimphp/Slim-Skeleton >


## プログラムの動作確認方法

このリポジトリをcloneまたはzipダウンロードし、slim-sampleディレクトリ内で、composer installしてから、ビルトインサーバーをたちあげてください。<br>
[composer](https://getcomposer.org/) は、あらかじめインストールしておいてください。

```bash
$ git clone git@github.com:nauleyco/slim-sample.git
$ cd slim-sample
$ composer install
$ php -S localhost:8080 -t public public/index.php
```

その後、ブラウザで、 http://localhost:8080/users にアクセスしてください。


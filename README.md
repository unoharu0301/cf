# 予約システム「RESE」
飲食店の一覧ページから予約を取れるアプリ

# 作成した目的
- データベースの使い方や、laravelの総復習のため

# 機能一覧
- ログイン機能
- 会員登録機能

## 使用技術
- laravel 8.83.27

## テーブル設計
![スクリーンショット 2024-07-11 001433](https://github.com/unoharu0301/cf/assets/151932422/8cd81e5d-3f9e-4e09-a460-1887e30c89c3)

## ER図
![スクリーンショット 2024-07-11 002749](https://github.com/unoharu0301/cf/assets/151932422/a78746ed-5b93-4002-96ac-9f7e54d016e9)

## 環境構築
Dockerビルド

git clone
docker-compose up -d --build
Laravel環境構築

docker-compose exec php bash
composer install
.env.exampleを.envファイルにコピーし環境変数を変更
php artisan key.generate
php artisan migrate
php artisan db:seed

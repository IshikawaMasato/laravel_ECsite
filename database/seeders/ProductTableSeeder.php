<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'スマートテレビ',
                'price' => 79999, // 日本円
                'description' => 'スマートテレビです。',
                'category_id' => 1, // カテゴリー: 家電
            ],
            [
                'name' => 'スポーツシューズ',
                'price' => 12999, // 日本円
                'description' => 'スポーツシューズです。',
                'category_id' => 5, // カテゴリー: スポーツ用品
            ],
            [
                'name' => '小説「夜のピクニック」',
                'price' => 1499, // 日本円
                'description' => '小説「夜のピクニック」です。',
                'category_id' => 3, // カテゴリー: 書籍
            ],
            [
                'name' => 'カメラドローン',
                'price' => 49999, // 日本円
                'description' => 'カメラドローンです。',
                'category_id' => 8, // カテゴリー: 車・バイク
            ],
            [
                'name' => '折りたたみ式キャンプチェア',
                'price' => 3999, // 日本円
                'description' => '折りたたみ式キャンプチェアです。',
                'category_id' => 11, // カテゴリー: アウトドア用品
            ],
            [
                'name' => '美容フェイスマスク',
                'price' => 999, // 日本円
                'description' => '美容フェイスマスクです。',
                'category_id' => 6, // カテゴリー: 美容・健康
            ],
            [
                'name' => 'ノートパソコン',
                'price' => 59999,
                'description' => '高性能なノートパソコンです。',
                'category_id' => 1, // カテゴリー: 家電
            ],
            [
                'name' => 'デニムジーンズ',
                'price' => 4999,
                'description' => 'スタイリッシュなデザインのデニムジーンズです。',
                'category_id' => 2, // カテゴリー: ファッション
            ],
            [
                'name' => '料理レシピ本「世界の味」',
                'price' => 2499,
                'description' => '美味しい料理が作れる世界の味のレシピ本です。',
                'category_id' => 3, // カテゴリー: 書籍
            ],
            [
                'name' => 'コンビニおにぎりセット',
                'price' => 799,
                'description' => '便利なコンビニおにぎりのセットです。',
                'category_id' => 4, // カテゴリー: 食品
            ],
            [
                'name' => 'バスケットボール',
                'price' => 2999,
                'description' => '本格的なプレイが楽しめるバスケットボールです。',
                'category_id' => 5, // カテゴリー: スポーツ用品
            ],
            [
                'name' => 'ヨガマット',
                'price' => 1999,
                'description' => '心地よいヨガのための専用マットです。',
                'category_id' => 6, // カテゴリー: 美容・健康
            ],
            [
                'name' => 'ジグソーパズル',
                'price' => 1499,
                'description' => '楽しさと知的な挑戦が詰まったジグソーパズルです。',
                'category_id' => 7, // カテゴリー: ホビー
            ],
            [
                'name' => '自動車用エアフレッシュナー',
                'price' => 899,
                'description' => '車内を爽やかに保つエアフレッシュナーです。',
                'category_id' => 8, // カテゴリー: 車・バイク
            ],
            [
                'name' => 'シックなソファ',
                'price' => 23999,
                'description' => 'シックで快適なリビングにぴったりなソファです。',
                'category_id' => 9, // カテゴリー: 家具・インテリア
            ],
            [
                'name' => 'ペット用おもちゃセット',
                'price' => 1599,
                'description' => 'ペットが喜ぶおもちゃのセットです。',
                'category_id' => 10, // カテゴリー: ペット用品
            ],
            [
                'name' => '4Kビデオカメラ',
                'price' => 109999,
                'description' => '高品質な4K動画を撮影できるビデオカメラです。',
                'category_id' => 1, // カテゴリー: 家電
            ],
            [
                'name' => 'レザージャケット',
                'price' => 7999,
                'description' => 'クラシックなデザインのレザージャケットです。',
                'category_id' => 2, // カテゴリー: ファッション
            ],
            [
                'name' => 'ベストセラー小説「未知の冒険」',
                'price' => 2499,
                'description' => '未知の冒険が広がる小説です。',
                'category_id' => 3, // カテゴリー: 書籍
            ],
            [
                'name' => '焼きそばセット',
                'price' => 999,
                'description' => '家庭で手軽に楽しめる焼きそばセットです。',
                'category_id' => 4, // カテゴリー: 食品
            ],
            [
                'name' => 'サッカーボール',
                'price' => 1999,
                'description' => 'プロ仕様のサッカーボールです。',
                'category_id' => 5, // カテゴリー: スポーツ用品
            ],
            [
                'name' => '美容フェイシャルマッサージャー',
                'price' => 4999,
                'description' => '美容とリラックスのためのフェイシャルマッサージャーです。',
                'category_id' => 6, // カテゴリー: 美容・健康
            ],
            [
                'name' => 'プラモデルキット',
                'price' => 2999,
                'description' => '組み立てて楽しむプラモデルキットです。',
                'category_id' => 7, // カテゴリー: ホビー
            ],
            [
                'name' => 'モーターサイクルヘルメット',
                'price' => 8999,
                'description' => '安全性とスタイルを兼ね備えたモーターサイクルヘルメットです。',
                'category_id' => 8, // カテゴリー: 車・バイク
            ],
            [
                'name' => 'シャギーラグ',
                'price' => 5999,
                'description' => '柔らかくて暖かみのあるシャギーラグです。',
                'category_id' => 10, // カテゴリー: 家具・インテリア
            ],
            [
                'name' => '猫用おもちゃセット',
                'price' => 1499,
                'description' => '猫が喜ぶおもちゃセットです。',
                'category_id' => 11, // カテゴリー: ペット用品
            ],
            // 他にも適当な商品データを追加
        ];
        
        // 生成した商品データをデータベースに保存する処理を書くことが必要
        foreach($products as $product){
            DB::table('products')->insert([
                'name' => $product['name'],
                'price' => $product['price'],
                'description' => $product['description'],
                'category_id' => $product['category_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

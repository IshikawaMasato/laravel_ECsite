<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => '音楽楽器'],
            ['name' => 'アウトドア用品'],
            ['name' => 'ゲーム・おもちゃ'],
            ['name' => 'アート・クラフト'],
            ['name' => 'ガーデニング'],
            ['name' => 'エレクトロニクス'],
            ['name' => 'スキンケア・化粧品'],
            ['name' => 'スポーツウェア'],
            ['name' => '旅行用品'],
            ['name' => 'キッチン用具'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

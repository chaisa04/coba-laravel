<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
             "title" => "Sofia With Mermaid",
             "slug" => "sofia-with-mermaid",
             "body" => "Sementara itu, Sofia mengambil Oona ke bagian bawah teluk dan semua pemandangan membuat Sofia menjerit dengan gembira. Kedua gadis memasuki kapal karam yang menggunakan Oona sebagai persembunyian nya. Tiba-tiba, kuda laut muncul dan memanggil untuk Oona yang mencoba untuk menyembunyikan Sofia.Dia mengatakan Sofia yang Hippocampus adalah temannya Sven yang akan sangat mencurigakan di sekitar orang-orang asing. Sven menemukan dua gadis dan kemudian bertanya Oona tentang di mana dia sudah dan yang teman barunya ini, menyatakan ia tidak melihatnya di Teluk sebelumnya. Oona mengatakan Sofia berkunjung dari koloni lain dan ketika dia terluka fin dia membantunya mendapatkan kembali."
            ],
            [
            "title" => "Sofia With Clover",
            "slug" => "sofia-with-clover",
            "body" => "Sementara itu, Sofia mengambil Oona ke bagian bawah teluk dan semua pemandangan membuat Sofia menjerit dengan gembira. Kedua gadis memasuki kapal karam yang menggunakan Oona sebagai persembunyian nya. Tiba-tiba, kuda laut muncul dan memanggil untuk Oona yang mencoba untuk menyembunyikan Sofia.Dia mengatakan Sofia yang Hippocampus adalah temannya Sven yang akan sangat mencurigakan di sekitar orang-orang asing. Sven menemukan dua gadis dan kemudian bertanya Oona tentang di mana dia sudah dan yang teman barunya ini, menyatakan ia tidak melihatnya di Teluk sebelumnya."
            ]
            ];

            public static function all()
            {
                return collect(self::$blog_posts);
            }

            public static function find($slug)
            {
                $posts = static::all();

                    return $posts->firstWhere('slug', $slug);
            }
}

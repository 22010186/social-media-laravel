<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
            'name' => "Aaron Alvarez",
            'handle' => '@aaronalvarez',
            'image' => 'https://picsum.photos/id/237/100',
            'tweet' => 'Hello world',
            'file' => '/videos/people-women.mp4',
            'isVideo' => true,
            'comments' => 35,
            'retweets' => 45,
            'likes' => 5,
            'analytics' => 81,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tweets')->insert([
            'name' => "Aaron Alvarez",
            'handle' => '@aaronalvarez',
            'image' => 'https://picsum.photos/id/237/100',
            'tweet' => 'street introduced finest curious nine cowboy shop who primitive shadow indeed personal circus took industrial activity why sweet library short before fell thou carry',
            'file' => '/images/cake.jpg',
            'isVideo' => false,
            'comments' => 35,
            'retweets' => 45,
            'likes' => 5,
            'analytics' => 81,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tweets')->insert([
            'name' => "Minerva Blair",
            'handle' => '@minervablair',
            'image' => 'https://picsum.photos/id/233/100',
            'tweet' => 'Hello world',
            'file' => '/videos/people-women.mp4',
            'isVideo' => true,
            'comments' => 35,
            'retweets' => 45,
            'likes' => 5,
            'analytics' => 81,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tweets')->insert([
            'name' => "Minerva Blair",
            'handle' => '@minervablair',
            'image' => 'https://picsum.photos/id/237/100',
            'tweet' => 'support information cotton base meat swim available forth may cage table involved giant attempt find dust bottle supper track between secret past company than',
            'file' => '/images/cake.jpg',
            'isVideo' => false,
            'comments' => 35,
            'retweets' => 45,
            'likes' => 5,
            'analytics' => 81,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tweets')->insert([
            'name' => "David Cook",
            'handle' => '@aaronalvarez',
            'image' => 'https://picsum.photos/id/238/100',
            'tweet' => 'examine consonant gradually army fur try oil horn ground helpful attached lost union thousand met route adult rain mysterious indeed many hay split cream',
            'file' => '/images/women-tet.jpg',
            'isVideo' => false,
            'comments' => 35,
            'retweets' => 45,
            'likes' => 5,
            'analytics' => 81,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

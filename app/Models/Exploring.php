<?php

namespace App\Models;


class Exploring
{   
    private static $spice = [
        [
            "image" => "pasta-g8f8b4d2c4_1920.jpg",
            "name" => "Laparino Makanini",
            "slug" => "laparino-makanini",
            "desc" => "This pasta is the only pasta that chef Rordon Gamsay recommended to make"
        ],
        [
            "image" => "pexels-jonathan-borba-2983101.jpg",
            "name" => "Goji Burger",
            "slug" => "goji-burger",
            "desc" => "The burger that defeated Kong in Hong Kong. the alpha kaiju."
        ],
        [
            "image" => "pexels-lisa-1279330.jpg",
            "name" => "Fetuccine De La Farfare",
            "slug" => "fetuccine-de-la-farfare",
            "desc" => "The pasta popular in Roman and Tuscan cuisine."
        ],
        [
            "image" => "pexels-mariana-kurnyk-1775043.jpg",
            "name" => "Bread Du Fromage",
            "slug" => "bread-du-fromage",
            "desc" => "Bread that can gives you shivers due to the taste while chewing it."
        ],
        [
            "image" => "meat-g9719eb165_1920.jpg",
            "name" => "Steak",
            "slug" => "steak",
            "desc" => "Steak is a meat generally sliced across the muscle fibers, potentially including a bone."
        ]
    ];

    public static function all() {
        return collect(self::$spice);
    }

    public static function find($slug) {
        $ex = static::all();
        // $newpos = [];
        // foreach($ex as $ex){
        //     if($ex["slug"] === $slug){
        //         $newpos = $ex;
        //     }
        // }

        return $ex->firstWhere('slug', $slug);
    }

}

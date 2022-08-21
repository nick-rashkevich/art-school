<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post as VoyagerPostModel;

class Post extends VoyagerPostModel
{
    use HasFactory, Sluggable;


    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function incrementReadCount()
    {
        $this->reads++;
        return $this->save();
    }

    public static function getPopularPosts()
    {
        return Post::orderBy('reads', 'desc')->take(3)->get();
    }

    public static function getRecentPosts()
    {
        return Post::orderBy('created_at', 'desc')->take(3)->get();
    }
}

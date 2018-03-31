<?php

namespace App;

use Carbon\Carbon;
use App\Tag;
class Post extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user() // $post->user->name //$comment->post->user
    {
    	return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	//$this->comments()->create(compact('body')); // or another way
    	/*Comment::create([
    		'body' => $body,
    		'post_id' => $this->id
    	]);*/
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => auth()->id()
        ]);
    }
    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
         $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = $filters['year']) {
         $query->whereYear('created_at', $year);
        }
    }
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function tags()
    {

        // Any postmay gave many tags
        return $this->belongsToMany(Tag::class);
        //Any tag may be applied to many posts

    }
}

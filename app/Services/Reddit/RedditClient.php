<?php


namespace App\Services\Reddit;


interface RedditClient
{
    public function getArticles(string $subreddit);
}

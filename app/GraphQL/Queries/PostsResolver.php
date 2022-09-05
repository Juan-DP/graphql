<?php

namespace App\GraphQL\Queries;

use App\Models\Posts;

final class PostsResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Posts::latest()->get();
    }
}

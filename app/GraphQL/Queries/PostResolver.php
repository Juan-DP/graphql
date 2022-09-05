<?php

namespace App\GraphQL\Queries;

use App\Models\Posts;

final class PostResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Posts::where('id', $args['id'])->first();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    public function run()
    {
        Comment::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'website' => 'http://example.com',
            'comment' => 'This is a comment.',
            'blog_id' => 1,
        ]);

        Comment::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'website' => null,
            'comment' => 'This is another comment.',
            'blog_id' => 2,
        ]);
    }
}

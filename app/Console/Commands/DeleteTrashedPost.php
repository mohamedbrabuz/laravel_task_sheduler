<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class DeleteTrashedPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:delete-trashed-post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete trashed posts ';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $posts = Post::onlyTrashed()->get();
        foreach ($posts as $post){
            $post->forceDelete();
        }
    }
}

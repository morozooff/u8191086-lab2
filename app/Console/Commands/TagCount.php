<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TagCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tag:count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Возвращает количество статей привязанных к тегу с идентификатором {id}';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        $count = Article::whereHas('tags', function($q) use ($id) {
            $q->where('name'. '='. $id);
        })->count();
        
        $this->info($count);
        return 0;
    }
}

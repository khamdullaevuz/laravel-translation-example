<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;

class CreatePage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'page:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $page = Page::create([
            'title' => 'Hello world',
            'content' => 'Hello world',
        ]);

        $page->translations()->create([
            'table_name' => 'pages',
            'column_name' => 'title',
            'value' => 'Salom dunyo',
            'locale' => 'uz',
            'foreign_key' => $page->id,
        ]);

        $page->translations()->create([
            'table_name' => 'pages',
            'column_name' => 'content',
            'value' => 'Salom dunyo',
            'locale' => 'uz',
            'foreign_key' => $page->id,
        ]);

        $this->info('Page created successfully');
    }
}

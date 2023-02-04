<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;

class GetPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'page:get {id}';

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
        $page = Page::find($this->argument('id'));

        $this->info($page->title);
        $this->info($page->content);
        $this->info($page->getTranslation('title', 'uz'));
        $this->info($page->getTranslation('content', 'uz'));
    }
}

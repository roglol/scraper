<?php

namespace App\Console\Commands;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Illuminate\Console\Command;

class ScrapeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $all_links = [];
      $client = new Client();
      $crawler = $client->request('GET', 'https://www.bbc.com/');
      $links = $crawler->filter('.media__link')->links();
      foreach ($links as $link) {
        $all_links[] = $link->getURI();
    }
    return $all_links;
    }
}

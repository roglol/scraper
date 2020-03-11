<?php

namespace App\Console\Commands;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Illuminate\Console\Command;

class TabulaScraper extends Command
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
    public function handleEconomy()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.tabula.ge/ge/economy');
        $crawler->filter('.newscard')->each(function($node){
            $arr = [];
          if($node->filter('img')->count()){
              $arr['image'] = $node->filter('img')->attr('src');
          };
          if($node->filter('.title')->count()){
              $arr['title'] = $node->filter('.title')->text();
          };
          $arr['link'] = $node->filter('a')->link()->getURI();      
          $this->blocks[] = $arr;
      });
         return $this->blocks;
    }
}

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
    public $blocks = [];

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
      $client = new Client();
      $crawler = $client->request('GET', 'https://www.bbc.com/');

      $crawler->filter('.block-link')->each(function($node){
          $arr = [];
        if($node->filter('img')->count()){
            $arr['image'] = str_replace('144','620',$node->filter('img')->attr('src'));
        };
        if($node->filter('.media__summary')->count()){
            $arr['desc'] = $node->filter('.media__summary')->text();
        };
        if($node->filter('.media__link')->count()){
            $arr['title'] = $node->filter('.media__link')->text();
            $arr['link'] = $node->filter('.media__link')->link()->getURI();
        };
        
        $this->blocks[] = $arr;
    });
    return array_filter($this->blocks , function($arr){
        return isset($arr['title']);
    });
    }
    public function handleTabula(){
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.tabula.ge/ge/news');
        $crawler->filter('.newscard')->each(function($node){
            $arr = [];
          if($node->filter('img')->count()){
              $arr['image'] = $node->filter('img')->attr('src');
          };
          if($node->filter('.title')->count()){
              $arr['desc'] = $node->filter('.title')->text();
          };
          $arr['link'] = $node->filter('a')->link()->getURI();      
          $this->blocks[] = $arr;
      });
         return $this->blocks;
    }
}

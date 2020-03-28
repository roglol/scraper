<?php

namespace App\Console\Commands;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Illuminate\Console\Command;
use DateTime;

class MarketwatchScraper extends Command
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
    protected $economy=[];
    protected $news =  [];
    protected $politics=[];


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->client =new Client(); 
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handleEconomy()
    {
        $crawler = $this->client->request('GET', 'https://www.marketwatch.com/economy-politics?mod=top_nav');
        $crawler->filter('.element--article')->each(function($node){
            $arr = [];
            $dateStr = $node->filter('.article__figure .figure__image')->link()->getURI();
            preg_match_all('/\d{4}\-\d{2}\-\d{2}/',$dateStr,$date);
            $arr['date'] = current($date[0]);
            $imgNode = $node->filter('.article__figure .figure__image img');
          if($imgNode->count()){
              $arr['img'] = substr(explode(",",$imgNode->attr('data-srcset'))[0], 0, -4);
          };
          $title=$node->filter('.article__content .article__headline .link');
          if($title->count()){
              $arr['title'] = $title->text();
          };
          $link = $node->filter('.article__content .article__headline a')->link()->getURI(); 
          $arr['link'] = $link;     
          $this->economy[] = $arr;
      });
         return $this->economy;
    }
    public function handleNews()
    {
        $crawler = $this->client->request('GET', 'https://www.marketwatch.com/latest-news?mod=top_nav');
            $crawler->filter('.element--article')->each(function($node){
            $arr = [];
            $dateStr = $node->filter('.article__figure .figure__image')->link()->getURI();
            preg_match_all('/\d{4}\-\d{2}\-\d{2}/',$dateStr,$date);
            $arr['date'] = current($date[0]) ? current($date[0]) : null ;
            $imgNode = $node->filter('.article__figure .figure__image img');
            if($imgNode->count()){
                $arr['img'] = substr(explode(",",$imgNode->attr('data-srcset'))[0], 0, -4);
            };
            $title=$node->filter('.article__content .article__headline .link');
            if($title->count()){
                $arr['title'] = $title->text();
            };
            $link = $node->filter('.article__content .article__headline a')->link()->getURI(); 
            $arr['link'] = $link;     
            $this->news[] = $arr;
      });
         return $this->news;
    }
}

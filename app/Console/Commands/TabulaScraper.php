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
    protected $economy=[];
    protected $news=[];
    protected $politics=[];
    protected $months = [
     "იანვარი" => 1,
     "თებერვალი" => 2,
     "მარტი" => 3,
     "აპრილი" => 4,
     "მაისი" => 5,
     "ივნისი" => 6,
     "ივლისი" => 7,
     "აგვისტო" => 8,
     "სექტემბერი" => 9,
     "ოქტომბერი" => 10,
     "ნოემბერი" => 11,
     "დეკემბერი" => 12
    ];

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
        $crawler = $this->client->request('GET', 'http://www.tabula.ge/ge/economy');
        $newscard = $crawler->filter('.newscard');
        $newscard->each(function($node){
            $arr = [];
        $img = $node->filter('img');
          if($img->count()){
              $arr['img'] = $img->attr('src');
          };
        $title = $node->filter('.title');
          if($title->count()){
              $arr['title'] = $title->text();
        };
          $link = $node->filter('a')->link()->getURI(); 
          $arr['link'] = $link;     
          $date = explode(" ",$node->filter('.meta time')->text()); 
          $year = substr($date[2],0,-1);
          $month = $this->months[$date[1]];
          $day = $date[0];
          $hour = $date[3];
          $dateString=date_create("$year-$month-$day $hour");
          $arr['date'] = date_format($dateString, "Y/m/d H:i");
          $this->economy[] = $arr;
      });
         return $this->economy;
    }
    public function handleNews(){
        $crawler = $this->client->request('GET', 'http://www.tabula.ge/ge/world');
        $newscard = $crawler->filter('.newscard');
        $newscard->each(function($node){
            $arr = [];
        $img = $node->filter('img');
          if($img->count()){
              $arr['img'] = $img->attr('src');
          };
        $title = $node->filter('.title');
          if($title->count()){
              $arr['title'] = $title->text();
        };
          $link = $node->filter('a')->link()->getURI(); 
          $arr['link'] = $link;     
          $date = explode(" ",$node->filter('.meta time')->text()); 
          $year = substr($date[2],0,-1);
          $month = $this->months[$date[1]];
          $day = $date[0];
          $hour = $date[3];
          $dateString=date_create("$year-$month-$day $hour");
          $arr['date'] = date_format($dateString, "Y/m/d H:i");
          $this->news[] = $arr;
      });
         return $this->news;   
    }
    public function handlePolitics(){
        $crawler = $this->client->request('GET', 'http://www.tabula.ge/ge/politics');
        $newscard = $crawler->filter('.newscard');
        $newscard->each(function($node){
            $arr = [];
        $img = $node->filter('img');
          if($img->count()){
              $arr['img'] = $img->attr('src');
          };
        $title = $node->filter('.title');
          if($title->count()){
              $arr['title'] = $title->text();
        };
          $link = $node->filter('a')->link()->getURI(); 
          $arr['link'] = $link;     
          $date = explode(" ",$node->filter('.meta time')->text()); 
          $year = substr($date[2],0,-1);
          $month = $this->months[$date[1]];
          $day = $date[0];
          $hour = $date[3];
          $dateString=date_create("$year-$month-$day $hour");
          $arr['date'] = date_format($dateString, "Y/m/d H:i");
          $this->politics[] = $arr;
      });
         return $this->politics;  
    }
}

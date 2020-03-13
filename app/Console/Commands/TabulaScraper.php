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
    protected $months = [
     "იანვარი" => 0,
     "თებერვალი" => 1,
     "მარტი" => 2,
     "აპრილი" => 3,
     "მაისი" => 4,
     "ივნისი" => 5,
     "ივლისი" => 6,
     "აგვისტო" => 7,
     "სექტემბერი" => 8,
     "ოქტომბერი" => 9,
     "ნოემბერი" => 10,
     "დეკემბერი" => 11
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
        $crawler->filter('.newscard')->each(function($node){
            $arr = [];
          if($node->filter('img')->count()){
              $arr['image'] = $node->filter('img')->attr('src');
          };
          if($node->filter('.title')->count()){
              $arr['title'] = $node->filter('.title')->text();
          };
          $link = $node->filter('a')->link()->getURI(); 
          $bodyCrawler = $this->client->request('GET', $link);
          $arr['body'] = $bodyCrawler->filter('.content-body-column')->html();
          $arr['link'] = $link;     
        //   $arr['date'] = date("h-i-sa");
          $this->blocks[] = $arr;
      });
         return $this->blocks;
    }
}

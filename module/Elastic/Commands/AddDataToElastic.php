<?php

namespace Module\Elastic\Commands;

use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Console\Command;

class AddDataToElastic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:add-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = ClientBuilder::create()->setHosts(["http://localhost:9200"])->build();

        $params = [
            'index' => 'news',
            'body' => [
                "id" => 1,
                "date" => "2024/01/23",
                "title" => "first news",
                "source" => "isna.ir",
                "content" => "This is the first news",
                "link" => "isna.ir/246"
            ],
        ];

        $response = $client->index($params);
        dd($response);
    }
}

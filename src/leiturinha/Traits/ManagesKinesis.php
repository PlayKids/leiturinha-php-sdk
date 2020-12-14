<?php

namespace Leiturinha\Traits;

use Carbon\Carbon;
use Aws\Kinesis\KinesisClient;

trait ManagesKinesis
{
    protected $kinesisClient;

    protected function createKinesisClient()
    {
        $this->kinesisClient = new KinesisClient([
            'profile' => 'default',
            'version' => '2013-12-02',
            'region' => env('AWS_REGION')
        ]);
    }

    protected function resolveKinesis($data)
    {
        try {
            $this->createKinesisClient();
            $this->createRecord($data);
        } catch (\Exception $exception) {
            /**
             * @todo resolve Exception
             */
        }
    }

    protected function createRecord($data)
    {
        $output = $this->kinesisClient
            ->PutRecord([
                'Data' => $data,
                'StreamName' => env('KINESIS_STREAM_NAME'),
                'PartitionKey' => (string) Carbon::now()->timestamp
            ]);

        var_dump($output);
    }
}

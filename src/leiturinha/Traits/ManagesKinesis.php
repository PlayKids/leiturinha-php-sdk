<?php

namespace Leiturinha\Traits;

use Carbon\Carbon;
use Aws\Kinesis\KinesisClient;
use Aws\Exception\AwsException;

trait ManagesKinesis
{
    protected $kinesisClient;

    protected function createKinesisClient()
    {
        $this->kinesisClient = new KinesisClient([
            'version' => '2013-12-02',
            'region' => getenv('AWS_REGION')
        ]);
    }

    protected function resolveKinesis($data)
    {
        try {
            $this->createKinesisClient();
            $this->createRecord($data);
        } catch (AwsException $exception) {
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
                'StreamName' => getenv('KINESIS_STREAM_NAME'),
                'PartitionKey' => (string) Carbon::now()->timestamp
            ]);

        var_dump($output);
    }
}

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
            $recordId = $this->createRecord($data);

            echo $recordId;
        } catch (AwsException $exception) {
            echo $exception->getMessage();
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

        if ($output->get('@metadata')["statusCode"] === 200) {
            return $output->get('SequenceNumber');
        }

        return null;
    }
}
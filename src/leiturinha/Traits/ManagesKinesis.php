<?php

namespace Leiturinha\Traits;

use Aws\Kinesis\KinesisClient;
use Aws\Exception\AwsException;

trait ManagesKinesis
{
    protected $kinesisClient;

    /**
     *
     */
    protected function createKinesisClient()
    {
        $this->kinesisClient = new KinesisClient([
            'version' => '2013-12-02',
            'region' => getenv('AWS_REGION'),
            'credentials' => [
                'key' => getenv('AWS_ACCESS_KEY_ID_DEVELOP'),
                'secret' => getenv('AWS_SECRET_ACCESS_KEY_DEVELOP')
            ]
        ]);
    }

    /**
     * @param $data
     */
    protected function resolveKinesis($data)
    {
        try {
            // teste
            $this->createKinesisClient();
            $this->createRecord($data);
        } catch (AwsException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * @param $data
     * @return null
     */
    protected function createRecord($data)
    {
        $output = $this->kinesisClient
            ->PutRecord([
                'Data' => $data,
                'StreamName' => getenv('KINESIS_STREAM_NAME'),
                'PartitionKey' => (string) time()
            ]);

        if ($output->get('@metadata')["statusCode"] === 200) {
            return $output->get('SequenceNumber');
        }

        return null;
    }
}

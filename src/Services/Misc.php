<?php

namespace MPW\Services;

use MPW\Base;

class Misc
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function fileUpload($payload)
    {
        try {
            $res = $this->base->client->post('file-upload', [
                'multipart' => [
                    [
                        'name' => 'file',
                        'contents' => $payload
                    ]
                ]
            ]);
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error uploading file: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function countries()
    {
        try {
            $res = $this->base->client->post('countries');
            return json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving countries: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}

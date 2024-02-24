<?php

namespace MPW\Services\User;

use MPW\Base;

class UserVerification
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function bvnPhotoPhoneMatch($payload)
    {
        try {
            $response = $this->base->client->post('user/verification/process', [
                'json' => array_merge(['code' => 'bvn'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error with BVN photo and phone match: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}

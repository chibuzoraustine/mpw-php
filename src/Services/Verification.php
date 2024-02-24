<?php

namespace MPW\Services;

use MPW\Base;

class Verification
{
    private $base;

    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    public function intBasicBankAccount($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'international_basic_bank_account'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in international basic bank account verification: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function ngBasicBankAccount($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'ng_basic_bank_account'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in NG basic bank account verification: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function ngAdvanceBankAccount($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'ng_advance_bank_account'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in NG advance bank account verification: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function ngBVNBankAccountMatch($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'bvn_bank_account_match'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in BVN bank account match verification: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function institutions($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'institutions'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error retrieving institution details: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
    
    public function ngPhoneConfirmationInitiate($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'ng_phone_number_confirmation', 'mode' => 'send_code'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error initiating NG phone number confirmation: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function ngPhoneConfirmation($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'ng_phone_number_confirmation', 'mode' => 'verify_code'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error verifying NG phone number confirmation: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function ngSMSPrompt($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'ng_sms_prompt'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in NG SMS prompt verification: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function WalletAddress($payload)
    {
        try {
            $response = $this->base->client->post('verification/lookup', [
                'json' => array_merge(['code' => 'wallet_address'], $payload)
            ]);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Error in wallet address verification: ' . $e->getMessage(), $e->getCode(), $e);
        }
    }
}

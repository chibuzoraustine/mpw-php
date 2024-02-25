# MoiPayWay PHP Library

<p align="center">
    <img title="MoiPayWay" src="https://moipayway.com/wp-content/uploads/2023/04/moipayway.png" width="50%"/>
</p>

## Introduction

The MoiPayWay PHP Library simplifies interaction with Moipayway APIs in your PHP applications. It streamlines the process of integration, eliminating the need to deal with intricate details, and facilitates rapid API calls. Key features include:

- Wallets: creating and managing wallets (fiat, crypto).
- Making transfers, single/bulk. Fiat (NGN, GBP, EUR, USD) & Crypto.
- Manage virtual accounts.
- Tokens: create and manage token, such as; NFT, fungible token, stable coins, storage token, etc.
- Verification: running identity checks, credit checks, etc.
- AI: verify document image (drivers license NIN, BVN, etc), Face Comparison.
- Lookups: Document validity check, CAC, etc.

## Table of Content

- Requirements
- Installation
- Initialization
- Authenticate
- Sending requests with payload
- Error handling
- More usage documentation
- Testing
- License

## Requirements

1. PHP 7.4 or higher.

## Installation

```bash
composer require moipayway/mpw-php
```

## Initialization

```php
use MPW\MoiPayWay;

$mpw = new MoiPayWay("secret_token");

try {
    var_dump($mpw->misc->countries());
} catch (Exception $e) {
    echo $e->getMessage();
}

```

## Authenticate

Refer to the documentation linked below to understand how to generate secret tokens for authenticating the Moipayway SDK.

[Authentication](documentation/Authentication.md)


## Sending requests with payload

Some endpoint requires additional data to be included in the request payload. Below is an example demonstrating sending requests with payload:

```php
use MPW\MoiPayWay;

$mpw = new MoiPayWay("secret_token");

try {
    $response = $mpw->wallet->createFiat([
        'code' => '***',
        'meta' => [
            'name' => '***',
            'user_id' => '***'
        ]
    ]);
    var_dump($response);
} catch (Exception $e) {
    echo $e->getMessage();
}
```

## Error handling

You can catch request errors by wrapping the method in a try / catch block.

```php
use MPW\MoiPayWay;

$mpw = new MoiPayWay("invalid_api_secret_key");

try {
    $response = $mpw->token->multi->mint($payload);
    var_dump($response);
} catch (Exception $e) {
    echo $e->getMessage();
}
```

Response :
```console
Error minting multi token
```

## More usage documentation
- [Authentication](documentation/Authentication.md)
- [User](documentation/User.md)
- [Wallet](documentation/Wallet.md)
- [Token](documentation/Token.md)
- [Verification](documentation/Authentication.md)
- [Misc](documentation/Authentication.md)

## Testing

<!-- Prior to running tests, ensure you have renamed the `.env.example` file to `.env` and populated it with a test key (testSecretKey). Then, execute the following command: -->

```bash
./vendor/bin/phpunit
```


## License

[MIT](https://choosealicense.com/licenses/mit/)

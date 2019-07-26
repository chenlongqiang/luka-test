<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'chenlongqiang/study-sentry';
    public const VERSIONS          = array (
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'illuminate/contracts' => 'v5.8.29@f6a2633c280b3f0efcd5a6d2d4a975dfa26033e8',
  'illuminate/support' => 'v5.8.29@b60e70c9bd3c6d61cbb4343459755470fd5ad818',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'nesbot/carbon' => '2.21.3@58bdbbfab17ccd2ec7347b99e997f18232def4dc',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'php-http/client-common' => '2.0.0@2b8aa3c4910afc21146a9c8f96adb266e869517a',
  'php-http/curl-client' => '2.0.0@e7a2a5ebcce1ff7d75eaf02b7c85634a6fac00da',
  'php-http/discovery' => '1.7.0@e822f86a6983790aa17ab13aa7e69631e86806b6',
  'php-http/httplug' => 'v2.0.0@b3842537338c949f2469557ef4ad4bdc47b58603',
  'php-http/message' => '1.7.2@b159ffe570dffd335e22ef0b91a946eacb182fa1',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.8.0@d09ea80159c1929d75b3f9c60504d613aeb4a1e3',
  'sentry/sdk' => '2.0.3@91c36aec83e4c1c5801b64ef4927b78a5aa8ce7f',
  'sentry/sentry' => '2.1.1@8e27e6c5fcf6f01fc2e5235dd14cc0b2b347d793',
  'sentry/sentry-laravel' => '1.1.0@1e5f644b62ee73424ad8316e37b9a2dcf7290de8',
  'symfony/options-resolver' => 'v4.3.2@40762ead607c8f792ee4516881369ffa553fee6f',
  'symfony/polyfill-ctype' => 'v1.11.0@82ebae02209c21113908c229e9883c419720738a',
  'symfony/polyfill-mbstring' => 'v1.11.0@fe5e94c604826c35a32fa832f35bd036b6799609',
  'symfony/translation' => 'v4.3.2@934ab1d18545149e012aa898cf02e9f23790f7a0',
  'symfony/translation-contracts' => 'v1.1.5@cb4b18ad7b92a26e83b65dde940fab78339e6f3c',
  'zendframework/zend-diactoros' => '2.1.3@279723778c40164bcf984a2df12ff2c6ec5e61c1',
  'chenlongqiang/study-sentry' => 'dev-master@79632fc6efd3949f87db93c41eed52ff3a19d496',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}

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
    public const ROOT_PACKAGE_NAME = 'laravel/laravel';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'dnoegel/php-xdg-base-dir' => '0.1@265b8593498b997dc2d31e75b89f053b5cc9621a',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.11@92dd169c32f6f55ba570c309d83f5209cefb5e23',
  'erusev/parsedown' => '1.7.3@6d893938171a817f4e9bc9e86f2da1e370b7bcd7',
  'fideloper/proxy' => '4.2.1@03085e58ec7bee24773fa5a8850751a6e61a7e8a',
  'finalbytes/google-distance-matrix-api' => 'dev-master@3a640b520470a06d0e383e1acf4314acb5e56d3d',
  'firebase/php-jwt' => 'v5.0.0@9984a4d3a32ae7673d6971ea00bae9d0a1abba0e',
  'guzzlehttp/guzzle' => '6.4.1@0895c932405407fd3a7368b6910c09a24d26db11',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'jakub-onderka/php-console-color' => 'v0.2@d5deaecff52a0d61ccb613bb3804088da0307191',
  'jakub-onderka/php-console-highlighter' => 'v0.4@9f7a229a69d52506914b4bc61bfdb199d90c5547',
  'laravel/framework' => 'v6.5.0@6d120a21ef0c69630e92dec67932ef434c746019',
  'laravel/passport' => 'v8.0.2@952722f4f1817485bd30190e45fe4dc87ba67441',
  'laravel/tinker' => 'v1.0.10@ad571aacbac1539c30d480908f9d0c9614eaf1a7',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.0.57@0e9db7f0b96b9f12dcf6f65bc34b72b1a30ea55a',
  'league/oauth2-server' => '8.0.0@e1dc4d708c56fcfa205be4bb1862b6d525b4baac',
  'maatwebsite/excel' => '3.1.17@bd377ad37b285d9bc25c9adca360e4392041dea6',
  'markbaker/complex' => '1.4.7@1ea674a8308baf547cbcbd30c5fcd6d301b7c000',
  'markbaker/matrix' => '1.2.0@5348c5a67e3b75cd209d70103f916a93b1f1ed21',
  'monolog/monolog' => '2.0.0@68545165e19249013afd1d6f7485aecff07a2d22',
  'nesbot/carbon' => '2.26.0@e01ecc0b71168febb52ae1fdc1cfcc95428e604e',
  'nexmo/client' => '2.0.0@664082abac14f6ab9ceec9abaf2e00aeb7c17333',
  'nexmo/client-core' => '2.1.0@ef7e8a0715c93c5ddc7915e8a29f29331798bb52',
  'nexmo/laravel' => '2.2.0@57b62d985ae59d2f15f970883ea445b7fda56652',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'opis/closure' => '3.4.1@e79f851749c3caa836d7ccc01ede5828feb762c7',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoffice/phpspreadsheet' => '1.9.0@8dea03eaf60a349b6097e4bcad11f894668280df',
  'phpoption/phpoption' => '1.5.2@2ba2586380f8d2b44ad1b9feb61c371020b27793',
  'phpseclib/phpseclib' => '2.0.23@c78eb5058d5bb1a183133c36d4ba5b6675dfa099',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.9.9@9aaf29575bb8293206bb0420c1e1c87ff2ffa94e',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.8.0@d09ea80159c1929d75b3f9c60504d613aeb4a1e3',
  'spatie/geocoder' => '3.6.0@f97e93a08634baed1e4a32134874b9465f2b0983',
  'swiftmailer/swiftmailer' => 'v6.2.1@5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a',
  'symfony/console' => 'v4.3.7@d2e39dbddae68560fa6be0c576da6ad4e945b90d',
  'symfony/css-selector' => 'v4.3.7@f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9',
  'symfony/debug' => 'v4.3.7@5ea9c3e01989a86ceaa0283f21234b12deadf5e2',
  'symfony/event-dispatcher' => 'v4.3.7@0df002fd4f500392eabd243c2947061a50937287',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/finder' => 'v4.3.7@72a068f77e317ae77c0a0495236ad292cfb5ce6f',
  'symfony/http-foundation' => 'v4.3.7@514e5bbcbc783465c6fce5a7b2e28657f2e114b7',
  'symfony/http-kernel' => 'v4.3.7@9f493716a89635b64ae15b01cb2a8fc093a95bce',
  'symfony/mime' => 'v4.3.7@3c0e197529da6e59b217615ba8ee7604df88b551',
  'symfony/polyfill-ctype' => 'v1.12.0@550ebaac289296ce228a706d0867afc34687e3f4',
  'symfony/polyfill-iconv' => 'v1.12.0@685968b11e61a347c18bf25db32effa478be610f',
  'symfony/polyfill-intl-idn' => 'v1.12.0@6af626ae6fa37d396dc90a399c0ff08e5cfc45b2',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php72' => 'v1.12.0@04ce3335667451138df4307d6a9b61565560199e',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/process' => 'v4.3.7@3b2e0cb029afbb0395034509291f21191d1a4db0',
  'symfony/psr-http-message-bridge' => 'v1.2.0@9ab9d71f97d5c7d35a121a7fb69f74fee95cd0ad',
  'symfony/routing' => 'v4.3.7@533fd12a41fb9ce8d4e861693365427849487c0e',
  'symfony/service-contracts' => 'v1.1.8@ffc7f5692092df31515df2a5ecf3b7302b3ddacf',
  'symfony/translation' => 'v4.3.7@bbce239b35b0cd47bd75848b23e969f17dd970e7',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'symfony/var-dumper' => 'v4.3.7@ea4940845535c85ff5c505e13b3205b0076d07bf',
  'tijsverkoyen/css-to-inline-styles' => '2.2.2@dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
  'vlucas/phpdotenv' => 'v3.6.0@1bdf24f065975594f6a117f0f1f6cabf1333b156',
  'zendframework/zend-diactoros' => '2.2.1@de5847b068362a88684a55b0dbb40d85986cfa52',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'facade/flare-client-php' => '1.1.2@04c0bbd1881942f59e27877bac3b29ba57519666',
  'facade/ignition' => '1.11.2@862cbc2dfffa1fa28b47822a116e5b2e03b421db',
  'facade/ignition-contracts' => '1.0.0@f445db0fb86f48e205787b2592840dd9c80ded28',
  'filp/whoops' => '2.5.0@cde50e6720a39fdacb240159d3eea6865d51fd96',
  'fzaninotto/faker' => 'v1.8.0@f72816b43e74063c8b10357394b6bba8cb1c10de',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'mockery/mockery' => '1.2.4@b3453f75fd23d9fd41685f2148f4abeacabc6405',
  'myclabs/deep-copy' => '1.9.3@007c053ae6f31bba39dfa19a7726f56e9763bbea',
  'nunomaduro/collision' => 'v3.0.1@af42d339fe2742295a54f6fdd42aaa6f8c4aca68',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.2@b83ff7cfcfee7827e1e78b637a5904fe6a96698e',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => '1.9.0@f6811d96d97bdf400077a0cc100ae56aa32b9203',
  'phpunit/php-code-coverage' => '7.0.8@aa0d179a13284c7420fc281fc32750e6cc7c9e2f',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.4.3@67f9e35bffc0dd52d55d565ddbe4230454fd6a4e',
  'scrivo/highlight.php' => 'v9.15.10.0@9ad3adb4456dc91196327498dbbce6aa1ba1239e',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.2@f2a2c8e1c97c11ace607a7a667d73d47c19fe404',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.5.0@88e6d84706d09a236046d686bbea96f07b3a34f4',
  'laravel/laravel' => 'dev-master@03b0e0b7f2780b25a53289cc3a56d219ce751ab6',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
<?php

use Pimcore\Bundle\BundleGeneratorBundle\PimcoreBundleGeneratorBundle;


return [
    Pimcore\Bundle\ApplicationLoggerBundle\PimcoreApplicationLoggerBundle::class => ['all' => true],
    Pimcore\Bundle\CustomReportsBundle\PimcoreCustomReportsBundle::class => ['all' => true],
    Pimcore\Bundle\GlossaryBundle\PimcoreGlossaryBundle::class => ['all' => true],
    Pimcore\Bundle\SeoBundle\PimcoreSeoBundle::class => ['all' => true],
    Pimcore\Bundle\SimpleBackendSearchBundle\PimcoreSimpleBackendSearchBundle::class => ['all' => true],
    Pimcore\Bundle\StaticRoutesBundle\PimcoreStaticRoutesBundle::class => ['all' => true],
    Pimcore\Bundle\TinymceBundle\PimcoreTinymceBundle::class => ['all' => true],
    Pimcore\Bundle\UuidBundle\PimcoreUuidBundle::class => ['all' => true],
    Pimcore\Bundle\WordExportBundle\PimcoreWordExportBundle::class => ['all' => true],
    Pimcore\Bundle\XliffBundle\PimcoreXliffBundle::class => ['all' => true],
    PimcoreBundleGeneratorBundle::class => ['all' => true],
    ExampleBundle\ExampleBundle::class => ['all' => true],
    Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle::class => ['all' => true],
];

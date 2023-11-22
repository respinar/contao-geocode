<?php

declare(strict_types=1);

/*
 * This file is part of Contao geocode Bundle.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\ContaoGeocodeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Respinar\ContaoGeocodeBundle\RespinarContaoGeocodeBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(RespinarContaoGeocodeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
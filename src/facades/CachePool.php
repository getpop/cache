<?php
namespace PoP\Cache\Facades;

use Psr\Cache\CacheItemPoolInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class CachePool
{
    public static function getInstance(): CacheItemPoolInterface
    {
        return ContainerBuilderFactory::getInstance()->get('\PoP\Cache\Contracts\CacheItemPool');
    }
}

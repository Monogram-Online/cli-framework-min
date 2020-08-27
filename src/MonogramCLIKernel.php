<?php

namespace Monogram\CLI;

use Exception;
use Monogram\CLI\DependencyInjection\CompilerPass\CollectCommandsToApplicationCompilerPass;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class MonogramCLIKernel extends Kernel
{

    protected function build(ContainerBuilder $containerBuilder): void
    {
        $containerBuilder->addCompilerPass(new CollectCommandsToApplicationCompilerPass);
    }

    /**
     * Load all services
     * @param LoaderInterface $loader
     * @throws Exception
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__ . '/../config/services.yaml');
    }

    public function registerBundles(): array
    {
        return [];
    }
}
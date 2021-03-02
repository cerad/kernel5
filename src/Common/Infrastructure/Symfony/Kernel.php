<?php

namespace Project\SubProject\Common\Infrastructure\Symfony;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $base = __DIR__ . '/../../../';

        $container->import($base . '../config/{packages}/*.yaml');
        $container->import($base . '../config/{packages}/'.$this->environment.'/*.yaml');
        $container->import($base . '../config/services.yaml');
        $container->import($base . '../config/{services}_'.$this->environment.'.yaml');
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $base = __DIR__ . '/../../../';

        $routes->import($base . '../config/{routes}/'.$this->environment.'/*.yaml');
        $routes->import($base . '../config/{routes}/*.yaml');
        $routes->import($base . '../config/routes.yaml');
    }
}

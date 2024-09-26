<?php

namespace ContainerPWX4ozk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProcessor_Documentation_WriteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state_processor.documentation.write' shared service.
     *
     * @return \ApiPlatform\State\Processor\WriteProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/Processor/WriteProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/Processor/SerializeProcessor.php';

        return $container->privates['api_platform.state_processor.documentation.write'] = new \ApiPlatform\State\Processor\WriteProcessor(new \ApiPlatform\State\Processor\SerializeProcessor(($container->privates['api_platform.http_cache.processor.add_headers'] ?? $container->load('getApiPlatform_HttpCache_Processor_AddHeadersService')), ($container->privates['debug.serializer'] ?? self::getDebug_SerializerService($container)), ($container->privates['api_platform.openapi.serializer_context_builder'] ?? self::getApiPlatform_Openapi_SerializerContextBuilderService($container))), ($container->privates['api_platform.state_processor.locator'] ?? $container->load('getApiPlatform_StateProcessor_LocatorService')));
    }
}

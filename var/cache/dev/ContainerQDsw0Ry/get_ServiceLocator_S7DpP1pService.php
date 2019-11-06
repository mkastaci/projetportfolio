<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.s7DpP1p' shared service.

return $this->privates['.service_locator.s7DpP1p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cach' => ['services', 'cache.app', 'getCache_AppService', false],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'repoprojet' => ['privates', 'App\\Repository\\ProjetRepository', 'getProjetRepositoryService.php', true],
    'session' => ['services', 'session', 'getSessionService.php', true],
], [
    'cach' => '?',
    'manager' => '?',
    'repoprojet' => 'App\\Repository\\ProjetRepository',
    'session' => '?',
]);

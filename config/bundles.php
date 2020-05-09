<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Nelmio\Alice\Bridge\Symfony\NelmioAliceBundle::class => ['test' => true],
    Fidry\AliceDataFixtures\Bridge\Symfony\FidryAliceDataFixturesBundle::class => ['dev' => true, 'test' => true],
    VKMapperBundle\VKMapperBundle::class => ['all' => true],
    PhpSolution\SwaggerUIGen\Bundle\SwaggerUIGenBundle::class => ['all' => true],
];

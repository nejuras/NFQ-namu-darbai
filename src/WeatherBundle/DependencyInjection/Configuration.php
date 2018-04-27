<?php

namespace Nfq\WeatherBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('nfq_weather');

        $rootNode
            ->children()
                ->scalarNode('provider')
                    ->defaultValue('delegating')
                ->end()
                    ->arrayNode('providers')
                        ->children()
                            ->arrayNode('openweathermap')
                                ->children()
                                    ->scalarNode('api_key')
                                        ->isRequired()
                                        ->cannotBeEmpty()
                                    ->end()
                                ->end()
                            ->end() //openweathermap
                            ->arrayNode('delegating')
                                ->children()
                                    ->arrayNode('providers')
                                        ->children()
                                            ->scalarNode(0)->end()
                                            ->scalarNode(1)->end()
                                        ->end()
                                    ->end() //providers)
                                ->end()
                            ->end() //delegating
                        ->end()
                    ->end() //providers

            ->end()
            ;
        return $treeBuilder;
    }
}
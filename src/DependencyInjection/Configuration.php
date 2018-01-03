<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\GoogleApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder
            ->root('endroid_google_api')
                ->children()
                    ->scalarNode('application_name')->defaultValue('Google API Application')->end()
                    ->scalarNode('api_key')->isRequired()->cannotBeEmpty()->end()
                ->end()
        ;

        return $treeBuilder;
    }
}

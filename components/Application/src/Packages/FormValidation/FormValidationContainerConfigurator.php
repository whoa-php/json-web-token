<?php namespace Limoncello\Application\Packages\FormValidation;

/**
 * Copyright 2015-2017 info@neomerx.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use Limoncello\Application\Contracts\Validation\FormValidatorFactoryInterface;
use Limoncello\Application\FormValidation\Execution\FormValidatorFactory;
use Limoncello\Contracts\Application\ContainerConfiguratorInterface;
use Limoncello\Contracts\Container\ContainerInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

/**
 * @package Limoncello\Application
 */
class FormValidationContainerConfigurator implements ContainerConfiguratorInterface
{
    /**
     * @inheritdoc
     */
    public static function configureContainer(ContainerInterface $container): void
    {
        $container[FormValidatorFactoryInterface::class] = function (PsrContainerInterface $container) {
            $factory = new FormValidatorFactory($container);

            return $factory;
        };
    }
}
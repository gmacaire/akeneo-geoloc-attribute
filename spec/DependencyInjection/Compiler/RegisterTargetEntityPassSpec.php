<?php

/*
 * This file is part of the Geoloc Attribute Bundle package.
 *
 * (c) Clever Age
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\CleverAge\Bundle\GeolocAttributeBundle\DependencyInjection\Compiler;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RegisterTargetEntityPassSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CleverAge\Bundle\GeolocAttributeBundle\DependencyInjection\Compiler\RegisterTargetEntityPass');
    }

    function it_is_a_compiler_pass()
    {
        $this->shouldHaveType('Akeneo\Bundle\StorageUtilsBundle\DependencyInjection\Compiler\AbstractResolveDoctrineTargetModelPass');
    }
}

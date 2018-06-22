<?php
/**
 * Integration test for \Magento\Framework\Validator\Factory
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Validator;

class FactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test creation of validator config
     *
     * @magentoAppIsolation enabled
     */
    public function testGetValidatorConfig()
    {
        $objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        /** @var \Magento\Framework\Validator\Factory $factory */
        $factory = $objectManager->get(\Magento\Framework\Validator\Factory::class);
        $this->assertInstanceOf(\Magento\Framework\Validator\Config::class, $factory->getValidatorConfig());
        // Check that default translator was set
        $translator = \Magento\Framework\Validator\AbstractValidator::getDefaultTranslator();
        $this->assertInstanceOf(\Magento\Framework\Translate\AdapterInterface::class, $translator);
        $this->assertEquals('ListMessages', new \Magento\Framework\Phrase('ListMessages'));
        $this->assertEquals('ListMessages', $translator->translate('ListMessages'));
        $this->assertEquals(
            'ListMessages with "placeholder one" and "placeholder two"',
            (string)new \Magento\Framework\Phrase('ListMessages with "%1" and "%2"', ['placeholder one', 'placeholder two'])
        );
    }
}

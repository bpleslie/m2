<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

namespace Magento\Framework\Interception\Test\Unit\Custom\Module\Model\InterfaceValidator\ItemPlugin;

class InvalidProceed
{
    /**
     * @param \Magento\Framework\Interception\Test\Unit\Custom\Module\Model\InterfaceValidator\Item $subject
     * @param string $name
     * @param string $surname
     * @return string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function aroundGetItem(
        \Magento\Framework\Interception\Test\Unit\Custom\Module\Model\InterfaceValidator\Item $subject, $name, $surname
    ) {
        return $name . $surname;
    }
}

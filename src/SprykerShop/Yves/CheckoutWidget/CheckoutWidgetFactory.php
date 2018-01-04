<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CheckoutWidget;

use Spryker\Yves\Kernel\AbstractFactory;

class CheckoutWidgetFactory extends AbstractFactory
{
    /**
     * @return \SprykerShop\Yves\CheckoutPage\Plugin\CheckoutBreadcrumbPlugin
     */
    public function getCheckoutBreadcrumbPlugin()
    {
        return $this->getProvidedDependency(CheckoutWidgetDependencyProvider::PLUGIN_CHECKOUT_BREADCRUMB);
    }
}

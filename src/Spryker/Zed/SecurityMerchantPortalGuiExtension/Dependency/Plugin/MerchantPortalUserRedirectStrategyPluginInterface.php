<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityMerchantPortalGuiExtension\Dependency\Plugin;

use Symfony\Component\HttpFoundation\Request;

interface MerchantPortalUserRedirectStrategyPluginInterface
{
    /**
     * Specification:
     * - Returns `true` if this plugin can provide a post-login redirect URL for the given Merchant Portal request.
     *
     * @api
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return bool
     */
    public function isApplicable(Request $request): bool;

    /**
     * Specification:
     * - Returns the URL to redirect to after a successful Merchant Portal login.
     *
     * @api
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return string
     */
    public function getRedirectUrl(Request $request): string;
}

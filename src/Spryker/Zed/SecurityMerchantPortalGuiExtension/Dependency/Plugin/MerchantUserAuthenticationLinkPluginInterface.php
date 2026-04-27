<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityMerchantPortalGuiExtension\Dependency\Plugin;

/**
 * Use this plugin to add authentication link buttons to the Merchant Portal login page.
 */
interface MerchantUserAuthenticationLinkPluginInterface
{
    /**
     * Specification:
     * - Returns a list of authentication link transfers to be rendered on the Merchant Portal login page.
     * - Each entry represents one OAuth provider button.
     *
     * @api
     *
     * @return array<\Generated\Shared\Transfer\OauthAuthenticationLinkTransfer>
     */
    public function getAuthenticationLinks(): array;
}

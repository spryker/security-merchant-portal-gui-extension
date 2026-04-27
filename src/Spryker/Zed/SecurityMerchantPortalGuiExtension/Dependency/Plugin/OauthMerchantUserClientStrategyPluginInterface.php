<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace Spryker\Zed\SecurityMerchantPortalGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ResourceOwnerRequestTransfer;
use Generated\Shared\Transfer\ResourceOwnerResponseTransfer;

/**
 * Use this plugin to provide OAuth merchant user authentication clients.
 * Implement this interface to exchange OAuth authorization codes for a resource owner from a specific OAuth provider.
 */
interface OauthMerchantUserClientStrategyPluginInterface
{
    /**
     * Specification:
     * - Checks if this plugin is applicable for the provided ResourceOwnerRequest.
     * - Typically checks the "state" query parameter to identify the OAuth provider.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer
     *
     * @return bool
     */
    public function isApplicable(ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer): bool;

    /**
     * Specification:
     * - Exchanges the authorization code for a resource owner using the configured OAuth provider.
     * - Returns a response transfer with the resource owner data on success.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ResourceOwnerResponseTransfer
     */
    public function getResourceOwner(ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer): ResourceOwnerResponseTransfer;
}

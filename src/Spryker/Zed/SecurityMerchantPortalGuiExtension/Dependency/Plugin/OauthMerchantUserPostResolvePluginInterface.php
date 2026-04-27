<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace Spryker\Zed\SecurityMerchantPortalGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\MerchantUserTransfer;
use Generated\Shared\Transfer\ResourceOwnerTransfer;

/**
 * Use this plugin to execute side effects after a Merchant Portal user has been resolved via OAuth.
 * Typical use case: persisting the identity link between the OAuth provider and the local merchant user.
 */
interface OauthMerchantUserPostResolvePluginInterface
{
    /**
     * Specification:
     * - Executed after a Merchant Portal user has been successfully resolved via OAuth.
     * - Receives the resolved merchant user and the raw resource owner data from the OAuth provider.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\MerchantUserTransfer $merchantUserTransfer
     * @param \Generated\Shared\Transfer\ResourceOwnerTransfer $resourceOwnerTransfer
     *
     * @return void
     */
    public function postResolve(MerchantUserTransfer $merchantUserTransfer, ResourceOwnerTransfer $resourceOwnerTransfer): void;
}

<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityMerchantPortalGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\MultiFactorAuthTransfer;

/**
 * Provides capability to invalidate multi-factor authentication codes for merchant users.
 *
 * Implement this interface to add code invalidation functionality to your authentication handler plugin.
 */
interface AuthenticationCodeInvalidatorPluginInterface
{
    /**
     * Specification:
     * - Invalidates all active multi-factor authentication codes for the provided merchant user.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\MultiFactorAuthTransfer $multiFactorAuthTransfer
     *
     * @return void
     */
    public function invalidateMerchantUserCodes(MultiFactorAuthTransfer $multiFactorAuthTransfer): void;
}

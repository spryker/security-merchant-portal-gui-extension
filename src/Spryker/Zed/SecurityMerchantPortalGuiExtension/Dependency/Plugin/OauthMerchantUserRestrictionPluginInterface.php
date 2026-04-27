<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace Spryker\Zed\SecurityMerchantPortalGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\OauthMerchantUserRestrictionRequestTransfer;
use Generated\Shared\Transfer\OauthMerchantUserRestrictionResponseTransfer;

/**
 * Use this plugin to restrict merchant users from authenticating via OAuth.
 */
interface OauthMerchantUserRestrictionPluginInterface
{
    /**
     * Specification:
     * - Checks if the OAuth merchant user is restricted from logging in.
     * - Returns a response with isRestricted flag and optional error messages.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\OauthMerchantUserRestrictionRequestTransfer $oauthMerchantUserRestrictionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\OauthMerchantUserRestrictionResponseTransfer
     */
    public function isRestricted(
        OauthMerchantUserRestrictionRequestTransfer $oauthMerchantUserRestrictionRequestTransfer
    ): OauthMerchantUserRestrictionResponseTransfer;
}

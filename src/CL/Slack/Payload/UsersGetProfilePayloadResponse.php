<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

use CL\Slack\Model\UserProfile;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class UsersGetProfilePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var UserProfile|null
     */
    private $profile;

    /**
     * @return UserProfile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }
}

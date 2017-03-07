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

use CL\Slack\Model\File;
use CL\Slack\Model\Paging;

class FilesDeletePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @inheritdoc
     */
    protected function getPossibleErrors()
    {
        return array_merge(parent::getPossibleErrors(), [
            'file_not_found' => 'The file does not exist, or is not visible to the calling user',
            'file_deleted' => 'The file has already been deleted',
            'cant_delete_file' => 'Authenticated user does not have permission to delete this file',
        ]);
    }
}

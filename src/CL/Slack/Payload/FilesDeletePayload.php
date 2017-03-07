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

/**
 * @link Official documentation at https://api.slack.com/methods/files.delete
 */
class FilesDeletePayload extends AbstractPayload
{
    /**
     * File id.
     *
     * @var string
     */
    private $file;

    /**
     * Return file id.
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set file id.
     *
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'files.delete';
    }
}

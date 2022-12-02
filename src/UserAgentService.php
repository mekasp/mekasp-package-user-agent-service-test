<?php

namespace Mekas\UserAgent\Service\Test;

use donatj\UserAgent\UserAgentParser;
use Mekas\UserAgent\Int\Test\UserAgentInterface;

/**
 * Class UserAgentService
 *
 * @package Mekas\UserAgent\Service\Test v1.0.1
 */

class UserAgentService implements UserAgentInterface
{
    protected $_data;
    protected $userAgent;

    public function __construct()
    {
        $this->_data = new UserAgentParser();
    }

    public function parse($userAgent)
    {
        $this->userAgent = $this->_data->parse($userAgent);
    }

    public function getBrowser(): ?string
    {
        return $this->userAgent->browser() ?? null;
    }

    public function getSystem(): ?string
    {
        return $this->userAgent->platform() ?? null;
    }
}


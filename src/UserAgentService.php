<?php

namespace Mekas\UserAgent\Service\Test;

use donatj\UserAgent\UserAgentParser;
use Mekas\UserAgent\Int\Test\UserAgentInterface;

/**
 * Class UserAgentService
 * @package Mekas\UserAgent\Service\Test v1.0.0
 */

class UserAgentService implements UserAgentInterface
{
    protected $_data;

    public function __construct()
    {
        $this->_data = new UserAgentParser();
        $this->_data = $this->_data->parse();
    }

    public function getBrowser(): ?string
    {
        return $this->_data->browser() ?? null;
    }

    public function getSystem(): ?string
    {
        return $this->_data->platform() ?? null;
    }
}


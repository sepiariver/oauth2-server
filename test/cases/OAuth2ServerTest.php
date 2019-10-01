<?php
use PHPUnit\Framework\TestCase;

class OAuth2ServerTest extends TestCase
{
    protected $modx;
    protected $projectPath;
    protected $oauth2server;

    protected function setUp(): void
    {
        $this->projectPath = dirname(dirname(dirname(__FILE__)));
        require_once($this->projectPath . '/test/config.core.php');
        require_once(MODX_CORE_PATH . 'model/modx/modx.class.php');
        $this->modx = new modX();
        $this->modx->initialize('web');
        require_once($this->projectPath . '/core/components/oauth2server/model/oauth2server/oauth2server.class.php');
        $this->oauth2server = new \OAuth2Server($this->modx);
    }
    public function testInstantiation()
    {
        $this->assertTrue($this->oauth2server instanceof \OAuth2Server);
    }
}
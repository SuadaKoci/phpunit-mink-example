<?php

class ToodledoTest extends PHPUnit_Framework_TestCase
{
    protected $driver;
    protected $session;

    protected function setUp()
    {
        
        //You can get the key and secret here: https://testingbot.com/members/user/edit
        
        $key = '';
        $secret = '';
        
        $testingBotApiUrl = 'http://{$key}:{$secret}@hub.testingbot.com/wd/hub';
        
        $this->driver = new \Behat\Mink\Driver\Selenium2Driver('firefox',
            array("platform"=>"WINDOWS", "browserName"=>"firefox", "name" => "BehatTest"), $testingBotApiUrl);
        $this->session = new \Behat\Mink\Session($this->driver);
        $this->session->start();
    }
    
    public function signupTest()
    {
        $this->session->visit("https://www.toodledo.com/signup.php");
        
        $page = $this->session->getPage();
        
        $page->fillField("email", "test.mts1617@bobmail.com");
        $page->fillField("pass1", "mts1617");
        $page->fillField("pass2", "mts1617");
        $page->find('css', '#terms')->check();
        $page->find("css", "#register")->click();
        
        $this->assertTrue($this->session->getPage()->hasContent('test.mts1617'));
    }
    
    public function testAddClass()
    {
        
    }
    
    public function tearDown()
    {
        $this->session->stop();
    }
    
}
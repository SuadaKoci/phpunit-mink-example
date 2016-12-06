<?php

class DblpTest extends PHPUnit_Framework_TestCase
{
    protected $driver;
    protected $session;

    protected function setUp()
    {
        $this->driver = new \Behat\Mink\Driver\GoutteDriver();
        $this->session = new \Behat\Mink\Session($this->driver);
        $this->session->start();
    }
    

    public function testSearch()
    {
        $this->session->visit("http://dblp.uni-trier.de/");
        
        $page = $this->session->getPage();
        
        $page->fillField('q', 'Tirana');
        
        $page->find("css", "#completesearch-form")->submit();
        
        $this->assertTrue($this->session->getPage()->hasContent("2nd International Conference on Recent Trends and Applications in Computer Science and Information Technology"));
    }
    
    public function tearDown()
    {
        $this->session->stop();
    }
}
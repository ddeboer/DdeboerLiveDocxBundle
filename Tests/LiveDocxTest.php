<?php

namespace Ddeboer\LiveDocxBundle\Tests;

require_once(__DIR__ . '/../../../../../app/AppKernel.php');

use Zend\Service\LiveDocx\MailMerge;

class LiveDocxTest extends \PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();
        $this->container = $kernel->getContainer();
        parent::__construct();
    }

    public function testMergeText()
    {
        $mailMerge = $this->getMailMerge();
        $mailMerge->setLocalTemplate(__DIR__ . '/Fixtures/template.doc');
        
        $mailMerge->assign('name', 'James Bond');
        $mailMerge->createDocument();
        $document = $mailMerge->retrieveDocument('docx');
    }

    /**
     * Get mail merge service
     *
     * @return MailMerge
     */
    protected function getMailMerge()
    {
        return $this->container->get('livedocx');
    }

}

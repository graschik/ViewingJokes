<?php

/*
 * This file is part of the EasyAdminBundle.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AbstractTestCase;

class OverrideEasyAdminTemplateTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->initClient(array('environment' => 'override_templates'));
    }

    public function testLayoutIsOverridden()
    {
        $crawler = $this->client->request('GET', '/override_layout');

        $this->assertSame(200, $this->client->getResponse()->getStatusCode());
        $this->assertSame('Layout is overridden.', trim($crawler->filter('#main')->text()));
    }
}

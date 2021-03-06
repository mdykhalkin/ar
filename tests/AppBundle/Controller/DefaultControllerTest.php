<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertEquals('http://www.example.com', $client->getResponse()->headers->get('location'));
    }
}

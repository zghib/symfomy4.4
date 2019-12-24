<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = self::createClient();
    }

    public function testIndex(){
        $this->client->request('GET', '/index');
        $response = $this->client->getResponse();
        $this->assertEquals(401, $response->getStatusCode());
    }
}

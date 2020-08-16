<?php

namespace App\Tests\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function testViewIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testDoNotShowElementIfItIsNotHeathersBirthday()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(0, $crawler->filter('html:contains("<span class="text-purple-800">Today is Heather\'s Birthday, she would have been {{ age }} years old. Happy Birthday Heather, we\'re thinking of you.</span>")')->count());
    }

   /* public function testCanSeeGalleryPhotos()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertCount(4, $crawler->filter('.a .heather_gallery_image'));

    }*/
}
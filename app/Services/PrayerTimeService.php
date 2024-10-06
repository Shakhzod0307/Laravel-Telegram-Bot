<?php

namespace App\Services;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class PrayerTimeService
{
    protected $client;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = "https://namozvaqti.uz/shahar/";
    }

    protected function fetchTimes($viloyat)
    {
        $url = $this->baseUrl . $viloyat;
        $response = $this->client->get($url);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error fetching data');
        }

        return $response->getBody()->getContents();
    }

    public function getToday($viloyat)
    {
        $html = $this->fetchTimes($viloyat);
        $crawler = new Crawler($html);
        return $crawler->filter('.vil')->first()->text();
    }

    public function getCurrentTime($viloyat)
    {
        $html = $this->fetchTimes($viloyat);
        $crawler = new Crawler($html);
        return $crawler->filter('.current_time')->first()->text();
    }

    public function getPrayerTime($viloyat, $index)
    {
        $html = $this->fetchTimes($viloyat);
        $crawler = new Crawler($html);
        return $crawler->filter('.time')->eq($index)->text();
    }
}

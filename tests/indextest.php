<?php

require('vendor/autoload.php');
require('index.php');


class PostTest extends PHPUnit_Framework_TestCase
{
    protected $client;


    protected function setUp()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://testbassign.azurewebsites.net'
        ]);
    }

    public function testPost_Name()
    {

        $response = $this->client->post('',
            array(
                'form_params' => array(
                    'name' => 'TestName')
            )
        );

        echo $response->getBody();
        //echo $response->getStatusCode();
        $this->assertEquals(200, $response->getStatusCode());

        //$data = json_decode($response->getBody(), true);

        $this->assertEquals('Hello TestName World!', $response->getBody());
    }

}

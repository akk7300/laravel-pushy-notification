<?php

namespace Akk7300\Pushy;
use GuzzleHttp\Client;

class Pushy
{
	protected $title;
	protected $body;
	protected $data;

	public function withTitle($title)
	{
		$this->title = $title;
		return  $this;
	}

	public function withBody($body)
	{
		$this->body = $body;
		return $this;
	}

	public function withData($data)
	{
		$this->data = $data;
		return $this;
	}

	public function sendTo($token)
	{
	    $client = new Client();

	    $payLoad = [
	        'to' => $token,
	        'notification' => [
	            "badge" => 1,
	            "sound" => "ping.aiff",
	            "title"   => $this->title,
	            "body" => $this->body,
	        ],
	        'data' => $this->data
	    ];

	    $response = $client->post("https://api.pushy.me/push?api_key=" . config('pushy.api_key'), [
	        'headers' => [
	            'Content-Type' => 'application/json',
	        ],
	        'json' => $payLoad,
	    ]);
	}

}

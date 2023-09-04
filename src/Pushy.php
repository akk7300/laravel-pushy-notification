<?php

namespace Akk7300\Pushy;
use GuzzleHttp\Client;

class Pushy
{
	protected $title;
	protected $body;
	protected $additional;

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

	public function withAdditional($additional)
	{
		$this->additional = $additional;
		return $this;
	}

	public function sendTo($token)
	{
	    $client = new Client();

	    $data = [
	        "to" => $token,
	        'notification' => [
	            "badge" => 1,
	            "sound" => "ping.aiff"
	        ],
	        'data' => [
	            'message' => [
	                "title"   => $this->title,
	                "message" => $this->body,
	            ],
	        ],
	    ];

	    if ($this->additional) {
	        $data['data'] = array_merge($data['data'], $this->additional);
	    }

	    $response = $client->post("https://api.pushy.me/push?api_key=" . config('pushy.api_key'), [
	        'headers' => [
	            'Content-Type' => 'application/json',
	        ],
	        'json' => $data,
	    ]);
	}

}

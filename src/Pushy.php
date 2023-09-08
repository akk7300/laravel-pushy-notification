<?php

namespace Akk7300\Pushy;
use GuzzleHttp\Client;

class Pushy
{
	protected $title;
	protected $body;
	protected $message;

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

	public function withMessage($message)
	{
		$this->message = $message;
		return $this;
	}

	public function sendTo($token)
	{
	    $client = new Client();

	    $data = [
	        "to" => $token,
	        'notification' => [
	            "badge" => 1,
	            "sound" => "ping.aiff",
	            "title"   => $this->title,
	            "body" => $this->body,
	        ]
	        'message' => $this->message
	    ];

	    $response = $client->post("https://api.pushy.me/push?api_key=" . config('pushy.api_key'), [
	        'headers' => [
	            'Content-Type' => 'application/json',
	        ],
	        'json' => $data,
	    ]);
	}

}

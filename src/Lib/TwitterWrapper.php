<?php
namespace App\Lib;

class TwitterWrapper {

	/**
    * 
    * @var Singleton
    */
	private static $instance;

	protected $api;

	public function __construct()
	{
		$settings = array(
		    'oauth_access_token' => "950354433900273665-9YmpSihFEVlasJJoXf02K2QE8W3077X",
		    'oauth_access_token_secret' => "dYCjVXql7Xa96C1N5DOVVmaHK7gzT9tlFgUWBB80Xjskx",
		    'consumer_key' => "vamfproz222bX2q7kQMkK7JMX",
		    'consumer_secret' => "1eI24mXO0bvLpbmP4dFFzebWo4nxRrtEXODySavwt6zzfwdQw5"
		);

		$this->api = new \TwitterAPIExchange($settings);
	}

	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function getTweets(array $ids = []) {
		$url = 'https://api.twitter.com/1.1/statuses/lookup.json';
		$getfield = '?id=' . implode(",", $ids);
		$requestMethod = 'GET';
		$tweets = json_decode($this->api->setGetfield($getfield)
		    ->buildOauth($url, $requestMethod)
		    ->performRequest(), true);

		return $this->formatTweets($tweets);
	}

	public function formatTweets($tweets) {
		return array_map(function($tweet) {
			return [
				'message' => $tweet['text'],
				'retweets' => $tweet['retweet_count'],
				'likes' => $tweet['favorite_count'],
				'date' => date('Y-m-d', strtotime($tweet['created_at'])),
				'url' => $tweet['entities']['urls'][0]['url']
			];
		}, $tweets);
	}

}
<?php

//This file will be used to call twitter GET/POST methods.

error_reporting(E_ALL);
ini_set('display_errors', 1);
include('initialConfiguration.php');

//search tweets by providing campaign string

function searchTweets($searchCriteria)
{
		$twitterObject = initializeAPIRequest();
	
		//define necceasry parameter values

		$campaignId=$searchCriteria['campaign_id'];
		$searchString=$searchCriteria['campaig_name']; //campaign name
		$geolocation=$searchCriteria['geolocation'];
		$range=$searchCriteria['range'];
		$countTweet=$searchCriteria['max_entries'];	//number of max return tweets
		

		$parameter=array("q="=>$searchString;


		$jsonResponse = $twitterObject->search_tweet(	
}





?>
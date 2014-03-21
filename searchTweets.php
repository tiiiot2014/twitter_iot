<?php
require_once 'twitteroauth.php';
 
define('CONSUMER_KEY', 'your_consumer_key');
define('CONSUMER_SECRET', 'your_consumer_secret');
define('ACCESS_TOKEN', 'your_access_token');
define('ACCESS_TOKEN_SECRET', 'your_access_token_secret');
 
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 
$query = array(
  "q" => "#WorldSeries"
);
 
$results = $toa->get('search/tweets', $query);
 
foreach ($results->statuses as $result) {
  echo $result->user->screen_name . ": " . $result->text . "\n";
}
?>

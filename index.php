<?php
require_once 'twitteroauth.php';
define('CONSUMER_KEY', 'cNdiWaOdOzukrx4eNMGxg');
define('CONSUMER_SECRET', 'L6XZn6oclPqLJOruu7zb5osxks9mlrTn88BCmPeHuA');
define('ACCESS_TOKEN', '203856737-k8Cr6uWaLoXR2aLZvsDVNX3mNUzKFdrcip4dypVt');
define('ACCESS_TOKEN_SECRET', 'Cco5SJTbZSKpagYfbnCwmZCh0eO9tXwCrCH8KunhrI');

$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);



$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=srinivasan_la&result_type=recent&count=15');
if($tweets){
	foreach($tweets as $tweet) {
		foreach($tweet as $t) {
				echo '<img src="'.$t->user->profile_image_url.'"/>'.$t->text.'<br>.';
		}
	}
}



$users = $twitter->get('https://api.twitter.com/1.1/users/search.json?q=srinivasan_la&page=1&count=3');
	if($users)
	{
		foreach($users as $user) {
			foreach($user as $u) {
					echo '<img src="'.$u->Users->user_mentions.'"/>'.$u->name.'<br>.';
			}
		}
	}
?>
<?php
// All posts URL = 'https://hacker-news.firebaseio.com/v0/topstories.json'
//Particular post URL = 'https://hacker-news.firebaseio.com/v0/item/' .$postid . '.json'

function apiCall($url){  
// API call to get data from Hacker News
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $output=curl_exec($ch);
    if($output === false)
    {
        // If false, then show the error message
        echo "Error Number:".curl_errno($ch)."<br>";
        echo "Error String:".curl_error($ch);
    }
    curl_close($ch);
    return json_decode($output); // return JSON object as a PHP array
}

function pagination($totalposts, $postPerPage){
    // return the total number of pages
    return ceil(count($totalposts)/$postPerPage);    
}

function GetTimeDiff($timestamp) 
{
    // convert UNIX timestamp to standard time
    $how_log_ago = '';
    $seconds = time() - $timestamp; 
    $minutes = (int)($seconds / 60);
    $hours = (int)($minutes / 60);
    $days = (int)($hours / 24);
    if ($days >= 1) {
      $how_log_ago = $days . ' day' . ($days != 1 ? 's' : '');
  } else if ($hours >= 1) {
      $how_log_ago = $hours . ' hour' . ($hours != 1 ? 's' : '');
  } else if ($minutes >= 1) {
      $how_log_ago = $minutes . ' minute' . ($minutes != 1 ? 's' : '');
  } else {
      $how_log_ago = $seconds . ' second' . ($seconds != 1 ? 's' : '');
  }
  return $how_log_ago;
}
?>
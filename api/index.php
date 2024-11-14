<?php
// URL of the M3U playlist
$url = 'https://m3u.yuvraj49.xyz/tp/KxEs2IHfHljP/playlist.m3u';

// Fetch the content of the M3U file
$m3uContent = file_get_contents($url);

// Check if content was successfully fetched
if ($m3uContent === false) {
    echo "Error: Could not fetch M3U file.";
} else {
    // Save the content to a local file
    file_put_contents('playlist.m3u', $m3uContent);
    echo "M3U playlist saved successfully.";
}
?>

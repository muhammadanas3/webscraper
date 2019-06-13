<?php
    require('simple_html_dom.php');
    // Create DOM from URL or file
    $html = file_get_html('https://www.youtube.com/feed/trending?gl=GB');

    var_dump($html);
    
//     $videos = [];

//     // Find top ten videos
//     $i = 1;
//     foreach ($html->find('ytd-video-renderer.ytd-expanded-shelf-contents-renderer') as $video) {
//         if ($i > 10) {
//                 break;
//         }

//         // Find item link element
//         $videoDetails = $video->find('a#video-title', 0);

//         // get title attribute
//         $videoTitle = $videoDetails->title;

//         // get href attribute
//         $videoUrl = 'https://youtube.com' . $videoDetails->href;

//         // push to a list of videos
//         $videos[] = [
//                 'title' => $videoTitle,
//                 'url' => $videoUrl
//         ];

//         $i++;
// }
// var_dump($videos);
?>

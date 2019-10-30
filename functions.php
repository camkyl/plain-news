<?php

declare(strict_types=1);


/**
 * Sorting post by latest date. New to old. 
 * 
 * @param array $a
 * @param array $b
 * 
 * @return bool
 */


function sortByLatestDate (array $a, array $b): bool {
    return strtotime($a['publishDate']) < strtotime($b['publishDate']); // strtotime() changes a given date string into timestamp
}

usort($articles, 'sortByLatestDate'); // sort array with given user-defined function


/**
 * Generating a random number of likes for each article.
 * 
 * @param int $numberOfLikes
 * 
 * @return int
 */

function randomLikes(): int {
    $numberOfLikes = rand(0,200);

    return $numberOfLikes;
}

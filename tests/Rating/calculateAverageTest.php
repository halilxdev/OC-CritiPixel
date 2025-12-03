<?php

namespace App\Tests\Rating;
use App\Model\Entity\VideoGame;
use PHPUnit\Framework\TestCase;

class CalculateAverageTest extends TestCase 
{
    public function testCalculateAverage()
    {
        
    }
}


// if (count($videoGame->getReviews()) === 0) {
//     $videoGame->setAverageRating(null);
//     return;
// }

// $ratingsSum = array_sum(
//     array_map(
//         static fn (Review $review): int => $review->getRating(),
//         $videoGame->getReviews()->toArray()
//     )
// );

// $videoGame->setAverageRating((int) ceil($ratingsSum/ count($videoGame->getReviews())));
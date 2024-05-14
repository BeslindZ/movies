<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $movie = new Movie();
       $movie->setTitle('beslind');
       $movie->setReleaseYear(12);
       $movie->setDescription('desc');
       $movie->setImagePath('https://cdn.pixabay.com/photo/2020/10/28/10/02/captain-america-5692937_1280.jpg');
       
       $movie->addActor($this->getReference('actor_1'));
       $movie->addActor($this->getReference('actor_2'));
       $manager->persist($movie);

       $movie2 = new Movie();
       $movie2->setTitle('zejnullahu');
       $movie2->setReleaseYear(112);
       $movie2->setDescription('desc1111111');
       $movie2->setImagePath('https://cdn.pixabay.com/photo/2020/10/28/10/02/captain-america-5692937_1280.jpg');
       $movie2->addActor($this->getReference('actor_3'));
       $movie2->addActor($this->getReference('actor_4'));
       $manager->persist($movie2);

       $manager->flush();
    
    }
}

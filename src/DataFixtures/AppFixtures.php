<?php

namespace App\DataFixtures;

use App\Entity\LieuDeDepot;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $lieuDeDepot = new LieuDeDepot;
            $lieuDeDepot->setName('lieu de dépot' . $i);
            $manager->persist($lieuDeDepot);
        }
        $manager->flush();
    }
}

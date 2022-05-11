<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++){
            $produit = new Produit();
            $produit->setDenomination('produit ' . $i);
            $produit->setCode('code ' . $i);
            $produit->setDateCreation(DateTime::createFromFormat('d/m/Y', '09/04/2022'));
            $produit->setActif(mt_rand(1, 10000));
            $produit->setDescriptif('description produit n°' . $i);
            $manager->persist($produit);
        }
        $manager->flush();
    }
}
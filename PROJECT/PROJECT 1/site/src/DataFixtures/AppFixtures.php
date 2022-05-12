<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0 ; $i < 39 ; $i++){
            $user = new User();
            $user->setNom('testClient' . $i);
            $user->setPrenom('testClient' . $i);
            $user->setUsername('testClient' . $i);
            $user->setRoles(['ROLE_CLIENT']);
            $user->setPassword('testClient' . $i);
            $user->setBirthday(DateTime::createFromFormat('d/m/Y', '29/04/2022'));
            $manager->persist($user);
        }
        $manager->flush();
    }

    public function loadProduit(ObjectManager $manager): void
    {
        for ($i = 0; $i < 100; $i++) {
            $produit = new Produit();
            $produit->setLibelle('Carte Graphique n°' . $i);
            $produit->setPrix(mt_rand(150, 3500));
            $produit->setQuantite(mt_rand(0, 1000));
            $manager->persist($produit);
        }
        $manager->flush();
    }
}

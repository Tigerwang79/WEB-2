<?php
namespace App\Service;

use App\Entity\User;

class Total
{
    public function getTotal(User $user): array
    {
        $reponse = [];
        $quantiteTT = 0;
        $prixTT = 0;
        $paniers = $user->getPanier();
        for($i = 0; $i < count($paniers); $i++){
            $quantiteTT = $quantiteTT + $paniers[$i]->getQuantite();
            $prixTT = $prixTT + ($paniers[$i]->getProduit()->getPrix() * $paniers[$i]->getQuantite());
        }
        $reponse[0] = $quantiteTT;
        $reponse[1] = $prixTT;
        return $reponse;
    }
}

?>
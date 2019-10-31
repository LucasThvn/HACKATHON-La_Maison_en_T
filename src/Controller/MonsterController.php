<?php


namespace App\Controller;


use App\Model\Monster;
use App\Model\MonsterManager;

class MonsterController extends AbstractController
{
    public function addMonster()
    {
        $monsterManager = new MonsterManager();
        $result = $monsterManager->getMonsters();

        if ( is_numeric($result)) {

        } else {
            for ($i=0; $i<6; $i++) {
                $chosenMonster[$i] = $result['monsters'][rand(0,19)];
            }
            return $chosenMonster;
        }
    }
    public function transformToSession(){

        $arrayToMonster = $this->addMonster();
        $_SESSION['monster0'] = $arrayToMonster[0];
        $_SESSION['monster1'] = $arrayToMonster[1];
        $_SESSION['monster2'] = $arrayToMonster[2];
        $_SESSION['monster3'] = $arrayToMonster[3];
        $_SESSION['monster4'] = $arrayToMonster[4];
        $_SESSION['monster5'] = $arrayToMonster[5];
    }

}
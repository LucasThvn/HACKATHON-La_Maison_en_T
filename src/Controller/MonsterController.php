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
            for ($i=0; $i<6; $i++) {
                $chosenMonsterFinal[$i] = new Monster();
                $chosenMonsterFinal[$i]->setName($chosenMonster[$i]['name']);
                $chosenMonsterFinal[$i]->setLevel($chosenMonster[$i]['level']);
                $chosenMonsterFinal[$i]->setAttack($chosenMonster[$i]['attack']);
                $chosenMonsterFinal[$i]->setDefence($chosenMonster[$i]['defense']);
                $chosenMonsterFinal[$i]->setDescription($chosenMonster[$i]['description']);
                $chosenMonsterFinal[$i]->setImageUrl($chosenMonster[$i]['picture']);
            }
            return $chosenMonsterFinal;
        }

    }

    public function listMonster(int $numberMonster)
    {
        $arrayMonster = $this->addMonster();
        var_dump($arrayMonster[$numberMonster]);
        return $this->twig->render('Monster/room.html.twig', ['monsters' => $arrayMonster]);
    }

}
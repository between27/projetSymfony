<?php

namespace App\DataFixtures;

use App\Entity\Characters;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class CharactersFixtures extends Fixture
{
    private const CHARACTERS_REFERENCE = 'characters';

    public function load(ObjectManager $manager)
    {
        $nameCharacters = [
            [
                'name' => 'Albedo',
                'elementType' => 'Geo',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'Un alchimiste talentueux de Mondstadt.'
            ],
            [
                'name' => 'Barbara',
                'elementType' => 'Hydro',
                'weaponType' => 'Catalyst',
                'rarity' => 4,
                'description' => 'Une prêtresse dévouée et idol populaire.'
            ],
            [
                'name' => 'Chongyun',
                'elementType' => 'Cryo',
                'weaponType' => 'Claymore',
                'rarity' => 4,
                'description' => 'Un exorciste calme et posé de Liyue.'
            ],
            [
                'name' => 'Diluc',
                'elementType' => 'Pyro',
                'weaponType' => 'Claymore',
                'rarity' => 5,
                'description' => 'Un noble chevalier qui protège Mondstadt.'
            ],
            [
                'name' => 'Eula',
                'elementType' => 'Cryo',
                'weaponType' => 'Claymore',
                'rarity' => 5,
                'description' => "Descendante d'une famille déchue de Mondstadt."
    ],
[
                'name' => 'Fischl',
                'elementType' => 'Electro',
                'weaponType' => 'Bow',
                'rarity' => 4,
                'description' => 'Une aventurière de Mondstadt.'
            ],
            [
                'name' => 'Ganyu',
                'elementType' => 'Cryo',
                'weaponType' => 'Bow',
                'rarity' => 5,
                'description' => 'Secrétaire de Yuehai Pavillon.'
            ],
            [
                'name' => 'Hu Tao',
                'elementType' => 'Pyro',
                'weaponType' => 'Polearm',
                'rarity' => 5,
                'description' => 'Directrice des pompes funèbres Wangsheng.'
            ],
            [
                'name' => 'Jean',
                'elementType' => 'Anemo',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'La grand-maître de l\'ordre des chevaliers de Favonius.'
            ],
            [
                'name' => 'Kaeya',
                'elementType' => 'Cryo',
                'weaponType' => 'Sword',
                'rarity' => 4,
                'description' => 'Un chevalier de Favonius qui a l\'air de cacher bien des secrets.'
            ],
            [
                'name' => 'Keqing',
                'elementType' => 'Electro',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'Une érudite de Liyue.'
            ],
            [
                'name' => 'Klee',
                'elementType' => 'Pyro',
                'weaponType' => 'Catalyst',
                'rarity' => 5,
                'description' => 'Une alchimiste de Mondstadt.'
            ],
            [
                'name' => 'Lisa',
                'elementType' => 'Electro',
                'weaponType' => 'Catalyst',
                'rarity' => 4,
                'description' => 'Une bibliothécaire de l\'académie de Sumeru.'
            ],
            [
                'name' => 'Mona',
                'elementType' => 'Hydro',
                'weaponType' => 'Catalyst',
                'rarity' => 5,
                'description' => 'Une astrologue de Mondstadt.'
            ],
            [
                'name' => 'Ningguang',
                'elementType' => 'Geo',
                'weaponType' => 'Catalyst',
                'rarity' => 4,
                'description' => 'La richissime dame du Jade de Liyue.'
            ],
            [
                'name' => 'Qiqi',
                'elementType' => 'Cryo',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'Une zombie excentrique qui travaille à la Pharmacie Bubu.'
            ],
            [
                'name' => 'Razor',
                'elementType' => 'Electro',
                'weaponType' => 'Claymore',
                'rarity' => 4,
                'description' => 'Un garçon sauvage élevé par des loups dans les forêts de Wolvendom.'
            ],
[
                'name' => 'Rosaria',
                'elementType' => 'Cryo',
                'weaponType' => 'Polearm',
                'rarity' => 4,
                'description' => 'Une nonne de l\'église de Favonius.'
            ],
            [
                'name' => 'Sucrose',
                'elementType' => 'Anemo',
                'weaponType' => 'Catalyst',
                'rarity' => 4,
                'description' => 'Une alchimiste de Mondstadt.'
            ],
            [
                'name' => 'Tartaglia',
                'elementType' => 'Hydro',
                'weaponType' => 'Bow',
                'rarity' => 5,
                'description' => 'Un homme mystérieux qui travaille pour le Tsaritsa.'
            ],
            [
                'name' => 'Venti',
                'elementType' => 'Anemo',
                'weaponType' => 'Bow',
                'rarity' => 5,
                'description' => 'Un barde qui chante des chansons d\'antan.'
            ],
            [
                'name' => 'Xiangling',
                'elementType' => 'Pyro',
                'weaponType' => 'Polearm',
                'rarity' => 4,
                'description' => 'Une chef de cuisine de Liyue.'
            ],
            [
                'name' => 'Xiao',
                'elementType' => 'Anemo',
                'weaponType' => 'Polearm',
                'rarity' => 5,
                'description' => 'Un Adeptus protecteur de Liyue.'
            ],
            [
                'name' => 'Xingqiu',
                'elementType' => 'Hydro',
                'weaponType' => 'Sword',
                'rarity' => 4,
                'description' => 'Un jeune homme qui est à la fois un poète et un guerrier.'
            ],
            [
                'name' => 'Xinyan',
                'elementType' => 'Pyro',
                'weaponType' => 'Claymore',
                'rarity' => 4,
                'description' => 'Une rock star de Liyue.'
            ],
            [
                'name' => 'Yanfei',
                'elementType' => 'Pyro',
                'weaponType' => 'Catalyst',
                'rarity' => 4,
                'description' => 'Une avocate de Liyue.'
            ],
            [
                'name' => 'Zhongli',
                'elementType' => 'Geo',
                'weaponType' => 'Polearm',
                'rarity' => 5,
                'description' => 'Un consultant de l\'académie de Sumeru.'
            ],
            [
                'name' => 'Diona',
                'elementType' => 'Cryo',
                'weaponType' => 'Bow',
                'rarity' => 4,
                'description' => 'Une serveuse du Cat\'s Tail.'
            ],
            [
                'name' => 'Beidou',
                'elementType' => 'Electro',
                'weaponType' => 'Claymore',
                'rarity' => 4,
                'description' => 'La capitaine du Crux.'
            ],
            [
                'name' => 'Xinyan',
                'elementType' => 'Pyro',
                'weaponType' => 'Claymore',
                'rarity' => 4,
                'description' => 'Une rock star de Liyue.'
            ],
            [
                'name' => 'Noelle',
                'elementType' => 'Geo',
                'weaponType' => 'Claymore',
                'rarity' => 4,
                'description' => 'Une domestique dévouée et une aspirante chevalière de Mondstadt.'
            ],
            [
                'name' => 'Kazuha',
                'elementType' => 'Anemo',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'Un rônin errant de Inazuma avec un style de combat gracieux.'
            ],
[
                'name' => 'Yoimiya',
                'elementType' => 'Pyro',
                'weaponType' => 'Bow',
                'rarity' => 5,
                'description' => 'Une pyrotechnicienne de renom de Inazuma.'
            ],
            [
                'name' => 'Sayu',
                'elementType' => 'Anemo',
                'weaponType' => 'Claymore',
                'rarity' => 4,
                'description' => 'Une ninja de Shiyuumatsu-Ban.'
            ],
            [
                'name' => 'Raiden Shogun',
                'elementType' => 'Electro',
                'weaponType' => 'Polearm',
                'rarity' => 5,
                'description' => 'La divinité Éternelle de Inazuma.'
            ],
            [
                'name' => 'Kujou Sara',
                'elementType' => 'Electro',
                'weaponType' => 'Bow',
                'rarity' => 4,
                'description' => 'La générale de l\'armée de Inazuma.'
            ],
            [
                'name' => 'Kamisato Ayaka',
                'elementType' => 'Cryo',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'La princesse de la famille Kamisato de Inazuma.'
            ],
            [
                'name' => 'Sangonomiya Kokomi',
                'elementType' => 'Hydro',
                'weaponType' => 'Catalyst',
                'rarity' => 5,
                'description' => 'La prêtresse de Watatsumi Island.'
            ],
            [
                'name' => 'Aloy',
                'elementType' => 'Cryo',
                'weaponType' => 'Bow',
                'rarity' => 5,
                'description' => 'Une chasseuse de Nora.'
            ],
            [
                'name' => 'Sara',
                'elementType' => 'Electro',
                'weaponType' => 'Bow',
                'rarity' => 4,
                'description' => 'La générale de l\'armée de Inazuma.'
            ],
            [
                'name' => 'Arataki Itto',
                'elementType' => 'Geo',
                'weaponType' => 'Claymore',
                'rarity' => 5,
                'description' => 'Le chef charismatique et imposant de la bande Arataki.'
            ],
            [
                'name' => 'Gorou',
                'elementType' => 'Geo',
                'weaponType' => 'Bow',
                'rarity' => 4,
                'description' => 'Le général courageux de la résistance de Watatsumi, fidèle et déterminé.'
            ],
            [
                'name' => 'Shenhe',
                'elementType' => 'Cryo',
                'weaponType' => 'Polearm',
                'rarity' => 5,
                'description' => 'Une disciple énigmatique sous la tutelle de l\'Adeptus Cloud Retainer.'
            ],
            [
                'name' => 'Yun Jin',
                'elementType' => 'Geo',
                'weaponType' => 'Polearm',
                'rarity' => 4,
                'description' => 'La directrice de la troupe de théâtre Yun-Han, connue pour son talent exceptionnel en art dramatique.'
            ],
            [
                'name' => 'Yae Miko',
                'elementType' => 'Electro',
                'weaponType' => 'Catalyst',
                'rarity' => 5,
                'description' => 'La rusée prêtresse du Grand Sanctuaire Narukami, dotée d\'un esprit aussi vif que l\'éclair.'
            ],
            [
                'name' => 'Thoma',
                'elementType' => 'Pyro',
                'weaponType' => 'Polearm',
                'rarity' => 4,
                'description' => 'Un garde du corps de la famille Kamisato de Inazuma.'
            ],
            [
                'name' => 'Kamisato Ayato',
                'elementType' => 'Hydro',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'Le chef de la prestigieuse famille Kamisato et le responsable des affaires du clan Yashiro à Inazuma.'
            ],
            [
                'name' => 'Yelan',
                'elementType' => 'Hydro',
                'weaponType' => 'Bow',
                'rarity' => 5,
                'description' => 'Une mystérieuse et agile agente qui semble être impliquée dans des affaires secrètes à Liyue.'
            ],
            [
                'name' => 'Kuki Shinobu',
                'elementType' => 'Electro',
                'weaponType' => 'Sword',
                'rarity' => 4,
                'description' => 'La vice-chef de la bande Arataki, connue pour son sérieux et son efficacité.'
            ],
            [
                'name' => 'Shikanoin Heizou',
                'elementType' => 'Anemo',
                'weaponType' => 'Catalyst',
                'rarity' => 4,
                'description' => 'Un détective enthousiaste de la commission Tenryou d\'Inazuma, connu pour ses méthodes uniques.'
            ],
            [
                'name' => 'Tighnari',
                'elementType' => 'Dendro',
                'weaponType' => 'Bow',
                'rarity' => 5,
                'description' => 'Un gardien de la forêt de Sumeru, érudit et responsable, avec une passion pour la botanique.'
            ],
            [
                'name' => 'Collei',
                'elementType' => 'Dendro',
                'weaponType' => 'Bow',
                'rarity' => 4,
                'description' => 'Une apprentie dans la forêt de Sumeru, curieuse et avide de connaissances.'
            ],
            [
                'name' => 'Cyno',
                'elementType' => 'Electro',
                'weaponType' => 'Polearm',
                'rarity' => 5,
                'description' => 'Un érudit de Sumeru avec un caractère sérieux et une forte présence sur le champ de bataille.'
            ],
            [
                'name' => 'Nilou',
                'elementType' => 'Hydro',
                'weaponType' => 'Sword',
                'rarity' => 5,
                'description' => 'Une danseuse célèbre de Sumeru, connue pour sa grâce et son élégance.'
            ],






     // Ajoutez d'autres personnages ici...
        ];


        foreach ($nameCharacters as $key => $nameCharacter) {
            $characters = new Characters();
            $characters->setName($nameCharacter['name']);
            $characters->setElementType($nameCharacter['elementType']);
            $characters->setWeaponType($nameCharacter['weaponType']);
            $characters->setRarity($nameCharacter['rarity']);
            $characters->setDescription($nameCharacter['description']);
            $manager->persist($characters);
            $this->addReference(self::CHARACTERS_REFERENCE . '_' . $key, $characters);
        }

        $manager->flush();
        // TODO: Implement load() method.
    }
}
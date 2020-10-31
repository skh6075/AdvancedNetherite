<?php


namespace skh6075\netheriteloader\item\armor;


use pocketmine\item\Armor;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;

class NetheriteBoots extends Armor{


    public function __construct(ItemIdentifier $identifier, string $name, ArmorTypeInfo $info) {
        parent::__construct($identifier, $name, $info);
    }

    public function getDefensePoints(): int{
        return 3;
    }

    public function getMaxDurability(): int{
        return 481;
    }
}
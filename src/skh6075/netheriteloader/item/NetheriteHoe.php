<?php


namespace skh6075\netheriteloader\item;


use pocketmine\entity\Entity;
use pocketmine\item\Hoe;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;

class NetheriteHoe extends Hoe{


    public function __construct(ItemIdentifier $identifier, string $name, ToolTier $tier) {
        parent::__construct($identifier, $name, $tier);
    }

    public function onAttackEntity(Entity $victim): bool{
        return $this->applyDamage(1);
    }

    public function getMaxDurability(): int{
        return 2000;
    }
}
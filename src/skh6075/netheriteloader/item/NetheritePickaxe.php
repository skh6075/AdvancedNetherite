<?php


namespace skh6075\netheriteloader\item;

use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Pickaxe;
use pocketmine\item\ToolTier;

class NetheritePickaxe extends Pickaxe {


    public function __construct(ItemIdentifier $identifier, string $name, ToolTier $tier) {
        parent::__construct($identifier, $name, $tier);
    }

    public function getMaxDurability(): int{
        return 2000;
    }

    public function getBlockToolType(): int{
        return 5;
    }

    public function getAttackPoints(): int{
        return 1;
    }

    public function onDestroyBlock(Block $block): bool{
        if ($block->getBreakInfo()->getHardness() > 0) {
            //TODO.. Enchant support
            return $this->applyDamage(1);
        }
        return false;
    }

    public function onAttackEntity(Entity $victim): bool{
        //TODO.. Enchant support
        return $this->applyDamage(2);
    }
}
<?php


namespace skh6075\netheriteloader\item;

use pocketmine\block\Block;
use pocketmine\block\BlockToolType;
use pocketmine\entity\Entity;
use pocketmine\item\Axe;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;

class NetheriteAxe extends Axe{


    public function __construct(ItemIdentifier $identifier, string $name, ToolTier $tier) {
        parent::__construct($identifier, $name, $tier);
    }

    public function getMaxDurability(): int{
        return 2000;
    }

    public function getBlockToolType(): int{
        return BlockToolType::AXE;
    }

    public function getBlockToolHarvestLevel(): int{
        return 5;
    }

    public function onDestroyBlock(Block $block): bool{
        if ($block->getBreakInfo()->getHardness() > 0) {
            return $this->applyDamage(1);
        }
        return false;
    }

    public function onAttackEntity(Entity $victim): bool{
        return $this->applyDamage(2);
    }
}
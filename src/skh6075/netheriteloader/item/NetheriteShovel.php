<?php


namespace skh6075\netheriteloader\item;


use pocketmine\block\Block;
use pocketmine\block\BlockToolType;
use pocketmine\entity\Entity;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Shovel;
use pocketmine\item\ToolTier;

class NetheriteShovel extends Shovel{


    public function __construct(ItemIdentifier $identifier, string $name, ToolTier $tier) {
        parent::__construct($identifier, $name, $tier);
    }

    public function getBlockToolType(): int{
        return BlockToolType::SHOVEL;
    }

    public function getMaxDurability(): int{
        return 2000;
    }

    public function getBlockToolHarvestLevel(): int{
        return 5;
    }

    public function getAttackPoints(): int{
        return 2;
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
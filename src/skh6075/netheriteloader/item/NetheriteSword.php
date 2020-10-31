<?php


namespace skh6075\netheriteloader\item;


use pocketmine\block\Block;
use pocketmine\block\BlockToolType;
use pocketmine\entity\Entity;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Sword;
use pocketmine\item\ToolTier;

class NetheriteSword extends Sword{


    public function __construct(ItemIdentifier $identifier, string $name, ToolTier $tier) {
        parent::__construct($identifier, $name, $tier);
    }

    public function getBlockToolType(): int{
        return BlockToolType::SWORD;
    }

    public function getAttackPoints(): int{
        return 9;
    }

    public function getBlockToolHarvestLevel(): int{
        return 1;
    }

    public function getMaxDurability(): int{
        return 2000;
    }

    public function getMiningEfficiency(bool $isCorrectTool): float{
        return parent::getBaseMiningEfficiency() * 1.5;
    }

    protected function getBaseMiningEfficiency(): float{
        return 10;
    }

    public function onDestroyBlock(Block $block): bool{
        if ($block->getBreakInfo()->getHardness() > 0) {
            return $this->applyDamage(2);
        }
        return false;
    }

    public function onAttackEntity(Entity $victim): bool{
        return $this->applyDamage(1);
    }
}
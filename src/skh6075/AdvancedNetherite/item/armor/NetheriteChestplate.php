<?php


namespace skh6075\AdvancedNetherite\item\armor;

use pocketmine\item\Armor;

class NetheriteChestplate extends Armor {


    public function __construct (int $meta = 0) {
        parent::__construct (749, $meta, 'Netherite Chestplate');
    }
    
    /**
     * @return int
     */
    public function getDefensePoints (): int{
        return 8;
    }
    
    /**
     * @return int
     */
    public function getMaxDurability (): int{
        return 592;
    }
}
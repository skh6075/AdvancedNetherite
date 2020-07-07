<?php


namespace skh6075\AdvancedNetherite\item\armor;

use pocketmine\item\Armor;

class NetheriteHelmet extends Armor {


    public function __construct (int $meta = 0) {
        parent::__construct (748, $meta, 'Netherite Helmet');
    }
    
    /**
     * @return int
     */
    public function getDefensePoints (): int{
        return 3;
    }
    
    /**
     * @return int
     */
    public function getMaxDurability (): int{
        return 407;
    }
}
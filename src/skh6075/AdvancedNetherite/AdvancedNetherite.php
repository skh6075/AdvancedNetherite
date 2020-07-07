<?php


namespace skh6075\AdvancedNetherite;

use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

use skh6075\AdvancedNetherite\item\armor\{
    NetheriteHelmet,
    NetheriteChestplate,
    NetheriteLeggings,
    NetheriteBoots
};
use skh6075\AdvancedNetherite\item\tool\{
    NetheriteAxe,
    NetheriteHoe,
    NetheritePickaxe,
    NetheriteShovel,
    NetheriteSword
};

class AdvancedNetherite extends PluginBase {


    public function onLoad (): void{
        /** Netherite Armor Item */
        ItemFactory::registerItem (new NetheriteHelmet (), true);
        ItemFactory::registerItem (new NetheriteChestplate (), true);
        ItemFactory::registerItem (new NetheriteLeggings (), true);
        ItemFactory::registerItem (new NetheriteBoots (), true);
        /** Netherite Tool Item */
        ItemFactory::registerItem (new NetheriteAxe (), true);
        //ItemFactory::registerItem (new NetheriteHoe (), true);
        ItemFactory::registerItem (new NetheritePickaxe (), true);
        ItemFactory::registerItem (new NetheriteShovel (), true);
        ItemFactory::registerItem (new NetheriteSword (), true);
        
        Item::initCreativeItems ();
    }
}
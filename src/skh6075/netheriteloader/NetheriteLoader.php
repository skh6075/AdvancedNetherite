<?php


namespace skh6075\netheriteloader;

use pocketmine\inventory\ArmorInventory;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;
use pocketmine\plugin\PluginBase;
use skh6075\netheriteloader\item\armor\NetheriteBoots;
use skh6075\netheriteloader\item\armor\NetheriteChestplate;
use skh6075\netheriteloader\item\armor\NetheriteHelmet;
use skh6075\netheriteloader\item\armor\NetheriteLeggings;
use skh6075\netheriteloader\item\NetheriteAxe;
use skh6075\netheriteloader\item\NetheriteHoe;
use skh6075\netheriteloader\item\NetheritePickaxe;
use skh6075\netheriteloader\item\NetheriteShovel;
use skh6075\netheriteloader\item\NetheriteSword;

class NetheriteLoader extends PluginBase{

    protected function onLoad (): void{
        $factory = ItemFactory::getInstance();

        $factory->register(new NetheritePickaxe(new ItemIdentifier(745, 0), "Netherite Pickaxe", ToolTier::DIAMOND()));
        $factory->register(new NetheriteSword(new ItemIdentifier(743, 0), "Netherite Sword", ToolTier::DIAMOND()));
        $factory->register(new NetheriteShovel(new ItemIdentifier(744, 0), "Netherite Shovel", ToolTier::DIAMOND()));
        $factory->register(new NetheriteAxe(new ItemIdentifier(746, 0), "Netherite Axe", ToolTier::DIAMOND()));
        $factory->register(new NetheriteHoe(new ItemIdentifier(747, 0), "Netherite Hoe", ToolTier::DIAMOND()));

        $factory->register(new NetheriteHelmet(new ItemIdentifier(748, 0), "Netherite Helmet", new ArmorTypeInfo(3, 407, ArmorInventory::SLOT_HEAD)));
        $factory->register(new NetheriteChestplate(new ItemIdentifier(749, 0), "Netherite Chestplate", new ArmorTypeInfo(5, 592, ArmorInventory::SLOT_CHEST)));
        $factory->register(new NetheriteLeggings(new ItemIdentifier(750, 0), "Netherite Leggings", new ArmorTypeInfo(6, 555, ArmorInventory::SLOT_LEGS)));
        $factory->register(new NetheriteBoots(new ItemIdentifier(751, 0), "Netherite Boots", new ArmorTypeInfo(3, 481, ArmorInventory::SLOT_FEET)));
    }
}

<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
 */

declare(strict_types=1);

namespace pocketmine\block;

use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockLegacyIds as Ids;
use pocketmine\block\tile\Sign as TileSign;
use pocketmine\block\utils\DyeColor;
use pocketmine\block\utils\TreeType;
use pocketmine\item\ItemIds;
use pocketmine\utils\AssumptionFailedError;

final class BlockLegacyIdHelper{

	public static function getWoodenFloorSignIdentifier(TreeType $treeType) : BID{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::SIGN_POST, 0, ItemIds::SIGN, TileSign::class);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_STANDING_SIGN, 0, ItemIds::SPRUCE_SIGN, TileSign::class);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_STANDING_SIGN, 0, ItemIds::BIRCH_SIGN, TileSign::class);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_STANDING_SIGN, 0, ItemIds::JUNGLE_SIGN, TileSign::class);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_STANDING_SIGN,0, ItemIds::ACACIA_SIGN, TileSign::class);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARKOAK_STANDING_SIGN, 0, ItemIds::DARKOAK_SIGN, TileSign::class);
            case TreeType::WARPED()->id():
				return new BID(506, 0, 754, TileSign::class);
            case TreeType::CRIMSON()->id():
				return new BID(505, 0, 753, TileSign::class);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenWallSignIdentifier(TreeType $treeType) : BID{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::WALL_SIGN, 0, ItemIds::SIGN, TileSign::class);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_WALL_SIGN, 0, ItemIds::SPRUCE_SIGN, TileSign::class);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_WALL_SIGN, 0, ItemIds::BIRCH_SIGN, TileSign::class);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_WALL_SIGN, 0, ItemIds::JUNGLE_SIGN, TileSign::class);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_WALL_SIGN, 0, ItemIds::ACACIA_SIGN, TileSign::class);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARKOAK_WALL_SIGN, 0, ItemIds::DARKOAK_SIGN, TileSign::class);
            case TreeType::WARPED()->id():
				return new BID(508, 0, 754, TileSign::class);
            case TreeType::CRIMSON()->id():
				return new BID(507, 0, 753, TileSign::class);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenTrapdoorIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::WOODEN_TRAPDOOR, 0);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_TRAPDOOR, 0);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_TRAPDOOR, 0);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_TRAPDOOR, 0);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_TRAPDOOR, 0);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARK_OAK_TRAPDOOR, 0);
            case TreeType::WARPED()->id():
				return new BID(502, 0);
            case TreeType::CRIMSON()->id():
				return new BID(501, 0);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenButtonIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::WOODEN_BUTTON, 0);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_BUTTON, 0);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_BUTTON, 0);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_BUTTON, 0);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_BUTTON, 0);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARK_OAK_BUTTON, 0);
            case TreeType::WARPED()->id():
				return new BID(516, 0);
            case TreeType::CRIMSON()->id():
				return new BID(515, 0);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenPressurePlateIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::WOODEN_PRESSURE_PLATE, 0);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_PRESSURE_PLATE, 0);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_PRESSURE_PLATE, 0);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_PRESSURE_PLATE, 0);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_PRESSURE_PLATE, 0);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARK_OAK_PRESSURE_PLATE, 0);
            case TreeType::WARPED()->id():
				return new BID(518, 0);
            case TreeType::CRIMSON()->id():
				return new BID(517, 0);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenDoorIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::OAK_DOOR_BLOCK, 0, ItemIds::OAK_DOOR);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_DOOR_BLOCK, 0, ItemIds::SPRUCE_DOOR);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_DOOR_BLOCK, 0, ItemIds::BIRCH_DOOR);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_DOOR_BLOCK, 0, ItemIds::JUNGLE_DOOR);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_DOOR_BLOCK, 0, ItemIds::ACACIA_DOOR);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARK_OAK_DOOR_BLOCK, 0, ItemIds::DARK_OAK_DOOR);
            case TreeType::WARPED()->id():
				return new BID(500, 0, 756);
            case TreeType::CRIMSON()->id():
				return new BID(499, 0, 755);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenFenceIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::OAK_FENCE_GATE, 0);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_FENCE_GATE, 0);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_FENCE_GATE, 0);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_FENCE_GATE, 0);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_FENCE_GATE, 0);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARK_OAK_FENCE_GATE, 0);
            case TreeType::WARPED()->id():
				return new BID(514, 0);
            case TreeType::CRIMSON()->id():
				return new BID(513, 0);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenStairsIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::OAK_STAIRS, 0);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_STAIRS, 0);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_STAIRS, 0);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_STAIRS, 0);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_STAIRS, 0);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARK_OAK_STAIRS, 0);
            case TreeType::WARPED()->id():
				return new BID(510, 0);
            case TreeType::CRIMSON()->id():
				return new BID(509, 0);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getStrippedLogIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::STRIPPED_OAK_LOG, 0);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::STRIPPED_SPRUCE_LOG, 0);
			case TreeType::BIRCH()->id():
				return new BID(Ids::STRIPPED_BIRCH_LOG, 0);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::STRIPPED_JUNGLE_LOG, 0);
			case TreeType::ACACIA()->id():
				return new BID(Ids::STRIPPED_ACACIA_LOG, 0);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::STRIPPED_DARK_OAK_LOG, 0);
            case TreeType::WARPED()->id():
				return new BID(496, 0);
            case TreeType::CRIMSON()->id():
				return new BID(495, 0);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getGlazedTerracottaIdentifier(DyeColor $color) : BlockIdentifier{
		switch($color->id()){
			case DyeColor::WHITE()->id():
				return new BID(Ids::WHITE_GLAZED_TERRACOTTA, 0);
			case DyeColor::ORANGE()->id():
				return new BID(Ids::ORANGE_GLAZED_TERRACOTTA, 0);
			case DyeColor::MAGENTA()->id():
				return new BID(Ids::MAGENTA_GLAZED_TERRACOTTA, 0);
			case DyeColor::LIGHT_BLUE()->id():
				return new BID(Ids::LIGHT_BLUE_GLAZED_TERRACOTTA, 0);
			case DyeColor::YELLOW()->id():
				return new BID(Ids::YELLOW_GLAZED_TERRACOTTA, 0);
			case DyeColor::LIME()->id():
				return new BID(Ids::LIME_GLAZED_TERRACOTTA, 0);
			case DyeColor::PINK()->id():
				return new BID(Ids::PINK_GLAZED_TERRACOTTA, 0);
			case DyeColor::GRAY()->id():
				return new BID(Ids::GRAY_GLAZED_TERRACOTTA, 0);
			case DyeColor::LIGHT_GRAY()->id():
				return new BID(Ids::SILVER_GLAZED_TERRACOTTA, 0);
			case DyeColor::CYAN()->id():
				return new BID(Ids::CYAN_GLAZED_TERRACOTTA, 0);
			case DyeColor::PURPLE()->id():
				return new BID(Ids::PURPLE_GLAZED_TERRACOTTA, 0);
			case DyeColor::BLUE()->id():
				return new BID(Ids::BLUE_GLAZED_TERRACOTTA, 0);
			case DyeColor::BROWN()->id():
				return new BID(Ids::BROWN_GLAZED_TERRACOTTA, 0);
			case DyeColor::GREEN()->id():
				return new BID(Ids::GREEN_GLAZED_TERRACOTTA, 0);
			case DyeColor::RED()->id():
				return new BID(Ids::RED_GLAZED_TERRACOTTA, 0);
			case DyeColor::BLACK()->id():
				return new BID(Ids::BLACK_GLAZED_TERRACOTTA, 0);
		}
		throw new AssumptionFailedError("Switch should cover all colours");
	}

	public static function getStoneSlabIdentifier(int $stoneSlabId, int $meta) : BlockIdentifierFlattened{
		$id = [
			1 => [Ids::STONE_SLAB, Ids::DOUBLE_STONE_SLAB],
			2 => [Ids::STONE_SLAB2, Ids::DOUBLE_STONE_SLAB2],
			3 => [Ids::STONE_SLAB3, Ids::DOUBLE_STONE_SLAB3],
			4 => [Ids::STONE_SLAB4, Ids::DOUBLE_STONE_SLAB4]
		][$stoneSlabId] ?? null;
		if($id === null){
			throw new \InvalidArgumentException("Stone slab type should be 1, 2, 3 or 4");
		}
		return new BlockIdentifierFlattened($id[0], [$id[1]], $meta);
	}
}

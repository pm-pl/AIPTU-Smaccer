<?php

/*
 * Copyright (c) 2024 AIPTU
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/AIPTU/Smaccer
 */

declare(strict_types=1);

namespace aiptu\smaccer\event;

use pocketmine\entity\Entity;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;
use pocketmine\event\entity\EntityEvent;

/**
 * @phpstan-extends EntityEvent<Entity>
 */
class NPCNameTagChangeEvent extends EntityEvent implements Cancellable {
	use CancellableTrait;

	public function __construct(
		protected Entity $entity,
		private string $oldNameTag,
		private string $newNameTag
	) {}

	public function getOldNameTag() : string {
		return $this->oldNameTag;
	}

	public function getNewNameTag() : string {
		return $this->newNameTag;
	}

	public function setNewNameTag(string $newNameTag) : void {
		$this->newNameTag = $newNameTag;
	}
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmSpecEncryptionConfig
{
    /**
     * @var bool
     */
    protected $autoLockManagers;

    /**
     * @return bool
     */
    public function getAutoLockManagers(): ?bool
    {
        return $this->autoLockManagers;
    }

    /**
     * @param bool $autoLockManagers
     *
     * @return self
     */
    public function setAutoLockManagers(?bool $autoLockManagers): self
    {
        $this->autoLockManagers = $autoLockManagers;

        return $this;
    }
}
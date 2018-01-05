<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ContainersIdJsonGetResponse200State
{
    /**
     * The status of the container. For example, `running` or `exited`.
     *
     * @var string
     */
    protected $status;
    /**
     * Whether this container is running.
     *
     * @var bool
     */
    protected $running;
    /**
     * Whether this container is paused.
     *
     * @var bool
     */
    protected $paused;
    /**
     * Whether this container is restarting.
     *
     * @var bool
     */
    protected $restarting;
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @var bool
     */
    protected $oOMKilled;
    /**
     * @var bool
     */
    protected $dead;
    /**
     * The process ID of this container.
     *
     * @var int
     */
    protected $pid;
    /**
     * The last exit code of this container.
     *
     * @var int
     */
    protected $exitCode;
    /**
     * @var string
     */
    protected $error;
    /**
     * The time when this container was last started.
     *
     * @var string
     */
    protected $startedAt;
    /**
     * The time when this container last exited.
     *
     * @var string
     */
    protected $finishedAt;

    /**
     * The status of the container. For example, `running` or `exited`.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The status of the container. For example, `running` or `exited`.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Whether this container is running.
     *
     * @return bool
     */
    public function getRunning(): ?bool
    {
        return $this->running;
    }

    /**
     * Whether this container is running.
     *
     * @param bool $running
     *
     * @return self
     */
    public function setRunning(?bool $running): self
    {
        $this->running = $running;

        return $this;
    }

    /**
     * Whether this container is paused.
     *
     * @return bool
     */
    public function getPaused(): ?bool
    {
        return $this->paused;
    }

    /**
     * Whether this container is paused.
     *
     * @param bool $paused
     *
     * @return self
     */
    public function setPaused(?bool $paused): self
    {
        $this->paused = $paused;

        return $this;
    }

    /**
     * Whether this container is restarting.
     *
     * @return bool
     */
    public function getRestarting(): ?bool
    {
        return $this->restarting;
    }

    /**
     * Whether this container is restarting.
     *
     * @param bool $restarting
     *
     * @return self
     */
    public function setRestarting(?bool $restarting): self
    {
        $this->restarting = $restarting;

        return $this;
    }

    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @return bool
     */
    public function getOOMKilled(): ?bool
    {
        return $this->oOMKilled;
    }

    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @param bool $oOMKilled
     *
     * @return self
     */
    public function setOOMKilled(?bool $oOMKilled): self
    {
        $this->oOMKilled = $oOMKilled;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDead(): ?bool
    {
        return $this->dead;
    }

    /**
     * @param bool $dead
     *
     * @return self
     */
    public function setDead(?bool $dead): self
    {
        $this->dead = $dead;

        return $this;
    }

    /**
     * The process ID of this container.
     *
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * The process ID of this container.
     *
     * @param int $pid
     *
     * @return self
     */
    public function setPid(?int $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * The last exit code of this container.
     *
     * @return int
     */
    public function getExitCode(): ?int
    {
        return $this->exitCode;
    }

    /**
     * The last exit code of this container.
     *
     * @param int $exitCode
     *
     * @return self
     */
    public function setExitCode(?int $exitCode): self
    {
        $this->exitCode = $exitCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * The time when this container was last started.
     *
     * @return string
     */
    public function getStartedAt(): ?string
    {
        return $this->startedAt;
    }

    /**
     * The time when this container was last started.
     *
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(?string $startedAt): self
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * The time when this container last exited.
     *
     * @return string
     */
    public function getFinishedAt(): ?string
    {
        return $this->finishedAt;
    }

    /**
     * The time when this container last exited.
     *
     * @param string $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(?string $finishedAt): self
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }
}

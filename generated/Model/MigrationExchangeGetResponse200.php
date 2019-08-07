<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class MigrationExchangeGetResponse200 extends \ArrayObject
{
    /**
     * @var string
     */
    protected $enterpriseId;
    /**
     * @var string[]
     */
    protected $invalidUserIds;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $teamId;
    /**
     * @var mixed[]
     */
    protected $userIdMap;

    /**
     * @return string|null
     */
    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    /**
     * @param string|null $enterpriseId
     *
     * @return self
     */
    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->enterpriseId = $enterpriseId;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getInvalidUserIds(): ?array
    {
        return $this->invalidUserIds;
    }

    /**
     * @param string[]|null $invalidUserIds
     *
     * @return self
     */
    public function setInvalidUserIds(?array $invalidUserIds): self
    {
        $this->invalidUserIds = $invalidUserIds;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    /**
     * @param string|null $teamId
     *
     * @return self
     */
    public function setTeamId(?string $teamId): self
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getUserIdMap(): ?\ArrayObject
    {
        return $this->userIdMap;
    }

    /**
     * @param mixed[]|null $userIdMap
     *
     * @return self
     */
    public function setUserIdMap(?\ArrayObject $userIdMap): self
    {
        $this->userIdMap = $userIdMap;

        return $this;
    }
}

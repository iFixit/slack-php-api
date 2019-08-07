<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class RtmStartGetResponse200Subteams extends \ArrayObject
{
    /**
     * @var mixed[]
     */
    protected $all;
    /**
     * @var mixed[]
     */
    protected $self;

    /**
     * @return mixed[]|null
     */
    public function getAll(): ?array
    {
        return $this->all;
    }

    /**
     * @param mixed[]|null $all
     *
     * @return self
     */
    public function setAll(?array $all): self
    {
        $this->all = $all;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getSelf(): ?array
    {
        return $this->self;
    }

    /**
     * @param mixed[]|null $self
     *
     * @return self
     */
    public function setSelf(?array $self): self
    {
        $this->self = $self;

        return $this;
    }
}

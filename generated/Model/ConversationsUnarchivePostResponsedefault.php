<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ConversationsUnarchivePostResponsedefault extends \ArrayObject
{
    /**
     * @var string
     */
    protected $error;
    /**
     * @var string
     */
    protected $needed;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $provided;

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNeeded(): ?string
    {
        return $this->needed;
    }

    /**
     * @param string|null $needed
     *
     * @return self
     */
    public function setNeeded(?string $needed): self
    {
        $this->needed = $needed;

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
    public function getProvided(): ?string
    {
        return $this->provided;
    }

    /**
     * @param string|null $provided
     *
     * @return self
     */
    public function setProvided(?string $provided): self
    {
        $this->provided = $provided;

        return $this;
    }
}

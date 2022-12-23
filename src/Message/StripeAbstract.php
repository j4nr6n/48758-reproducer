<?php

namespace App\Message;

abstract class StripeAbstract
{
    public ?string $nextPage = null;

    /**
     * @return string
     */
    public function getNextPage(): ?string
    {
        return $this->nextPage;
    }

    /**
     * @param string|null $nextPage
     * @return StripeAbstract
     */
    public function setNextPage(?string $nextPage = null): StripeAbstract
    {
        $this->nextPage = $nextPage;
        return $this;
    }
}

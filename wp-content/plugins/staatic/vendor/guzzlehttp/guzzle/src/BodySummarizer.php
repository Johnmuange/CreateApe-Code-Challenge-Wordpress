<?php

namespace Staatic\Vendor\GuzzleHttp;

use Staatic\Vendor\GuzzleHttp\Psr7\Message;
use Staatic\Vendor\Psr\Http\Message\MessageInterface;
final class BodySummarizer implements BodySummarizerInterface
{
    private $truncateAt;
    public function __construct(int $truncateAt = null)
    {
        $this->truncateAt = $truncateAt;
    }
    /**
     * @param MessageInterface $message
     * @return string|null
     */
    public function summarize($message)
    {
        return $this->truncateAt === null ? Message::bodySummary($message) : Message::bodySummary($message, $this->truncateAt);
    }
}

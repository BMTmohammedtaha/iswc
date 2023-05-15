<?php

namespace Bmt\ISRC;

/**
 * Class ISWC
 * Represents an International Standard Musical Work Code (ISWC) and provides methods to manipulate it.
 */
class ISWC
{
    protected string $countryCode;
    protected string $publisherCode;
    protected string $workCode;

    /**
     * ISWC constructor.
     *
     * @param string $countryCode The country code.
     * @param string $publisherCode The publisher code.
     * @param string $workCode The work code.
     */
    public function __construct(
        string $countryCode,
        string $publisherCode,
        string $workCode
    ) {
        $this->countryCode = $countryCode;
        $this->publisherCode = $publisherCode;
        $this->workCode = $workCode;
    }

    /**
     * Parses the provided ISWC code and sets the respective properties.
     *
     * @param string $iswcCode The ISWC code to parse.
     *
     * @return ISWC The current instance.
     *
     * @throws \Exception If the ISWC code has an invalid format.
     */
    public function parse(string $iswcCode): self
    {
        $pattern = '/^T-(\d{3})(\d{3})(\d{2})(\d)$/';
        if (preg_match($pattern, $iswcCode, $matches)) {
            $this->countryCode = $matches[1];
            $this->publisherCode = $matches[2];
            $this->workCode = $matches[3] . '-' . $matches[4];
        } else {
            throw new \Exception("Invalid ISWC code format.");
        }

        return $this;
    }

    /**
     * Retrieves the country code of the ISWC.
     *
     * @return string The country code.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Retrieves the publisher code of the ISWC.
     *
     * @return string The publisher code.
     */
    public function getPublisherCode(): string
    {
        return $this->publisherCode;
    }

    /**
     * Retrieves the work code of the ISWC.
     *
     * @return string The work code.
     */
    public function getWorkCode(): string
    {
        return $this->workCode;
    }

    /**
     * Generates a complete ISWC code using the stored properties.
     *
     * @return string The generated ISWC code.
     */
    public function generateISWC(): string
    {
        $iswcCode = 'T-' . $this->countryCode . $this->publisherCode . $this->workCode;

        return $iswcCode;
    }

    /**
     * Returns the ISWC code as a string.
     *
     * @return string The ISWC code.
     */
    public function __toString(): string
    {
        return $this->generateISWC();
    }
}


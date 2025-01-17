<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Response object for getting a billing address
 */
class GetBillingAddressResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $number;

    /**
     * @var string|null
     */
    private $zipCode;

    /**
     * @var string|null
     */
    private $neighborhood;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $complement;

    /**
     * @var string|null
     */
    private $line1;

    /**
     * @var string|null
     */
    private $line2;

    /**
     * Returns Street.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Sets Street.
     *
     * @maps street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * Returns Number.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Zip Code.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Sets Zip Code.
     *
     * @maps zip_code
     */
    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Returns Neighborhood.
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * Sets Neighborhood.
     *
     * @maps neighborhood
     */
    public function setNeighborhood(?string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns State.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Complement.
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * Sets Complement.
     *
     * @maps complement
     */
    public function setComplement(?string $complement): void
    {
        $this->complement = $complement;
    }

    /**
     * Returns Line 1.
     * Line 1 for address
     */
    public function getLine1(): ?string
    {
        return $this->line1;
    }

    /**
     * Sets Line 1.
     * Line 1 for address
     *
     * @maps line_1
     */
    public function setLine1(?string $line1): void
    {
        $this->line1 = $line1;
    }

    /**
     * Returns Line 2.
     * Line 2 for address
     */
    public function getLine2(): ?string
    {
        return $this->line2;
    }

    /**
     * Sets Line 2.
     * Line 2 for address
     *
     * @maps line_2
     */
    public function setLine2(?string $line2): void
    {
        $this->line2 = $line2;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['street']       = $this->street;
        $json['number']       = $this->number;
        $json['zip_code']     = $this->zipCode;
        $json['neighborhood'] = $this->neighborhood;
        $json['city']         = $this->city;
        $json['state']        = $this->state;
        $json['country']      = $this->country;
        $json['complement']   = $this->complement;
        $json['line_1']       = $this->line1;
        $json['line_2']       = $this->line2;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

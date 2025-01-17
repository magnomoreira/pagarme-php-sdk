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
 * Fine Response
 */
class GetFineResponse implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $days;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * Returns Days.
     * Days
     */
    public function getDays(): ?int
    {
        return $this->days;
    }

    /**
     * Sets Days.
     * Days
     *
     * @maps days
     */
    public function setDays(?int $days): void
    {
        $this->days = $days;
    }

    /**
     * Returns Type.
     * Type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Type
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Amount.
     * Amount
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
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
        $json['days']   = $this->days;
        $json['type']   = $this->type;
        $json['amount'] = $this->amount;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

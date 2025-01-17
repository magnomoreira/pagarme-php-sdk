<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetTransferTargetResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $targetId;

    /**
     * @var string|null
     */
    private $type;

    /**
     * Returns Target Id.
     */
    public function getTargetId(): ?string
    {
        return $this->targetId;
    }

    /**
     * Sets Target Id.
     *
     * @maps target_id
     */
    public function setTargetId(?string $targetId): void
    {
        $this->targetId = $targetId;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
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
        $json['target_id'] = $this->targetId;
        $json['type']      = $this->type;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetSubscriptionSplitResponse implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var GetSplitResponse[]|null
     */
    private $rules;

    /**
     * Returns Enabled.
     * Defines if the split is enabled
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Defines if the split is enabled
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Rules.
     * Split
     *
     * @return GetSplitResponse[]|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * Sets Rules.
     * Split
     *
     * @maps rules
     *
     * @param GetSplitResponse[]|null $rules
     */
    public function setRules(?array $rules): void
    {
        $this->rules = $rules;
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
        $json['enabled'] = $this->enabled;
        $json['rules']   = $this->rules;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

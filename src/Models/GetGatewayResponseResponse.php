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
 * The Transaction Gateway Response
 */
class GetGatewayResponseResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var GetGatewayErrorResponse[]|null
     */
    private $errors;

    /**
     * Returns Code.
     * The error code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The error code
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Errors.
     * The gateway response errors list
     *
     * @return GetGatewayErrorResponse[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * The gateway response errors list
     *
     * @maps errors
     *
     * @param GetGatewayErrorResponse[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
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
        $json['code']   = $this->code;
        $json['errors'] = $this->errors;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

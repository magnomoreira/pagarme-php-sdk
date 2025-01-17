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
 * Response object for getting an order item
 */
class GetOrderItemResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @var string|null
     */
    private $code;

    /**
     * Returns Id.
     * Id
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Id
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Category.
     * Category
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Sets Category.
     * Category
     *
     * @maps category
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    /**
     * Returns Code.
     * Code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Code
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
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
        $json['id']          = $this->id;
        $json['amount']      = $this->amount;
        $json['description'] = $this->description;
        $json['quantity']    = $this->quantity;
        $json['category']    = $this->category;
        $json['code']        = $this->code;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

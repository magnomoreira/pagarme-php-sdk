<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Response object for getting a increment
 */
class GetIncrementResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var float|null
     */
    private $value;

    /**
     * @var string|null
     */
    private $incrementType;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var array
     */
    private $cycles = [];

    /**
     * @var array
     */
    private $deletedAt = [];

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $subscription = [];

    /**
     * @var array
     */
    private $subscriptionItem = [];

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Value.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @maps value
     */
    public function setValue(?float $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Increment Type.
     */
    public function getIncrementType(): ?string
    {
        return $this->incrementType;
    }

    /**
     * Sets Increment Type.
     *
     * @maps increment_type
     */
    public function setIncrementType(?string $incrementType): void
    {
        $this->incrementType = $incrementType;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Cycles.
     */
    public function getCycles(): ?int
    {
        if (count($this->cycles) == 0) {
            return null;
        }
        return $this->cycles['value'];
    }

    /**
     * Sets Cycles.
     *
     * @maps cycles
     */
    public function setCycles(?int $cycles): void
    {
        $this->cycles['value'] = $cycles;
    }

    /**
     * Unsets Cycles.
     */
    public function unsetCycles(): void
    {
        $this->cycles = [];
    }

    /**
     * Returns Deleted At.
     */
    public function getDeletedAt(): ?\DateTime
    {
        if (count($this->deletedAt) == 0) {
            return null;
        }
        return $this->deletedAt['value'];
    }

    /**
     * Sets Deleted At.
     *
     * @maps deleted_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDeletedAt(?\DateTime $deletedAt): void
    {
        $this->deletedAt['value'] = $deletedAt;
    }

    /**
     * Unsets Deleted At.
     */
    public function unsetDeletedAt(): void
    {
        $this->deletedAt = [];
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Subscription.
     */
    public function getSubscription(): ?GetSubscriptionResponse
    {
        if (count($this->subscription) == 0) {
            return null;
        }
        return $this->subscription['value'];
    }

    /**
     * Sets Subscription.
     *
     * @maps subscription
     */
    public function setSubscription(?GetSubscriptionResponse $subscription): void
    {
        $this->subscription['value'] = $subscription;
    }

    /**
     * Unsets Subscription.
     */
    public function unsetSubscription(): void
    {
        $this->subscription = [];
    }

    /**
     * Returns Subscription Item.
     * The Subscription Item
     */
    public function getSubscriptionItem(): ?GetSubscriptionItemResponse
    {
        if (count($this->subscriptionItem) == 0) {
            return null;
        }
        return $this->subscriptionItem['value'];
    }

    /**
     * Sets Subscription Item.
     * The Subscription Item
     *
     * @maps subscription_item
     */
    public function setSubscriptionItem(?GetSubscriptionItemResponse $subscriptionItem): void
    {
        $this->subscriptionItem['value'] = $subscriptionItem;
    }

    /**
     * Unsets Subscription Item.
     * The Subscription Item
     */
    public function unsetSubscriptionItem(): void
    {
        $this->subscriptionItem = [];
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
        $json['id']                    = $this->id;
        $json['value']                 = $this->value;
        $json['increment_type']        = $this->incrementType;
        $json['status']                = $this->status;
        $json['created_at']            = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        if (!empty($this->cycles)) {
            $json['cycles']            = $this->cycles['value'];
        }
        if (!empty($this->deletedAt)) {
            $json['deleted_at']        = DateTimeHelper::toRfc3339DateTime($this->deletedAt['value']);
        }
        if (!empty($this->description)) {
            $json['description']       = $this->description['value'];
        }
        if (!empty($this->subscription)) {
            $json['subscription']      = $this->subscription['value'];
        }
        if (!empty($this->subscriptionItem)) {
            $json['subscription_item'] = $this->subscriptionItem['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

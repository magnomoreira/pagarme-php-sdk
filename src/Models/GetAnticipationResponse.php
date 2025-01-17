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
 * Anticipation
 */
class GetAnticipationResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $requestedAmount;

    /**
     * @var int|null
     */
    private $approvedAmount;

    /**
     * @var array
     */
    private $recipient = [];

    /**
     * @var string|null
     */
    private $pgid;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var \DateTime|null
     */
    private $paymentDate;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $timeframe;

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
     * Returns Requested Amount.
     * Requested amount
     */
    public function getRequestedAmount(): ?int
    {
        return $this->requestedAmount;
    }

    /**
     * Sets Requested Amount.
     * Requested amount
     *
     * @maps requested_amount
     */
    public function setRequestedAmount(?int $requestedAmount): void
    {
        $this->requestedAmount = $requestedAmount;
    }

    /**
     * Returns Approved Amount.
     * Approved amount
     */
    public function getApprovedAmount(): ?int
    {
        return $this->approvedAmount;
    }

    /**
     * Sets Approved Amount.
     * Approved amount
     *
     * @maps approved_amount
     */
    public function setApprovedAmount(?int $approvedAmount): void
    {
        $this->approvedAmount = $approvedAmount;
    }

    /**
     * Returns Recipient.
     * Recipient
     */
    public function getRecipient(): ?GetRecipientResponse
    {
        if (count($this->recipient) == 0) {
            return null;
        }
        return $this->recipient['value'];
    }

    /**
     * Sets Recipient.
     * Recipient
     *
     * @maps recipient
     */
    public function setRecipient(?GetRecipientResponse $recipient): void
    {
        $this->recipient['value'] = $recipient;
    }

    /**
     * Unsets Recipient.
     * Recipient
     */
    public function unsetRecipient(): void
    {
        $this->recipient = [];
    }

    /**
     * Returns Pgid.
     * Anticipation id on the gateway
     */
    public function getPgid(): ?string
    {
        return $this->pgid;
    }

    /**
     * Sets Pgid.
     * Anticipation id on the gateway
     *
     * @maps pgid
     */
    public function setPgid(?string $pgid): void
    {
        $this->pgid = $pgid;
    }

    /**
     * Returns Created At.
     * Creation date
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Creation date
     *
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * Last update date
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * Last update date
     *
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Payment Date.
     * Payment date
     */
    public function getPaymentDate(): ?\DateTime
    {
        return $this->paymentDate;
    }

    /**
     * Sets Payment Date.
     * Payment date
     *
     * @maps payment_date
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setPaymentDate(?\DateTime $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * Returns Status.
     * Status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Timeframe.
     * Timeframe
     */
    public function getTimeframe(): ?string
    {
        return $this->timeframe;
    }

    /**
     * Sets Timeframe.
     * Timeframe
     *
     * @maps timeframe
     */
    public function setTimeframe(?string $timeframe): void
    {
        $this->timeframe = $timeframe;
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
        $json['id']               = $this->id;
        $json['requested_amount'] = $this->requestedAmount;
        $json['approved_amount']  = $this->approvedAmount;
        if (!empty($this->recipient)) {
            $json['recipient']    = $this->recipient['value'];
        }
        $json['pgid']             = $this->pgid;
        $json['created_at']       = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']       = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['payment_date']     = DateTimeHelper::toRfc3339DateTime($this->paymentDate);
        $json['status']           = $this->status;
        $json['timeframe']        = $this->timeframe;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

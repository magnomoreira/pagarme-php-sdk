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
 * Resposta das configurações de pagamento do checkout
 */
class GetCheckoutPaymentResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var array
     */
    private $amount = [];

    /**
     * @var string|null
     */
    private $defaultPaymentMethod;

    /**
     * @var string|null
     */
    private $successUrl;

    /**
     * @var string|null
     */
    private $paymentUrl;

    /**
     * @var string|null
     */
    private $gatewayAffiliationId;

    /**
     * @var string[]|null
     */
    private $acceptedPaymentMethods;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var bool|null
     */
    private $skipCheckoutSuccessPage;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var array
     */
    private $canceledAt = [];

    /**
     * @var bool|null
     */
    private $customerEditable;

    /**
     * @var array
     */
    private $customer = [];

    /**
     * @var GetAddressResponse|null
     */
    private $billingaddress;

    /**
     * @var GetCheckoutCreditCardPaymentResponse|null
     */
    private $creditCard;

    /**
     * @var GetCheckoutBoletoPaymentResponse|null
     */
    private $boleto;

    /**
     * @var bool|null
     */
    private $billingAddressEditable;

    /**
     * @var GetShippingResponse|null
     */
    private $shipping;

    /**
     * @var bool|null
     */
    private $shippable;

    /**
     * @var array
     */
    private $closedAt = [];

    /**
     * @var array
     */
    private $expiresAt = [];

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var array
     */
    private $debitCard = [];

    /**
     * @var array
     */
    private $bankTransfer = [];

    /**
     * @var string[]|null
     */
    private $acceptedBrands;

    /**
     * @var array
     */
    private $pix = [];

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
     * Returns Amount.
     * Valor em centavos
     */
    public function getAmount(): ?int
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     * Valor em centavos
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     * Valor em centavos
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
    }

    /**
     * Returns Default Payment Method.
     * Meio de pagamento padrão no checkout
     */
    public function getDefaultPaymentMethod(): ?string
    {
        return $this->defaultPaymentMethod;
    }

    /**
     * Sets Default Payment Method.
     * Meio de pagamento padrão no checkout
     *
     * @maps default_payment_method
     */
    public function setDefaultPaymentMethod(?string $defaultPaymentMethod): void
    {
        $this->defaultPaymentMethod = $defaultPaymentMethod;
    }

    /**
     * Returns Success Url.
     * Url de redirecionamento de sucesso após o checkou
     */
    public function getSuccessUrl(): ?string
    {
        return $this->successUrl;
    }

    /**
     * Sets Success Url.
     * Url de redirecionamento de sucesso após o checkou
     *
     * @maps success_url
     */
    public function setSuccessUrl(?string $successUrl): void
    {
        $this->successUrl = $successUrl;
    }

    /**
     * Returns Payment Url.
     * Url para pagamento usando o checkout
     */
    public function getPaymentUrl(): ?string
    {
        return $this->paymentUrl;
    }

    /**
     * Sets Payment Url.
     * Url para pagamento usando o checkout
     *
     * @maps payment_url
     */
    public function setPaymentUrl(?string $paymentUrl): void
    {
        $this->paymentUrl = $paymentUrl;
    }

    /**
     * Returns Gateway Affiliation Id.
     * Código da afiliação onde o pagamento será processado no gateway
     */
    public function getGatewayAffiliationId(): ?string
    {
        return $this->gatewayAffiliationId;
    }

    /**
     * Sets Gateway Affiliation Id.
     * Código da afiliação onde o pagamento será processado no gateway
     *
     * @maps gateway_affiliation_id
     */
    public function setGatewayAffiliationId(?string $gatewayAffiliationId): void
    {
        $this->gatewayAffiliationId = $gatewayAffiliationId;
    }

    /**
     * Returns Accepted Payment Methods.
     * Meios de pagamento aceitos no checkout
     *
     * @return string[]|null
     */
    public function getAcceptedPaymentMethods(): ?array
    {
        return $this->acceptedPaymentMethods;
    }

    /**
     * Sets Accepted Payment Methods.
     * Meios de pagamento aceitos no checkout
     *
     * @maps accepted_payment_methods
     *
     * @param string[]|null $acceptedPaymentMethods
     */
    public function setAcceptedPaymentMethods(?array $acceptedPaymentMethods): void
    {
        $this->acceptedPaymentMethods = $acceptedPaymentMethods;
    }

    /**
     * Returns Status.
     * Status do checkout
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status do checkout
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Skip Checkout Success Page.
     * Pular tela de sucesso pós-pagamento?
     */
    public function getSkipCheckoutSuccessPage(): ?bool
    {
        return $this->skipCheckoutSuccessPage;
    }

    /**
     * Sets Skip Checkout Success Page.
     * Pular tela de sucesso pós-pagamento?
     *
     * @maps skip_checkout_success_page
     */
    public function setSkipCheckoutSuccessPage(?bool $skipCheckoutSuccessPage): void
    {
        $this->skipCheckoutSuccessPage = $skipCheckoutSuccessPage;
    }

    /**
     * Returns Created At.
     * Data de criação
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Data de criação
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
     * Data de atualização
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * Data de atualização
     *
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Canceled At.
     * Data de cancelamento
     */
    public function getCanceledAt(): ?\DateTime
    {
        if (count($this->canceledAt) == 0) {
            return null;
        }
        return $this->canceledAt['value'];
    }

    /**
     * Sets Canceled At.
     * Data de cancelamento
     *
     * @maps canceled_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCanceledAt(?\DateTime $canceledAt): void
    {
        $this->canceledAt['value'] = $canceledAt;
    }

    /**
     * Unsets Canceled At.
     * Data de cancelamento
     */
    public function unsetCanceledAt(): void
    {
        $this->canceledAt = [];
    }

    /**
     * Returns Customer Editable.
     * Torna o objeto customer editável
     */
    public function getCustomerEditable(): ?bool
    {
        return $this->customerEditable;
    }

    /**
     * Sets Customer Editable.
     * Torna o objeto customer editável
     *
     * @maps customer_editable
     */
    public function setCustomerEditable(?bool $customerEditable): void
    {
        $this->customerEditable = $customerEditable;
    }

    /**
     * Returns Customer.
     * Dados do comprador
     */
    public function getCustomer(): ?GetCustomerResponse
    {
        if (count($this->customer) == 0) {
            return null;
        }
        return $this->customer['value'];
    }

    /**
     * Sets Customer.
     * Dados do comprador
     *
     * @maps customer
     */
    public function setCustomer(?GetCustomerResponse $customer): void
    {
        $this->customer['value'] = $customer;
    }

    /**
     * Unsets Customer.
     * Dados do comprador
     */
    public function unsetCustomer(): void
    {
        $this->customer = [];
    }

    /**
     * Returns Billingaddress.
     * Dados do endereço de cobrança
     */
    public function getBillingaddress(): ?GetAddressResponse
    {
        return $this->billingaddress;
    }

    /**
     * Sets Billingaddress.
     * Dados do endereço de cobrança
     *
     * @maps billingaddress
     */
    public function setBillingaddress(?GetAddressResponse $billingaddress): void
    {
        $this->billingaddress = $billingaddress;
    }

    /**
     * Returns Credit Card.
     * Configurações de cartão de crédito
     */
    public function getCreditCard(): ?GetCheckoutCreditCardPaymentResponse
    {
        return $this->creditCard;
    }

    /**
     * Sets Credit Card.
     * Configurações de cartão de crédito
     *
     * @maps credit_card
     */
    public function setCreditCard(?GetCheckoutCreditCardPaymentResponse $creditCard): void
    {
        $this->creditCard = $creditCard;
    }

    /**
     * Returns Boleto.
     * Configurações de boleto
     */
    public function getBoleto(): ?GetCheckoutBoletoPaymentResponse
    {
        return $this->boleto;
    }

    /**
     * Sets Boleto.
     * Configurações de boleto
     *
     * @maps boleto
     */
    public function setBoleto(?GetCheckoutBoletoPaymentResponse $boleto): void
    {
        $this->boleto = $boleto;
    }

    /**
     * Returns Billing Address Editable.
     * Indica se o billing address poderá ser editado
     */
    public function getBillingAddressEditable(): ?bool
    {
        return $this->billingAddressEditable;
    }

    /**
     * Sets Billing Address Editable.
     * Indica se o billing address poderá ser editado
     *
     * @maps billing_address_editable
     */
    public function setBillingAddressEditable(?bool $billingAddressEditable): void
    {
        $this->billingAddressEditable = $billingAddressEditable;
    }

    /**
     * Returns Shipping.
     * Configurações  de entrega
     */
    public function getShipping(): ?GetShippingResponse
    {
        return $this->shipping;
    }

    /**
     * Sets Shipping.
     * Configurações  de entrega
     *
     * @maps shipping
     */
    public function setShipping(?GetShippingResponse $shipping): void
    {
        $this->shipping = $shipping;
    }

    /**
     * Returns Shippable.
     * Indica se possui entrega
     */
    public function getShippable(): ?bool
    {
        return $this->shippable;
    }

    /**
     * Sets Shippable.
     * Indica se possui entrega
     *
     * @maps shippable
     */
    public function setShippable(?bool $shippable): void
    {
        $this->shippable = $shippable;
    }

    /**
     * Returns Closed At.
     * Data de fechamento
     */
    public function getClosedAt(): ?\DateTime
    {
        if (count($this->closedAt) == 0) {
            return null;
        }
        return $this->closedAt['value'];
    }

    /**
     * Sets Closed At.
     * Data de fechamento
     *
     * @maps closed_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setClosedAt(?\DateTime $closedAt): void
    {
        $this->closedAt['value'] = $closedAt;
    }

    /**
     * Unsets Closed At.
     * Data de fechamento
     */
    public function unsetClosedAt(): void
    {
        $this->closedAt = [];
    }

    /**
     * Returns Expires At.
     * Data de expiração
     */
    public function getExpiresAt(): ?\DateTime
    {
        if (count($this->expiresAt) == 0) {
            return null;
        }
        return $this->expiresAt['value'];
    }

    /**
     * Sets Expires At.
     * Data de expiração
     *
     * @maps expires_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(?\DateTime $expiresAt): void
    {
        $this->expiresAt['value'] = $expiresAt;
    }

    /**
     * Unsets Expires At.
     * Data de expiração
     */
    public function unsetExpiresAt(): void
    {
        $this->expiresAt = [];
    }

    /**
     * Returns Currency.
     * Moeda
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Moeda
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Debit Card.
     * Configurações de cartão de débito
     */
    public function getDebitCard(): ?GetCheckoutDebitCardPaymentResponse
    {
        if (count($this->debitCard) == 0) {
            return null;
        }
        return $this->debitCard['value'];
    }

    /**
     * Sets Debit Card.
     * Configurações de cartão de débito
     *
     * @maps debit_card
     */
    public function setDebitCard(?GetCheckoutDebitCardPaymentResponse $debitCard): void
    {
        $this->debitCard['value'] = $debitCard;
    }

    /**
     * Unsets Debit Card.
     * Configurações de cartão de débito
     */
    public function unsetDebitCard(): void
    {
        $this->debitCard = [];
    }

    /**
     * Returns Bank Transfer.
     * Bank transfer payment response
     */
    public function getBankTransfer(): ?GetCheckoutBankTransferPaymentResponse
    {
        if (count($this->bankTransfer) == 0) {
            return null;
        }
        return $this->bankTransfer['value'];
    }

    /**
     * Sets Bank Transfer.
     * Bank transfer payment response
     *
     * @maps bank_transfer
     */
    public function setBankTransfer(?GetCheckoutBankTransferPaymentResponse $bankTransfer): void
    {
        $this->bankTransfer['value'] = $bankTransfer;
    }

    /**
     * Unsets Bank Transfer.
     * Bank transfer payment response
     */
    public function unsetBankTransfer(): void
    {
        $this->bankTransfer = [];
    }

    /**
     * Returns Accepted Brands.
     * Accepted Brands
     *
     * @return string[]|null
     */
    public function getAcceptedBrands(): ?array
    {
        return $this->acceptedBrands;
    }

    /**
     * Sets Accepted Brands.
     * Accepted Brands
     *
     * @maps accepted_brands
     *
     * @param string[]|null $acceptedBrands
     */
    public function setAcceptedBrands(?array $acceptedBrands): void
    {
        $this->acceptedBrands = $acceptedBrands;
    }

    /**
     * Returns Pix.
     * Pix payment response
     */
    public function getPix(): ?GetCheckoutPixPaymentResponse
    {
        if (count($this->pix) == 0) {
            return null;
        }
        return $this->pix['value'];
    }

    /**
     * Sets Pix.
     * Pix payment response
     *
     * @maps pix
     */
    public function setPix(?GetCheckoutPixPaymentResponse $pix): void
    {
        $this->pix['value'] = $pix;
    }

    /**
     * Unsets Pix.
     * Pix payment response
     */
    public function unsetPix(): void
    {
        $this->pix = [];
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
        $json['id']                         = $this->id;
        if (!empty($this->amount)) {
            $json['amount']                 = $this->amount['value'];
        }
        $json['default_payment_method']     = $this->defaultPaymentMethod;
        $json['success_url']                = $this->successUrl;
        $json['payment_url']                = $this->paymentUrl;
        $json['gateway_affiliation_id']     = $this->gatewayAffiliationId;
        $json['accepted_payment_methods']   = $this->acceptedPaymentMethods;
        $json['status']                     = $this->status;
        $json['skip_checkout_success_page'] = $this->skipCheckoutSuccessPage;
        $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']                 = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        if (!empty($this->canceledAt)) {
            $json['canceled_at']            = DateTimeHelper::toRfc3339DateTime($this->canceledAt['value']);
        }
        $json['customer_editable']          = $this->customerEditable;
        if (!empty($this->customer)) {
            $json['customer']               = $this->customer['value'];
        }
        $json['billingaddress']             = $this->billingaddress;
        $json['credit_card']                = $this->creditCard;
        $json['boleto']                     = $this->boleto;
        $json['billing_address_editable']   = $this->billingAddressEditable;
        $json['shipping']                   = $this->shipping;
        $json['shippable']                  = $this->shippable;
        if (!empty($this->closedAt)) {
            $json['closed_at']              = DateTimeHelper::toRfc3339DateTime($this->closedAt['value']);
        }
        if (!empty($this->expiresAt)) {
            $json['expires_at']             = DateTimeHelper::toRfc3339DateTime($this->expiresAt['value']);
        }
        $json['currency']                   = $this->currency;
        if (!empty($this->debitCard)) {
            $json['debit_card']             = $this->debitCard['value'];
        }
        if (!empty($this->bankTransfer)) {
            $json['bank_transfer']          = $this->bankTransfer['value'];
        }
        $json['accepted_brands']            = $this->acceptedBrands;
        if (!empty($this->pix)) {
            $json['pix']                    = $this->pix['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);
/**
 * fincode API.
 *
 * fincodeのAPIリファレンスです。\\ fincodeは決済情報のほか様々なリソースを管理できるため、リソース指向なREST APIをベースとしたインターフェイス設計のもとでAPIを提供しています。\\ APIの呼び出しにはAPIキーによる認証が必要であり、リクエストの際に`Authorization`ヘッダーに有効なAPIキーをセットすることで認証できます。
 *
 * The version of the OpenAPI document: 1.2.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Fincode\Model;

use OpenAPI\Fincode\ObjectSerializer;

/**
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookEventSubscriptionDirectDebit implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'WebhookEvent.Subscription.DirectDebit';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['shopId' => 'string', 'subscriptionId' => 'string', 'planId' => 'string', 'customerId' => 'string', 'paymentMethodId' => 'string', 'defaultFlag' => '\OpenAPI\Fincode\Model\PropertiesDefaultFlag', 'status' => '\OpenAPI\Fincode\Model\SubscriptionStatus', 'clientField1' => 'string', 'clientField2' => 'string', 'clientField3' => 'string', 'remarks' => 'string', 'startDate' => 'string', 'stopDate' => 'string', 'nextChargeDate' => 'string', 'endMonthFlag' => '\OpenAPI\Fincode\Model\EndMonthFlag', 'payType' => '\OpenAPI\Fincode\Model\SubscriptionPayType', 'event' => '\OpenAPI\Fincode\Model\FincodeEvent'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['shopId' => null, 'subscriptionId' => null, 'planId' => null, 'customerId' => null, 'paymentMethodId' => null, 'defaultFlag' => null, 'status' => null, 'clientField1' => null, 'clientField2' => null, 'clientField3' => null, 'remarks' => null, 'startDate' => null, 'stopDate' => null, 'nextChargeDate' => null, 'endMonthFlag' => null, 'payType' => null, 'event' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['shopId' => false, 'subscriptionId' => true, 'planId' => true, 'customerId' => true, 'paymentMethodId' => true, 'defaultFlag' => true, 'status' => false, 'clientField1' => true, 'clientField2' => true, 'clientField3' => true, 'remarks' => true, 'startDate' => true, 'stopDate' => true, 'nextChargeDate' => true, 'endMonthFlag' => true, 'payType' => false, 'event' => false];
    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var array<string, bool>
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array<string, string|null>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties.
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = ['shopId' => 'shop_id', 'subscriptionId' => 'subscription_id', 'planId' => 'plan_id', 'customerId' => 'customer_id', 'paymentMethodId' => 'payment_method_id', 'defaultFlag' => 'default_flag', 'status' => 'status', 'clientField1' => 'client_field_1', 'clientField2' => 'client_field_2', 'clientField3' => 'client_field_3', 'remarks' => 'remarks', 'startDate' => 'start_date', 'stopDate' => 'stop_date', 'nextChargeDate' => 'next_charge_date', 'endMonthFlag' => 'end_month_flag', 'payType' => 'pay_type', 'event' => 'event'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['shopId' => 'setShopId', 'subscriptionId' => 'setSubscriptionId', 'planId' => 'setPlanId', 'customerId' => 'setCustomerId', 'paymentMethodId' => 'setPaymentMethodId', 'defaultFlag' => 'setDefaultFlag', 'status' => 'setStatus', 'clientField1' => 'setClientField1', 'clientField2' => 'setClientField2', 'clientField3' => 'setClientField3', 'remarks' => 'setRemarks', 'startDate' => 'setStartDate', 'stopDate' => 'setStopDate', 'nextChargeDate' => 'setNextChargeDate', 'endMonthFlag' => 'setEndMonthFlag', 'payType' => 'setPayType', 'event' => 'setEvent'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['shopId' => 'getShopId', 'subscriptionId' => 'getSubscriptionId', 'planId' => 'getPlanId', 'customerId' => 'getCustomerId', 'paymentMethodId' => 'getPaymentMethodId', 'defaultFlag' => 'getDefaultFlag', 'status' => 'getStatus', 'clientField1' => 'getClientField1', 'clientField2' => 'getClientField2', 'clientField3' => 'getClientField3', 'remarks' => 'getRemarks', 'startDate' => 'getStartDate', 'stopDate' => 'getStopDate', 'nextChargeDate' => 'getNextChargeDate', 'endMonthFlag' => 'getEndMonthFlag', 'payType' => 'getPayType', 'event' => 'getEvent'];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }
    /**
     * Associative array for storing property values.
     *
     * @phpstan-var array<string, mixed>
     *
     * @psalm-var array<string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param array<string, mixed> $data Associated array of property values
     *                                   initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('shopId', $data ?? [], null);
        $this->setIfExists('subscriptionId', $data ?? [], null);
        $this->setIfExists('planId', $data ?? [], null);
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('paymentMethodId', $data ?? [], null);
        $this->setIfExists('defaultFlag', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('clientField1', $data ?? [], null);
        $this->setIfExists('clientField2', $data ?? [], null);
        $this->setIfExists('clientField3', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('stopDate', $data ?? [], null);
        $this->setIfExists('nextChargeDate', $data ?? [], null);
        $this->setIfExists('endMonthFlag', $data ?? [], null);
        $this->setIfExists('payType', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param array<string, mixed> $fields
     */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }
        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return list<string> invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];
        if (!is_null($this->container['shopId']) && mb_strlen($this->container['shopId']) > 13) {
            $invalidProperties[] = "invalid value for 'shopId', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['shopId']) && mb_strlen($this->container['shopId']) < 13) {
            $invalidProperties[] = "invalid value for 'shopId', the character length must be bigger than or equal to 13.";
        }
        if (!is_null($this->container['subscriptionId']) && mb_strlen($this->container['subscriptionId']) > 25) {
            $invalidProperties[] = "invalid value for 'subscriptionId', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['subscriptionId']) && mb_strlen($this->container['subscriptionId']) < 1) {
            $invalidProperties[] = "invalid value for 'subscriptionId', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['planId']) && mb_strlen($this->container['planId']) > 25) {
            $invalidProperties[] = "invalid value for 'planId', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['planId']) && mb_strlen($this->container['planId']) < 1) {
            $invalidProperties[] = "invalid value for 'planId', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['customerId']) && mb_strlen($this->container['customerId']) > 60) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['customerId']) && mb_strlen($this->container['customerId']) < 1) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['paymentMethodId']) && mb_strlen($this->container['paymentMethodId']) > 25) {
            $invalidProperties[] = "invalid value for 'paymentMethodId', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['paymentMethodId']) && mb_strlen($this->container['paymentMethodId']) < 25) {
            $invalidProperties[] = "invalid value for 'paymentMethodId', the character length must be bigger than or equal to 25.";
        }
        if (!is_null($this->container['clientField1']) && mb_strlen($this->container['clientField1']) > 100) {
            $invalidProperties[] = "invalid value for 'clientField1', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['clientField1']) && mb_strlen($this->container['clientField1']) < 1) {
            $invalidProperties[] = "invalid value for 'clientField1', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['clientField2']) && mb_strlen($this->container['clientField2']) > 100) {
            $invalidProperties[] = "invalid value for 'clientField2', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['clientField2']) && mb_strlen($this->container['clientField2']) < 1) {
            $invalidProperties[] = "invalid value for 'clientField2', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['clientField3']) && mb_strlen($this->container['clientField3']) > 100) {
            $invalidProperties[] = "invalid value for 'clientField3', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['clientField3']) && mb_strlen($this->container['clientField3']) < 1) {
            $invalidProperties[] = "invalid value for 'clientField3', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['remarks']) && mb_strlen($this->container['remarks']) > 9) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['remarks']) && mb_strlen($this->container['remarks']) < 1) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets shopId.
     *
     * @return string|null
     */
    public function getShopId(): mixed
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId.
     *
     * @param string $shopId ショップID
     */
    public function setShopId(mixed $shopId): static
    {
        if (is_null($shopId)) {
            throw new \InvalidArgumentException('non-nullable shopId cannot be null');
        }
        if (mb_strlen($shopId) > 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 13.');
        }
        if (mb_strlen($shopId) < 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 13.');
        }
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets subscriptionId.
     *
     * @return string|null
     */
    public function getSubscriptionId(): mixed
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId.
     *
     * @param string|null $subscriptionId サブスクリプションID
     */
    public function setSubscriptionId(mixed $subscriptionId): static
    {
        if (is_null($subscriptionId)) {
            $this->openAPINullablesSetToNull[] = 'subscriptionId';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subscriptionId', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($subscriptionId) && mb_strlen($subscriptionId) > 25) {
            throw new \InvalidArgumentException('invalid length for $subscriptionId when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 25.');
        }
        if (!is_null($subscriptionId) && mb_strlen($subscriptionId) < 1) {
            throw new \InvalidArgumentException('invalid length for $subscriptionId when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 1.');
        }
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }

    /**
     * Gets planId.
     *
     * @return string|null
     */
    public function getPlanId(): mixed
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId.
     *
     * @param string|null $planId プランID
     */
    public function setPlanId(mixed $planId): static
    {
        if (is_null($planId)) {
            $this->openAPINullablesSetToNull[] = 'planId';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('planId', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($planId) && mb_strlen($planId) > 25) {
            throw new \InvalidArgumentException('invalid length for $planId when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 25.');
        }
        if (!is_null($planId) && mb_strlen($planId) < 1) {
            throw new \InvalidArgumentException('invalid length for $planId when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 1.');
        }
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets customerId.
     *
     * @return string|null
     */
    public function getCustomerId(): mixed
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId.
     *
     * @param string|null $customerId 顧客ID
     */
    public function setCustomerId(mixed $customerId): static
    {
        if (is_null($customerId)) {
            $this->openAPINullablesSetToNull[] = 'customerId';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customerId', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($customerId) && mb_strlen($customerId) > 60) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 60.');
        }
        if (!is_null($customerId) && mb_strlen($customerId) < 1) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 1.');
        }
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets paymentMethodId.
     *
     * @return string|null
     */
    public function getPaymentMethodId(): mixed
    {
        return $this->container['paymentMethodId'];
    }

    /**
     * Sets paymentMethodId.
     *
     * @param string|null $paymentMethodId 決済手段ID
     */
    public function setPaymentMethodId(mixed $paymentMethodId): static
    {
        if (is_null($paymentMethodId)) {
            $this->openAPINullablesSetToNull[] = 'paymentMethodId';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paymentMethodId', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($paymentMethodId) && mb_strlen($paymentMethodId) > 25) {
            throw new \InvalidArgumentException('invalid length for $paymentMethodId when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 25.');
        }
        if (!is_null($paymentMethodId) && mb_strlen($paymentMethodId) < 25) {
            throw new \InvalidArgumentException('invalid length for $paymentMethodId when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 25.');
        }
        $this->container['paymentMethodId'] = $paymentMethodId;

        return $this;
    }

    /**
     * Gets defaultFlag.
     *
     * @return PropertiesDefaultFlag|null
     */
    public function getDefaultFlag(): mixed
    {
        return $this->container['defaultFlag'];
    }

    /**
     * Sets defaultFlag.
     *
     * @param PropertiesDefaultFlag|null $defaultFlag defaultFlag
     */
    public function setDefaultFlag(mixed $defaultFlag): static
    {
        if (is_null($defaultFlag)) {
            $this->openAPINullablesSetToNull[] = 'defaultFlag';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('defaultFlag', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['defaultFlag'] = $defaultFlag;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return SubscriptionStatus|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param SubscriptionStatus $status status
     */
    public function setStatus(mixed $status): static
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets clientField1.
     *
     * @return string|null
     */
    public function getClientField1(): mixed
    {
        return $this->container['clientField1'];
    }

    /**
     * Sets clientField1.
     *
     * @param string|null $clientField1 加盟店自由項目 1
     */
    public function setClientField1(mixed $clientField1): static
    {
        if (is_null($clientField1)) {
            $this->openAPINullablesSetToNull[] = 'clientField1';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientField1', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($clientField1) && mb_strlen($clientField1) > 100) {
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField1) && mb_strlen($clientField1) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 1.');
        }
        $this->container['clientField1'] = $clientField1;

        return $this;
    }

    /**
     * Gets clientField2.
     *
     * @return string|null
     */
    public function getClientField2(): mixed
    {
        return $this->container['clientField2'];
    }

    /**
     * Sets clientField2.
     *
     * @param string|null $clientField2 加盟店自由項目 2
     */
    public function setClientField2(mixed $clientField2): static
    {
        if (is_null($clientField2)) {
            $this->openAPINullablesSetToNull[] = 'clientField2';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientField2', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($clientField2) && mb_strlen($clientField2) > 100) {
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField2) && mb_strlen($clientField2) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 1.');
        }
        $this->container['clientField2'] = $clientField2;

        return $this;
    }

    /**
     * Gets clientField3.
     *
     * @return string|null
     */
    public function getClientField3(): mixed
    {
        return $this->container['clientField3'];
    }

    /**
     * Sets clientField3.
     *
     * @param string|null $clientField3 加盟店自由項目 3
     */
    public function setClientField3(mixed $clientField3): static
    {
        if (is_null($clientField3)) {
            $this->openAPINullablesSetToNull[] = 'clientField3';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientField3', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($clientField3) && mb_strlen($clientField3) > 100) {
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField3) && mb_strlen($clientField3) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 1.');
        }
        $this->container['clientField3'] = $clientField3;

        return $this;
    }

    /**
     * Gets remarks.
     *
     * @return string|null
     */
    public function getRemarks(): mixed
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks.
     *
     * @param string|null $remarks ご利用明細表示内容
     */
    public function setRemarks(mixed $remarks): static
    {
        if (is_null($remarks)) {
            $this->openAPINullablesSetToNull[] = 'remarks';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remarks', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($remarks) && mb_strlen($remarks) > 9) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling WebhookEventSubscriptionDirectDebit., must be smaller than or equal to 9.');
        }
        if (!is_null($remarks) && mb_strlen($remarks) < 1) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling WebhookEventSubscriptionDirectDebit., must be bigger than or equal to 1.');
        }
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets startDate.
     *
     * @return string|null
     */
    public function getStartDate(): mixed
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate.
     *
     * @param string|null $startDate 課金開始日\\ サブスクリプションの開始日です。\\ \\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setStartDate(mixed $startDate): static
    {
        if (is_null($startDate)) {
            $this->openAPINullablesSetToNull[] = 'startDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('startDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets stopDate.
     *
     * @return string|null
     */
    public function getStopDate(): mixed
    {
        return $this->container['stopDate'];
    }

    /**
     * Sets stopDate.
     *
     * @param string|null $stopDate 課金停止日\\ サブスクリプションの停止日です。\\ \\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setStopDate(mixed $stopDate): static
    {
        if (is_null($stopDate)) {
            $this->openAPINullablesSetToNull[] = 'stopDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stopDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stopDate'] = $stopDate;

        return $this;
    }

    /**
     * Gets nextChargeDate.
     *
     * @return string|null
     */
    public function getNextChargeDate(): mixed
    {
        return $this->container['nextChargeDate'];
    }

    /**
     * Sets nextChargeDate.
     *
     * @param string|null $nextChargeDate 次回課金日\\ サブスクリプションの次回課金日です。\\ \\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setNextChargeDate(mixed $nextChargeDate): static
    {
        if (is_null($nextChargeDate)) {
            $this->openAPINullablesSetToNull[] = 'nextChargeDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nextChargeDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nextChargeDate'] = $nextChargeDate;

        return $this;
    }

    /**
     * Gets endMonthFlag.
     *
     * @return EndMonthFlag|null
     */
    public function getEndMonthFlag(): mixed
    {
        return $this->container['endMonthFlag'];
    }

    /**
     * Sets endMonthFlag.
     *
     * @param EndMonthFlag|null $endMonthFlag endMonthFlag
     */
    public function setEndMonthFlag(mixed $endMonthFlag): static
    {
        if (is_null($endMonthFlag)) {
            $this->openAPINullablesSetToNull[] = 'endMonthFlag';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endMonthFlag', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endMonthFlag'] = $endMonthFlag;

        return $this;
    }

    /**
     * Gets payType.
     *
     * @return SubscriptionPayType|null
     */
    public function getPayType(): mixed
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType.
     *
     * @param SubscriptionPayType $payType payType
     */
    public function setPayType(mixed $payType): static
    {
        if (is_null($payType)) {
            throw new \InvalidArgumentException('non-nullable payType cannot be null');
        }
        $this->container['payType'] = $payType;

        return $this;
    }

    /**
     * Gets event.
     *
     * @return FincodeEvent|null
     */
    public function getEvent(): mixed
    {
        return $this->container['event'];
    }

    /**
     * Sets event.
     *
     * @param FincodeEvent $event event
     */
    public function setEvent(mixed $event): static
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $this->container['event'] = $event;

        return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

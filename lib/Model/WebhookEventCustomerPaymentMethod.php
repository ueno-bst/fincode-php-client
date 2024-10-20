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
class WebhookEventCustomerPaymentMethod implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'WebhookEvent.CustomerPaymentMethod';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['shopId' => 'string', 'customerId' => 'string', 'paymentMethodId' => 'string', 'payType' => '\OpenAPI\Fincode\Model\PaymentMethodPayType', 'status' => '\OpenAPI\Fincode\Model\PaymentMethodStatus', 'clientField1' => 'string', 'clientField2' => 'string', 'clientField3' => 'string', 'applicationType' => '\OpenAPI\Fincode\Model\DirectDebitApplicationType', 'event' => '\OpenAPI\Fincode\Model\FincodeEvent'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['shopId' => null, 'customerId' => null, 'paymentMethodId' => null, 'payType' => null, 'status' => null, 'clientField1' => null, 'clientField2' => null, 'clientField3' => null, 'applicationType' => null, 'event' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['shopId' => false, 'customerId' => true, 'paymentMethodId' => true, 'payType' => false, 'status' => false, 'clientField1' => true, 'clientField2' => true, 'clientField3' => true, 'applicationType' => true, 'event' => false];
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
    protected static array $attributeMap = ['shopId' => 'shop_id', 'customerId' => 'customer_id', 'paymentMethodId' => 'payment_method_id', 'payType' => 'pay_type', 'status' => 'status', 'clientField1' => 'client_field_1', 'clientField2' => 'client_field_2', 'clientField3' => 'client_field_3', 'applicationType' => 'application_type', 'event' => 'event'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['shopId' => 'setShopId', 'customerId' => 'setCustomerId', 'paymentMethodId' => 'setPaymentMethodId', 'payType' => 'setPayType', 'status' => 'setStatus', 'clientField1' => 'setClientField1', 'clientField2' => 'setClientField2', 'clientField3' => 'setClientField3', 'applicationType' => 'setApplicationType', 'event' => 'setEvent'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['shopId' => 'getShopId', 'customerId' => 'getCustomerId', 'paymentMethodId' => 'getPaymentMethodId', 'payType' => 'getPayType', 'status' => 'getStatus', 'clientField1' => 'getClientField1', 'clientField2' => 'getClientField2', 'clientField3' => 'getClientField3', 'applicationType' => 'getApplicationType', 'event' => 'getEvent'];

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
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('paymentMethodId', $data ?? [], null);
        $this->setIfExists('payType', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('clientField1', $data ?? [], null);
        $this->setIfExists('clientField2', $data ?? [], null);
        $this->setIfExists('clientField3', $data ?? [], null);
        $this->setIfExists('applicationType', $data ?? [], null);
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
            throw new \InvalidArgumentException('invalid length for $shopId when calling WebhookEventCustomerPaymentMethod., must be smaller than or equal to 13.');
        }
        if (mb_strlen($shopId) < 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling WebhookEventCustomerPaymentMethod., must be bigger than or equal to 13.');
        }
        $this->container['shopId'] = $shopId;

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
            throw new \InvalidArgumentException('invalid length for $customerId when calling WebhookEventCustomerPaymentMethod., must be smaller than or equal to 60.');
        }
        if (!is_null($customerId) && mb_strlen($customerId) < 1) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling WebhookEventCustomerPaymentMethod., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $paymentMethodId when calling WebhookEventCustomerPaymentMethod., must be smaller than or equal to 25.');
        }
        if (!is_null($paymentMethodId) && mb_strlen($paymentMethodId) < 25) {
            throw new \InvalidArgumentException('invalid length for $paymentMethodId when calling WebhookEventCustomerPaymentMethod., must be bigger than or equal to 25.');
        }
        $this->container['paymentMethodId'] = $paymentMethodId;

        return $this;
    }

    /**
     * Gets payType.
     *
     * @return PaymentMethodPayType|null
     */
    public function getPayType(): mixed
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType.
     *
     * @param PaymentMethodPayType $payType payType
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
     * Gets status.
     *
     * @return PaymentMethodStatus|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param PaymentMethodStatus $status status
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
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling WebhookEventCustomerPaymentMethod., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField1) && mb_strlen($clientField1) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling WebhookEventCustomerPaymentMethod., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling WebhookEventCustomerPaymentMethod., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField2) && mb_strlen($clientField2) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling WebhookEventCustomerPaymentMethod., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling WebhookEventCustomerPaymentMethod., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField3) && mb_strlen($clientField3) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling WebhookEventCustomerPaymentMethod., must be bigger than or equal to 1.');
        }
        $this->container['clientField3'] = $clientField3;

        return $this;
    }

    /**
     * Gets applicationType.
     *
     * @return DirectDebitApplicationType|null
     */
    public function getApplicationType(): mixed
    {
        return $this->container['applicationType'];
    }

    /**
     * Sets applicationType.
     *
     * @param DirectDebitApplicationType|null $applicationType applicationType
     */
    public function setApplicationType(mixed $applicationType): static
    {
        if (is_null($applicationType)) {
            $this->openAPINullablesSetToNull[] = 'applicationType';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applicationType', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applicationType'] = $applicationType;

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

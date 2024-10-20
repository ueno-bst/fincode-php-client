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
class PaymentPayPayExecutingRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Payment.PayPay.Executing.Request';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['payType' => '\OpenAPI\Fincode\Model\PayType', 'accessId' => 'string', 'customerId' => 'string', 'redirectUrl' => 'string', 'redirectType' => '\OpenAPI\Fincode\Model\RedirectType', 'userAgent' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['payType' => null, 'accessId' => null, 'customerId' => null, 'redirectUrl' => null, 'redirectType' => null, 'userAgent' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['payType' => false, 'accessId' => false, 'customerId' => false, 'redirectUrl' => true, 'redirectType' => true, 'userAgent' => false];
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
    protected static array $attributeMap = ['payType' => 'pay_type', 'accessId' => 'access_id', 'customerId' => 'customer_id', 'redirectUrl' => 'redirect_url', 'redirectType' => 'redirect_type', 'userAgent' => 'user_agent'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['payType' => 'setPayType', 'accessId' => 'setAccessId', 'customerId' => 'setCustomerId', 'redirectUrl' => 'setRedirectUrl', 'redirectType' => 'setRedirectType', 'userAgent' => 'setUserAgent'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['payType' => 'getPayType', 'accessId' => 'getAccessId', 'customerId' => 'getCustomerId', 'redirectUrl' => 'getRedirectUrl', 'redirectType' => 'getRedirectType', 'userAgent' => 'getUserAgent'];

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
        $this->setIfExists('payType', $data ?? [], null);
        $this->setIfExists('accessId', $data ?? [], null);
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('redirectUrl', $data ?? [], null);
        $this->setIfExists('redirectType', $data ?? [], null);
        $this->setIfExists('userAgent', $data ?? [], null);
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
        if (null === $this->container['payType']) {
            $invalidProperties[] = "'payType' can't be null";
        }
        if (null === $this->container['accessId']) {
            $invalidProperties[] = "'accessId' can't be null";
        }
        if (mb_strlen($this->container['accessId']) > 24) {
            $invalidProperties[] = "invalid value for 'accessId', the character length must be smaller than or equal to 24.";
        }
        if (mb_strlen($this->container['accessId']) < 24) {
            $invalidProperties[] = "invalid value for 'accessId', the character length must be bigger than or equal to 24.";
        }
        if (!is_null($this->container['customerId']) && mb_strlen($this->container['customerId']) > 60) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['customerId']) && mb_strlen($this->container['customerId']) < 1) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
        }
        if (null === $this->container['redirectUrl']) {
            $invalidProperties[] = "'redirectUrl' can't be null";
        }
        if (mb_strlen($this->container['redirectUrl']) > 256) {
            $invalidProperties[] = "invalid value for 'redirectUrl', the character length must be smaller than or equal to 256.";
        }
        if (mb_strlen($this->container['redirectUrl']) < 1) {
            $invalidProperties[] = "invalid value for 'redirectUrl', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['userAgent']) && mb_strlen($this->container['userAgent']) > 256) {
            $invalidProperties[] = "invalid value for 'userAgent', the character length must be smaller than or equal to 256.";
        }
        if (!is_null($this->container['userAgent']) && mb_strlen($this->container['userAgent']) < 1) {
            $invalidProperties[] = "invalid value for 'userAgent', the character length must be bigger than or equal to 1.";
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
     * Gets payType.
     *
     * @return PayType
     */
    public function getPayType(): mixed
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType.
     *
     * @param PayType $payType 決済種別\\ この決済で利用する決済手段です。  - `Paypay`: PayPay
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
     * Gets accessId.
     *
     * @return string
     */
    public function getAccessId(): mixed
    {
        return $this->container['accessId'];
    }

    /**
     * Sets accessId.
     *
     * @param string $accessId 取引ID
     */
    public function setAccessId(mixed $accessId): static
    {
        if (is_null($accessId)) {
            throw new \InvalidArgumentException('non-nullable accessId cannot be null');
        }
        if (mb_strlen($accessId) > 24) {
            throw new \InvalidArgumentException('invalid length for $accessId when calling PaymentPayPayExecutingRequest., must be smaller than or equal to 24.');
        }
        if (mb_strlen($accessId) < 24) {
            throw new \InvalidArgumentException('invalid length for $accessId when calling PaymentPayPayExecutingRequest., must be bigger than or equal to 24.');
        }
        $this->container['accessId'] = $accessId;

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
     * @param string $customerId 顧客ID\\ 購入者となる顧客のIDです
     */
    public function setCustomerId(mixed $customerId): static
    {
        if (is_null($customerId)) {
            throw new \InvalidArgumentException('non-nullable customerId cannot be null');
        }
        if (mb_strlen($customerId) > 60) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling PaymentPayPayExecutingRequest., must be smaller than or equal to 60.');
        }
        if (mb_strlen($customerId) < 1) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling PaymentPayPayExecutingRequest., must be bigger than or equal to 1.');
        }
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets redirectUrl.
     *
     * @return string
     */
    public function getRedirectUrl(): mixed
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl.
     *
     * @param string|null $redirectUrl リダイレクトURL\\ 決済が完了した際のPayPayからのリダイレクト先URL
     */
    public function setRedirectUrl(mixed $redirectUrl): static
    {
        if (is_null($redirectUrl)) {
            $this->openAPINullablesSetToNull[] = 'redirectUrl';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirectUrl', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($redirectUrl) && mb_strlen($redirectUrl) > 256) {
            throw new \InvalidArgumentException('invalid length for $redirectUrl when calling PaymentPayPayExecutingRequest., must be smaller than or equal to 256.');
        }
        if (!is_null($redirectUrl) && mb_strlen($redirectUrl) < 1) {
            throw new \InvalidArgumentException('invalid length for $redirectUrl when calling PaymentPayPayExecutingRequest., must be bigger than or equal to 1.');
        }
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }

    /**
     * Gets redirectType.
     *
     * @return RedirectType|null
     */
    public function getRedirectType(): mixed
    {
        return $this->container['redirectType'];
    }

    /**
     * Sets redirectType.
     *
     * @param RedirectType|null $redirectType redirectType
     */
    public function setRedirectType(mixed $redirectType): static
    {
        if (is_null($redirectType)) {
            $this->openAPINullablesSetToNull[] = 'redirectType';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirectType', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redirectType'] = $redirectType;

        return $this;
    }

    /**
     * Gets userAgent.
     *
     * @return string|null
     */
    public function getUserAgent(): mixed
    {
        return $this->container['userAgent'];
    }

    /**
     * Sets userAgent.
     *
     * @param string $userAgent ユーザーエージェント\\ リクエストを送信したユーザーエージェントの情報。`redirect_type`が`1`（Webページ／Webアプリケーション）の場合指定できます。
     */
    public function setUserAgent(mixed $userAgent): static
    {
        if (is_null($userAgent)) {
            throw new \InvalidArgumentException('non-nullable userAgent cannot be null');
        }
        if (mb_strlen($userAgent) > 256) {
            throw new \InvalidArgumentException('invalid length for $userAgent when calling PaymentPayPayExecutingRequest., must be smaller than or equal to 256.');
        }
        if (mb_strlen($userAgent) < 1) {
            throw new \InvalidArgumentException('invalid length for $userAgent when calling PaymentPayPayExecutingRequest., must be bigger than or equal to 1.');
        }
        $this->container['userAgent'] = $userAgent;

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

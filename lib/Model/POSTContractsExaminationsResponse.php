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
class POSTContractsExaminationsResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'POST.ContractsExaminations.Response';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['shopId' => 'string', 'statusCode' => 'float'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['shopId' => null, 'statusCode' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['shopId' => false, 'statusCode' => false];
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
    protected static array $attributeMap = ['shopId' => 'shop_id', 'statusCode' => 'status_code'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['shopId' => 'setShopId', 'statusCode' => 'setStatusCode'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['shopId' => 'getShopId', 'statusCode' => 'getStatusCode'];

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
    public const STATUS_CODE_NUMBER_1 = 1;
    public const STATUS_CODE_NUMBER_2 = 2;
    public const STATUS_CODE_NUMBER_3 = 3;

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getStatusCodeAllowableValues(): array
    {
        return [self::STATUS_CODE_NUMBER_1, self::STATUS_CODE_NUMBER_2, self::STATUS_CODE_NUMBER_3];
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
        $this->setIfExists('statusCode', $data ?? [], null);
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
        $allowedValues = $this->getStatusCodeAllowableValues();
        if (!is_null($this->container['statusCode']) && !in_array($this->container['statusCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'statusCode', must be one of '%s'", $this->container['statusCode'], implode("', '", $allowedValues));
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
     * @param string $shopId ショップID（テナント）\\ \\ 審査申請を行うテナントのショップID
     */
    public function setShopId(mixed $shopId): static
    {
        if (is_null($shopId)) {
            throw new \InvalidArgumentException('non-nullable shopId cannot be null');
        }
        if (mb_strlen($shopId) > 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling POSTContractsExaminationsResponse., must be smaller than or equal to 13.');
        }
        if (mb_strlen($shopId) < 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling POSTContractsExaminationsResponse., must be bigger than or equal to 13.');
        }
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets statusCode.
     *
     * @return float|null
     */
    public function getStatusCode(): mixed
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode.
     *
     * @param float $statusCode 申請ステータス  - `1`: OK<br /><span class=\"smallText\">申請が完了しました。審査を行います。<br />`enable_immediate_use = true`の場合は即時利用が認められ、VISA/Mastercardブランドの決済受付が可能な状態です。</span> - `2`: NG<br /><span class=\"smallText\">fincodeの利用が認められませんでした。</span> - `3`: 保留<br /><span class=\"smallText\">即時利用が認められませんでした。申請は完了しており、審査は継続して行われます。</span>
     */
    public function setStatusCode(mixed $statusCode): static
    {
        if (is_null($statusCode)) {
            throw new \InvalidArgumentException('non-nullable statusCode cannot be null');
        }
        $allowedValues = $this->getStatusCodeAllowableValues();
        if (!in_array($statusCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'statusCode', must be one of '%s'", $statusCode, implode("', '", $allowedValues)));
        }
        $this->container['statusCode'] = $statusCode;

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

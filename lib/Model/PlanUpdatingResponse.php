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
class PlanUpdatingResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Plan.Updating.Response';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['id' => 'string', 'planName' => 'string', 'description' => 'string', 'shopId' => 'string', 'amount' => 'int', 'tax' => 'int', 'totalAmount' => 'int', 'intervalPattern' => 'string', 'intervalCount' => 'float', 'usedFlag' => 'string', 'deleteFlag' => '\OpenAPI\Fincode\Model\DeleteFlag', 'created' => 'string', 'updated' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['id' => null, 'planName' => null, 'description' => null, 'shopId' => null, 'amount' => 'int64', 'tax' => 'int64', 'totalAmount' => 'int64', 'intervalPattern' => null, 'intervalCount' => 'integer', 'usedFlag' => null, 'deleteFlag' => null, 'created' => null, 'updated' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['id' => false, 'planName' => false, 'description' => true, 'shopId' => false, 'amount' => false, 'tax' => false, 'totalAmount' => false, 'intervalPattern' => false, 'intervalCount' => false, 'usedFlag' => false, 'deleteFlag' => false, 'created' => false, 'updated' => false];
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
    protected static array $attributeMap = ['id' => 'id', 'planName' => 'plan_name', 'description' => 'description', 'shopId' => 'shop_id', 'amount' => 'amount', 'tax' => 'tax', 'totalAmount' => 'total_amount', 'intervalPattern' => 'interval_pattern', 'intervalCount' => 'interval_count', 'usedFlag' => 'used_flag', 'deleteFlag' => 'delete_flag', 'created' => 'created', 'updated' => 'updated'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['id' => 'setId', 'planName' => 'setPlanName', 'description' => 'setDescription', 'shopId' => 'setShopId', 'amount' => 'setAmount', 'tax' => 'setTax', 'totalAmount' => 'setTotalAmount', 'intervalPattern' => 'setIntervalPattern', 'intervalCount' => 'setIntervalCount', 'usedFlag' => 'setUsedFlag', 'deleteFlag' => 'setDeleteFlag', 'created' => 'setCreated', 'updated' => 'setUpdated'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['id' => 'getId', 'planName' => 'getPlanName', 'description' => 'getDescription', 'shopId' => 'getShopId', 'amount' => 'getAmount', 'tax' => 'getTax', 'totalAmount' => 'getTotalAmount', 'intervalPattern' => 'getIntervalPattern', 'intervalCount' => 'getIntervalCount', 'usedFlag' => 'getUsedFlag', 'deleteFlag' => 'getDeleteFlag', 'created' => 'getCreated', 'updated' => 'getUpdated'];

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
    public const INTERVAL_PATTERN_MONTH = 'month';
    public const INTERVAL_PATTERN_YEAR = 'year';
    public const INTERVAL_COUNT_NUMBER_1 = 1;
    public const INTERVAL_COUNT_NUMBER_2 = 2;
    public const INTERVAL_COUNT_NUMBER_3 = 3;
    public const INTERVAL_COUNT_NUMBER_6 = 6;
    public const USED_FLAG__0 = '0';
    public const USED_FLAG__1 = '1';

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getIntervalPatternAllowableValues(): array
    {
        return [self::INTERVAL_PATTERN_MONTH, self::INTERVAL_PATTERN_YEAR];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getIntervalCountAllowableValues(): array
    {
        return [self::INTERVAL_COUNT_NUMBER_1, self::INTERVAL_COUNT_NUMBER_2, self::INTERVAL_COUNT_NUMBER_3, self::INTERVAL_COUNT_NUMBER_6];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getUsedFlagAllowableValues(): array
    {
        return [self::USED_FLAG__0, self::USED_FLAG__1];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('planName', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('shopId', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('intervalPattern', $data ?? [], null);
        $this->setIfExists('intervalCount', $data ?? [], null);
        $this->setIfExists('usedFlag', $data ?? [], null);
        $this->setIfExists('deleteFlag', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
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
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) > 25) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) < 1) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['planName']) && mb_strlen($this->container['planName']) > 200) {
            $invalidProperties[] = "invalid value for 'planName', the character length must be smaller than or equal to 200.";
        }
        if (!is_null($this->container['description']) && mb_strlen($this->container['description']) > 400) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 400.";
        }
        if (!is_null($this->container['shopId']) && mb_strlen($this->container['shopId']) > 13) {
            $invalidProperties[] = "invalid value for 'shopId', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['shopId']) && mb_strlen($this->container['shopId']) < 13) {
            $invalidProperties[] = "invalid value for 'shopId', the character length must be bigger than or equal to 13.";
        }
        $allowedValues = $this->getIntervalPatternAllowableValues();
        if (!is_null($this->container['intervalPattern']) && !in_array($this->container['intervalPattern'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'intervalPattern', must be one of '%s'", $this->container['intervalPattern'], implode("', '", $allowedValues));
        }
        $allowedValues = $this->getIntervalCountAllowableValues();
        if (!is_null($this->container['intervalCount']) && !in_array($this->container['intervalCount'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'intervalCount', must be one of '%s'", $this->container['intervalCount'], implode("', '", $allowedValues));
        }
        $allowedValues = $this->getUsedFlagAllowableValues();
        if (!is_null($this->container['usedFlag']) && !in_array($this->container['usedFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'usedFlag', must be one of '%s'", $this->container['usedFlag'], implode("', '", $allowedValues));
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
     * Gets id.
     *
     * @return string|null
     */
    public function getId(): mixed
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id プランID
     */
    public function setId(mixed $id): static
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if (mb_strlen($id) > 25) {
            throw new \InvalidArgumentException('invalid length for $id when calling PlanUpdatingResponse., must be smaller than or equal to 25.');
        }
        if (mb_strlen($id) < 1) {
            throw new \InvalidArgumentException('invalid length for $id when calling PlanUpdatingResponse., must be bigger than or equal to 1.');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets planName.
     *
     * @return string|null
     */
    public function getPlanName(): mixed
    {
        return $this->container['planName'];
    }

    /**
     * Sets planName.
     *
     * @param string $planName プラン名
     */
    public function setPlanName(mixed $planName): static
    {
        if (is_null($planName)) {
            throw new \InvalidArgumentException('non-nullable planName cannot be null');
        }
        if (mb_strlen($planName) > 200) {
            throw new \InvalidArgumentException('invalid length for $planName when calling PlanUpdatingResponse., must be smaller than or equal to 200.');
        }
        $this->container['planName'] = $planName;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription(): mixed
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string|null $description プランの説明
     */
    public function setDescription(mixed $description): static
    {
        if (is_null($description)) {
            $this->openAPINullablesSetToNull[] = 'description';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && mb_strlen($description) > 400) {
            throw new \InvalidArgumentException('invalid length for $description when calling PlanUpdatingResponse., must be smaller than or equal to 400.');
        }
        $this->container['description'] = $description;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $shopId when calling PlanUpdatingResponse., must be smaller than or equal to 13.');
        }
        if (mb_strlen($shopId) < 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling PlanUpdatingResponse., must be bigger than or equal to 13.');
        }
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets amount.
     *
     * @return int|null
     */
    public function getAmount(): mixed
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param int $amount 利用金額
     */
    public function setAmount(mixed $amount): static
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets tax.
     *
     * @return int|null
     */
    public function getTax(): mixed
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax.
     *
     * @param int $tax 税送料
     */
    public function setTax(mixed $tax): static
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets totalAmount.
     *
     * @return int|null
     */
    public function getTotalAmount(): mixed
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount.
     *
     * @param int $totalAmount 合計金額\\ 利用金額と税送料の合計金額です
     */
    public function setTotalAmount(mixed $totalAmount): static
    {
        if (is_null($totalAmount)) {
            throw new \InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets intervalPattern.
     *
     * @return string|null
     */
    public function getIntervalPattern(): mixed
    {
        return $this->container['intervalPattern'];
    }

    /**
     * Sets intervalPattern.
     *
     * @param string $intervalPattern 課金間隔  - `month`：月 - `year`：年
     */
    public function setIntervalPattern(mixed $intervalPattern): static
    {
        if (is_null($intervalPattern)) {
            throw new \InvalidArgumentException('non-nullable intervalPattern cannot be null');
        }
        $allowedValues = $this->getIntervalPatternAllowableValues();
        if (!in_array($intervalPattern, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'intervalPattern', must be one of '%s'", $intervalPattern, implode("', '", $allowedValues)));
        }
        $this->container['intervalPattern'] = $intervalPattern;

        return $this;
    }

    /**
     * Gets intervalCount.
     *
     * @return float|null
     */
    public function getIntervalCount(): mixed
    {
        return $this->container['intervalCount'];
    }

    /**
     * Sets intervalCount.
     *
     * @param float $intervalCount 課金間隔数  - `1`：月次／年次の課金 - `2`：2ヶ月に1回の課金 - `3`：3ヶ月に1回の課金 - `6`：6ヶ月に1回の課金
     */
    public function setIntervalCount(mixed $intervalCount): static
    {
        if (is_null($intervalCount)) {
            throw new \InvalidArgumentException('non-nullable intervalCount cannot be null');
        }
        $allowedValues = $this->getIntervalCountAllowableValues();
        if (!in_array($intervalCount, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'intervalCount', must be one of '%s'", $intervalCount, implode("', '", $allowedValues)));
        }
        $this->container['intervalCount'] = $intervalCount;

        return $this;
    }

    /**
     * Gets usedFlag.
     *
     * @return string|null
     */
    public function getUsedFlag(): mixed
    {
        return $this->container['usedFlag'];
    }

    /**
     * Sets usedFlag.
     *
     * @param string $usedFlag 利用済みフラグ\\ このプランを用いたサブスクリプション（解約含む）が1つ以上存在する場合`1`を返し、存在しない場合`0`を返します。  - `0`：このプランを用いたサブスクリプションはまだ存在しない - `1`：このプランを用いたサブスクリプションが存在する
     */
    public function setUsedFlag(mixed $usedFlag): static
    {
        if (is_null($usedFlag)) {
            throw new \InvalidArgumentException('non-nullable usedFlag cannot be null');
        }
        $allowedValues = $this->getUsedFlagAllowableValues();
        if (!in_array($usedFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'usedFlag', must be one of '%s'", $usedFlag, implode("', '", $allowedValues)));
        }
        $this->container['usedFlag'] = $usedFlag;

        return $this;
    }

    /**
     * Gets deleteFlag.
     *
     * @return DeleteFlag|null
     */
    public function getDeleteFlag(): mixed
    {
        return $this->container['deleteFlag'];
    }

    /**
     * Sets deleteFlag.
     *
     * @param DeleteFlag $deleteFlag deleteFlag
     */
    public function setDeleteFlag(mixed $deleteFlag): static
    {
        if (is_null($deleteFlag)) {
            throw new \InvalidArgumentException('non-nullable deleteFlag cannot be null');
        }
        $this->container['deleteFlag'] = $deleteFlag;

        return $this;
    }

    /**
     * Gets created.
     *
     * @return string|null
     */
    public function getCreated(): mixed
    {
        return $this->container['created'];
    }

    /**
     * Sets created.
     *
     * @param string $created 作成日\\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setCreated(mixed $created): static
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated.
     *
     * @return string|null
     */
    public function getUpdated(): mixed
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated.
     *
     * @param string $updated 更新日\\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setUpdated(mixed $updated): static
    {
        if (is_null($updated)) {
            throw new \InvalidArgumentException('non-nullable updated cannot be null');
        }
        $this->container['updated'] = $updated;

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

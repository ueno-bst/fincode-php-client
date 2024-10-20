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
class ContentInfo implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ContentInfo';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['content1Name' => 'string', 'content1Description' => 'string', 'content1UnitPrice' => 'int', 'content2Name' => 'string', 'content2Description' => 'string', 'content2UnitPrice' => 'int', 'content3Name' => 'string', 'content3Description' => 'string', 'content3UnitPrice' => 'int', 'id' => 'string', 'type' => 'float'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['content1Name' => null, 'content1Description' => null, 'content1UnitPrice' => null, 'content2Name' => null, 'content2Description' => null, 'content2UnitPrice' => null, 'content3Name' => null, 'content3Description' => null, 'content3UnitPrice' => null, 'id' => null, 'type' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['content1Name' => false, 'content1Description' => false, 'content1UnitPrice' => false, 'content2Name' => false, 'content2Description' => false, 'content2UnitPrice' => false, 'content3Name' => false, 'content3Description' => false, 'content3UnitPrice' => false, 'id' => true, 'type' => false];
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
    protected static array $attributeMap = ['content1Name' => 'content1_name', 'content1Description' => 'content1_description', 'content1UnitPrice' => 'content1_unit_price', 'content2Name' => 'content2_name', 'content2Description' => 'content2_description', 'content2UnitPrice' => 'content2_unit_price', 'content3Name' => 'content3_name', 'content3Description' => 'content3_description', 'content3UnitPrice' => 'content3_unit_price', 'id' => 'id', 'type' => 'type'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['content1Name' => 'setContent1Name', 'content1Description' => 'setContent1Description', 'content1UnitPrice' => 'setContent1UnitPrice', 'content2Name' => 'setContent2Name', 'content2Description' => 'setContent2Description', 'content2UnitPrice' => 'setContent2UnitPrice', 'content3Name' => 'setContent3Name', 'content3Description' => 'setContent3Description', 'content3UnitPrice' => 'setContent3UnitPrice', 'id' => 'setId', 'type' => 'setType'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['content1Name' => 'getContent1Name', 'content1Description' => 'getContent1Description', 'content1UnitPrice' => 'getContent1UnitPrice', 'content2Name' => 'getContent2Name', 'content2Description' => 'getContent2Description', 'content2UnitPrice' => 'getContent2UnitPrice', 'content3Name' => 'getContent3Name', 'content3Description' => 'getContent3Description', 'content3UnitPrice' => 'getContent3UnitPrice', 'id' => 'getId', 'type' => 'getType'];

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
    public const TYPE_NUMBER_0 = 0;
    public const TYPE_NUMBER_1 = 1;
    public const TYPE_NUMBER_2 = 2;

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getTypeAllowableValues(): array
    {
        return [self::TYPE_NUMBER_0, self::TYPE_NUMBER_1, self::TYPE_NUMBER_2];
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
        $this->setIfExists('content1Name', $data ?? [], null);
        $this->setIfExists('content1Description', $data ?? [], null);
        $this->setIfExists('content1UnitPrice', $data ?? [], null);
        $this->setIfExists('content2Name', $data ?? [], null);
        $this->setIfExists('content2Description', $data ?? [], null);
        $this->setIfExists('content2UnitPrice', $data ?? [], null);
        $this->setIfExists('content3Name', $data ?? [], null);
        $this->setIfExists('content3Description', $data ?? [], null);
        $this->setIfExists('content3UnitPrice', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
        if (null === $this->container['content1Name']) {
            $invalidProperties[] = "'content1Name' can't be null";
        }
        if (mb_strlen($this->container['content1Name']) > 200) {
            $invalidProperties[] = "invalid value for 'content1Name', the character length must be smaller than or equal to 200.";
        }
        if (mb_strlen($this->container['content1Name']) < 1) {
            $invalidProperties[] = "invalid value for 'content1Name', the character length must be bigger than or equal to 1.";
        }
        if (null === $this->container['content1Description']) {
            $invalidProperties[] = "'content1Description' can't be null";
        }
        if (mb_strlen($this->container['content1Description']) > 200) {
            $invalidProperties[] = "invalid value for 'content1Description', the character length must be smaller than or equal to 200.";
        }
        if (mb_strlen($this->container['content1Description']) < 1) {
            $invalidProperties[] = "invalid value for 'content1Description', the character length must be bigger than or equal to 1.";
        }
        if (null === $this->container['content1UnitPrice']) {
            $invalidProperties[] = "'content1UnitPrice' can't be null";
        }
        if (!is_null($this->container['content2Name']) && mb_strlen($this->container['content2Name']) > 200) {
            $invalidProperties[] = "invalid value for 'content2Name', the character length must be smaller than or equal to 200.";
        }
        if (!is_null($this->container['content2Name']) && mb_strlen($this->container['content2Name']) < 1) {
            $invalidProperties[] = "invalid value for 'content2Name', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['content2Description']) && mb_strlen($this->container['content2Description']) > 200) {
            $invalidProperties[] = "invalid value for 'content2Description', the character length must be smaller than or equal to 200.";
        }
        if (!is_null($this->container['content2Description']) && mb_strlen($this->container['content2Description']) < 1) {
            $invalidProperties[] = "invalid value for 'content2Description', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['content3Name']) && mb_strlen($this->container['content3Name']) > 200) {
            $invalidProperties[] = "invalid value for 'content3Name', the character length must be smaller than or equal to 200.";
        }
        if (!is_null($this->container['content3Name']) && mb_strlen($this->container['content3Name']) < 1) {
            $invalidProperties[] = "invalid value for 'content3Name', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['content3Description']) && mb_strlen($this->container['content3Description']) > 200) {
            $invalidProperties[] = "invalid value for 'content3Description', the character length must be smaller than or equal to 200.";
        }
        if (!is_null($this->container['content3Description']) && mb_strlen($this->container['content3Description']) < 1) {
            $invalidProperties[] = "invalid value for 'content3Description', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) > 19) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
        }
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) < 1) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'type', must be one of '%s'", $this->container['type'], implode("', '", $allowedValues));
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
     * Gets content1Name.
     *
     * @return string
     */
    public function getContent1Name(): mixed
    {
        return $this->container['content1Name'];
    }

    /**
     * Sets content1Name.
     *
     * @param string $content1Name 商材1 名称
     */
    public function setContent1Name(mixed $content1Name): static
    {
        if (is_null($content1Name)) {
            throw new \InvalidArgumentException('non-nullable content1Name cannot be null');
        }
        if (mb_strlen($content1Name) > 200) {
            throw new \InvalidArgumentException('invalid length for $content1Name when calling ContentInfo., must be smaller than or equal to 200.');
        }
        if (mb_strlen($content1Name) < 1) {
            throw new \InvalidArgumentException('invalid length for $content1Name when calling ContentInfo., must be bigger than or equal to 1.');
        }
        $this->container['content1Name'] = $content1Name;

        return $this;
    }

    /**
     * Gets content1Description.
     *
     * @return string
     */
    public function getContent1Description(): mixed
    {
        return $this->container['content1Description'];
    }

    /**
     * Sets content1Description.
     *
     * @param string $content1Description 商材1 説明
     */
    public function setContent1Description(mixed $content1Description): static
    {
        if (is_null($content1Description)) {
            throw new \InvalidArgumentException('non-nullable content1Description cannot be null');
        }
        if (mb_strlen($content1Description) > 200) {
            throw new \InvalidArgumentException('invalid length for $content1Description when calling ContentInfo., must be smaller than or equal to 200.');
        }
        if (mb_strlen($content1Description) < 1) {
            throw new \InvalidArgumentException('invalid length for $content1Description when calling ContentInfo., must be bigger than or equal to 1.');
        }
        $this->container['content1Description'] = $content1Description;

        return $this;
    }

    /**
     * Gets content1UnitPrice.
     *
     * @return int
     */
    public function getContent1UnitPrice(): mixed
    {
        return $this->container['content1UnitPrice'];
    }

    /**
     * Sets content1UnitPrice.
     *
     * @param int $content1UnitPrice 商材1 単価
     */
    public function setContent1UnitPrice(mixed $content1UnitPrice): static
    {
        if (is_null($content1UnitPrice)) {
            throw new \InvalidArgumentException('non-nullable content1UnitPrice cannot be null');
        }
        $this->container['content1UnitPrice'] = $content1UnitPrice;

        return $this;
    }

    /**
     * Gets content2Name.
     *
     * @return string|null
     */
    public function getContent2Name(): mixed
    {
        return $this->container['content2Name'];
    }

    /**
     * Sets content2Name.
     *
     * @param string $content2Name 商材2 名称
     */
    public function setContent2Name(mixed $content2Name): static
    {
        if (is_null($content2Name)) {
            throw new \InvalidArgumentException('non-nullable content2Name cannot be null');
        }
        if (mb_strlen($content2Name) > 200) {
            throw new \InvalidArgumentException('invalid length for $content2Name when calling ContentInfo., must be smaller than or equal to 200.');
        }
        if (mb_strlen($content2Name) < 1) {
            throw new \InvalidArgumentException('invalid length for $content2Name when calling ContentInfo., must be bigger than or equal to 1.');
        }
        $this->container['content2Name'] = $content2Name;

        return $this;
    }

    /**
     * Gets content2Description.
     *
     * @return string|null
     */
    public function getContent2Description(): mixed
    {
        return $this->container['content2Description'];
    }

    /**
     * Sets content2Description.
     *
     * @param string $content2Description 商材2 説明
     */
    public function setContent2Description(mixed $content2Description): static
    {
        if (is_null($content2Description)) {
            throw new \InvalidArgumentException('non-nullable content2Description cannot be null');
        }
        if (mb_strlen($content2Description) > 200) {
            throw new \InvalidArgumentException('invalid length for $content2Description when calling ContentInfo., must be smaller than or equal to 200.');
        }
        if (mb_strlen($content2Description) < 1) {
            throw new \InvalidArgumentException('invalid length for $content2Description when calling ContentInfo., must be bigger than or equal to 1.');
        }
        $this->container['content2Description'] = $content2Description;

        return $this;
    }

    /**
     * Gets content2UnitPrice.
     *
     * @return int|null
     */
    public function getContent2UnitPrice(): mixed
    {
        return $this->container['content2UnitPrice'];
    }

    /**
     * Sets content2UnitPrice.
     *
     * @param int $content2UnitPrice 商材2 単価
     */
    public function setContent2UnitPrice(mixed $content2UnitPrice): static
    {
        if (is_null($content2UnitPrice)) {
            throw new \InvalidArgumentException('non-nullable content2UnitPrice cannot be null');
        }
        $this->container['content2UnitPrice'] = $content2UnitPrice;

        return $this;
    }

    /**
     * Gets content3Name.
     *
     * @return string|null
     */
    public function getContent3Name(): mixed
    {
        return $this->container['content3Name'];
    }

    /**
     * Sets content3Name.
     *
     * @param string $content3Name 商材3 名称
     */
    public function setContent3Name(mixed $content3Name): static
    {
        if (is_null($content3Name)) {
            throw new \InvalidArgumentException('non-nullable content3Name cannot be null');
        }
        if (mb_strlen($content3Name) > 200) {
            throw new \InvalidArgumentException('invalid length for $content3Name when calling ContentInfo., must be smaller than or equal to 200.');
        }
        if (mb_strlen($content3Name) < 1) {
            throw new \InvalidArgumentException('invalid length for $content3Name when calling ContentInfo., must be bigger than or equal to 1.');
        }
        $this->container['content3Name'] = $content3Name;

        return $this;
    }

    /**
     * Gets content3Description.
     *
     * @return string|null
     */
    public function getContent3Description(): mixed
    {
        return $this->container['content3Description'];
    }

    /**
     * Sets content3Description.
     *
     * @param string $content3Description 商材3 説明
     */
    public function setContent3Description(mixed $content3Description): static
    {
        if (is_null($content3Description)) {
            throw new \InvalidArgumentException('non-nullable content3Description cannot be null');
        }
        if (mb_strlen($content3Description) > 200) {
            throw new \InvalidArgumentException('invalid length for $content3Description when calling ContentInfo., must be smaller than or equal to 200.');
        }
        if (mb_strlen($content3Description) < 1) {
            throw new \InvalidArgumentException('invalid length for $content3Description when calling ContentInfo., must be bigger than or equal to 1.');
        }
        $this->container['content3Description'] = $content3Description;

        return $this;
    }

    /**
     * Gets content3UnitPrice.
     *
     * @return int|null
     */
    public function getContent3UnitPrice(): mixed
    {
        return $this->container['content3UnitPrice'];
    }

    /**
     * Sets content3UnitPrice.
     *
     * @param int $content3UnitPrice 商材3 単価
     */
    public function setContent3UnitPrice(mixed $content3UnitPrice): static
    {
        if (is_null($content3UnitPrice)) {
            throw new \InvalidArgumentException('non-nullable content3UnitPrice cannot be null');
        }
        $this->container['content3UnitPrice'] = $content3UnitPrice;

        return $this;
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
     * @param string|null $id 商品情報ID
     */
    public function setId(mixed $id): static
    {
        if (is_null($id)) {
            $this->openAPINullablesSetToNull[] = 'id';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($id) && mb_strlen($id) > 19) {
            throw new \InvalidArgumentException('invalid length for $id when calling ContentInfo., must be smaller than or equal to 19.');
        }
        if (!is_null($id) && mb_strlen($id) < 1) {
            throw new \InvalidArgumentException('invalid length for $id when calling ContentInfo., must be bigger than or equal to 1.');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return float|null
     */
    public function getType(): mixed
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param float $type 取扱商材 品目種別  - `0`: 物品販売 - `1`: サービス - `2`: デジタルコンテンツ
     */
    public function setType(mixed $type): static
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'type', must be one of '%s'", $type, implode("', '", $allowedValues)));
        }
        $this->container['type'] = $type;

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

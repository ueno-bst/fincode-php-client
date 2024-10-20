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
class CustomerListRetrievingQueryParams implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Customer.ListRetrieving.QueryParams';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['id' => 'string', 'name' => 'string', 'email' => 'string', 'createdFrom' => 'string', 'createdTo' => 'string', 'sort' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['id' => null, 'name' => null, 'email' => null, 'createdFrom' => null, 'createdTo' => null, 'sort' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['id' => true, 'name' => true, 'email' => true, 'createdFrom' => true, 'createdTo' => true, 'sort' => true];
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
    protected static array $attributeMap = ['id' => 'id', 'name' => 'name', 'email' => 'email', 'createdFrom' => 'created_from', 'createdTo' => 'created_to', 'sort' => 'sort'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['id' => 'setId', 'name' => 'setName', 'email' => 'setEmail', 'createdFrom' => 'setCreatedFrom', 'createdTo' => 'setCreatedTo', 'sort' => 'setSort'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['id' => 'getId', 'name' => 'getName', 'email' => 'getEmail', 'createdFrom' => 'getCreatedFrom', 'createdTo' => 'getCreatedTo', 'sort' => 'getSort'];

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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('createdFrom', $data ?? [], null);
        $this->setIfExists('createdTo', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
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
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) > 60) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) < 1) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['name']) && mb_strlen($this->container['name']) > 384) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 384.";
        }
        if (!is_null($this->container['name']) && mb_strlen($this->container['name']) < 1) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['email']) && mb_strlen($this->container['email']) > 254) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }
        if (!is_null($this->container['email']) && mb_strlen($this->container['email']) < 1) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
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
     * @param string|null $id 顧客ID
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
        if (!is_null($id) && mb_strlen($id) > 60) {
            throw new \InvalidArgumentException('invalid length for $id when calling CustomerListRetrievingQueryParams., must be smaller than or equal to 60.');
        }
        if (!is_null($id) && mb_strlen($id) < 1) {
            throw new \InvalidArgumentException('invalid length for $id when calling CustomerListRetrievingQueryParams., must be bigger than or equal to 1.');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName(): mixed
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name 顧客名
     */
    public function setName(mixed $name): static
    {
        if (is_null($name)) {
            $this->openAPINullablesSetToNull[] = 'name';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($name) && mb_strlen($name) > 384) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerListRetrievingQueryParams., must be smaller than or equal to 384.');
        }
        if (!is_null($name) && mb_strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerListRetrievingQueryParams., must be bigger than or equal to 1.');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail(): mixed
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string|null $email 顧客のメールアドレス
     */
    public function setEmail(mixed $email): static
    {
        if (is_null($email)) {
            $this->openAPINullablesSetToNull[] = 'email';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($email) && mb_strlen($email) > 254) {
            throw new \InvalidArgumentException('invalid length for $email when calling CustomerListRetrievingQueryParams., must be smaller than or equal to 254.');
        }
        if (!is_null($email) && mb_strlen($email) < 1) {
            throw new \InvalidArgumentException('invalid length for $email when calling CustomerListRetrievingQueryParams., must be bigger than or equal to 1.');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets createdFrom.
     *
     * @return string|null
     */
    public function getCreatedFrom(): mixed
    {
        return $this->container['createdFrom'];
    }

    /**
     * Sets createdFrom.
     *
     * @param string|null $createdFrom 作成日の範囲指定 開始日\\ この日付以降に作成された顧客情報を検索できます。\\ 形式：`yyyy/MM/dd`
     */
    public function setCreatedFrom(mixed $createdFrom): static
    {
        if (is_null($createdFrom)) {
            $this->openAPINullablesSetToNull[] = 'createdFrom';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('createdFrom', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['createdFrom'] = $createdFrom;

        return $this;
    }

    /**
     * Gets createdTo.
     *
     * @return string|null
     */
    public function getCreatedTo(): mixed
    {
        return $this->container['createdTo'];
    }

    /**
     * Sets createdTo.
     *
     * @param string|null $createdTo 作成日の範囲指定 終了日\\ この日付以前に作成された顧客情報を検索できます。\\ 形式：`yyyy/MM/dd`
     */
    public function setCreatedTo(mixed $createdTo): static
    {
        if (is_null($createdTo)) {
            $this->openAPINullablesSetToNull[] = 'createdTo';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('createdTo', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['createdTo'] = $createdTo;

        return $this;
    }

    /**
     * Gets sort.
     *
     * @return string|null
     */
    public function getSort(): mixed
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort.
     *
     * @param string|null $sort ソートする項目と順序を指定します。\\ 例： `?sort=updated␣desc,created␣asc`\\ \\ ソート可能な項目  - `id`: 顧客ID - `name`: 顧客名 - `email`: 顧客メールアドレス - `created`: 作成日時 - `updated`: 更新日時
     */
    public function setSort(mixed $sort): static
    {
        if (is_null($sort)) {
            $this->openAPINullablesSetToNull[] = 'sort';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sort', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sort'] = $sort;

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

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
class RetrieveAccountListQueryParameter implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'retrieveAccountList_query_parameter';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['page' => 'int', 'limit' => 'int', 'countOnly' => 'bool', 'processed' => 'string', 'status' => '\OpenAPI\Fincode\Model\DepositStatusCode', 'scheduledFrom' => '\DateTime', 'scheduledTo' => '\DateTime'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['page' => null, 'limit' => null, 'countOnly' => null, 'processed' => null, 'status' => null, 'scheduledFrom' => 'date', 'scheduledTo' => 'date'];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['page' => true, 'limit' => true, 'countOnly' => true, 'processed' => true, 'status' => false, 'scheduledFrom' => true, 'scheduledTo' => true];
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
    protected static array $attributeMap = ['page' => 'page', 'limit' => 'limit', 'countOnly' => 'count_only', 'processed' => 'processed', 'status' => 'status', 'scheduledFrom' => 'scheduled_from', 'scheduledTo' => 'scheduled_to'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['page' => 'setPage', 'limit' => 'setLimit', 'countOnly' => 'setCountOnly', 'processed' => 'setProcessed', 'status' => 'setStatus', 'scheduledFrom' => 'setScheduledFrom', 'scheduledTo' => 'setScheduledTo'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['page' => 'getPage', 'limit' => 'getLimit', 'countOnly' => 'getCountOnly', 'processed' => 'getProcessed', 'status' => 'getStatus', 'scheduledFrom' => 'getScheduledFrom', 'scheduledTo' => 'getScheduledTo'];

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
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('countOnly', $data ?? [], null);
        $this->setIfExists('processed', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('scheduledFrom', $data ?? [], null);
        $this->setIfExists('scheduledTo', $data ?? [], null);
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
     * Gets page.
     *
     * @return int|null
     */
    public function getPage(): mixed
    {
        return $this->container['page'];
    }

    /**
     * Sets page.
     *
     * @param int|null $page ページ番号
     */
    public function setPage(mixed $page): static
    {
        if (is_null($page)) {
            $this->openAPINullablesSetToNull[] = 'page';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets limit.
     *
     * @return int|null
     */
    public function getLimit(): mixed
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit.
     *
     * @param int|null $limit 1回で取得するデータの最大件数
     */
    public function setLimit(mixed $limit): static
    {
        if (is_null($limit)) {
            $this->openAPINullablesSetToNull[] = 'limit';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('limit', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets countOnly.
     *
     * @return bool|null
     */
    public function getCountOnly(): mixed
    {
        return $this->container['countOnly'];
    }

    /**
     * Sets countOnly.
     *
     * @param bool|null $countOnly 総件数のみ取得するか。\\ `true`を指定した場合、検索結果の総件数（`total_count`）のみ取得します。
     */
    public function setCountOnly(mixed $countOnly): static
    {
        if (is_null($countOnly)) {
            $this->openAPINullablesSetToNull[] = 'countOnly';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('countOnly', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['countOnly'] = $countOnly;

        return $this;
    }

    /**
     * Gets processed.
     *
     * @return string|null
     */
    public function getProcessed(): mixed
    {
        return $this->container['processed'];
    }

    /**
     * Sets processed.
     *
     * @param string|null $processed 確定日（入金サイクルの締め日）を月単位で絞り込みます。\\ 形式： `yyyy/MM`
     */
    public function setProcessed(mixed $processed): static
    {
        if (is_null($processed)) {
            $this->openAPINullablesSetToNull[] = 'processed';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('processed', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['processed'] = $processed;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return DepositStatusCode|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param DepositStatusCode $status status
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
     * Gets scheduledFrom.
     *
     * @return \DateTime|null
     */
    public function getScheduledFrom(): mixed
    {
        return $this->container['scheduledFrom'];
    }

    /**
     * Sets scheduledFrom.
     *
     * @param \DateTime|null $scheduledFrom 入金予定日の範囲指定（開始日）を指定します。\\ この日付以降に入金が行われた売上入金情報を検索できます。\\ 形式： `yyyy/MM/dd`
     */
    public function setScheduledFrom(mixed $scheduledFrom): static
    {
        if (is_null($scheduledFrom)) {
            $this->openAPINullablesSetToNull[] = 'scheduledFrom';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scheduledFrom', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['scheduledFrom'] = $scheduledFrom;

        return $this;
    }

    /**
     * Gets scheduledTo.
     *
     * @return \DateTime|null
     */
    public function getScheduledTo(): mixed
    {
        return $this->container['scheduledTo'];
    }

    /**
     * Sets scheduledTo.
     *
     * @param \DateTime|null $scheduledTo 入金予定日の範囲指定（終了日）を指定します。\\ この日付以前に入金が行われた売上入金情報を検索できます。\\ 形式： `yyyy/MM/dd`
     */
    public function setScheduledTo(mixed $scheduledTo): static
    {
        if (is_null($scheduledTo)) {
            $this->openAPINullablesSetToNull[] = 'scheduledTo';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scheduledTo', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['scheduledTo'] = $scheduledTo;

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

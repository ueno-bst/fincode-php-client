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
class WebhookEventContractBodyInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'WebhookEvent_Contract_body_inner';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['acquirer' => '\OpenAPI\Fincode\Model\Acquirer', 'examinationTask' => 'string', 'statusCode' => '\OpenAPI\Fincode\Model\AcquirerContractStatus', 'status' => 'string', 'isUpdated' => 'bool'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['acquirer' => null, 'examinationTask' => null, 'statusCode' => null, 'status' => null, 'isUpdated' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['acquirer' => false, 'examinationTask' => false, 'statusCode' => false, 'status' => false, 'isUpdated' => false];
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
    protected static array $attributeMap = ['acquirer' => 'acquirer', 'examinationTask' => 'examination_task', 'statusCode' => 'status_code', 'status' => 'status', 'isUpdated' => 'is_updated'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['acquirer' => 'setAcquirer', 'examinationTask' => 'setExaminationTask', 'statusCode' => 'setStatusCode', 'status' => 'setStatus', 'isUpdated' => 'setIsUpdated'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['acquirer' => 'getAcquirer', 'examinationTask' => 'getExaminationTask', 'statusCode' => 'getStatusCode', 'status' => 'getStatus', 'isUpdated' => 'getIsUpdated'];

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
        $this->setIfExists('acquirer', $data ?? [], null);
        $this->setIfExists('examinationTask', $data ?? [], null);
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('isUpdated', $data ?? [], null);
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
     * Gets acquirer.
     *
     * @return Acquirer|null
     */
    public function getAcquirer(): mixed
    {
        return $this->container['acquirer'];
    }

    /**
     * Sets acquirer.
     *
     * @param Acquirer $acquirer acquirer
     */
    public function setAcquirer(mixed $acquirer): static
    {
        if (is_null($acquirer)) {
            throw new \InvalidArgumentException('non-nullable acquirer cannot be null');
        }
        $this->container['acquirer'] = $acquirer;

        return $this;
    }

    /**
     * Gets examinationTask.
     *
     * @return string|null
     */
    public function getExaminationTask(): mixed
    {
        return $this->container['examinationTask'];
    }

    /**
     * Sets examinationTask.
     *
     * @param string $examinationTask 審査対象（和名）  - `決済事業者審査: VISA/MASTER-UC` - `決済事業者審査: VISA/MASTER-TFC` - `決済事業者審査: JCB/AMEX` - `決済事業者審査: DINERS` - `決済事業者審査: ApplePay-UC` - `決済事業者審査: ApplePay-JCB/AMEX` - `決済事業者審査: コンビニ決済` - `決済事業者審査: PayPay決済` - `決済事業者審査: 口座振替決済`
     */
    public function setExaminationTask(mixed $examinationTask): static
    {
        if (is_null($examinationTask)) {
            throw new \InvalidArgumentException('non-nullable examinationTask cannot be null');
        }
        $this->container['examinationTask'] = $examinationTask;

        return $this;
    }

    /**
     * Gets statusCode.
     *
     * @return AcquirerContractStatus|null
     */
    public function getStatusCode(): mixed
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode.
     *
     * @param AcquirerContractStatus $statusCode statusCode
     */
    public function setStatusCode(mixed $statusCode): static
    {
        if (is_null($statusCode)) {
            throw new \InvalidArgumentException('non-nullable statusCode cannot be null');
        }
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status 決済事業者 契約ステータス（和名）  - `申込なし` - `審査受付` - `審査待ち` - `審査中` - `審査保留中` - `審査OK` - `利用可能` - `審査NG` - `申込中止`
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
     * Gets isUpdated.
     *
     * @return bool|null
     */
    public function getIsUpdated(): mixed
    {
        return $this->container['isUpdated'];
    }

    /**
     * Sets isUpdated.
     *
     * @param bool $isUpdated 更新の有無\\ \\ 更新があった場合は `true`になります
     */
    public function setIsUpdated(mixed $isUpdated): static
    {
        if (is_null($isUpdated)) {
            throw new \InvalidArgumentException('non-nullable isUpdated cannot be null');
        }
        $this->container['isUpdated'] = $isUpdated;

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

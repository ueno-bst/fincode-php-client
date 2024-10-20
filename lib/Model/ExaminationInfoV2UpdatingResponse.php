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
class ExaminationInfoV2UpdatingResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ExaminationInfo.V2.Updating.Response';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['statusCode' => '\OpenAPI\Fincode\Model\ContractStatus', 'contractInfo' => '\OpenAPI\Fincode\Model\ContractInfoV2', 'shopInfo' => '\OpenAPI\Fincode\Model\ShopInfoV2', 'bankAccountInfo' => '\OpenAPI\Fincode\Model\BankAccountInfoV2', 'depositCycleInfo' => '\OpenAPI\Fincode\Model\DepositCycleInfoV2'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['statusCode' => null, 'contractInfo' => null, 'shopInfo' => null, 'bankAccountInfo' => null, 'depositCycleInfo' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['statusCode' => false, 'contractInfo' => false, 'shopInfo' => false, 'bankAccountInfo' => false, 'depositCycleInfo' => false];
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
    protected static array $attributeMap = ['statusCode' => 'status_code', 'contractInfo' => 'contract_info', 'shopInfo' => 'shop_info', 'bankAccountInfo' => 'bank_account_info', 'depositCycleInfo' => 'deposit_cycle_info'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['statusCode' => 'setStatusCode', 'contractInfo' => 'setContractInfo', 'shopInfo' => 'setShopInfo', 'bankAccountInfo' => 'setBankAccountInfo', 'depositCycleInfo' => 'setDepositCycleInfo'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['statusCode' => 'getStatusCode', 'contractInfo' => 'getContractInfo', 'shopInfo' => 'getShopInfo', 'bankAccountInfo' => 'getBankAccountInfo', 'depositCycleInfo' => 'getDepositCycleInfo'];

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
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('contractInfo', $data ?? [], null);
        $this->setIfExists('shopInfo', $data ?? [], null);
        $this->setIfExists('bankAccountInfo', $data ?? [], null);
        $this->setIfExists('depositCycleInfo', $data ?? [], null);
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
     * Gets statusCode.
     *
     * @return ContractStatus|null
     */
    public function getStatusCode(): mixed
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode.
     *
     * @param ContractStatus $statusCode statusCode
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
     * Gets contractInfo.
     *
     * @return ContractInfoV2|null
     */
    public function getContractInfo(): mixed
    {
        return $this->container['contractInfo'];
    }

    /**
     * Sets contractInfo.
     *
     * @param ContractInfoV2 $contractInfo 契約情報\\ \\ fincodeと契約をする事業者の情報
     */
    public function setContractInfo(mixed $contractInfo): static
    {
        if (is_null($contractInfo)) {
            throw new \InvalidArgumentException('non-nullable contractInfo cannot be null');
        }
        $this->container['contractInfo'] = $contractInfo;

        return $this;
    }

    /**
     * Gets shopInfo.
     *
     * @return ShopInfoV2|null
     */
    public function getShopInfo(): mixed
    {
        return $this->container['shopInfo'];
    }

    /**
     * Sets shopInfo.
     *
     * @param ShopInfoV2 $shopInfo ショップ情報\\ \\ fincodeにおけるショップの情報
     */
    public function setShopInfo(mixed $shopInfo): static
    {
        if (is_null($shopInfo)) {
            throw new \InvalidArgumentException('non-nullable shopInfo cannot be null');
        }
        $this->container['shopInfo'] = $shopInfo;

        return $this;
    }

    /**
     * Gets bankAccountInfo.
     *
     * @return BankAccountInfoV2|null
     */
    public function getBankAccountInfo(): mixed
    {
        return $this->container['bankAccountInfo'];
    }

    /**
     * Sets bankAccountInfo.
     *
     * @param BankAccountInfoV2 $bankAccountInfo 銀行口座情報\\ \\ fincode上での売上入金を受け取るための銀行口座情報
     */
    public function setBankAccountInfo(mixed $bankAccountInfo): static
    {
        if (is_null($bankAccountInfo)) {
            throw new \InvalidArgumentException('non-nullable bankAccountInfo cannot be null');
        }
        $this->container['bankAccountInfo'] = $bankAccountInfo;

        return $this;
    }

    /**
     * Gets depositCycleInfo.
     *
     * @return DepositCycleInfoV2|null
     */
    public function getDepositCycleInfo(): mixed
    {
        return $this->container['depositCycleInfo'];
    }

    /**
     * Sets depositCycleInfo.
     *
     * @param DepositCycleInfoV2 $depositCycleInfo 入金サイクル情報\\ \\ fincode上での売上入金の入金サイクルに関する情報
     */
    public function setDepositCycleInfo(mixed $depositCycleInfo): static
    {
        if (is_null($depositCycleInfo)) {
            throw new \InvalidArgumentException('non-nullable depositCycleInfo cannot be null');
        }
        $this->container['depositCycleInfo'] = $depositCycleInfo;

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

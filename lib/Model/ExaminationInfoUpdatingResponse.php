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
class ExaminationInfoUpdatingResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ExaminationInfo.Updating.Response';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['shopId' => 'string', 'platformId' => 'string', 'shopType' => '\OpenAPI\Fincode\Model\ShopType', 'statusCode' => '\OpenAPI\Fincode\Model\ContractStatus', 'depositCycleMasterId' => '\OpenAPI\Fincode\Model\DepositCycleMasterId', 'contractDetail' => '\OpenAPI\Fincode\Model\ExaminationInfoContractDetail', 'shopItemDetail' => '\OpenAPI\Fincode\Model\ContentInfo[]', 'contractBankAccount' => '\OpenAPI\Fincode\Model\ContractBankAccountInfo', 'contractInputStatus' => '\OpenAPI\Fincode\Model\ExaminationInfoContractInputStatus'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['shopId' => null, 'platformId' => null, 'shopType' => null, 'statusCode' => null, 'depositCycleMasterId' => null, 'contractDetail' => null, 'shopItemDetail' => null, 'contractBankAccount' => null, 'contractInputStatus' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['shopId' => false, 'platformId' => false, 'shopType' => true, 'statusCode' => false, 'depositCycleMasterId' => false, 'contractDetail' => false, 'shopItemDetail' => false, 'contractBankAccount' => false, 'contractInputStatus' => false];
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
    protected static array $attributeMap = ['shopId' => 'shop_id', 'platformId' => 'platform_id', 'shopType' => 'shop_type', 'statusCode' => 'status_code', 'depositCycleMasterId' => 'deposit_cycle_master_id', 'contractDetail' => 'contract_detail', 'shopItemDetail' => 'shop_item_detail', 'contractBankAccount' => 'contract_bank_account', 'contractInputStatus' => 'contract_input_status'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['shopId' => 'setShopId', 'platformId' => 'setPlatformId', 'shopType' => 'setShopType', 'statusCode' => 'setStatusCode', 'depositCycleMasterId' => 'setDepositCycleMasterId', 'contractDetail' => 'setContractDetail', 'shopItemDetail' => 'setShopItemDetail', 'contractBankAccount' => 'setContractBankAccount', 'contractInputStatus' => 'setContractInputStatus'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['shopId' => 'getShopId', 'platformId' => 'getPlatformId', 'shopType' => 'getShopType', 'statusCode' => 'getStatusCode', 'depositCycleMasterId' => 'getDepositCycleMasterId', 'contractDetail' => 'getContractDetail', 'shopItemDetail' => 'getShopItemDetail', 'contractBankAccount' => 'getContractBankAccount', 'contractInputStatus' => 'getContractInputStatus'];

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
        $this->setIfExists('platformId', $data ?? [], null);
        $this->setIfExists('shopType', $data ?? [], null);
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('depositCycleMasterId', $data ?? [], null);
        $this->setIfExists('contractDetail', $data ?? [], null);
        $this->setIfExists('shopItemDetail', $data ?? [], null);
        $this->setIfExists('contractBankAccount', $data ?? [], null);
        $this->setIfExists('contractInputStatus', $data ?? [], null);
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
        if (!is_null($this->container['platformId']) && mb_strlen($this->container['platformId']) > 13) {
            $invalidProperties[] = "invalid value for 'platformId', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['platformId']) && mb_strlen($this->container['platformId']) < 13) {
            $invalidProperties[] = "invalid value for 'platformId', the character length must be bigger than or equal to 13.";
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
     * @param string $shopId ショップID（テナント）
     */
    public function setShopId(mixed $shopId): static
    {
        if (is_null($shopId)) {
            throw new \InvalidArgumentException('non-nullable shopId cannot be null');
        }
        if (mb_strlen($shopId) > 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling ExaminationInfoUpdatingResponse., must be smaller than or equal to 13.');
        }
        if (mb_strlen($shopId) < 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling ExaminationInfoUpdatingResponse., must be bigger than or equal to 13.');
        }
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets platformId.
     *
     * @return string|null
     */
    public function getPlatformId(): mixed
    {
        return $this->container['platformId'];
    }

    /**
     * Sets platformId.
     *
     * @param string $platformId プラットフォームID
     */
    public function setPlatformId(mixed $platformId): static
    {
        if (is_null($platformId)) {
            throw new \InvalidArgumentException('non-nullable platformId cannot be null');
        }
        if (mb_strlen($platformId) > 13) {
            throw new \InvalidArgumentException('invalid length for $platformId when calling ExaminationInfoUpdatingResponse., must be smaller than or equal to 13.');
        }
        if (mb_strlen($platformId) < 13) {
            throw new \InvalidArgumentException('invalid length for $platformId when calling ExaminationInfoUpdatingResponse., must be bigger than or equal to 13.');
        }
        $this->container['platformId'] = $platformId;

        return $this;
    }

    /**
     * Gets shopType.
     *
     * @return ShopType|null
     */
    public function getShopType(): mixed
    {
        return $this->container['shopType'];
    }

    /**
     * Sets shopType.
     *
     * @param ShopType|null $shopType shopType
     */
    public function setShopType(mixed $shopType): static
    {
        if (is_null($shopType)) {
            $this->openAPINullablesSetToNull[] = 'shopType';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shopType', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shopType'] = $shopType;

        return $this;
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
     * Gets depositCycleMasterId.
     *
     * @return DepositCycleMasterId|null
     */
    public function getDepositCycleMasterId(): mixed
    {
        return $this->container['depositCycleMasterId'];
    }

    /**
     * Sets depositCycleMasterId.
     *
     * @param DepositCycleMasterId $depositCycleMasterId depositCycleMasterId
     */
    public function setDepositCycleMasterId(mixed $depositCycleMasterId): static
    {
        if (is_null($depositCycleMasterId)) {
            throw new \InvalidArgumentException('non-nullable depositCycleMasterId cannot be null');
        }
        $this->container['depositCycleMasterId'] = $depositCycleMasterId;

        return $this;
    }

    /**
     * Gets contractDetail.
     *
     * @return ExaminationInfoContractDetail|null
     */
    public function getContractDetail(): mixed
    {
        return $this->container['contractDetail'];
    }

    /**
     * Sets contractDetail.
     *
     * @param ExaminationInfoContractDetail $contractDetail contractDetail
     */
    public function setContractDetail(mixed $contractDetail): static
    {
        if (is_null($contractDetail)) {
            throw new \InvalidArgumentException('non-nullable contractDetail cannot be null');
        }
        $this->container['contractDetail'] = $contractDetail;

        return $this;
    }

    /**
     * Gets shopItemDetail.
     *
     * @return ContentInfo[]|null
     */
    public function getShopItemDetail(): mixed
    {
        return $this->container['shopItemDetail'];
    }

    /**
     * Sets shopItemDetail.
     *
     * @param ContentInfo[] $shopItemDetail ショップ 取扱商材情報\\ \\ fincodeに登録されているショップの取扱商材情報
     */
    public function setShopItemDetail(mixed $shopItemDetail): static
    {
        if (is_null($shopItemDetail)) {
            throw new \InvalidArgumentException('non-nullable shopItemDetail cannot be null');
        }
        $this->container['shopItemDetail'] = $shopItemDetail;

        return $this;
    }

    /**
     * Gets contractBankAccount.
     *
     * @return ContractBankAccountInfo|null
     */
    public function getContractBankAccount(): mixed
    {
        return $this->container['contractBankAccount'];
    }

    /**
     * Sets contractBankAccount.
     *
     * @param ContractBankAccountInfo $contractBankAccount 銀行口座情報\\ \\ fincode上での売上入金を受け取るための銀行口座情報
     */
    public function setContractBankAccount(mixed $contractBankAccount): static
    {
        if (is_null($contractBankAccount)) {
            throw new \InvalidArgumentException('non-nullable contractBankAccount cannot be null');
        }
        $this->container['contractBankAccount'] = $contractBankAccount;

        return $this;
    }

    /**
     * Gets contractInputStatus.
     *
     * @return ExaminationInfoContractInputStatus|null
     */
    public function getContractInputStatus(): mixed
    {
        return $this->container['contractInputStatus'];
    }

    /**
     * Sets contractInputStatus.
     *
     * @param ExaminationInfoContractInputStatus $contractInputStatus contractInputStatus
     */
    public function setContractInputStatus(mixed $contractInputStatus): static
    {
        if (is_null($contractInputStatus)) {
            throw new \InvalidArgumentException('non-nullable contractInputStatus cannot be null');
        }
        $this->container['contractInputStatus'] = $contractInputStatus;

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

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
class PlatformShopUpdatingRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PlatformShop.Updating.Request';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['examinationMasterId' => '\OpenAPI\Fincode\Model\ExaminationMasterId', 'platformRate' => 'string', 'fixedFee' => 'string', 'webRegistrationFee' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['examinationMasterId' => null, 'platformRate' => null, 'fixedFee' => null, 'webRegistrationFee' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['examinationMasterId' => false, 'platformRate' => true, 'fixedFee' => true, 'webRegistrationFee' => true];
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
    protected static array $attributeMap = ['examinationMasterId' => 'examination_master_id', 'platformRate' => 'platform_rate', 'fixedFee' => 'fixed_fee', 'webRegistrationFee' => 'web_registration_fee'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['examinationMasterId' => 'setExaminationMasterId', 'platformRate' => 'setPlatformRate', 'fixedFee' => 'setFixedFee', 'webRegistrationFee' => 'setWebRegistrationFee'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['examinationMasterId' => 'getExaminationMasterId', 'platformRate' => 'getPlatformRate', 'fixedFee' => 'getFixedFee', 'webRegistrationFee' => 'getWebRegistrationFee'];

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
        $this->setIfExists('examinationMasterId', $data ?? [], null);
        $this->setIfExists('platformRate', $data ?? [], null);
        $this->setIfExists('fixedFee', $data ?? [], null);
        $this->setIfExists('webRegistrationFee', $data ?? [], null);
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
        if (null === $this->container['examinationMasterId']) {
            $invalidProperties[] = "'examinationMasterId' can't be null";
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
     * Gets examinationMasterId.
     *
     * @return ExaminationMasterId
     */
    public function getExaminationMasterId(): mixed
    {
        return $this->container['examinationMasterId'];
    }

    /**
     * Sets examinationMasterId.
     *
     * @param ExaminationMasterId $examinationMasterId examinationMasterId
     */
    public function setExaminationMasterId(mixed $examinationMasterId): static
    {
        if (is_null($examinationMasterId)) {
            throw new \InvalidArgumentException('non-nullable examinationMasterId cannot be null');
        }
        $this->container['examinationMasterId'] = $examinationMasterId;

        return $this;
    }

    /**
     * Gets platformRate.
     *
     * @return string|null
     */
    public function getPlatformRate(): mixed
    {
        return $this->container['platformRate'];
    }

    /**
     * Sets platformRate.
     *
     * @param string|null $platformRate （標準）プラットフォーム利用料率。\\ 個別のプラットフォーム利用料率が設定されていないテナントが`id`で指定した決済手段で決済を行うと、このプラットフォーム利用料率が適用されます。\\ \\ 特定のテナントに個別のプラットフォーム利用料を適用するには テナントショップ 更新API を使用します。
     */
    public function setPlatformRate(mixed $platformRate): static
    {
        if (is_null($platformRate)) {
            $this->openAPINullablesSetToNull[] = 'platformRate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('platformRate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['platformRate'] = $platformRate;

        return $this;
    }

    /**
     * Gets fixedFee.
     *
     * @return string|null
     */
    public function getFixedFee(): mixed
    {
        return $this->container['fixedFee'];
    }

    /**
     * Sets fixedFee.
     *
     * @param string|null $fixedFee （標準）プラットフォーム利用料 最低料金。\\ テナントが`examination_master_id`で指定した決済手段で決済を行った際、`platform_rate`による利用料がこの最低料金を下回ると、この最低料金が適用されます。
     */
    public function setFixedFee(mixed $fixedFee): static
    {
        if (is_null($fixedFee)) {
            $this->openAPINullablesSetToNull[] = 'fixedFee';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fixedFee', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fixedFee'] = $fixedFee;

        return $this;
    }

    /**
     * Gets webRegistrationFee.
     *
     * @return string|null
     */
    public function getWebRegistrationFee(): mixed
    {
        return $this->container['webRegistrationFee'];
    }

    /**
     * Sets webRegistrationFee.
     *
     * @param string|null $webRegistrationFee （標準）プラットフォーム利用料 Web登録手数料。\\ テナントにおいて、口座振替における振替用口座登録（Web登録）に成功した際に適用されるWeb登録手数料です。\\ ※ 口座振替のみ
     */
    public function setWebRegistrationFee(mixed $webRegistrationFee): static
    {
        if (is_null($webRegistrationFee)) {
            $this->openAPINullablesSetToNull[] = 'webRegistrationFee';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('webRegistrationFee', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['webRegistrationFee'] = $webRegistrationFee;

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

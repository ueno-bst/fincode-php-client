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
 * &lt;span class&#x3D;\&quot;smallText\&quot;&gt;※ &#x60;pay_type &#x3D; \&quot;Directdebit\&quot;&#x60;（この決済手段登録が口座振替用の口座情報登録である）のとき必須&lt;/span&gt;.
 *
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerPaymentMethodCreatingRequestDirectdebit implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'CustomerPaymentMethod_Creating_Request_directdebit';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['applicationType' => '\OpenAPI\Fincode\Model\DirectDebitApplicationType', 'bankCode' => 'string', 'branchCode' => 'string', 'accountType' => '\OpenAPI\Fincode\Model\AccountType', 'accountNumber' => 'string', 'accountName' => 'string', 'accountNameKana' => 'string', 'paperApplication' => '\OpenAPI\Fincode\Model\PaperApplication'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['applicationType' => null, 'bankCode' => null, 'branchCode' => null, 'accountType' => null, 'accountNumber' => null, 'accountName' => null, 'accountNameKana' => null, 'paperApplication' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['applicationType' => false, 'bankCode' => false, 'branchCode' => true, 'accountType' => true, 'accountNumber' => true, 'accountName' => true, 'accountNameKana' => false, 'paperApplication' => false];
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
    protected static array $attributeMap = ['applicationType' => 'application_type', 'bankCode' => 'bank_code', 'branchCode' => 'branch_code', 'accountType' => 'account_type', 'accountNumber' => 'account_number', 'accountName' => 'account_name', 'accountNameKana' => 'account_name_kana', 'paperApplication' => 'paper_application'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['applicationType' => 'setApplicationType', 'bankCode' => 'setBankCode', 'branchCode' => 'setBranchCode', 'accountType' => 'setAccountType', 'accountNumber' => 'setAccountNumber', 'accountName' => 'setAccountName', 'accountNameKana' => 'setAccountNameKana', 'paperApplication' => 'setPaperApplication'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['applicationType' => 'getApplicationType', 'bankCode' => 'getBankCode', 'branchCode' => 'getBranchCode', 'accountType' => 'getAccountType', 'accountNumber' => 'getAccountNumber', 'accountName' => 'getAccountName', 'accountNameKana' => 'getAccountNameKana', 'paperApplication' => 'getPaperApplication'];

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
        $this->setIfExists('applicationType', $data ?? [], null);
        $this->setIfExists('bankCode', $data ?? [], null);
        $this->setIfExists('branchCode', $data ?? [], null);
        $this->setIfExists('accountType', $data ?? [], null);
        $this->setIfExists('accountNumber', $data ?? [], null);
        $this->setIfExists('accountName', $data ?? [], null);
        $this->setIfExists('accountNameKana', $data ?? [], null);
        $this->setIfExists('paperApplication', $data ?? [], null);
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
        if (null === $this->container['applicationType']) {
            $invalidProperties[] = "'applicationType' can't be null";
        }
        if (null === $this->container['bankCode']) {
            $invalidProperties[] = "'bankCode' can't be null";
        }
        if (mb_strlen($this->container['bankCode']) > 4) {
            $invalidProperties[] = "invalid value for 'bankCode', the character length must be smaller than or equal to 4.";
        }
        if (mb_strlen($this->container['bankCode']) < 4) {
            $invalidProperties[] = "invalid value for 'bankCode', the character length must be bigger than or equal to 4.";
        }
        if (!is_null($this->container['branchCode']) && mb_strlen($this->container['branchCode']) > 3) {
            $invalidProperties[] = "invalid value for 'branchCode', the character length must be smaller than or equal to 3.";
        }
        if (!is_null($this->container['branchCode']) && mb_strlen($this->container['branchCode']) < 3) {
            $invalidProperties[] = "invalid value for 'branchCode', the character length must be bigger than or equal to 3.";
        }
        if (!is_null($this->container['accountNumber']) && mb_strlen($this->container['accountNumber']) > 7) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be smaller than or equal to 7.";
        }
        if (!is_null($this->container['accountNumber']) && mb_strlen($this->container['accountNumber']) < 1) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['accountName']) && mb_strlen($this->container['accountName']) > 45) {
            $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 45.";
        }
        if (!is_null($this->container['accountName']) && mb_strlen($this->container['accountName']) < 1) {
            $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 1.";
        }
        if (null === $this->container['accountNameKana']) {
            $invalidProperties[] = "'accountNameKana' can't be null";
        }
        if (mb_strlen($this->container['accountNameKana']) > 45) {
            $invalidProperties[] = "invalid value for 'accountNameKana', the character length must be smaller than or equal to 45.";
        }
        if (mb_strlen($this->container['accountNameKana']) < 1) {
            $invalidProperties[] = "invalid value for 'accountNameKana', the character length must be bigger than or equal to 1.";
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
     * Gets applicationType.
     *
     * @return DirectDebitApplicationType
     */
    public function getApplicationType(): mixed
    {
        return $this->container['applicationType'];
    }

    /**
     * Sets applicationType.
     *
     * @param DirectDebitApplicationType $applicationType applicationType
     */
    public function setApplicationType(mixed $applicationType): static
    {
        if (is_null($applicationType)) {
            throw new \InvalidArgumentException('non-nullable applicationType cannot be null');
        }
        $this->container['applicationType'] = $applicationType;

        return $this;
    }

    /**
     * Gets bankCode.
     *
     * @return string
     */
    public function getBankCode(): mixed
    {
        return $this->container['bankCode'];
    }

    /**
     * Sets bankCode.
     *
     * @param string $bankCode 金融機関コード。\\ 金融機関のコードです。\\ 例：`0310`
     */
    public function setBankCode(mixed $bankCode): static
    {
        if (is_null($bankCode)) {
            throw new \InvalidArgumentException('non-nullable bankCode cannot be null');
        }
        if (mb_strlen($bankCode) > 4) {
            throw new \InvalidArgumentException('invalid length for $bankCode when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be smaller than or equal to 4.');
        }
        if (mb_strlen($bankCode) < 4) {
            throw new \InvalidArgumentException('invalid length for $bankCode when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be bigger than or equal to 4.');
        }
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets branchCode.
     *
     * @return string|null
     */
    public function getBranchCode(): mixed
    {
        return $this->container['branchCode'];
    }

    /**
     * Sets branchCode.
     *
     * @param string|null $branchCode 支店コード\\ ゆうちょ銀行以外（`bank_code`が`9900`でない）のとき必須
     */
    public function setBranchCode(mixed $branchCode): static
    {
        if (is_null($branchCode)) {
            $this->openAPINullablesSetToNull[] = 'branchCode';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('branchCode', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($branchCode) && mb_strlen($branchCode) > 3) {
            throw new \InvalidArgumentException('invalid length for $branchCode when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be smaller than or equal to 3.');
        }
        if (!is_null($branchCode) && mb_strlen($branchCode) < 3) {
            throw new \InvalidArgumentException('invalid length for $branchCode when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be bigger than or equal to 3.');
        }
        $this->container['branchCode'] = $branchCode;

        return $this;
    }

    /**
     * Gets accountType.
     *
     * @return AccountType|null
     */
    public function getAccountType(): mixed
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType.
     *
     * @param AccountType|null $accountType 預金区分\\ ゆうちょ銀行以外（`bank_code`が`9900`でない）のとき必須  - `1`: 普通 - `2`: 当座
     */
    public function setAccountType(mixed $accountType): static
    {
        if (is_null($accountType)) {
            $this->openAPINullablesSetToNull[] = 'accountType';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountType', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets accountNumber.
     *
     * @return string|null
     */
    public function getAccountNumber(): mixed
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber.
     *
     * @param string|null $accountNumber 口座番号\\ ゆうちょ銀行以外（`bank_code`が`9900`でない）のとき必須\\ 形式： 左0埋め
     */
    public function setAccountNumber(mixed $accountNumber): static
    {
        if (is_null($accountNumber)) {
            $this->openAPINullablesSetToNull[] = 'accountNumber';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountNumber', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($accountNumber) && mb_strlen($accountNumber) > 7) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be smaller than or equal to 7.');
        }
        if (!is_null($accountNumber) && mb_strlen($accountNumber) < 1) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be bigger than or equal to 1.');
        }
        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets accountName.
     *
     * @return string|null
     */
    public function getAccountName(): mixed
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName.
     *
     * @param string|null $accountName 口座名義
     */
    public function setAccountName(mixed $accountName): static
    {
        if (is_null($accountName)) {
            $this->openAPINullablesSetToNull[] = 'accountName';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountName', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($accountName) && mb_strlen($accountName) > 45) {
            throw new \InvalidArgumentException('invalid length for $accountName when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be smaller than or equal to 45.');
        }
        if (!is_null($accountName) && mb_strlen($accountName) < 1) {
            throw new \InvalidArgumentException('invalid length for $accountName when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be bigger than or equal to 1.');
        }
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets accountNameKana.
     *
     * @return string
     */
    public function getAccountNameKana(): mixed
    {
        return $this->container['accountNameKana'];
    }

    /**
     * Sets accountNameKana.
     *
     * @param string $accountNameKana 口座名義（カナ）\\ 形式： 半角英数カナ記号、全角英数カナ記号、一部の記号、半角全角スペース\\ \\ 使用可能な記号は以下の通りです。  - 半角：`.` `(` `)` `–` - 全角：`．` `（` `）` `ー`
     */
    public function setAccountNameKana(mixed $accountNameKana): static
    {
        if (is_null($accountNameKana)) {
            throw new \InvalidArgumentException('non-nullable accountNameKana cannot be null');
        }
        if (mb_strlen($accountNameKana) > 45) {
            throw new \InvalidArgumentException('invalid length for $accountNameKana when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be smaller than or equal to 45.');
        }
        if (mb_strlen($accountNameKana) < 1) {
            throw new \InvalidArgumentException('invalid length for $accountNameKana when calling CustomerPaymentMethodCreatingRequestDirectdebit., must be bigger than or equal to 1.');
        }
        $this->container['accountNameKana'] = $accountNameKana;

        return $this;
    }

    /**
     * Gets paperApplication.
     *
     * @return PaperApplication|null
     */
    public function getPaperApplication(): mixed
    {
        return $this->container['paperApplication'];
    }

    /**
     * Sets paperApplication.
     *
     * @param PaperApplication $paperApplication paperApplication
     */
    public function setPaperApplication(mixed $paperApplication): static
    {
        if (is_null($paperApplication)) {
            throw new \InvalidArgumentException('non-nullable paperApplication cannot be null');
        }
        $this->container['paperApplication'] = $paperApplication;

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

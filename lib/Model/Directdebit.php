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
 * &lt;span class&#x3D;\&quot;smallText\&quot;&gt;この決済手段が振替用口座を表す（&#x60;pay_type &#x3D; Directdebit&#x60;）とき、口座情報の詳細がこの&#x60;directdebit&#x60;オブジェクトに格納されます。&lt;/span&gt;.
 *
 * @implements \ArrayAccess<string, mixed>
 */
class Directdebit implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'directdebit';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['applicationType' => '\OpenAPI\Fincode\Model\DirectDebitApplicationType', 'expectedBillableDate' => 'string', 'lastWithdrawalDate' => 'string', 'lastResultCode' => '\OpenAPI\Fincode\Model\DirectDebitLastResultCode', 'bankType' => 'string', 'bankCode' => 'string', 'bankName' => 'string', 'branchCode' => 'string', 'branchName' => 'string', 'accountType' => 'string', 'accountNumber' => 'string', 'postalAccountNumber1' => 'string', 'postalAccountNumber2' => 'string', 'accountName' => 'string', 'accountNameKana' => 'string', 'paperApplication' => '\OpenAPI\Fincode\Model\PaymentMethodDirectdebitPaperApplication'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['applicationType' => null, 'expectedBillableDate' => null, 'lastWithdrawalDate' => null, 'lastResultCode' => null, 'bankType' => null, 'bankCode' => null, 'bankName' => null, 'branchCode' => null, 'branchName' => null, 'accountType' => null, 'accountNumber' => null, 'postalAccountNumber1' => null, 'postalAccountNumber2' => null, 'accountName' => null, 'accountNameKana' => null, 'paperApplication' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['applicationType' => true, 'expectedBillableDate' => true, 'lastWithdrawalDate' => true, 'lastResultCode' => true, 'bankType' => true, 'bankCode' => true, 'bankName' => true, 'branchCode' => true, 'branchName' => false, 'accountType' => true, 'accountNumber' => true, 'postalAccountNumber1' => true, 'postalAccountNumber2' => true, 'accountName' => true, 'accountNameKana' => true, 'paperApplication' => true];
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
    protected static array $attributeMap = ['applicationType' => 'application_type', 'expectedBillableDate' => 'expected_billable_date', 'lastWithdrawalDate' => 'last_withdrawal_date', 'lastResultCode' => 'last_result_code', 'bankType' => 'bank_type', 'bankCode' => 'bank_code', 'bankName' => 'bank_name', 'branchCode' => 'branch_code', 'branchName' => 'branch_name', 'accountType' => 'account_type', 'accountNumber' => 'account_number', 'postalAccountNumber1' => 'postal_account_number_1', 'postalAccountNumber2' => 'postal_account_number_2', 'accountName' => 'account_name', 'accountNameKana' => 'account_name_kana', 'paperApplication' => 'paper_application'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['applicationType' => 'setApplicationType', 'expectedBillableDate' => 'setExpectedBillableDate', 'lastWithdrawalDate' => 'setLastWithdrawalDate', 'lastResultCode' => 'setLastResultCode', 'bankType' => 'setBankType', 'bankCode' => 'setBankCode', 'bankName' => 'setBankName', 'branchCode' => 'setBranchCode', 'branchName' => 'setBranchName', 'accountType' => 'setAccountType', 'accountNumber' => 'setAccountNumber', 'postalAccountNumber1' => 'setPostalAccountNumber1', 'postalAccountNumber2' => 'setPostalAccountNumber2', 'accountName' => 'setAccountName', 'accountNameKana' => 'setAccountNameKana', 'paperApplication' => 'setPaperApplication'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['applicationType' => 'getApplicationType', 'expectedBillableDate' => 'getExpectedBillableDate', 'lastWithdrawalDate' => 'getLastWithdrawalDate', 'lastResultCode' => 'getLastResultCode', 'bankType' => 'getBankType', 'bankCode' => 'getBankCode', 'bankName' => 'getBankName', 'branchCode' => 'getBranchCode', 'branchName' => 'getBranchName', 'accountType' => 'getAccountType', 'accountNumber' => 'getAccountNumber', 'postalAccountNumber1' => 'getPostalAccountNumber1', 'postalAccountNumber2' => 'getPostalAccountNumber2', 'accountName' => 'getAccountName', 'accountNameKana' => 'getAccountNameKana', 'paperApplication' => 'getPaperApplication'];

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
    public const BANK_TYPE__0 = '0';
    public const BANK_TYPE__1 = '1';
    public const ACCOUNT_TYPE__0 = '0';
    public const ACCOUNT_TYPE__1 = '1';

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getBankTypeAllowableValues(): array
    {
        return [self::BANK_TYPE__0, self::BANK_TYPE__1];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getAccountTypeAllowableValues(): array
    {
        return [self::ACCOUNT_TYPE__0, self::ACCOUNT_TYPE__1];
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
        $this->setIfExists('expectedBillableDate', $data ?? [], null);
        $this->setIfExists('lastWithdrawalDate', $data ?? [], null);
        $this->setIfExists('lastResultCode', $data ?? [], null);
        $this->setIfExists('bankType', $data ?? [], null);
        $this->setIfExists('bankCode', $data ?? [], null);
        $this->setIfExists('bankName', $data ?? [], null);
        $this->setIfExists('branchCode', $data ?? [], null);
        $this->setIfExists('branchName', $data ?? [], null);
        $this->setIfExists('accountType', $data ?? [], null);
        $this->setIfExists('accountNumber', $data ?? [], null);
        $this->setIfExists('postalAccountNumber1', $data ?? [], null);
        $this->setIfExists('postalAccountNumber2', $data ?? [], null);
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
        $allowedValues = $this->getBankTypeAllowableValues();
        if (!is_null($this->container['bankType']) && !in_array($this->container['bankType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'bankType', must be one of '%s'", $this->container['bankType'], implode("', '", $allowedValues));
        }
        if (!is_null($this->container['bankType']) && mb_strlen($this->container['bankType']) > 1) {
            $invalidProperties[] = "invalid value for 'bankType', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['bankType']) && mb_strlen($this->container['bankType']) < 1) {
            $invalidProperties[] = "invalid value for 'bankType', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['bankCode']) && mb_strlen($this->container['bankCode']) > 4) {
            $invalidProperties[] = "invalid value for 'bankCode', the character length must be smaller than or equal to 4.";
        }
        if (!is_null($this->container['bankCode']) && mb_strlen($this->container['bankCode']) < 4) {
            $invalidProperties[] = "invalid value for 'bankCode', the character length must be bigger than or equal to 4.";
        }
        if (!is_null($this->container['bankName']) && mb_strlen($this->container['bankName']) > 45) {
            $invalidProperties[] = "invalid value for 'bankName', the character length must be smaller than or equal to 45.";
        }
        if (!is_null($this->container['bankName']) && mb_strlen($this->container['bankName']) < 1) {
            $invalidProperties[] = "invalid value for 'bankName', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['branchCode']) && mb_strlen($this->container['branchCode']) > 3) {
            $invalidProperties[] = "invalid value for 'branchCode', the character length must be smaller than or equal to 3.";
        }
        if (!is_null($this->container['branchCode']) && mb_strlen($this->container['branchCode']) < 3) {
            $invalidProperties[] = "invalid value for 'branchCode', the character length must be bigger than or equal to 3.";
        }
        if (!is_null($this->container['branchName']) && mb_strlen($this->container['branchName']) > 45) {
            $invalidProperties[] = "invalid value for 'branchName', the character length must be smaller than or equal to 45.";
        }
        if (!is_null($this->container['branchName']) && mb_strlen($this->container['branchName']) < 1) {
            $invalidProperties[] = "invalid value for 'branchName', the character length must be bigger than or equal to 1.";
        }
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['accountType']) && !in_array($this->container['accountType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'accountType', must be one of '%s'", $this->container['accountType'], implode("', '", $allowedValues));
        }
        if (!is_null($this->container['accountType']) && mb_strlen($this->container['accountType']) > 1) {
            $invalidProperties[] = "invalid value for 'accountType', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['accountType']) && mb_strlen($this->container['accountType']) < 1) {
            $invalidProperties[] = "invalid value for 'accountType', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['accountNumber']) && mb_strlen($this->container['accountNumber']) > 7) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be smaller than or equal to 7.";
        }
        if (!is_null($this->container['accountNumber']) && mb_strlen($this->container['accountNumber']) < 1) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['postalAccountNumber1']) && mb_strlen($this->container['postalAccountNumber1']) > 5) {
            $invalidProperties[] = "invalid value for 'postalAccountNumber1', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['postalAccountNumber1']) && mb_strlen($this->container['postalAccountNumber1']) < 1) {
            $invalidProperties[] = "invalid value for 'postalAccountNumber1', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['postalAccountNumber2']) && mb_strlen($this->container['postalAccountNumber2']) > 8) {
            $invalidProperties[] = "invalid value for 'postalAccountNumber2', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['postalAccountNumber2']) && mb_strlen($this->container['postalAccountNumber2']) < 1) {
            $invalidProperties[] = "invalid value for 'postalAccountNumber2', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['accountName']) && mb_strlen($this->container['accountName']) > 45) {
            $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 45.";
        }
        if (!is_null($this->container['accountName']) && mb_strlen($this->container['accountName']) < 1) {
            $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['accountNameKana']) && mb_strlen($this->container['accountNameKana']) > 45) {
            $invalidProperties[] = "invalid value for 'accountNameKana', the character length must be smaller than or equal to 45.";
        }
        if (!is_null($this->container['accountNameKana']) && mb_strlen($this->container['accountNameKana']) < 1) {
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
     * @return DirectDebitApplicationType|null
     */
    public function getApplicationType(): mixed
    {
        return $this->container['applicationType'];
    }

    /**
     * Sets applicationType.
     *
     * @param DirectDebitApplicationType|null $applicationType applicationType
     */
    public function setApplicationType(mixed $applicationType): static
    {
        if (is_null($applicationType)) {
            $this->openAPINullablesSetToNull[] = 'applicationType';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applicationType', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applicationType'] = $applicationType;

        return $this;
    }

    /**
     * Gets expectedBillableDate.
     *
     * @return string|null
     */
    public function getExpectedBillableDate(): mixed
    {
        return $this->container['expectedBillableDate'];
    }

    /**
     * Sets expectedBillableDate.
     *
     * @param string|null $expectedBillableDate 請求可能予定日。\\ 口座登録後、実際に請求依頼が可能となると予定される日時です。\\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setExpectedBillableDate(mixed $expectedBillableDate): static
    {
        if (is_null($expectedBillableDate)) {
            $this->openAPINullablesSetToNull[] = 'expectedBillableDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expectedBillableDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expectedBillableDate'] = $expectedBillableDate;

        return $this;
    }

    /**
     * Gets lastWithdrawalDate.
     *
     * @return string|null
     */
    public function getLastWithdrawalDate(): mixed
    {
        return $this->container['lastWithdrawalDate'];
    }

    /**
     * Sets lastWithdrawalDate.
     *
     * @param string|null $lastWithdrawalDate 最終引落日。\\ 金融機関によってこの口座から実際に引き落とされた実績日のうち、最も新しい日時です。\\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setLastWithdrawalDate(mixed $lastWithdrawalDate): static
    {
        if (is_null($lastWithdrawalDate)) {
            $this->openAPINullablesSetToNull[] = 'lastWithdrawalDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastWithdrawalDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastWithdrawalDate'] = $lastWithdrawalDate;

        return $this;
    }

    /**
     * Gets lastResultCode.
     *
     * @return DirectDebitLastResultCode|null
     */
    public function getLastResultCode(): mixed
    {
        return $this->container['lastResultCode'];
    }

    /**
     * Sets lastResultCode.
     *
     * @param DirectDebitLastResultCode|null $lastResultCode lastResultCode
     */
    public function setLastResultCode(mixed $lastResultCode): static
    {
        if (is_null($lastResultCode)) {
            $this->openAPINullablesSetToNull[] = 'lastResultCode';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastResultCode', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastResultCode'] = $lastResultCode;

        return $this;
    }

    /**
     * Gets bankType.
     *
     * @return string|null
     */
    public function getBankType(): mixed
    {
        return $this->container['bankType'];
    }

    /**
     * Sets bankType.
     *
     * @param string|null $bankType 金融機関種別。  - `0`: ゆうちょ銀行以外の金融機関 - `1`: ゆうちょ銀行
     */
    public function setBankType(mixed $bankType): static
    {
        if (is_null($bankType)) {
            $this->openAPINullablesSetToNull[] = 'bankType';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bankType', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getBankTypeAllowableValues();
        if (!is_null($bankType) && !in_array($bankType, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'bankType', must be one of '%s'", $bankType, implode("', '", $allowedValues)));
        }
        if (!is_null($bankType) && mb_strlen($bankType) > 1) {
            throw new \InvalidArgumentException('invalid length for $bankType when calling Directdebit., must be smaller than or equal to 1.');
        }
        if (!is_null($bankType) && mb_strlen($bankType) < 1) {
            throw new \InvalidArgumentException('invalid length for $bankType when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['bankType'] = $bankType;

        return $this;
    }

    /**
     * Gets bankCode.
     *
     * @return string|null
     */
    public function getBankCode(): mixed
    {
        return $this->container['bankCode'];
    }

    /**
     * Sets bankCode.
     *
     * @param string|null $bankCode 金融機関コード。\\ 金融機関のコードです。\\ 例：`0310`
     */
    public function setBankCode(mixed $bankCode): static
    {
        if (is_null($bankCode)) {
            $this->openAPINullablesSetToNull[] = 'bankCode';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bankCode', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bankCode) && mb_strlen($bankCode) > 4) {
            throw new \InvalidArgumentException('invalid length for $bankCode when calling Directdebit., must be smaller than or equal to 4.');
        }
        if (!is_null($bankCode) && mb_strlen($bankCode) < 4) {
            throw new \InvalidArgumentException('invalid length for $bankCode when calling Directdebit., must be bigger than or equal to 4.');
        }
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets bankName.
     *
     * @return string|null
     */
    public function getBankName(): mixed
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName.
     *
     * @param string|null $bankName 金融機関名
     */
    public function setBankName(mixed $bankName): static
    {
        if (is_null($bankName)) {
            $this->openAPINullablesSetToNull[] = 'bankName';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bankName', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bankName) && mb_strlen($bankName) > 45) {
            throw new \InvalidArgumentException('invalid length for $bankName when calling Directdebit., must be smaller than or equal to 45.');
        }
        if (!is_null($bankName) && mb_strlen($bankName) < 1) {
            throw new \InvalidArgumentException('invalid length for $bankName when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['bankName'] = $bankName;

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
     * @param string|null $branchCode 支店コード。\\ 金融機関の支店コードです。\\ 例：`001`
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
            throw new \InvalidArgumentException('invalid length for $branchCode when calling Directdebit., must be smaller than or equal to 3.');
        }
        if (!is_null($branchCode) && mb_strlen($branchCode) < 3) {
            throw new \InvalidArgumentException('invalid length for $branchCode when calling Directdebit., must be bigger than or equal to 3.');
        }
        $this->container['branchCode'] = $branchCode;

        return $this;
    }

    /**
     * Gets branchName.
     *
     * @return string|null
     */
    public function getBranchName(): mixed
    {
        return $this->container['branchName'];
    }

    /**
     * Sets branchName.
     *
     * @param string $branchName 支店名
     */
    public function setBranchName(mixed $branchName): static
    {
        if (is_null($branchName)) {
            throw new \InvalidArgumentException('non-nullable branchName cannot be null');
        }
        if (mb_strlen($branchName) > 45) {
            throw new \InvalidArgumentException('invalid length for $branchName when calling Directdebit., must be smaller than or equal to 45.');
        }
        if (mb_strlen($branchName) < 1) {
            throw new \InvalidArgumentException('invalid length for $branchName when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['branchName'] = $branchName;

        return $this;
    }

    /**
     * Gets accountType.
     *
     * @return string|null
     */
    public function getAccountType(): mixed
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType.
     *
     * @param string|null $accountType 口座種別。  - `0`: 普通預金 - `1`: 当座預金
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
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($accountType) && !in_array($accountType, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'accountType', must be one of '%s'", $accountType, implode("', '", $allowedValues)));
        }
        if (!is_null($accountType) && mb_strlen($accountType) > 1) {
            throw new \InvalidArgumentException('invalid length for $accountType when calling Directdebit., must be smaller than or equal to 1.');
        }
        if (!is_null($accountType) && mb_strlen($accountType) < 1) {
            throw new \InvalidArgumentException('invalid length for $accountType when calling Directdebit., must be bigger than or equal to 1.');
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
     * @param string|null $accountNumber 口座番号
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
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling Directdebit., must be smaller than or equal to 7.');
        }
        if (!is_null($accountNumber) && mb_strlen($accountNumber) < 1) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets postalAccountNumber1.
     *
     * @return string|null
     */
    public function getPostalAccountNumber1(): mixed
    {
        return $this->container['postalAccountNumber1'];
    }

    /**
     * Sets postalAccountNumber1.
     *
     * @param string|null $postalAccountNumber1 ゆうちょ 預金記号
     */
    public function setPostalAccountNumber1(mixed $postalAccountNumber1): static
    {
        if (is_null($postalAccountNumber1)) {
            $this->openAPINullablesSetToNull[] = 'postalAccountNumber1';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postalAccountNumber1', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($postalAccountNumber1) && mb_strlen($postalAccountNumber1) > 5) {
            throw new \InvalidArgumentException('invalid length for $postalAccountNumber1 when calling Directdebit., must be smaller than or equal to 5.');
        }
        if (!is_null($postalAccountNumber1) && mb_strlen($postalAccountNumber1) < 1) {
            throw new \InvalidArgumentException('invalid length for $postalAccountNumber1 when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['postalAccountNumber1'] = $postalAccountNumber1;

        return $this;
    }

    /**
     * Gets postalAccountNumber2.
     *
     * @return string|null
     */
    public function getPostalAccountNumber2(): mixed
    {
        return $this->container['postalAccountNumber2'];
    }

    /**
     * Sets postalAccountNumber2.
     *
     * @param string|null $postalAccountNumber2 ゆうちょ 預金番号
     */
    public function setPostalAccountNumber2(mixed $postalAccountNumber2): static
    {
        if (is_null($postalAccountNumber2)) {
            $this->openAPINullablesSetToNull[] = 'postalAccountNumber2';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postalAccountNumber2', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($postalAccountNumber2) && mb_strlen($postalAccountNumber2) > 8) {
            throw new \InvalidArgumentException('invalid length for $postalAccountNumber2 when calling Directdebit., must be smaller than or equal to 8.');
        }
        if (!is_null($postalAccountNumber2) && mb_strlen($postalAccountNumber2) < 1) {
            throw new \InvalidArgumentException('invalid length for $postalAccountNumber2 when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['postalAccountNumber2'] = $postalAccountNumber2;

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
            throw new \InvalidArgumentException('invalid length for $accountName when calling Directdebit., must be smaller than or equal to 45.');
        }
        if (!is_null($accountName) && mb_strlen($accountName) < 1) {
            throw new \InvalidArgumentException('invalid length for $accountName when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets accountNameKana.
     *
     * @return string|null
     */
    public function getAccountNameKana(): mixed
    {
        return $this->container['accountNameKana'];
    }

    /**
     * Sets accountNameKana.
     *
     * @param string|null $accountNameKana 口座名義（カナ）
     */
    public function setAccountNameKana(mixed $accountNameKana): static
    {
        if (is_null($accountNameKana)) {
            $this->openAPINullablesSetToNull[] = 'accountNameKana';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountNameKana', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($accountNameKana) && mb_strlen($accountNameKana) > 45) {
            throw new \InvalidArgumentException('invalid length for $accountNameKana when calling Directdebit., must be smaller than or equal to 45.');
        }
        if (!is_null($accountNameKana) && mb_strlen($accountNameKana) < 1) {
            throw new \InvalidArgumentException('invalid length for $accountNameKana when calling Directdebit., must be bigger than or equal to 1.');
        }
        $this->container['accountNameKana'] = $accountNameKana;

        return $this;
    }

    /**
     * Gets paperApplication.
     *
     * @return PaymentMethodDirectdebitPaperApplication|null
     */
    public function getPaperApplication(): mixed
    {
        return $this->container['paperApplication'];
    }

    /**
     * Sets paperApplication.
     *
     * @param PaymentMethodDirectdebitPaperApplication|null $paperApplication paperApplication
     */
    public function setPaperApplication(mixed $paperApplication): static
    {
        if (is_null($paperApplication)) {
            $this->openAPINullablesSetToNull[] = 'paperApplication';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paperApplication', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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

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
class PlatformAccount implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PlatformAccount';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['id' => 'string', 'accountId' => 'int', 'shopId' => 'string', 'depositAmount' => 'int', 'depositDate' => 'string', 'scheduledDepositDate' => 'string', 'aggregateTermStart' => 'string', 'aggregateTermEnd' => 'string', 'paymentDeadline' => 'string', 'paymentCompletionDate' => 'string', 'statusCode' => '\OpenAPI\Fincode\Model\DepositStatusCode', 'count' => 'int', 'settlementAmount' => 'int', 'bankTransferFee' => 'int', 'totalAmount' => 'int', 'feeAmount' => 'int', 'taxableFeeAmount' => 'int', 'nontaxableFeeAmount' => 'int', 'taxAmount' => 'int', 'webRegistrationFeeAmount' => 'int', 'platformFeeAmount' => 'int', 'platformFeeTaxAmount' => 'int', 'platformWebRegistrationFeeAmount' => 'int', 'created' => 'string', 'updated' => 'string', 'depositDestination' => '\OpenAPI\Fincode\Model\DepositTargetBankAccountInfo', 'verified' => 'bool'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['id' => null, 'accountId' => null, 'shopId' => null, 'depositAmount' => null, 'depositDate' => null, 'scheduledDepositDate' => null, 'aggregateTermStart' => null, 'aggregateTermEnd' => null, 'paymentDeadline' => null, 'paymentCompletionDate' => null, 'statusCode' => null, 'count' => null, 'settlementAmount' => null, 'bankTransferFee' => null, 'totalAmount' => null, 'feeAmount' => null, 'taxableFeeAmount' => null, 'nontaxableFeeAmount' => null, 'taxAmount' => null, 'webRegistrationFeeAmount' => null, 'platformFeeAmount' => null, 'platformFeeTaxAmount' => null, 'platformWebRegistrationFeeAmount' => null, 'created' => null, 'updated' => null, 'depositDestination' => null, 'verified' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['id' => false, 'accountId' => false, 'shopId' => false, 'depositAmount' => true, 'depositDate' => true, 'scheduledDepositDate' => true, 'aggregateTermStart' => true, 'aggregateTermEnd' => true, 'paymentDeadline' => true, 'paymentCompletionDate' => true, 'statusCode' => false, 'count' => true, 'settlementAmount' => true, 'bankTransferFee' => true, 'totalAmount' => true, 'feeAmount' => true, 'taxableFeeAmount' => true, 'nontaxableFeeAmount' => true, 'taxAmount' => true, 'webRegistrationFeeAmount' => true, 'platformFeeAmount' => true, 'platformFeeTaxAmount' => true, 'platformWebRegistrationFeeAmount' => true, 'created' => false, 'updated' => true, 'depositDestination' => false, 'verified' => false];
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
    protected static array $attributeMap = ['id' => 'id', 'accountId' => 'account_id', 'shopId' => 'shop_id', 'depositAmount' => 'deposit_amount', 'depositDate' => 'deposit_date', 'scheduledDepositDate' => 'scheduled_deposit_date', 'aggregateTermStart' => 'aggregate_term_start', 'aggregateTermEnd' => 'aggregate_term_end', 'paymentDeadline' => 'payment_deadline', 'paymentCompletionDate' => 'payment_completion_date', 'statusCode' => 'status_code', 'count' => 'count', 'settlementAmount' => 'settlement_amount', 'bankTransferFee' => 'bank_transfer_fee', 'totalAmount' => 'total_amount', 'feeAmount' => 'fee_amount', 'taxableFeeAmount' => 'taxable_fee_amount', 'nontaxableFeeAmount' => 'nontaxable_fee_amount', 'taxAmount' => 'tax_amount', 'webRegistrationFeeAmount' => 'web_registration_fee_amount', 'platformFeeAmount' => 'platform_fee_amount', 'platformFeeTaxAmount' => 'platform_fee_tax_amount', 'platformWebRegistrationFeeAmount' => 'platform_web_registration_fee_amount', 'created' => 'created', 'updated' => 'updated', 'depositDestination' => 'deposit_destination', 'verified' => 'verified'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['id' => 'setId', 'accountId' => 'setAccountId', 'shopId' => 'setShopId', 'depositAmount' => 'setDepositAmount', 'depositDate' => 'setDepositDate', 'scheduledDepositDate' => 'setScheduledDepositDate', 'aggregateTermStart' => 'setAggregateTermStart', 'aggregateTermEnd' => 'setAggregateTermEnd', 'paymentDeadline' => 'setPaymentDeadline', 'paymentCompletionDate' => 'setPaymentCompletionDate', 'statusCode' => 'setStatusCode', 'count' => 'setCount', 'settlementAmount' => 'setSettlementAmount', 'bankTransferFee' => 'setBankTransferFee', 'totalAmount' => 'setTotalAmount', 'feeAmount' => 'setFeeAmount', 'taxableFeeAmount' => 'setTaxableFeeAmount', 'nontaxableFeeAmount' => 'setNontaxableFeeAmount', 'taxAmount' => 'setTaxAmount', 'webRegistrationFeeAmount' => 'setWebRegistrationFeeAmount', 'platformFeeAmount' => 'setPlatformFeeAmount', 'platformFeeTaxAmount' => 'setPlatformFeeTaxAmount', 'platformWebRegistrationFeeAmount' => 'setPlatformWebRegistrationFeeAmount', 'created' => 'setCreated', 'updated' => 'setUpdated', 'depositDestination' => 'setDepositDestination', 'verified' => 'setVerified'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['id' => 'getId', 'accountId' => 'getAccountId', 'shopId' => 'getShopId', 'depositAmount' => 'getDepositAmount', 'depositDate' => 'getDepositDate', 'scheduledDepositDate' => 'getScheduledDepositDate', 'aggregateTermStart' => 'getAggregateTermStart', 'aggregateTermEnd' => 'getAggregateTermEnd', 'paymentDeadline' => 'getPaymentDeadline', 'paymentCompletionDate' => 'getPaymentCompletionDate', 'statusCode' => 'getStatusCode', 'count' => 'getCount', 'settlementAmount' => 'getSettlementAmount', 'bankTransferFee' => 'getBankTransferFee', 'totalAmount' => 'getTotalAmount', 'feeAmount' => 'getFeeAmount', 'taxableFeeAmount' => 'getTaxableFeeAmount', 'nontaxableFeeAmount' => 'getNontaxableFeeAmount', 'taxAmount' => 'getTaxAmount', 'webRegistrationFeeAmount' => 'getWebRegistrationFeeAmount', 'platformFeeAmount' => 'getPlatformFeeAmount', 'platformFeeTaxAmount' => 'getPlatformFeeTaxAmount', 'platformWebRegistrationFeeAmount' => 'getPlatformWebRegistrationFeeAmount', 'created' => 'getCreated', 'updated' => 'getUpdated', 'depositDestination' => 'getDepositDestination', 'verified' => 'getVerified'];

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
        $this->setIfExists('accountId', $data ?? [], null);
        $this->setIfExists('shopId', $data ?? [], null);
        $this->setIfExists('depositAmount', $data ?? [], null);
        $this->setIfExists('depositDate', $data ?? [], null);
        $this->setIfExists('scheduledDepositDate', $data ?? [], null);
        $this->setIfExists('aggregateTermStart', $data ?? [], null);
        $this->setIfExists('aggregateTermEnd', $data ?? [], null);
        $this->setIfExists('paymentDeadline', $data ?? [], null);
        $this->setIfExists('paymentCompletionDate', $data ?? [], null);
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('settlementAmount', $data ?? [], null);
        $this->setIfExists('bankTransferFee', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('feeAmount', $data ?? [], null);
        $this->setIfExists('taxableFeeAmount', $data ?? [], null);
        $this->setIfExists('nontaxableFeeAmount', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('webRegistrationFeeAmount', $data ?? [], null);
        $this->setIfExists('platformFeeAmount', $data ?? [], null);
        $this->setIfExists('platformFeeTaxAmount', $data ?? [], null);
        $this->setIfExists('platformWebRegistrationFeeAmount', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('depositDestination', $data ?? [], null);
        $this->setIfExists('verified', $data ?? [], null);
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
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) > 20) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) < 1) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['shopId']) && mb_strlen($this->container['shopId']) > 13) {
            $invalidProperties[] = "invalid value for 'shopId', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['shopId']) && mb_strlen($this->container['shopId']) < 13) {
            $invalidProperties[] = "invalid value for 'shopId', the character length must be bigger than or equal to 13.";
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
     * @param string $id プラットフォーム利用料収入ID
     */
    public function setId(mixed $id): static
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if (mb_strlen($id) > 20) {
            throw new \InvalidArgumentException('invalid length for $id when calling PlatformAccount., must be smaller than or equal to 20.');
        }
        if (mb_strlen($id) < 1) {
            throw new \InvalidArgumentException('invalid length for $id when calling PlatformAccount., must be bigger than or equal to 1.');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets accountId.
     *
     * @return int|null
     */
    public function getAccountId(): mixed
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId.
     *
     * @param int $accountId 精算ID
     */
    public function setAccountId(mixed $accountId): static
    {
        if (is_null($accountId)) {
            throw new \InvalidArgumentException('non-nullable accountId cannot be null');
        }
        $this->container['accountId'] = $accountId;

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
            throw new \InvalidArgumentException('invalid length for $shopId when calling PlatformAccount., must be smaller than or equal to 13.');
        }
        if (mb_strlen($shopId) < 13) {
            throw new \InvalidArgumentException('invalid length for $shopId when calling PlatformAccount., must be bigger than or equal to 13.');
        }
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets depositAmount.
     *
     * @return int|null
     */
    public function getDepositAmount(): mixed
    {
        return $this->container['depositAmount'];
    }

    /**
     * Sets depositAmount.
     *
     * @param int|null $depositAmount プラットフォーム利用料収入 入金額\\ \\ プラットフォームショップに入金される（入金が予定されている）プラットフォーム利用料による売上金の額です。\\ 精算金額（`settlement_amount`）から振込手数料（`bank_transfer_fee`）を引いた金額に一致します。
     */
    public function setDepositAmount(mixed $depositAmount): static
    {
        if (is_null($depositAmount)) {
            $this->openAPINullablesSetToNull[] = 'depositAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('depositAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['depositAmount'] = $depositAmount;

        return $this;
    }

    /**
     * Gets depositDate.
     *
     * @return string|null
     */
    public function getDepositDate(): mixed
    {
        return $this->container['depositDate'];
    }

    /**
     * Sets depositDate.
     *
     * @param string|null $depositDate プラットフォーム利用料収入 入金実績日\\ 形式： `yyyy/MM/dd HH:MM`
     */
    public function setDepositDate(mixed $depositDate): static
    {
        if (is_null($depositDate)) {
            $this->openAPINullablesSetToNull[] = 'depositDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('depositDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['depositDate'] = $depositDate;

        return $this;
    }

    /**
     * Gets scheduledDepositDate.
     *
     * @return string|null
     */
    public function getScheduledDepositDate(): mixed
    {
        return $this->container['scheduledDepositDate'];
    }

    /**
     * Sets scheduledDepositDate.
     *
     * @param string|null $scheduledDepositDate プラットフォーム利用料収入 入金予定日\\ 形式： `yyyy/MM/dd HH:MM`
     */
    public function setScheduledDepositDate(mixed $scheduledDepositDate): static
    {
        if (is_null($scheduledDepositDate)) {
            $this->openAPINullablesSetToNull[] = 'scheduledDepositDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scheduledDepositDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['scheduledDepositDate'] = $scheduledDepositDate;

        return $this;
    }

    /**
     * Gets aggregateTermStart.
     *
     * @return string|null
     */
    public function getAggregateTermStart(): mixed
    {
        return $this->container['aggregateTermStart'];
    }

    /**
     * Sets aggregateTermStart.
     *
     * @param string|null $aggregateTermStart プラットフォーム利用料収入 集計期間 開始日\\ 形式： `yyyy/MM/dd HH:MM`
     */
    public function setAggregateTermStart(mixed $aggregateTermStart): static
    {
        if (is_null($aggregateTermStart)) {
            $this->openAPINullablesSetToNull[] = 'aggregateTermStart';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aggregateTermStart', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aggregateTermStart'] = $aggregateTermStart;

        return $this;
    }

    /**
     * Gets aggregateTermEnd.
     *
     * @return string|null
     */
    public function getAggregateTermEnd(): mixed
    {
        return $this->container['aggregateTermEnd'];
    }

    /**
     * Sets aggregateTermEnd.
     *
     * @param string|null $aggregateTermEnd プラットフォーム利用料収入 集計期間 終了日\\ 形式： `yyyy/MM/dd HH:MM`
     */
    public function setAggregateTermEnd(mixed $aggregateTermEnd): static
    {
        if (is_null($aggregateTermEnd)) {
            $this->openAPINullablesSetToNull[] = 'aggregateTermEnd';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aggregateTermEnd', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aggregateTermEnd'] = $aggregateTermEnd;

        return $this;
    }

    /**
     * Gets paymentDeadline.
     *
     * @return string|null
     */
    public function getPaymentDeadline(): mixed
    {
        return $this->container['paymentDeadline'];
    }

    /**
     * Sets paymentDeadline.
     *
     * @param string|null $paymentDeadline （請求が発生した場合）支払期限日\\ 形式： `yyyy/MM/dd HH:MM`
     */
    public function setPaymentDeadline(mixed $paymentDeadline): static
    {
        if (is_null($paymentDeadline)) {
            $this->openAPINullablesSetToNull[] = 'paymentDeadline';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paymentDeadline', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paymentDeadline'] = $paymentDeadline;

        return $this;
    }

    /**
     * Gets paymentCompletionDate.
     *
     * @return string|null
     */
    public function getPaymentCompletionDate(): mixed
    {
        return $this->container['paymentCompletionDate'];
    }

    /**
     * Sets paymentCompletionDate.
     *
     * @param string|null $paymentCompletionDate （請求が発生した場合）請求日\\ 形式： `yyyy/MM/dd HH:MM`
     */
    public function setPaymentCompletionDate(mixed $paymentCompletionDate): static
    {
        if (is_null($paymentCompletionDate)) {
            $this->openAPINullablesSetToNull[] = 'paymentCompletionDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paymentCompletionDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paymentCompletionDate'] = $paymentCompletionDate;

        return $this;
    }

    /**
     * Gets statusCode.
     *
     * @return DepositStatusCode|null
     */
    public function getStatusCode(): mixed
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode.
     *
     * @param DepositStatusCode $statusCode statusCode
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
     * Gets count.
     *
     * @return int|null
     */
    public function getCount(): mixed
    {
        return $this->container['count'];
    }

    /**
     * Sets count.
     *
     * @param int|null $count このプラットフォーム利用料収入に含まれる決済の件数
     */
    public function setCount(mixed $count): static
    {
        if (is_null($count)) {
            $this->openAPINullablesSetToNull[] = 'count';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets settlementAmount.
     *
     * @return int|null
     */
    public function getSettlementAmount(): mixed
    {
        return $this->container['settlementAmount'];
    }

    /**
     * Sets settlementAmount.
     *
     * @param int|null $settlementAmount 精算金額
     */
    public function setSettlementAmount(mixed $settlementAmount): static
    {
        if (is_null($settlementAmount)) {
            $this->openAPINullablesSetToNull[] = 'settlementAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('settlementAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['settlementAmount'] = $settlementAmount;

        return $this;
    }

    /**
     * Gets bankTransferFee.
     *
     * @return int|null
     */
    public function getBankTransferFee(): mixed
    {
        return $this->container['bankTransferFee'];
    }

    /**
     * Sets bankTransferFee.
     *
     * @param int|null $bankTransferFee 振込手数料
     */
    public function setBankTransferFee(mixed $bankTransferFee): static
    {
        if (is_null($bankTransferFee)) {
            $this->openAPINullablesSetToNull[] = 'bankTransferFee';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bankTransferFee', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bankTransferFee'] = $bankTransferFee;

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
     * @param int|null $totalAmount このプラットフォーム利用料入金において精算の対象となった取引の総額
     */
    public function setTotalAmount(mixed $totalAmount): static
    {
        if (is_null($totalAmount)) {
            $this->openAPINullablesSetToNull[] = 'totalAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets feeAmount.
     *
     * @return int|null
     */
    public function getFeeAmount(): mixed
    {
        return $this->container['feeAmount'];
    }

    /**
     * Sets feeAmount.
     *
     * @param int|null $feeAmount このプラットフォーム利用料入金において精算の対象となった取引にかかるfincodeへの手数料
     */
    public function setFeeAmount(mixed $feeAmount): static
    {
        if (is_null($feeAmount)) {
            $this->openAPINullablesSetToNull[] = 'feeAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feeAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['feeAmount'] = $feeAmount;

        return $this;
    }

    /**
     * Gets taxableFeeAmount.
     *
     * @return int|null
     */
    public function getTaxableFeeAmount(): mixed
    {
        return $this->container['taxableFeeAmount'];
    }

    /**
     * Sets taxableFeeAmount.
     *
     * @param int|null $taxableFeeAmount 決済手数料 課税対象額
     */
    public function setTaxableFeeAmount(mixed $taxableFeeAmount): static
    {
        if (is_null($taxableFeeAmount)) {
            $this->openAPINullablesSetToNull[] = 'taxableFeeAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxableFeeAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxableFeeAmount'] = $taxableFeeAmount;

        return $this;
    }

    /**
     * Gets nontaxableFeeAmount.
     *
     * @return int|null
     */
    public function getNontaxableFeeAmount(): mixed
    {
        return $this->container['nontaxableFeeAmount'];
    }

    /**
     * Sets nontaxableFeeAmount.
     *
     * @param int|null $nontaxableFeeAmount 決済手数料 非課税対象額
     */
    public function setNontaxableFeeAmount(mixed $nontaxableFeeAmount): static
    {
        if (is_null($nontaxableFeeAmount)) {
            $this->openAPINullablesSetToNull[] = 'nontaxableFeeAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nontaxableFeeAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nontaxableFeeAmount'] = $nontaxableFeeAmount;

        return $this;
    }

    /**
     * Gets taxAmount.
     *
     * @return int|null
     */
    public function getTaxAmount(): mixed
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount.
     *
     * @param int|null $taxAmount 決済手数料 消費税額
     */
    public function setTaxAmount(mixed $taxAmount): static
    {
        if (is_null($taxAmount)) {
            $this->openAPINullablesSetToNull[] = 'taxAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets webRegistrationFeeAmount.
     *
     * @return int|null
     */
    public function getWebRegistrationFeeAmount(): mixed
    {
        return $this->container['webRegistrationFeeAmount'];
    }

    /**
     * Sets webRegistrationFeeAmount.
     *
     * @param int|null $webRegistrationFeeAmount このプラットフォーム利用料入金の精算期間中に発生した振替口座のWeb登録手数料\\ ※ 口座振替のみ
     */
    public function setWebRegistrationFeeAmount(mixed $webRegistrationFeeAmount): static
    {
        if (is_null($webRegistrationFeeAmount)) {
            $this->openAPINullablesSetToNull[] = 'webRegistrationFeeAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('webRegistrationFeeAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['webRegistrationFeeAmount'] = $webRegistrationFeeAmount;

        return $this;
    }

    /**
     * Gets platformFeeAmount.
     *
     * @return int|null
     */
    public function getPlatformFeeAmount(): mixed
    {
        return $this->container['platformFeeAmount'];
    }

    /**
     * Sets platformFeeAmount.
     *
     * @param int|null $platformFeeAmount このプラットフォーム利用料入金において精算の対象となった取引にかかるプラットフォーム利用料
     */
    public function setPlatformFeeAmount(mixed $platformFeeAmount): static
    {
        if (is_null($platformFeeAmount)) {
            $this->openAPINullablesSetToNull[] = 'platformFeeAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('platformFeeAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['platformFeeAmount'] = $platformFeeAmount;

        return $this;
    }

    /**
     * Gets platformFeeTaxAmount.
     *
     * @return int|null
     */
    public function getPlatformFeeTaxAmount(): mixed
    {
        return $this->container['platformFeeTaxAmount'];
    }

    /**
     * Sets platformFeeTaxAmount.
     *
     * @param int|null $platformFeeTaxAmount このプラットフォーム利用料入金において精算の対象となった取引にかかるプラットフォーム利用料の消費税
     */
    public function setPlatformFeeTaxAmount(mixed $platformFeeTaxAmount): static
    {
        if (is_null($platformFeeTaxAmount)) {
            $this->openAPINullablesSetToNull[] = 'platformFeeTaxAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('platformFeeTaxAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['platformFeeTaxAmount'] = $platformFeeTaxAmount;

        return $this;
    }

    /**
     * Gets platformWebRegistrationFeeAmount.
     *
     * @return int|null
     */
    public function getPlatformWebRegistrationFeeAmount(): mixed
    {
        return $this->container['platformWebRegistrationFeeAmount'];
    }

    /**
     * Sets platformWebRegistrationFeeAmount.
     *
     * @param int|null $platformWebRegistrationFeeAmount このプラットフォーム利用料入金の精算期間中に発生した、プラットフォームが設定した振替口座のWeb登録手数料
     */
    public function setPlatformWebRegistrationFeeAmount(mixed $platformWebRegistrationFeeAmount): static
    {
        if (is_null($platformWebRegistrationFeeAmount)) {
            $this->openAPINullablesSetToNull[] = 'platformWebRegistrationFeeAmount';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('platformWebRegistrationFeeAmount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['platformWebRegistrationFeeAmount'] = $platformWebRegistrationFeeAmount;

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
     * @param string|null $updated 更新日\\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setUpdated(mixed $updated): static
    {
        if (is_null($updated)) {
            $this->openAPINullablesSetToNull[] = 'updated';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets depositDestination.
     *
     * @return DepositTargetBankAccountInfo|null
     */
    public function getDepositDestination(): mixed
    {
        return $this->container['depositDestination'];
    }

    /**
     * Sets depositDestination.
     *
     * @param DepositTargetBankAccountInfo $depositDestination プラットフォーム利用料収入 入金先口座情報
     */
    public function setDepositDestination(mixed $depositDestination): static
    {
        if (is_null($depositDestination)) {
            throw new \InvalidArgumentException('non-nullable depositDestination cannot be null');
        }
        $this->container['depositDestination'] = $depositDestination;

        return $this;
    }

    /**
     * Gets verified.
     *
     * @return bool|null
     *
     * @deprecated
     */
    public function getVerified(): mixed
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified.
     *
     * @param bool $verified 検証確認フラグ
     *
     * @deprecated
     */
    public function setVerified(mixed $verified): static
    {
        if (is_null($verified)) {
            throw new \InvalidArgumentException('non-nullable verified cannot be null');
        }
        $this->container['verified'] = $verified;

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

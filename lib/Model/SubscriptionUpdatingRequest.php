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
class SubscriptionUpdatingRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Subscription.Updating.Request';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['payType' => '\OpenAPI\Fincode\Model\SubscriptionPayType', 'planId' => 'string', 'startDate' => 'string', 'stopDate' => 'string', 'endMonthFlag' => '\OpenAPI\Fincode\Model\EndMonthFlag', 'initialAmount' => 'string', 'initialTax' => 'string', 'remarks' => 'string', 'clientField1' => 'string', 'clientField2' => 'string', 'clientField3' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['payType' => null, 'planId' => null, 'startDate' => null, 'stopDate' => null, 'endMonthFlag' => null, 'initialAmount' => null, 'initialTax' => null, 'remarks' => null, 'clientField1' => null, 'clientField2' => null, 'clientField3' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['payType' => false, 'planId' => false, 'startDate' => false, 'stopDate' => true, 'endMonthFlag' => false, 'initialAmount' => false, 'initialTax' => false, 'remarks' => true, 'clientField1' => true, 'clientField2' => true, 'clientField3' => true];
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
    protected static array $attributeMap = ['payType' => 'pay_type', 'planId' => 'plan_id', 'startDate' => 'start_date', 'stopDate' => 'stop_date', 'endMonthFlag' => 'end_month_flag', 'initialAmount' => 'initial_amount', 'initialTax' => 'initial_tax', 'remarks' => 'remarks', 'clientField1' => 'client_field_1', 'clientField2' => 'client_field_2', 'clientField3' => 'client_field_3'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['payType' => 'setPayType', 'planId' => 'setPlanId', 'startDate' => 'setStartDate', 'stopDate' => 'setStopDate', 'endMonthFlag' => 'setEndMonthFlag', 'initialAmount' => 'setInitialAmount', 'initialTax' => 'setInitialTax', 'remarks' => 'setRemarks', 'clientField1' => 'setClientField1', 'clientField2' => 'setClientField2', 'clientField3' => 'setClientField3'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['payType' => 'getPayType', 'planId' => 'getPlanId', 'startDate' => 'getStartDate', 'stopDate' => 'getStopDate', 'endMonthFlag' => 'getEndMonthFlag', 'initialAmount' => 'getInitialAmount', 'initialTax' => 'getInitialTax', 'remarks' => 'getRemarks', 'clientField1' => 'getClientField1', 'clientField2' => 'getClientField2', 'clientField3' => 'getClientField3'];

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
        $this->setIfExists('payType', $data ?? [], null);
        $this->setIfExists('planId', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('stopDate', $data ?? [], null);
        $this->setIfExists('endMonthFlag', $data ?? [], null);
        $this->setIfExists('initialAmount', $data ?? [], null);
        $this->setIfExists('initialTax', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('clientField1', $data ?? [], null);
        $this->setIfExists('clientField2', $data ?? [], null);
        $this->setIfExists('clientField3', $data ?? [], null);
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
        if (null === $this->container['payType']) {
            $invalidProperties[] = "'payType' can't be null";
        }
        if (!is_null($this->container['planId']) && mb_strlen($this->container['planId']) > 25) {
            $invalidProperties[] = "invalid value for 'planId', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['planId']) && mb_strlen($this->container['planId']) < 1) {
            $invalidProperties[] = "invalid value for 'planId', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['initialAmount']) && mb_strlen($this->container['initialAmount']) > 7) {
            $invalidProperties[] = "invalid value for 'initialAmount', the character length must be smaller than or equal to 7.";
        }
        if (!is_null($this->container['initialAmount']) && mb_strlen($this->container['initialAmount']) < 1) {
            $invalidProperties[] = "invalid value for 'initialAmount', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['initialTax']) && mb_strlen($this->container['initialTax']) > 7) {
            $invalidProperties[] = "invalid value for 'initialTax', the character length must be smaller than or equal to 7.";
        }
        if (!is_null($this->container['initialTax']) && mb_strlen($this->container['initialTax']) < 1) {
            $invalidProperties[] = "invalid value for 'initialTax', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['remarks']) && mb_strlen($this->container['remarks']) > 9) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['remarks']) && mb_strlen($this->container['remarks']) < 1) {
            $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['clientField1']) && mb_strlen($this->container['clientField1']) > 100) {
            $invalidProperties[] = "invalid value for 'clientField1', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['clientField1']) && mb_strlen($this->container['clientField1']) < 1) {
            $invalidProperties[] = "invalid value for 'clientField1', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['clientField2']) && mb_strlen($this->container['clientField2']) > 100) {
            $invalidProperties[] = "invalid value for 'clientField2', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['clientField2']) && mb_strlen($this->container['clientField2']) < 1) {
            $invalidProperties[] = "invalid value for 'clientField2', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['clientField3']) && mb_strlen($this->container['clientField3']) > 100) {
            $invalidProperties[] = "invalid value for 'clientField3', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['clientField3']) && mb_strlen($this->container['clientField3']) < 1) {
            $invalidProperties[] = "invalid value for 'clientField3', the character length must be bigger than or equal to 1.";
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
     * Gets payType.
     *
     * @return SubscriptionPayType
     */
    public function getPayType(): mixed
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType.
     *
     * @param SubscriptionPayType $payType payType
     */
    public function setPayType(mixed $payType): static
    {
        if (is_null($payType)) {
            throw new \InvalidArgumentException('non-nullable payType cannot be null');
        }
        $this->container['payType'] = $payType;

        return $this;
    }

    /**
     * Gets planId.
     *
     * @return string|null
     */
    public function getPlanId(): mixed
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId.
     *
     * @param string $planId プランID
     */
    public function setPlanId(mixed $planId): static
    {
        if (is_null($planId)) {
            throw new \InvalidArgumentException('non-nullable planId cannot be null');
        }
        if (mb_strlen($planId) > 25) {
            throw new \InvalidArgumentException('invalid length for $planId when calling SubscriptionUpdatingRequest., must be smaller than or equal to 25.');
        }
        if (mb_strlen($planId) < 1) {
            throw new \InvalidArgumentException('invalid length for $planId when calling SubscriptionUpdatingRequest., must be bigger than or equal to 1.');
        }
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets startDate.
     *
     * @return string|null
     */
    public function getStartDate(): mixed
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate.
     *
     * @param string $startDate 課金開始日\\ サブスクリプションの開始日です。\\ \\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setStartDate(mixed $startDate): static
    {
        if (is_null($startDate)) {
            throw new \InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets stopDate.
     *
     * @return string|null
     */
    public function getStopDate(): mixed
    {
        return $this->container['stopDate'];
    }

    /**
     * Sets stopDate.
     *
     * @param string|null $stopDate 課金停止日\\ サブスクリプションの停止日です。\\ \\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setStopDate(mixed $stopDate): static
    {
        if (is_null($stopDate)) {
            $this->openAPINullablesSetToNull[] = 'stopDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stopDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stopDate'] = $stopDate;

        return $this;
    }

    /**
     * Gets endMonthFlag.
     *
     * @return EndMonthFlag|null
     */
    public function getEndMonthFlag(): mixed
    {
        return $this->container['endMonthFlag'];
    }

    /**
     * Sets endMonthFlag.
     *
     * @param EndMonthFlag $endMonthFlag endMonthFlag
     */
    public function setEndMonthFlag(mixed $endMonthFlag): static
    {
        if (is_null($endMonthFlag)) {
            throw new \InvalidArgumentException('non-nullable endMonthFlag cannot be null');
        }
        $this->container['endMonthFlag'] = $endMonthFlag;

        return $this;
    }

    /**
     * Gets initialAmount.
     *
     * @return string|null
     */
    public function getInitialAmount(): mixed
    {
        return $this->container['initialAmount'];
    }

    /**
     * Sets initialAmount.
     *
     * @param string $initialAmount 初回利用金額\\ \\ この値を設定すると、このサブスクリプションは初回の課金のみこの金額で課金し2回目以降はプラン情報がもつ`amount`の金額で課金します
     */
    public function setInitialAmount(mixed $initialAmount): static
    {
        if (is_null($initialAmount)) {
            throw new \InvalidArgumentException('non-nullable initialAmount cannot be null');
        }
        if (mb_strlen($initialAmount) > 7) {
            throw new \InvalidArgumentException('invalid length for $initialAmount when calling SubscriptionUpdatingRequest., must be smaller than or equal to 7.');
        }
        if (mb_strlen($initialAmount) < 1) {
            throw new \InvalidArgumentException('invalid length for $initialAmount when calling SubscriptionUpdatingRequest., must be bigger than or equal to 1.');
        }
        $this->container['initialAmount'] = $initialAmount;

        return $this;
    }

    /**
     * Gets initialTax.
     *
     * @return string|null
     */
    public function getInitialTax(): mixed
    {
        return $this->container['initialTax'];
    }

    /**
     * Sets initialTax.
     *
     * @param string $initialTax 初回税送料\\ \\ この値を設定すると、このサブスクリプションは初回の課金のみこの金額で課金し2回目以降はプラン情報がもつ`tax`の金額で課金します
     */
    public function setInitialTax(mixed $initialTax): static
    {
        if (is_null($initialTax)) {
            throw new \InvalidArgumentException('non-nullable initialTax cannot be null');
        }
        if (mb_strlen($initialTax) > 7) {
            throw new \InvalidArgumentException('invalid length for $initialTax when calling SubscriptionUpdatingRequest., must be smaller than or equal to 7.');
        }
        if (mb_strlen($initialTax) < 1) {
            throw new \InvalidArgumentException('invalid length for $initialTax when calling SubscriptionUpdatingRequest., must be bigger than or equal to 1.');
        }
        $this->container['initialTax'] = $initialTax;

        return $this;
    }

    /**
     * Gets remarks.
     *
     * @return string|null
     */
    public function getRemarks(): mixed
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks.
     *
     * @param string|null $remarks （`pay_type = Directdebit`の場合のみ利用可能）ご利用明細表示内容  - フォーマット：半角英数カナ／全角英数カナ／一部の記号／半角全角スペース - デフォルト： `ショップ名カナの先頭9文字`  ※ 利用可能な記号  - 半角：`.`、`(`、`)`、`–` - 全角：`．`、`（`、`）`、`ー`
     */
    public function setRemarks(mixed $remarks): static
    {
        if (is_null($remarks)) {
            $this->openAPINullablesSetToNull[] = 'remarks';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remarks', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($remarks) && mb_strlen($remarks) > 9) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling SubscriptionUpdatingRequest., must be smaller than or equal to 9.');
        }
        if (!is_null($remarks) && mb_strlen($remarks) < 1) {
            throw new \InvalidArgumentException('invalid length for $remarks when calling SubscriptionUpdatingRequest., must be bigger than or equal to 1.');
        }
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets clientField1.
     *
     * @return string|null
     */
    public function getClientField1(): mixed
    {
        return $this->container['clientField1'];
    }

    /**
     * Sets clientField1.
     *
     * @param string|null $clientField1 加盟店自由項目 1
     */
    public function setClientField1(mixed $clientField1): static
    {
        if (is_null($clientField1)) {
            $this->openAPINullablesSetToNull[] = 'clientField1';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientField1', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($clientField1) && mb_strlen($clientField1) > 100) {
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling SubscriptionUpdatingRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField1) && mb_strlen($clientField1) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling SubscriptionUpdatingRequest., must be bigger than or equal to 1.');
        }
        $this->container['clientField1'] = $clientField1;

        return $this;
    }

    /**
     * Gets clientField2.
     *
     * @return string|null
     */
    public function getClientField2(): mixed
    {
        return $this->container['clientField2'];
    }

    /**
     * Sets clientField2.
     *
     * @param string|null $clientField2 加盟店自由項目 2
     */
    public function setClientField2(mixed $clientField2): static
    {
        if (is_null($clientField2)) {
            $this->openAPINullablesSetToNull[] = 'clientField2';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientField2', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($clientField2) && mb_strlen($clientField2) > 100) {
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling SubscriptionUpdatingRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField2) && mb_strlen($clientField2) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling SubscriptionUpdatingRequest., must be bigger than or equal to 1.');
        }
        $this->container['clientField2'] = $clientField2;

        return $this;
    }

    /**
     * Gets clientField3.
     *
     * @return string|null
     */
    public function getClientField3(): mixed
    {
        return $this->container['clientField3'];
    }

    /**
     * Sets clientField3.
     *
     * @param string|null $clientField3 加盟店自由項目 3
     */
    public function setClientField3(mixed $clientField3): static
    {
        if (is_null($clientField3)) {
            $this->openAPINullablesSetToNull[] = 'clientField3';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientField3', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($clientField3) && mb_strlen($clientField3) > 100) {
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling SubscriptionUpdatingRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField3) && mb_strlen($clientField3) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling SubscriptionUpdatingRequest., must be bigger than or equal to 1.');
        }
        $this->container['clientField3'] = $clientField3;

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

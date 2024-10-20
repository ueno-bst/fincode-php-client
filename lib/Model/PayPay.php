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
class PayPay implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PayPay';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['payType' => '\OpenAPI\Fincode\Model\PayType', 'keyword' => 'string', 'totalAmountMin' => 'int', 'totalAmountMax' => 'int', 'customerId' => 'string', 'processDateFrom' => 'string', 'processDateTo' => 'string', 'status' => '\OpenAPI\Fincode\Model\PaymentStatus', 'authMaxDateFrom' => 'string', 'authMaxDateTo' => 'string', 'paymentDateFrom' => 'string', 'paymentDateTo' => 'string', 'updatedFrom' => 'string', 'updatedTo' => 'string', 'sort' => 'string', 'page' => 'int', 'limit' => 'int', 'countOnly' => 'bool'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['payType' => null, 'keyword' => null, 'totalAmountMin' => 'int64', 'totalAmountMax' => 'int64', 'customerId' => null, 'processDateFrom' => null, 'processDateTo' => null, 'status' => null, 'authMaxDateFrom' => null, 'authMaxDateTo' => null, 'paymentDateFrom' => null, 'paymentDateTo' => null, 'updatedFrom' => null, 'updatedTo' => null, 'sort' => null, 'page' => null, 'limit' => null, 'countOnly' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['payType' => false, 'keyword' => true, 'totalAmountMin' => false, 'totalAmountMax' => false, 'customerId' => false, 'processDateFrom' => false, 'processDateTo' => false, 'status' => false, 'authMaxDateFrom' => false, 'authMaxDateTo' => false, 'paymentDateFrom' => false, 'paymentDateTo' => false, 'updatedFrom' => false, 'updatedTo' => false, 'sort' => true, 'page' => true, 'limit' => true, 'countOnly' => true];
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
    protected static array $attributeMap = ['payType' => 'pay_type', 'keyword' => 'keyword', 'totalAmountMin' => 'total_amount_min', 'totalAmountMax' => 'total_amount_max', 'customerId' => 'customer_id', 'processDateFrom' => 'process_date_from', 'processDateTo' => 'process_date_to', 'status' => 'status', 'authMaxDateFrom' => 'auth_max_date_from', 'authMaxDateTo' => 'auth_max_date_to', 'paymentDateFrom' => 'payment_date_from', 'paymentDateTo' => 'payment_date_to', 'updatedFrom' => 'updated_from', 'updatedTo' => 'updated_to', 'sort' => 'sort', 'page' => 'page', 'limit' => 'limit', 'countOnly' => 'count_only'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['payType' => 'setPayType', 'keyword' => 'setKeyword', 'totalAmountMin' => 'setTotalAmountMin', 'totalAmountMax' => 'setTotalAmountMax', 'customerId' => 'setCustomerId', 'processDateFrom' => 'setProcessDateFrom', 'processDateTo' => 'setProcessDateTo', 'status' => 'setStatus', 'authMaxDateFrom' => 'setAuthMaxDateFrom', 'authMaxDateTo' => 'setAuthMaxDateTo', 'paymentDateFrom' => 'setPaymentDateFrom', 'paymentDateTo' => 'setPaymentDateTo', 'updatedFrom' => 'setUpdatedFrom', 'updatedTo' => 'setUpdatedTo', 'sort' => 'setSort', 'page' => 'setPage', 'limit' => 'setLimit', 'countOnly' => 'setCountOnly'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['payType' => 'getPayType', 'keyword' => 'getKeyword', 'totalAmountMin' => 'getTotalAmountMin', 'totalAmountMax' => 'getTotalAmountMax', 'customerId' => 'getCustomerId', 'processDateFrom' => 'getProcessDateFrom', 'processDateTo' => 'getProcessDateTo', 'status' => 'getStatus', 'authMaxDateFrom' => 'getAuthMaxDateFrom', 'authMaxDateTo' => 'getAuthMaxDateTo', 'paymentDateFrom' => 'getPaymentDateFrom', 'paymentDateTo' => 'getPaymentDateTo', 'updatedFrom' => 'getUpdatedFrom', 'updatedTo' => 'getUpdatedTo', 'sort' => 'getSort', 'page' => 'getPage', 'limit' => 'getLimit', 'countOnly' => 'getCountOnly'];

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
        $this->setIfExists('keyword', $data ?? [], null);
        $this->setIfExists('totalAmountMin', $data ?? [], null);
        $this->setIfExists('totalAmountMax', $data ?? [], null);
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('processDateFrom', $data ?? [], null);
        $this->setIfExists('processDateTo', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('authMaxDateFrom', $data ?? [], null);
        $this->setIfExists('authMaxDateTo', $data ?? [], null);
        $this->setIfExists('paymentDateFrom', $data ?? [], null);
        $this->setIfExists('paymentDateTo', $data ?? [], null);
        $this->setIfExists('updatedFrom', $data ?? [], null);
        $this->setIfExists('updatedTo', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('countOnly', $data ?? [], null);
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
        if (!is_null($this->container['keyword']) && mb_strlen($this->container['keyword']) > 100) {
            $invalidProperties[] = "invalid value for 'keyword', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['keyword']) && mb_strlen($this->container['keyword']) < 1) {
            $invalidProperties[] = "invalid value for 'keyword', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['customerId']) && mb_strlen($this->container['customerId']) > 60) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['customerId']) && mb_strlen($this->container['customerId']) < 1) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
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
     * @return PayType
     */
    public function getPayType(): mixed
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType.
     *
     * @param PayType $payType 決済種別\\ 一覧で取得する対象の決済種別を指定します。  - `Card`: カード - `Konbini`: コンビニ決済 - `Paypay`: PayPay - `Applepay`: Apple Pay - `Directdebit`: 口座振替
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
     * Gets keyword.
     *
     * @return string|null
     */
    public function getKeyword(): mixed
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword.
     *
     * @param string|null $keyword 加盟店自由項目1 ~ 3（`client_field_*`）を対象とした部分一致検索を行います
     */
    public function setKeyword(mixed $keyword): static
    {
        if (is_null($keyword)) {
            $this->openAPINullablesSetToNull[] = 'keyword';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('keyword', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($keyword) && mb_strlen($keyword) > 100) {
            throw new \InvalidArgumentException('invalid length for $keyword when calling PayPay., must be smaller than or equal to 100.');
        }
        if (!is_null($keyword) && mb_strlen($keyword) < 1) {
            throw new \InvalidArgumentException('invalid length for $keyword when calling PayPay., must be bigger than or equal to 1.');
        }
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets totalAmountMin.
     *
     * @return int|null
     */
    public function getTotalAmountMin(): mixed
    {
        return $this->container['totalAmountMin'];
    }

    /**
     * Sets totalAmountMin.
     *
     * @param int $totalAmountMin 合計金額（始値）\\ 利用金額と税送料の合計額（`total_amount`）を対象に範囲検索を行います。この値以上の合計金額を持つ決済情報を取得します。
     */
    public function setTotalAmountMin(mixed $totalAmountMin): static
    {
        if (is_null($totalAmountMin)) {
            throw new \InvalidArgumentException('non-nullable totalAmountMin cannot be null');
        }
        $this->container['totalAmountMin'] = $totalAmountMin;

        return $this;
    }

    /**
     * Gets totalAmountMax.
     *
     * @return int|null
     */
    public function getTotalAmountMax(): mixed
    {
        return $this->container['totalAmountMax'];
    }

    /**
     * Sets totalAmountMax.
     *
     * @param int $totalAmountMax 合計金額（終値）\\ 利用金額と税送料の合計額（`total_amount`）を対象に範囲検索を行います。この値以下の合計金額を持つ決済情報を取得します。
     */
    public function setTotalAmountMax(mixed $totalAmountMax): static
    {
        if (is_null($totalAmountMax)) {
            throw new \InvalidArgumentException('non-nullable totalAmountMax cannot be null');
        }
        $this->container['totalAmountMax'] = $totalAmountMax;

        return $this;
    }

    /**
     * Gets customerId.
     *
     * @return string|null
     */
    public function getCustomerId(): mixed
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId.
     *
     * @param string $customerId 顧客ID\\ 指定した顧客IDに紐づく決済情報から一覧で取得します
     */
    public function setCustomerId(mixed $customerId): static
    {
        if (is_null($customerId)) {
            throw new \InvalidArgumentException('non-nullable customerId cannot be null');
        }
        if (mb_strlen($customerId) > 60) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling PayPay., must be smaller than or equal to 60.');
        }
        if (mb_strlen($customerId) < 1) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling PayPay., must be bigger than or equal to 1.');
        }
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets processDateFrom.
     *
     * @return string|null
     */
    public function getProcessDateFrom(): mixed
    {
        return $this->container['processDateFrom'];
    }

    /**
     * Sets processDateFrom.
     *
     * @param string $processDateFrom 処理日時（始値）\\ 処理日時（`process_date`）を対象に範囲検索を行います。この日付以降に処理された決済情報を取得します。\\ \\ 形式：`yyyy/MM/dd`
     */
    public function setProcessDateFrom(mixed $processDateFrom): static
    {
        if (is_null($processDateFrom)) {
            throw new \InvalidArgumentException('non-nullable processDateFrom cannot be null');
        }
        $this->container['processDateFrom'] = $processDateFrom;

        return $this;
    }

    /**
     * Gets processDateTo.
     *
     * @return string|null
     */
    public function getProcessDateTo(): mixed
    {
        return $this->container['processDateTo'];
    }

    /**
     * Sets processDateTo.
     *
     * @param string $processDateTo 処理日時（終値）\\ 処理日時（`process_date`）を対象に範囲検索を行います。この日付以前に処理された決済情報を取得します。\\ \\ 形式：`yyyy/MM/dd`
     */
    public function setProcessDateTo(mixed $processDateTo): static
    {
        if (is_null($processDateTo)) {
            throw new \InvalidArgumentException('non-nullable processDateTo cannot be null');
        }
        $this->container['processDateTo'] = $processDateTo;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return PaymentStatus|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param PaymentStatus $status 決済ステータス\\ 指定したステータスの決済情報を取得します。カンマ区切りにすることで複数指定（OR検索）できます。  - `UNPROCESSED`: 未処理 - `AWAITING_CUSTOMER_PAYMENT`: 購入者の支払い待ち - `AUTHORIZED`: 仮売上 - `CAPTURED`: 売上確定 - `CANCELED`: キャンセル - `EXPIRED`: 決済の期限切れ
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
     * Gets authMaxDateFrom.
     *
     * @return string|null
     */
    public function getAuthMaxDateFrom(): mixed
    {
        return $this->container['authMaxDateFrom'];
    }

    /**
     * Sets authMaxDateFrom.
     *
     * @param string $authMaxDateFrom 仮売上有効期限（始値）\\ 仮売上有効期限（`auth_max_date`）を対象に範囲検索を行います。この日付以降に仮売上が有効期限切れとなる決済情報を取得します。\\ \\ 形式：`yyyy/MM/dd`
     */
    public function setAuthMaxDateFrom(mixed $authMaxDateFrom): static
    {
        if (is_null($authMaxDateFrom)) {
            throw new \InvalidArgumentException('non-nullable authMaxDateFrom cannot be null');
        }
        $this->container['authMaxDateFrom'] = $authMaxDateFrom;

        return $this;
    }

    /**
     * Gets authMaxDateTo.
     *
     * @return string|null
     */
    public function getAuthMaxDateTo(): mixed
    {
        return $this->container['authMaxDateTo'];
    }

    /**
     * Sets authMaxDateTo.
     *
     * @param string $authMaxDateTo 仮売上有効期限（終値）\\ 仮売上有効期限（`auth_max_date`）を対象に範囲検索を行います。この日付以前に仮売上が有効期限切れとなる決済情報を取得します。\\ \\ 形式：`yyyy/MM/dd`
     */
    public function setAuthMaxDateTo(mixed $authMaxDateTo): static
    {
        if (is_null($authMaxDateTo)) {
            throw new \InvalidArgumentException('non-nullable authMaxDateTo cannot be null');
        }
        $this->container['authMaxDateTo'] = $authMaxDateTo;

        return $this;
    }

    /**
     * Gets paymentDateFrom.
     *
     * @return string|null
     */
    public function getPaymentDateFrom(): mixed
    {
        return $this->container['paymentDateFrom'];
    }

    /**
     * Sets paymentDateFrom.
     *
     * @param string $paymentDateFrom 支払い日時（始値）\\ 支払い日時（`payment_date`）を対象に範囲検索を行います。この日付以降に支払いが行われた決済情報を取得します。\\ \\ 形式：`yyyy/MM/dd`
     */
    public function setPaymentDateFrom(mixed $paymentDateFrom): static
    {
        if (is_null($paymentDateFrom)) {
            throw new \InvalidArgumentException('non-nullable paymentDateFrom cannot be null');
        }
        $this->container['paymentDateFrom'] = $paymentDateFrom;

        return $this;
    }

    /**
     * Gets paymentDateTo.
     *
     * @return string|null
     */
    public function getPaymentDateTo(): mixed
    {
        return $this->container['paymentDateTo'];
    }

    /**
     * Sets paymentDateTo.
     *
     * @param string $paymentDateTo 支払い日時（終値）\\ 支払い日時（`payment_date`）を対象に範囲検索を行います。この日付以前に支払いが行われた決済情報を取得します。\\ \\ 形式：`yyyy/MM/dd`
     */
    public function setPaymentDateTo(mixed $paymentDateTo): static
    {
        if (is_null($paymentDateTo)) {
            throw new \InvalidArgumentException('non-nullable paymentDateTo cannot be null');
        }
        $this->container['paymentDateTo'] = $paymentDateTo;

        return $this;
    }

    /**
     * Gets updatedFrom.
     *
     * @return string|null
     */
    public function getUpdatedFrom(): mixed
    {
        return $this->container['updatedFrom'];
    }

    /**
     * Sets updatedFrom.
     *
     * @param string $updatedFrom 更新日（始値）\\ \\ 更新日時（`updated`）を対象に範囲検索を行います。この日付以降に更新された決済情報を取得します。\\ 形式：`yyyy/MM/dd`
     */
    public function setUpdatedFrom(mixed $updatedFrom): static
    {
        if (is_null($updatedFrom)) {
            throw new \InvalidArgumentException('non-nullable updatedFrom cannot be null');
        }
        $this->container['updatedFrom'] = $updatedFrom;

        return $this;
    }

    /**
     * Gets updatedTo.
     *
     * @return string|null
     */
    public function getUpdatedTo(): mixed
    {
        return $this->container['updatedTo'];
    }

    /**
     * Sets updatedTo.
     *
     * @param string $updatedTo 更新日（終値）\\ \\ 更新日時（`updated`）を対象に範囲検索を行います。この日付以前に更新された決済情報を取得します。\\ 形式：`yyyy/MM/dd`
     */
    public function setUpdatedTo(mixed $updatedTo): static
    {
        if (is_null($updatedTo)) {
            throw new \InvalidArgumentException('non-nullable updatedTo cannot be null');
        }
        $this->container['updatedTo'] = $updatedTo;

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
     * @param string|null $sort ソートする項目と順序を指定します。\\ 例： `?sort=updated␣desc,created␣asc`\\ \\ ソート可能な項目  - `status`: ステータス - `process_data`: 処理日時 - `total_amount`: 合計金額 - `auth_max_date`: 仮売上有効期限 - `payment_date`: 支払い日時 - `created`: 作成日時 - `updated`: 更新日時
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

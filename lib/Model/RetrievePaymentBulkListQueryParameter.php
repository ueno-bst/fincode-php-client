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
class RetrievePaymentBulkListQueryParameter implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'retrievePaymentBulkList_query_parameter';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['page' => 'int', 'limit' => 'int', 'countOnly' => 'bool', 'processPlanDateFrom' => 'string', 'processPlanDateTo' => 'string', 'status' => '\OpenAPI\Fincode\Model\PaymentBulkStatus', 'payType' => '\OpenAPI\Fincode\Model\PaymentBulkPayType', 'fileName' => 'string', 'deleteFlag' => '\OpenAPI\Fincode\Model\DeleteFlag', 'createdFrom' => 'string', 'createdTo' => 'string', 'sort' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['page' => null, 'limit' => null, 'countOnly' => null, 'processPlanDateFrom' => null, 'processPlanDateTo' => null, 'status' => null, 'payType' => null, 'fileName' => null, 'deleteFlag' => null, 'createdFrom' => null, 'createdTo' => null, 'sort' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['page' => true, 'limit' => true, 'countOnly' => true, 'processPlanDateFrom' => true, 'processPlanDateTo' => true, 'status' => false, 'payType' => false, 'fileName' => false, 'deleteFlag' => false, 'createdFrom' => true, 'createdTo' => true, 'sort' => true];
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
    protected static array $attributeMap = ['page' => 'page', 'limit' => 'limit', 'countOnly' => 'count_only', 'processPlanDateFrom' => 'process_plan_date_from', 'processPlanDateTo' => 'process_plan_date_to', 'status' => 'status', 'payType' => 'pay_type', 'fileName' => 'file_name', 'deleteFlag' => 'delete_flag', 'createdFrom' => 'created_from', 'createdTo' => 'created_to', 'sort' => 'sort'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['page' => 'setPage', 'limit' => 'setLimit', 'countOnly' => 'setCountOnly', 'processPlanDateFrom' => 'setProcessPlanDateFrom', 'processPlanDateTo' => 'setProcessPlanDateTo', 'status' => 'setStatus', 'payType' => 'setPayType', 'fileName' => 'setFileName', 'deleteFlag' => 'setDeleteFlag', 'createdFrom' => 'setCreatedFrom', 'createdTo' => 'setCreatedTo', 'sort' => 'setSort'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['page' => 'getPage', 'limit' => 'getLimit', 'countOnly' => 'getCountOnly', 'processPlanDateFrom' => 'getProcessPlanDateFrom', 'processPlanDateTo' => 'getProcessPlanDateTo', 'status' => 'getStatus', 'payType' => 'getPayType', 'fileName' => 'getFileName', 'deleteFlag' => 'getDeleteFlag', 'createdFrom' => 'getCreatedFrom', 'createdTo' => 'getCreatedTo', 'sort' => 'getSort'];

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
        $this->setIfExists('processPlanDateFrom', $data ?? [], null);
        $this->setIfExists('processPlanDateTo', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('payType', $data ?? [], null);
        $this->setIfExists('fileName', $data ?? [], null);
        $this->setIfExists('deleteFlag', $data ?? [], null);
        $this->setIfExists('createdFrom', $data ?? [], null);
        $this->setIfExists('createdTo', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
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
        if (!is_null($this->container['fileName']) && mb_strlen($this->container['fileName']) > 100) {
            $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['fileName']) && mb_strlen($this->container['fileName']) < 1) {
            $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
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
     * Gets processPlanDateFrom.
     *
     * @return string|null
     */
    public function getProcessPlanDateFrom(): mixed
    {
        return $this->container['processPlanDateFrom'];
    }

    /**
     * Sets processPlanDateFrom.
     *
     * @param string|null $processPlanDateFrom 処理予定日の範囲指定（開始日）を指定します。\\ 処理予定日（`process_plan_date`）を対象に範囲検索を行います。この日付以降に処理予定日が設定された一括決済情報を検索します。\\ \\ 形式： `yyyy/MM/dd`
     */
    public function setProcessPlanDateFrom(mixed $processPlanDateFrom): static
    {
        if (is_null($processPlanDateFrom)) {
            $this->openAPINullablesSetToNull[] = 'processPlanDateFrom';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('processPlanDateFrom', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['processPlanDateFrom'] = $processPlanDateFrom;

        return $this;
    }

    /**
     * Gets processPlanDateTo.
     *
     * @return string|null
     */
    public function getProcessPlanDateTo(): mixed
    {
        return $this->container['processPlanDateTo'];
    }

    /**
     * Sets processPlanDateTo.
     *
     * @param string|null $processPlanDateTo 処理予定日の範囲指定（終了日）を指定します。\\ 処理予定日（`process_plan_date`）を対象に範囲検索を行います。この日付以前に処理予定日が設定された一括決済情報を検索します。\\ \\ 形式： `yyyy/MM/dd`
     */
    public function setProcessPlanDateTo(mixed $processPlanDateTo): static
    {
        if (is_null($processPlanDateTo)) {
            $this->openAPINullablesSetToNull[] = 'processPlanDateTo';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('processPlanDateTo', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['processPlanDateTo'] = $processPlanDateTo;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return PaymentBulkStatus|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param PaymentBulkStatus $status 一括決済 ステータス。カンマ区切りにすることで複数指定（OR検索）できます。  - `CHECKING`: チェック中 - `CHECKED`: チェック済み - `RUNNING`: 決済処理中 - `COMPLETED`: 完了 - `ERROR`: エラー
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
     * Gets payType.
     *
     * @return PaymentBulkPayType|null
     */
    public function getPayType(): mixed
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType.
     *
     * @param PaymentBulkPayType $payType payType
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
     * Gets fileName.
     *
     * @return string|null
     */
    public function getFileName(): mixed
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName.
     *
     * @param string $fileName 一括決済データファイル名\\ `file_name`に対する部分一致検索を行います
     */
    public function setFileName(mixed $fileName): static
    {
        if (is_null($fileName)) {
            throw new \InvalidArgumentException('non-nullable fileName cannot be null');
        }
        if (mb_strlen($fileName) > 100) {
            throw new \InvalidArgumentException('invalid length for $fileName when calling RetrievePaymentBulkListQueryParameter., must be smaller than or equal to 100.');
        }
        if (mb_strlen($fileName) < 1) {
            throw new \InvalidArgumentException('invalid length for $fileName when calling RetrievePaymentBulkListQueryParameter., must be bigger than or equal to 1.');
        }
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets deleteFlag.
     *
     * @return DeleteFlag|null
     */
    public function getDeleteFlag(): mixed
    {
        return $this->container['deleteFlag'];
    }

    /**
     * Sets deleteFlag.
     *
     * @param DeleteFlag $deleteFlag deleteFlag
     */
    public function setDeleteFlag(mixed $deleteFlag): static
    {
        if (is_null($deleteFlag)) {
            throw new \InvalidArgumentException('non-nullable deleteFlag cannot be null');
        }
        $this->container['deleteFlag'] = $deleteFlag;

        return $this;
    }

    /**
     * Gets createdFrom.
     *
     * @return string|null
     */
    public function getCreatedFrom(): mixed
    {
        return $this->container['createdFrom'];
    }

    /**
     * Sets createdFrom.
     *
     * @param string|null $createdFrom 作成日時の範囲指定（開始日）を指定します。\\ 作成日時（`created`）を対象に範囲検索を行います。この日付以降に登録された一括決済情報を検索します。\\ \\ 形式： `yyyy/MM/dd`
     */
    public function setCreatedFrom(mixed $createdFrom): static
    {
        if (is_null($createdFrom)) {
            $this->openAPINullablesSetToNull[] = 'createdFrom';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('createdFrom', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['createdFrom'] = $createdFrom;

        return $this;
    }

    /**
     * Gets createdTo.
     *
     * @return string|null
     */
    public function getCreatedTo(): mixed
    {
        return $this->container['createdTo'];
    }

    /**
     * Sets createdTo.
     *
     * @param string|null $createdTo 作成日時の範囲指定（終了日）を指定します。\\ 作成日時（`created`）を対象に範囲検索を行います。この日付以前に登録された一括決済情報を検索します。\\ \\ 形式： `yyyy/MM/dd`
     */
    public function setCreatedTo(mixed $createdTo): static
    {
        if (is_null($createdTo)) {
            $this->openAPINullablesSetToNull[] = 'createdTo';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('createdTo', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['createdTo'] = $createdTo;

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
     * @param string|null $sort ソートする項目と順序を指定します。\\ 例： `?sort=created␣asc,process_plan_date␣desc`\\ \\ ソート可能な項目  - `process_plan_date`: 一括決済 処理予定日 - `status`: ステータス - `pay_type`: 決済種別 - `file_name`: 一括決済データファイル名 - `delete_flag`: 削除フラグ - `created`: 作成日時
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

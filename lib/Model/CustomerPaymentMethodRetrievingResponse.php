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
class CustomerPaymentMethodRetrievingResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'CustomerPaymentMethod.Retrieving.Response';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['id' => 'string', 'payType' => '\OpenAPI\Fincode\Model\PaymentMethodPayType', 'customerId' => 'string', 'status' => '\OpenAPI\Fincode\Model\PaymentMethodStatus', 'redirectUrl' => 'string', 'redirectUrlAccessedFlag' => 'string', 'returnUrl' => 'string', 'returnUrlOnFailure' => 'string', 'defaultFlag' => 'string', 'clientField1' => 'string', 'clientField2' => 'string', 'clientField3' => 'string', 'deleteFlag' => '\OpenAPI\Fincode\Model\DeleteFlag', 'processDate' => 'string', 'created' => 'string', 'updated' => 'string', 'card' => '\OpenAPI\Fincode\Model\PaymentMethodCard', 'directdebit' => '\OpenAPI\Fincode\Model\PaymentMethodDirectdebit'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['id' => null, 'payType' => null, 'customerId' => null, 'status' => null, 'redirectUrl' => null, 'redirectUrlAccessedFlag' => null, 'returnUrl' => null, 'returnUrlOnFailure' => null, 'defaultFlag' => null, 'clientField1' => null, 'clientField2' => null, 'clientField3' => null, 'deleteFlag' => null, 'processDate' => null, 'created' => null, 'updated' => null, 'card' => null, 'directdebit' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['id' => false, 'payType' => false, 'customerId' => false, 'status' => false, 'redirectUrl' => true, 'redirectUrlAccessedFlag' => true, 'returnUrl' => true, 'returnUrlOnFailure' => true, 'defaultFlag' => false, 'clientField1' => true, 'clientField2' => true, 'clientField3' => true, 'deleteFlag' => false, 'processDate' => true, 'created' => false, 'updated' => true, 'card' => true, 'directdebit' => true];
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
    protected static array $attributeMap = ['id' => 'id', 'payType' => 'pay_type', 'customerId' => 'customer_id', 'status' => 'status', 'redirectUrl' => 'redirect_url', 'redirectUrlAccessedFlag' => 'redirect_url_accessed_flag', 'returnUrl' => 'return_url', 'returnUrlOnFailure' => 'return_url_on_failure', 'defaultFlag' => 'default_flag', 'clientField1' => 'client_field_1', 'clientField2' => 'client_field_2', 'clientField3' => 'client_field_3', 'deleteFlag' => 'delete_flag', 'processDate' => 'process_date', 'created' => 'created', 'updated' => 'updated', 'card' => 'card', 'directdebit' => 'directdebit'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['id' => 'setId', 'payType' => 'setPayType', 'customerId' => 'setCustomerId', 'status' => 'setStatus', 'redirectUrl' => 'setRedirectUrl', 'redirectUrlAccessedFlag' => 'setRedirectUrlAccessedFlag', 'returnUrl' => 'setReturnUrl', 'returnUrlOnFailure' => 'setReturnUrlOnFailure', 'defaultFlag' => 'setDefaultFlag', 'clientField1' => 'setClientField1', 'clientField2' => 'setClientField2', 'clientField3' => 'setClientField3', 'deleteFlag' => 'setDeleteFlag', 'processDate' => 'setProcessDate', 'created' => 'setCreated', 'updated' => 'setUpdated', 'card' => 'setCard', 'directdebit' => 'setDirectdebit'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['id' => 'getId', 'payType' => 'getPayType', 'customerId' => 'getCustomerId', 'status' => 'getStatus', 'redirectUrl' => 'getRedirectUrl', 'redirectUrlAccessedFlag' => 'getRedirectUrlAccessedFlag', 'returnUrl' => 'getReturnUrl', 'returnUrlOnFailure' => 'getReturnUrlOnFailure', 'defaultFlag' => 'getDefaultFlag', 'clientField1' => 'getClientField1', 'clientField2' => 'getClientField2', 'clientField3' => 'getClientField3', 'deleteFlag' => 'getDeleteFlag', 'processDate' => 'getProcessDate', 'created' => 'getCreated', 'updated' => 'getUpdated', 'card' => 'getCard', 'directdebit' => 'getDirectdebit'];

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
    public const REDIRECT_URL_ACCESSED_FLAG__0 = '0';
    public const REDIRECT_URL_ACCESSED_FLAG__1 = '1';
    public const DEFAULT_FLAG__0 = '0';
    public const DEFAULT_FLAG__1 = '1';

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getRedirectUrlAccessedFlagAllowableValues(): array
    {
        return [self::REDIRECT_URL_ACCESSED_FLAG__0, self::REDIRECT_URL_ACCESSED_FLAG__1];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getDefaultFlagAllowableValues(): array
    {
        return [self::DEFAULT_FLAG__0, self::DEFAULT_FLAG__1];
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
        $this->setIfExists('payType', $data ?? [], null);
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('redirectUrl', $data ?? [], null);
        $this->setIfExists('redirectUrlAccessedFlag', $data ?? [], null);
        $this->setIfExists('returnUrl', $data ?? [], null);
        $this->setIfExists('returnUrlOnFailure', $data ?? [], null);
        $this->setIfExists('defaultFlag', $data ?? [], null);
        $this->setIfExists('clientField1', $data ?? [], null);
        $this->setIfExists('clientField2', $data ?? [], null);
        $this->setIfExists('clientField3', $data ?? [], null);
        $this->setIfExists('deleteFlag', $data ?? [], null);
        $this->setIfExists('processDate', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('card', $data ?? [], null);
        $this->setIfExists('directdebit', $data ?? [], null);
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
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) > 25) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['id']) && mb_strlen($this->container['id']) < 25) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 25.";
        }
        if (!is_null($this->container['customerId']) && mb_strlen($this->container['customerId']) > 60) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['redirectUrl']) && mb_strlen($this->container['redirectUrl']) > 256) {
            $invalidProperties[] = "invalid value for 'redirectUrl', the character length must be smaller than or equal to 256.";
        }
        $allowedValues = $this->getRedirectUrlAccessedFlagAllowableValues();
        if (!is_null($this->container['redirectUrlAccessedFlag']) && !in_array($this->container['redirectUrlAccessedFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'redirectUrlAccessedFlag', must be one of '%s'", $this->container['redirectUrlAccessedFlag'], implode("', '", $allowedValues));
        }
        if (!is_null($this->container['returnUrl']) && mb_strlen($this->container['returnUrl']) > 256) {
            $invalidProperties[] = "invalid value for 'returnUrl', the character length must be smaller than or equal to 256.";
        }
        if (!is_null($this->container['returnUrlOnFailure']) && mb_strlen($this->container['returnUrlOnFailure']) > 256) {
            $invalidProperties[] = "invalid value for 'returnUrlOnFailure', the character length must be smaller than or equal to 256.";
        }
        $allowedValues = $this->getDefaultFlagAllowableValues();
        if (!is_null($this->container['defaultFlag']) && !in_array($this->container['defaultFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'defaultFlag', must be one of '%s'", $this->container['defaultFlag'], implode("', '", $allowedValues));
        }
        if (!is_null($this->container['defaultFlag']) && mb_strlen($this->container['defaultFlag']) > 1) {
            $invalidProperties[] = "invalid value for 'defaultFlag', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['defaultFlag']) && mb_strlen($this->container['defaultFlag']) < 1) {
            $invalidProperties[] = "invalid value for 'defaultFlag', the character length must be bigger than or equal to 1.";
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
     * @param string $id 決済手段ID
     */
    public function setId(mixed $id): static
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if (mb_strlen($id) > 25) {
            throw new \InvalidArgumentException('invalid length for $id when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 25.');
        }
        if (mb_strlen($id) < 25) {
            throw new \InvalidArgumentException('invalid length for $id when calling CustomerPaymentMethodRetrievingResponse., must be bigger than or equal to 25.');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payType.
     *
     * @return PaymentMethodPayType|null
     */
    public function getPayType(): mixed
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType.
     *
     * @param PaymentMethodPayType $payType 決済手段の種別。\\ この決済手段の実体の種別を示します。  - `Card`: この決済手段はクレジットカード/デビットカード/プリペイドカードです。 - `Directdebit`: この決済手段は口座振替用口座情報です。
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
     * @param string $customerId この決済手段が紐づく顧客のID
     */
    public function setCustomerId(mixed $customerId): static
    {
        if (is_null($customerId)) {
            throw new \InvalidArgumentException('non-nullable customerId cannot be null');
        }
        if (mb_strlen($customerId) > 60) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 60.');
        }
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return PaymentMethodStatus|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param PaymentMethodStatus $status status
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
     * Gets redirectUrl.
     *
     * @return string|null
     */
    public function getRedirectUrl(): mixed
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl.
     *
     * @param string|null $redirectUrl リダイレクトURL \\ 購入者をこのURLへリダイレクトさせ、ステータスがAWAITING_CUSTOMER_ACTION の決済手段を有効化するための後続の処理へ誘導してください。   - 振替口座登録の場合： このURLにアクセスして振替口座登録の承認を行います。このURLには1度だけアクセスできます。 - カード登録の場合： このURLにアクセスして3Dセキュア認証を行います。
     */
    public function setRedirectUrl(mixed $redirectUrl): static
    {
        if (is_null($redirectUrl)) {
            $this->openAPINullablesSetToNull[] = 'redirectUrl';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirectUrl', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($redirectUrl) && mb_strlen($redirectUrl) > 256) {
            throw new \InvalidArgumentException('invalid length for $redirectUrl when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 256.');
        }
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }

    /**
     * Gets redirectUrlAccessedFlag.
     *
     * @return string|null
     */
    public function getRedirectUrlAccessedFlag(): mixed
    {
        return $this->container['redirectUrlAccessedFlag'];
    }

    /**
     * Sets redirectUrlAccessedFlag.
     *
     * @param string|null $redirectUrlAccessedFlag リダイレクトURLアクセス済みフラグ \\ （`pay_type = Directdebit`の場合のみ利用可能）\\ 購入者が`redirect_url`にアクセスしたことがあるかどうかを示すフラグです。  - `0`: 未アクセス - `1`: 1回以上アクセス済み
     */
    public function setRedirectUrlAccessedFlag(mixed $redirectUrlAccessedFlag): static
    {
        if (is_null($redirectUrlAccessedFlag)) {
            $this->openAPINullablesSetToNull[] = 'redirectUrlAccessedFlag';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirectUrlAccessedFlag', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRedirectUrlAccessedFlagAllowableValues();
        if (!is_null($redirectUrlAccessedFlag) && !in_array($redirectUrlAccessedFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'redirectUrlAccessedFlag', must be one of '%s'", $redirectUrlAccessedFlag, implode("', '", $allowedValues)));
        }
        $this->container['redirectUrlAccessedFlag'] = $redirectUrlAccessedFlag;

        return $this;
    }

    /**
     * Gets returnUrl.
     *
     * @return string|null
     */
    public function getReturnUrl(): mixed
    {
        return $this->container['returnUrl'];
    }

    /**
     * Sets returnUrl.
     *
     * @param string|null $returnUrl 加盟店戻りURL（成功時）\\ 購入者がアクションを完了し、決済手段の登録に成功した際にリダイレクトされるURLです。\\ POSTメソッドでリダイレクトがされます。
     */
    public function setReturnUrl(mixed $returnUrl): static
    {
        if (is_null($returnUrl)) {
            $this->openAPINullablesSetToNull[] = 'returnUrl';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returnUrl', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returnUrl) && mb_strlen($returnUrl) > 256) {
            throw new \InvalidArgumentException('invalid length for $returnUrl when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 256.');
        }
        $this->container['returnUrl'] = $returnUrl;

        return $this;
    }

    /**
     * Gets returnUrlOnFailure.
     *
     * @return string|null
     */
    public function getReturnUrlOnFailure(): mixed
    {
        return $this->container['returnUrlOnFailure'];
    }

    /**
     * Sets returnUrlOnFailure.
     *
     * @param string|null $returnUrlOnFailure 加盟店戻りURL（失敗時）\\ （`pay_type = Card`の場合のみ利用可能）\\ 購入者がアクションを完了し、決済手段の登録に失敗した際にリダイレクトされるURLです。\\ POSTメソッドでリダイレクトがされます。
     */
    public function setReturnUrlOnFailure(mixed $returnUrlOnFailure): static
    {
        if (is_null($returnUrlOnFailure)) {
            $this->openAPINullablesSetToNull[] = 'returnUrlOnFailure';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returnUrlOnFailure', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returnUrlOnFailure) && mb_strlen($returnUrlOnFailure) > 256) {
            throw new \InvalidArgumentException('invalid length for $returnUrlOnFailure when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 256.');
        }
        $this->container['returnUrlOnFailure'] = $returnUrlOnFailure;

        return $this;
    }

    /**
     * Gets defaultFlag.
     *
     * @return string|null
     */
    public function getDefaultFlag(): mixed
    {
        return $this->container['defaultFlag'];
    }

    /**
     * Sets defaultFlag.
     *
     * @param string $defaultFlag デフォルトフラグ。\\ この決済手段が決済実行やサブスクリプション登録などで決済手段IDを指定しない場合に自動的に使用する決済手段かどうかを示すフラグです。\\ 顧客に対して、決済種別ごとに必ず1つのデフォルト決済手段が存在します。（決済手段が1つも登録されていない場合を除く）  - `0`: デフォルト決済手段ではない - `1`: デフォルト決済手段
     */
    public function setDefaultFlag(mixed $defaultFlag): static
    {
        if (is_null($defaultFlag)) {
            throw new \InvalidArgumentException('non-nullable defaultFlag cannot be null');
        }
        $allowedValues = $this->getDefaultFlagAllowableValues();
        if (!in_array($defaultFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'defaultFlag', must be one of '%s'", $defaultFlag, implode("', '", $allowedValues)));
        }
        if (mb_strlen($defaultFlag) > 1) {
            throw new \InvalidArgumentException('invalid length for $defaultFlag when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 1.');
        }
        if (mb_strlen($defaultFlag) < 1) {
            throw new \InvalidArgumentException('invalid length for $defaultFlag when calling CustomerPaymentMethodRetrievingResponse., must be bigger than or equal to 1.');
        }
        $this->container['defaultFlag'] = $defaultFlag;

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
     * @param string|null $clientField1 加盟店自由項目
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
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField1) && mb_strlen($clientField1) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField1 when calling CustomerPaymentMethodRetrievingResponse., must be bigger than or equal to 1.');
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
     * @param string|null $clientField2 加盟店自由項目
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
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField2) && mb_strlen($clientField2) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField2 when calling CustomerPaymentMethodRetrievingResponse., must be bigger than or equal to 1.');
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
     * @param string|null $clientField3 加盟店自由項目
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
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling CustomerPaymentMethodRetrievingResponse., must be smaller than or equal to 100.');
        }
        if (!is_null($clientField3) && mb_strlen($clientField3) < 1) {
            throw new \InvalidArgumentException('invalid length for $clientField3 when calling CustomerPaymentMethodRetrievingResponse., must be bigger than or equal to 1.');
        }
        $this->container['clientField3'] = $clientField3;

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
     * Gets processDate.
     *
     * @return string|null
     */
    public function getProcessDate(): mixed
    {
        return $this->container['processDate'];
    }

    /**
     * Sets processDate.
     *
     * @param string|null $processDate 処理日\\ 形式：`yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setProcessDate(mixed $processDate): static
    {
        if (is_null($processDate)) {
            $this->openAPINullablesSetToNull[] = 'processDate';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('processDate', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['processDate'] = $processDate;

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
     * Gets card.
     *
     * @return PaymentMethodCard|null
     */
    public function getCard(): mixed
    {
        return $this->container['card'];
    }

    /**
     * Sets card.
     *
     * @param PaymentMethodCard|null $card card
     */
    public function setCard(mixed $card): static
    {
        if (is_null($card)) {
            $this->openAPINullablesSetToNull[] = 'card';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets directdebit.
     *
     * @return PaymentMethodDirectdebit|null
     */
    public function getDirectdebit(): mixed
    {
        return $this->container['directdebit'];
    }

    /**
     * Sets directdebit.
     *
     * @param PaymentMethodDirectdebit|null $directdebit directdebit
     */
    public function setDirectdebit(mixed $directdebit): static
    {
        if (is_null($directdebit)) {
            $this->openAPINullablesSetToNull[] = 'directdebit';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('directdebit', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['directdebit'] = $directdebit;

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

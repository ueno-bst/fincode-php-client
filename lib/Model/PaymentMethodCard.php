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
 * &lt;span class&#x3D;\&quot;smallText\&quot;&gt;この決済手段がカードを表す（&#x60;pay_type &#x3D; Card&#x60;）とき、カード情報の詳細がこの&#x60;card&#x60;オブジェクトに格納されます。&lt;/span&gt;.
 *
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodCard implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PaymentMethod_card';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['cardNo' => 'string', 'expire' => 'string', 'holderName' => 'string', 'type' => '\OpenAPI\Fincode\Model\CardType', 'brand' => '\OpenAPI\Fincode\Model\CardBrand', 'cardNoHash' => 'string', 'tdsType' => '\OpenAPI\Fincode\Model\TdsType', 'tds2Type' => '\OpenAPI\Fincode\Model\Tds2Type', 'tds2Status' => '\OpenAPI\Fincode\Model\Tds2Status', 'merchantName' => 'string', 'accessId' => 'string', 'acs' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['cardNo' => null, 'expire' => null, 'holderName' => null, 'type' => null, 'brand' => null, 'cardNoHash' => null, 'tdsType' => null, 'tds2Type' => null, 'tds2Status' => null, 'merchantName' => null, 'accessId' => null, 'acs' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['cardNo' => false, 'expire' => true, 'holderName' => true, 'type' => false, 'brand' => false, 'cardNoHash' => false, 'tdsType' => true, 'tds2Type' => true, 'tds2Status' => false, 'merchantName' => false, 'accessId' => false, 'acs' => true];
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
    protected static array $attributeMap = ['cardNo' => 'card_no', 'expire' => 'expire', 'holderName' => 'holder_name', 'type' => 'type', 'brand' => 'brand', 'cardNoHash' => 'card_no_hash', 'tdsType' => 'tds_type', 'tds2Type' => 'tds2_type', 'tds2Status' => 'tds2_status', 'merchantName' => 'merchant_name', 'accessId' => 'access_id', 'acs' => 'acs'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['cardNo' => 'setCardNo', 'expire' => 'setExpire', 'holderName' => 'setHolderName', 'type' => 'setType', 'brand' => 'setBrand', 'cardNoHash' => 'setCardNoHash', 'tdsType' => 'setTdsType', 'tds2Type' => 'setTds2Type', 'tds2Status' => 'setTds2Status', 'merchantName' => 'setMerchantName', 'accessId' => 'setAccessId', 'acs' => 'setAcs'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['cardNo' => 'getCardNo', 'expire' => 'getExpire', 'holderName' => 'getHolderName', 'type' => 'getType', 'brand' => 'getBrand', 'cardNoHash' => 'getCardNoHash', 'tdsType' => 'getTdsType', 'tds2Type' => 'getTds2Type', 'tds2Status' => 'getTds2Status', 'merchantName' => 'getMerchantName', 'accessId' => 'getAccessId', 'acs' => 'getAcs'];

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
        $this->setIfExists('cardNo', $data ?? [], null);
        $this->setIfExists('expire', $data ?? [], null);
        $this->setIfExists('holderName', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('cardNoHash', $data ?? [], null);
        $this->setIfExists('tdsType', $data ?? [], null);
        $this->setIfExists('tds2Type', $data ?? [], null);
        $this->setIfExists('tds2Status', $data ?? [], null);
        $this->setIfExists('merchantName', $data ?? [], null);
        $this->setIfExists('accessId', $data ?? [], null);
        $this->setIfExists('acs', $data ?? [], null);
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
        if (!is_null($this->container['cardNo']) && mb_strlen($this->container['cardNo']) > 16) {
            $invalidProperties[] = "invalid value for 'cardNo', the character length must be smaller than or equal to 16.";
        }
        if (!is_null($this->container['expire']) && mb_strlen($this->container['expire']) > 4) {
            $invalidProperties[] = "invalid value for 'expire', the character length must be smaller than or equal to 4.";
        }
        if (!is_null($this->container['expire']) && mb_strlen($this->container['expire']) < 4) {
            $invalidProperties[] = "invalid value for 'expire', the character length must be bigger than or equal to 4.";
        }
        if (!is_null($this->container['expire']) && !preg_match('/^\\d{2}\\d{2}$/', $this->container['expire'])) {
            $invalidProperties[] = "invalid value for 'expire', must be conform to the pattern /^\\d{2}\\d{2}\$/.";
        }
        if (!is_null($this->container['holderName']) && mb_strlen($this->container['holderName']) > 50) {
            $invalidProperties[] = "invalid value for 'holderName', the character length must be smaller than or equal to 50.";
        }
        if (!is_null($this->container['holderName']) && mb_strlen($this->container['holderName']) < 1) {
            $invalidProperties[] = "invalid value for 'holderName', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['cardNoHash']) && mb_strlen($this->container['cardNoHash']) > 64) {
            $invalidProperties[] = "invalid value for 'cardNoHash', the character length must be smaller than or equal to 64.";
        }
        if (!is_null($this->container['cardNoHash']) && mb_strlen($this->container['cardNoHash']) < 1) {
            $invalidProperties[] = "invalid value for 'cardNoHash', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['merchantName']) && mb_strlen($this->container['merchantName']) > 25) {
            $invalidProperties[] = "invalid value for 'merchantName', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['accessId']) && mb_strlen($this->container['accessId']) > 24) {
            $invalidProperties[] = "invalid value for 'accessId', the character length must be smaller than or equal to 24.";
        }
        if (!is_null($this->container['accessId']) && mb_strlen($this->container['accessId']) < 24) {
            $invalidProperties[] = "invalid value for 'accessId', the character length must be bigger than or equal to 24.";
        }
        if (!is_null($this->container['acs']) && mb_strlen($this->container['acs']) > 1) {
            $invalidProperties[] = "invalid value for 'acs', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['acs']) && mb_strlen($this->container['acs']) < 1) {
            $invalidProperties[] = "invalid value for 'acs', the character length must be bigger than or equal to 1.";
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
     * Gets cardNo.
     *
     * @return string|null
     */
    public function getCardNo(): mixed
    {
        return $this->container['cardNo'];
    }

    /**
     * Sets cardNo.
     *
     * @param string $cardNo マスク済みカード番号。\\ <span class=\"smallText\"> 下4桁以外をマスクしたカード番号です。\\ カード情報非保持の原則に基づき、fincodeユーザーはマスクされていないカード番号の代わりにこの値を保持することができます。\\ </span> 形式：`************1234`
     */
    public function setCardNo(mixed $cardNo): static
    {
        if (is_null($cardNo)) {
            throw new \InvalidArgumentException('non-nullable cardNo cannot be null');
        }
        if (mb_strlen($cardNo) > 16) {
            throw new \InvalidArgumentException('invalid length for $cardNo when calling PaymentMethodCard., must be smaller than or equal to 16.');
        }
        $this->container['cardNo'] = $cardNo;

        return $this;
    }

    /**
     * Gets expire.
     *
     * @return string|null
     */
    public function getExpire(): mixed
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire.
     *
     * @param string|null $expire カード有効期限。\\ 形式：`YYMM`
     */
    public function setExpire(mixed $expire): static
    {
        if (is_null($expire)) {
            $this->openAPINullablesSetToNull[] = 'expire';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expire', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($expire) && mb_strlen($expire) > 4) {
            throw new \InvalidArgumentException('invalid length for $expire when calling PaymentMethodCard., must be smaller than or equal to 4.');
        }
        if (!is_null($expire) && mb_strlen($expire) < 4) {
            throw new \InvalidArgumentException('invalid length for $expire when calling PaymentMethodCard., must be bigger than or equal to 4.');
        }
        if (!is_null($expire) && is_string($expire) && !preg_match('/^\\d{2}\\d{2}$/', $expire)) {
            throw new \InvalidArgumentException('invalid value for $expire when calling PaymentMethodCard., must conform to the pattern /^\\d{2}\\d{2}$/.');
        }
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets holderName.
     *
     * @return string|null
     */
    public function getHolderName(): mixed
    {
        return $this->container['holderName'];
    }

    /**
     * Sets holderName.
     *
     * @param string|null $holderName カード名義人名
     */
    public function setHolderName(mixed $holderName): static
    {
        if (is_null($holderName)) {
            $this->openAPINullablesSetToNull[] = 'holderName';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('holderName', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($holderName) && mb_strlen($holderName) > 50) {
            throw new \InvalidArgumentException('invalid length for $holderName when calling PaymentMethodCard., must be smaller than or equal to 50.');
        }
        if (!is_null($holderName) && mb_strlen($holderName) < 1) {
            throw new \InvalidArgumentException('invalid length for $holderName when calling PaymentMethodCard., must be bigger than or equal to 1.');
        }
        $this->container['holderName'] = $holderName;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return CardType|null
     */
    public function getType(): mixed
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param CardType $type type
     */
    public function setType(mixed $type): static
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets brand.
     *
     * @return CardBrand|null
     */
    public function getBrand(): mixed
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand.
     *
     * @param CardBrand $brand brand
     */
    public function setBrand(mixed $brand): static
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets cardNoHash.
     *
     * @return string|null
     */
    public function getCardNoHash(): mixed
    {
        return $this->container['cardNoHash'];
    }

    /**
     * Sets cardNoHash.
     *
     * @param string $cardNoHash カード番号をもとに生成されたハッシュ値。\\ <span class=\"smallText\"> おなじカード番号に対しては常に同じ値が返されます。\\ カード情報非保持の原則に基づき、fincodeユーザーはマスクされていないカード番号の代わりにこの値を保持することができます。 </span>
     */
    public function setCardNoHash(mixed $cardNoHash): static
    {
        if (is_null($cardNoHash)) {
            throw new \InvalidArgumentException('non-nullable cardNoHash cannot be null');
        }
        if (mb_strlen($cardNoHash) > 64) {
            throw new \InvalidArgumentException('invalid length for $cardNoHash when calling PaymentMethodCard., must be smaller than or equal to 64.');
        }
        if (mb_strlen($cardNoHash) < 1) {
            throw new \InvalidArgumentException('invalid length for $cardNoHash when calling PaymentMethodCard., must be bigger than or equal to 1.');
        }
        $this->container['cardNoHash'] = $cardNoHash;

        return $this;
    }

    /**
     * Gets tdsType.
     *
     * @return TdsType|null
     */
    public function getTdsType(): mixed
    {
        return $this->container['tdsType'];
    }

    /**
     * Sets tdsType.
     *
     * @param TdsType|null $tdsType カード登録時3Dセキュア認証を利用するか。  - `0`: 3Dセキュア認証を利用しない（デフォルト） - `2`: 3Dセキュア2.0認証を利用する
     */
    public function setTdsType(mixed $tdsType): static
    {
        if (is_null($tdsType)) {
            $this->openAPINullablesSetToNull[] = 'tdsType';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tdsType', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tdsType'] = $tdsType;

        return $this;
    }

    /**
     * Gets tds2Type.
     *
     * @return Tds2Type|null
     */
    public function getTds2Type(): mixed
    {
        return $this->container['tds2Type'];
    }

    /**
     * Sets tds2Type.
     *
     * @param Tds2Type|null $tds2Type 3Dセキュア2.0非対応時の挙動設定\\ 購入者がこの決済に利用したカードが3Dセキュア2.0に非対応である場合の後続処理を設定します。  - `2`: エラーをレスポンスし、処理を終了する。（デフォルト） - `3`: 3Dセキュア認証なしで登録を行う。
     */
    public function setTds2Type(mixed $tds2Type): static
    {
        if (is_null($tds2Type)) {
            $this->openAPINullablesSetToNull[] = 'tds2Type';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tds2Type', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tds2Type'] = $tds2Type;

        return $this;
    }

    /**
     * Gets tds2Status.
     *
     * @return Tds2Status|null
     */
    public function getTds2Status(): mixed
    {
        return $this->container['tds2Status'];
    }

    /**
     * Sets tds2Status.
     *
     * @param Tds2Status $tds2Status tds2Status
     */
    public function setTds2Status(mixed $tds2Status): static
    {
        if (is_null($tds2Status)) {
            throw new \InvalidArgumentException('non-nullable tds2Status cannot be null');
        }
        $this->container['tds2Status'] = $tds2Status;

        return $this;
    }

    /**
     * Gets merchantName.
     *
     * @return string|null
     */
    public function getMerchantName(): mixed
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName.
     *
     * @param string $merchantName <span class=\"smallText color--blue-400\">[3Dセキュア認証パラメータ]</span>\\ 加盟店名。\\ 3Dセキュア認証の際に表示されるショップ名や加盟店名を指定できます。\\ 使用可能な文字は以下の通りです。 - 半角英数 - 半角記号： !\"#$%&'()*+,-./:;<=>?@[\\]`^_{|}~ - 半角スペース  未指定の場合、 カード決済の契約時にfincodeが下記の形式に従って設定した値が自動的に使用されます。\\ \\ 形式：`{{ショップID}}-{{英数字からなる固定値}}`
     */
    public function setMerchantName(mixed $merchantName): static
    {
        if (is_null($merchantName)) {
            throw new \InvalidArgumentException('non-nullable merchantName cannot be null');
        }
        if (mb_strlen($merchantName) > 25) {
            throw new \InvalidArgumentException('invalid length for $merchantName when calling PaymentMethodCard., must be smaller than or equal to 25.');
        }
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets accessId.
     *
     * @return string|null
     */
    public function getAccessId(): mixed
    {
        return $this->container['accessId'];
    }

    /**
     * Sets accessId.
     *
     * @param string $accessId 取引ID
     */
    public function setAccessId(mixed $accessId): static
    {
        if (is_null($accessId)) {
            throw new \InvalidArgumentException('non-nullable accessId cannot be null');
        }
        if (mb_strlen($accessId) > 24) {
            throw new \InvalidArgumentException('invalid length for $accessId when calling PaymentMethodCard., must be smaller than or equal to 24.');
        }
        if (mb_strlen($accessId) < 24) {
            throw new \InvalidArgumentException('invalid length for $accessId when calling PaymentMethodCard., must be bigger than or equal to 24.');
        }
        $this->container['accessId'] = $accessId;

        return $this;
    }

    /**
     * Gets acs.
     *
     * @return string|null
     */
    public function getAcs(): mixed
    {
        return $this->container['acs'];
    }

    /**
     * Sets acs.
     *
     * @param string|null $acs ACS呼出判定
     */
    public function setAcs(mixed $acs): static
    {
        if (is_null($acs)) {
            $this->openAPINullablesSetToNull[] = 'acs';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acs', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($acs) && mb_strlen($acs) > 1) {
            throw new \InvalidArgumentException('invalid length for $acs when calling PaymentMethodCard., must be smaller than or equal to 1.');
        }
        if (!is_null($acs) && mb_strlen($acs) < 1) {
            throw new \InvalidArgumentException('invalid length for $acs when calling PaymentMethodCard., must be bigger than or equal to 1.');
        }
        $this->container['acs'] = $acs;

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

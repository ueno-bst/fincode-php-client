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
class PaymentSessionKonbini implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PaymentSession.Konbini';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['konbiniReceptionUrl' => 'string', 'paymentTermDay' => 'int', 'konbiniReceptionMailSendFlag' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['konbiniReceptionUrl' => null, 'paymentTermDay' => 'int64', 'konbiniReceptionMailSendFlag' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['konbiniReceptionUrl' => true, 'paymentTermDay' => true, 'konbiniReceptionMailSendFlag' => false];
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
    protected static array $attributeMap = ['konbiniReceptionUrl' => 'konbini_reception_url', 'paymentTermDay' => 'payment_term_day', 'konbiniReceptionMailSendFlag' => 'konbini_reception_mail_send_flag'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['konbiniReceptionUrl' => 'setKonbiniReceptionUrl', 'paymentTermDay' => 'setPaymentTermDay', 'konbiniReceptionMailSendFlag' => 'setKonbiniReceptionMailSendFlag'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['konbiniReceptionUrl' => 'getKonbiniReceptionUrl', 'paymentTermDay' => 'getPaymentTermDay', 'konbiniReceptionMailSendFlag' => 'getKonbiniReceptionMailSendFlag'];

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
    public const KONBINI_RECEPTION_MAIL_SEND_FLAG__0 = '0';
    public const KONBINI_RECEPTION_MAIL_SEND_FLAG__1 = '1';

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getKonbiniReceptionMailSendFlagAllowableValues(): array
    {
        return [self::KONBINI_RECEPTION_MAIL_SEND_FLAG__0, self::KONBINI_RECEPTION_MAIL_SEND_FLAG__1];
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
        $this->setIfExists('konbiniReceptionUrl', $data ?? [], null);
        $this->setIfExists('paymentTermDay', $data ?? [], null);
        $this->setIfExists('konbiniReceptionMailSendFlag', $data ?? [], null);
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
        if (!is_null($this->container['konbiniReceptionUrl']) && mb_strlen($this->container['konbiniReceptionUrl']) > 256) {
            $invalidProperties[] = "invalid value for 'konbiniReceptionUrl', the character length must be smaller than or equal to 256.";
        }
        $allowedValues = $this->getKonbiniReceptionMailSendFlagAllowableValues();
        if (!is_null($this->container['konbiniReceptionMailSendFlag']) && !in_array($this->container['konbiniReceptionMailSendFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'konbiniReceptionMailSendFlag', must be one of '%s'", $this->container['konbiniReceptionMailSendFlag'], implode("', '", $allowedValues));
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
     * Gets konbiniReceptionUrl.
     *
     * @return string|null
     */
    public function getKonbiniReceptionUrl(): mixed
    {
        return $this->container['konbiniReceptionUrl'];
    }

    /**
     * Sets konbiniReceptionUrl.
     *
     * @param string|null $konbiniReceptionUrl コンビニ決済 支払い画面URL
     */
    public function setKonbiniReceptionUrl(mixed $konbiniReceptionUrl): static
    {
        if (is_null($konbiniReceptionUrl)) {
            $this->openAPINullablesSetToNull[] = 'konbiniReceptionUrl';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('konbiniReceptionUrl', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($konbiniReceptionUrl) && mb_strlen($konbiniReceptionUrl) > 256) {
            throw new \InvalidArgumentException('invalid length for $konbiniReceptionUrl when calling PaymentSessionKonbini., must be smaller than or equal to 256.');
        }
        $this->container['konbiniReceptionUrl'] = $konbiniReceptionUrl;

        return $this;
    }

    /**
     * Gets paymentTermDay.
     *
     * @return int|null
     */
    public function getPaymentTermDay(): mixed
    {
        return $this->container['paymentTermDay'];
    }

    /**
     * Sets paymentTermDay.
     *
     * @param int|null $paymentTermDay コンビニ決済 支払期限日数\\ 店頭レジでの支払い期限日数です
     */
    public function setPaymentTermDay(mixed $paymentTermDay): static
    {
        if (is_null($paymentTermDay)) {
            $this->openAPINullablesSetToNull[] = 'paymentTermDay';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paymentTermDay', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paymentTermDay'] = $paymentTermDay;

        return $this;
    }

    /**
     * Gets konbiniReceptionMailSendFlag.
     *
     * @return string|null
     */
    public function getKonbiniReceptionMailSendFlag(): mixed
    {
        return $this->container['konbiniReceptionMailSendFlag'];
    }

    /**
     * Sets konbiniReceptionMailSendFlag.
     *
     * @param string $konbiniReceptionMailSendFlag コンビニ決済 支払い画面案内メール送信フラグ\\ コンビニ決済の支払い画面案内メールを送信するかどうかを設定します。  - `0`：送信しない - `1`：送信する
     */
    public function setKonbiniReceptionMailSendFlag(mixed $konbiniReceptionMailSendFlag): static
    {
        if (is_null($konbiniReceptionMailSendFlag)) {
            throw new \InvalidArgumentException('non-nullable konbiniReceptionMailSendFlag cannot be null');
        }
        $allowedValues = $this->getKonbiniReceptionMailSendFlagAllowableValues();
        if (!in_array($konbiniReceptionMailSendFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'konbiniReceptionMailSendFlag', must be one of '%s'", $konbiniReceptionMailSendFlag, implode("', '", $allowedValues)));
        }
        $this->container['konbiniReceptionMailSendFlag'] = $konbiniReceptionMailSendFlag;

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

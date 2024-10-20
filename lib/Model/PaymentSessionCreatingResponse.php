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
class PaymentSessionCreatingResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PaymentSession.Creating.Response';
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var array<string, string>
     */
    protected static array $openAPITypes = ['id' => 'string', 'linkUrl' => 'string', 'successUrl' => 'string', 'cancelUrl' => 'string', 'status' => '\OpenAPI\Fincode\Model\PaymentSessionStatus', 'expire' => 'string', 'shopServiceName' => 'string', 'guideMailSendFlag' => 'string', 'receiverMail' => 'string', 'mailCustomerName' => 'string', 'thanksMailSendFlag' => 'string', 'shopMailTemplateId' => 'string', 'transaction' => '\OpenAPI\Fincode\Model\PaymentSessionTransaction', 'card' => '\OpenAPI\Fincode\Model\PaymentSessionCard', 'konbini' => '\OpenAPI\Fincode\Model\PaymentSessionKonbini', 'paypay' => '\OpenAPI\Fincode\Model\PaymentSessionPayPay', 'virtualaccount' => '\OpenAPI\Fincode\Model\PaymentSessionVirtualAccount', 'created' => 'string', 'updated' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var array<string, string|null>
     */
    protected static array $openAPIFormats = ['id' => null, 'linkUrl' => null, 'successUrl' => null, 'cancelUrl' => null, 'status' => null, 'expire' => null, 'shopServiceName' => null, 'guideMailSendFlag' => null, 'receiverMail' => null, 'mailCustomerName' => null, 'thanksMailSendFlag' => null, 'shopMailTemplateId' => null, 'transaction' => null, 'card' => null, 'konbini' => null, 'paypay' => null, 'virtualaccount' => null, 'created' => null, 'updated' => null];
    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var array<string, bool>
     */
    protected static array $openAPINullables = ['id' => false, 'linkUrl' => false, 'successUrl' => true, 'cancelUrl' => true, 'status' => false, 'expire' => false, 'shopServiceName' => true, 'guideMailSendFlag' => false, 'receiverMail' => true, 'mailCustomerName' => true, 'thanksMailSendFlag' => false, 'shopMailTemplateId' => true, 'transaction' => false, 'card' => false, 'konbini' => false, 'paypay' => false, 'virtualaccount' => false, 'created' => false, 'updated' => true];
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
    protected static array $attributeMap = ['id' => 'id', 'linkUrl' => 'link_url', 'successUrl' => 'success_url', 'cancelUrl' => 'cancel_url', 'status' => 'status', 'expire' => 'expire', 'shopServiceName' => 'shop_service_name', 'guideMailSendFlag' => 'guide_mail_send_flag', 'receiverMail' => 'receiver_mail', 'mailCustomerName' => 'mail_customer_name', 'thanksMailSendFlag' => 'thanks_mail_send_flag', 'shopMailTemplateId' => 'shop_mail_template_id', 'transaction' => 'transaction', 'card' => 'card', 'konbini' => 'konbini', 'paypay' => 'paypay', 'virtualaccount' => 'virtualaccount', 'created' => 'created', 'updated' => 'updated'];
    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var array<string, string>
     */
    protected static array $setters = ['id' => 'setId', 'linkUrl' => 'setLinkUrl', 'successUrl' => 'setSuccessUrl', 'cancelUrl' => 'setCancelUrl', 'status' => 'setStatus', 'expire' => 'setExpire', 'shopServiceName' => 'setShopServiceName', 'guideMailSendFlag' => 'setGuideMailSendFlag', 'receiverMail' => 'setReceiverMail', 'mailCustomerName' => 'setMailCustomerName', 'thanksMailSendFlag' => 'setThanksMailSendFlag', 'shopMailTemplateId' => 'setShopMailTemplateId', 'transaction' => 'setTransaction', 'card' => 'setCard', 'konbini' => 'setKonbini', 'paypay' => 'setPaypay', 'virtualaccount' => 'setVirtualaccount', 'created' => 'setCreated', 'updated' => 'setUpdated'];
    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var array<string, string>
     */
    protected static array $getters = ['id' => 'getId', 'linkUrl' => 'getLinkUrl', 'successUrl' => 'getSuccessUrl', 'cancelUrl' => 'getCancelUrl', 'status' => 'getStatus', 'expire' => 'getExpire', 'shopServiceName' => 'getShopServiceName', 'guideMailSendFlag' => 'getGuideMailSendFlag', 'receiverMail' => 'getReceiverMail', 'mailCustomerName' => 'getMailCustomerName', 'thanksMailSendFlag' => 'getThanksMailSendFlag', 'shopMailTemplateId' => 'getShopMailTemplateId', 'transaction' => 'getTransaction', 'card' => 'getCard', 'konbini' => 'getKonbini', 'paypay' => 'getPaypay', 'virtualaccount' => 'getVirtualaccount', 'created' => 'getCreated', 'updated' => 'getUpdated'];

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
    public const GUIDE_MAIL_SEND_FLAG__0 = '0';
    public const GUIDE_MAIL_SEND_FLAG__1 = '1';
    public const THANKS_MAIL_SEND_FLAG__0 = '0';
    public const THANKS_MAIL_SEND_FLAG__1 = '1';

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getGuideMailSendFlagAllowableValues(): array
    {
        return [self::GUIDE_MAIL_SEND_FLAG__0, self::GUIDE_MAIL_SEND_FLAG__1];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return list<string>
     */
    public function getThanksMailSendFlagAllowableValues(): array
    {
        return [self::THANKS_MAIL_SEND_FLAG__0, self::THANKS_MAIL_SEND_FLAG__1];
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
        $this->setIfExists('linkUrl', $data ?? [], null);
        $this->setIfExists('successUrl', $data ?? [], null);
        $this->setIfExists('cancelUrl', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('expire', $data ?? [], null);
        $this->setIfExists('shopServiceName', $data ?? [], null);
        $this->setIfExists('guideMailSendFlag', $data ?? [], null);
        $this->setIfExists('receiverMail', $data ?? [], null);
        $this->setIfExists('mailCustomerName', $data ?? [], null);
        $this->setIfExists('thanksMailSendFlag', $data ?? [], null);
        $this->setIfExists('shopMailTemplateId', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('card', $data ?? [], null);
        $this->setIfExists('konbini', $data ?? [], null);
        $this->setIfExists('paypay', $data ?? [], null);
        $this->setIfExists('virtualaccount', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
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
        if (!is_null($this->container['linkUrl']) && mb_strlen($this->container['linkUrl']) > 100) {
            $invalidProperties[] = "invalid value for 'linkUrl', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['successUrl']) && mb_strlen($this->container['successUrl']) > 256) {
            $invalidProperties[] = "invalid value for 'successUrl', the character length must be smaller than or equal to 256.";
        }
        if (!is_null($this->container['cancelUrl']) && mb_strlen($this->container['cancelUrl']) > 256) {
            $invalidProperties[] = "invalid value for 'cancelUrl', the character length must be smaller than or equal to 256.";
        }
        if (!is_null($this->container['shopServiceName']) && mb_strlen($this->container['shopServiceName']) > 100) {
            $invalidProperties[] = "invalid value for 'shopServiceName', the character length must be smaller than or equal to 100.";
        }
        $allowedValues = $this->getGuideMailSendFlagAllowableValues();
        if (!is_null($this->container['guideMailSendFlag']) && !in_array($this->container['guideMailSendFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'guideMailSendFlag', must be one of '%s'", $this->container['guideMailSendFlag'], implode("', '", $allowedValues));
        }
        if (!is_null($this->container['receiverMail']) && mb_strlen($this->container['receiverMail']) > 254) {
            $invalidProperties[] = "invalid value for 'receiverMail', the character length must be smaller than or equal to 254.";
        }
        if (!is_null($this->container['mailCustomerName']) && mb_strlen($this->container['mailCustomerName']) > 384) {
            $invalidProperties[] = "invalid value for 'mailCustomerName', the character length must be smaller than or equal to 384.";
        }
        $allowedValues = $this->getThanksMailSendFlagAllowableValues();
        if (!is_null($this->container['thanksMailSendFlag']) && !in_array($this->container['thanksMailSendFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf("invalid value '%s' for 'thanksMailSendFlag', must be one of '%s'", $this->container['thanksMailSendFlag'], implode("', '", $allowedValues));
        }
        if (!is_null($this->container['shopMailTemplateId']) && mb_strlen($this->container['shopMailTemplateId']) > 25) {
            $invalidProperties[] = "invalid value for 'shopMailTemplateId', the character length must be smaller than or equal to 25.";
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
     * @param string $id リダイレクト型決済URL ID
     */
    public function setId(mixed $id): static
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if (mb_strlen($id) > 25) {
            throw new \InvalidArgumentException('invalid length for $id when calling PaymentSessionCreatingResponse., must be smaller than or equal to 25.');
        }
        if (mb_strlen($id) < 25) {
            throw new \InvalidArgumentException('invalid length for $id when calling PaymentSessionCreatingResponse., must be bigger than or equal to 25.');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets linkUrl.
     *
     * @return string|null
     */
    public function getLinkUrl(): mixed
    {
        return $this->container['linkUrl'];
    }

    /**
     * Sets linkUrl.
     *
     * @param string $linkUrl リダイレクト型決済URL
     */
    public function setLinkUrl(mixed $linkUrl): static
    {
        if (is_null($linkUrl)) {
            throw new \InvalidArgumentException('non-nullable linkUrl cannot be null');
        }
        if (mb_strlen($linkUrl) > 100) {
            throw new \InvalidArgumentException('invalid length for $linkUrl when calling PaymentSessionCreatingResponse., must be smaller than or equal to 100.');
        }
        $this->container['linkUrl'] = $linkUrl;

        return $this;
    }

    /**
     * Gets successUrl.
     *
     * @return string|null
     */
    public function getSuccessUrl(): mixed
    {
        return $this->container['successUrl'];
    }

    /**
     * Sets successUrl.
     *
     * @param string|null $successUrl 成功時リダイレクトURL\\ `link_url`上で決済に成功すると、fincodeはこのURLにPOSTメソッドでリダイレクトします
     */
    public function setSuccessUrl(mixed $successUrl): static
    {
        if (is_null($successUrl)) {
            $this->openAPINullablesSetToNull[] = 'successUrl';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('successUrl', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($successUrl) && mb_strlen($successUrl) > 256) {
            throw new \InvalidArgumentException('invalid length for $successUrl when calling PaymentSessionCreatingResponse., must be smaller than or equal to 256.');
        }
        $this->container['successUrl'] = $successUrl;

        return $this;
    }

    /**
     * Gets cancelUrl.
     *
     * @return string|null
     */
    public function getCancelUrl(): mixed
    {
        return $this->container['cancelUrl'];
    }

    /**
     * Sets cancelUrl.
     *
     * @param string|null $cancelUrl キャンセル時リダイレクトURL\\ `link_url`上で決済がキャンセルされると、fincodeはこのURLにPOSTメソッドでリダイレクトします
     */
    public function setCancelUrl(mixed $cancelUrl): static
    {
        if (is_null($cancelUrl)) {
            $this->openAPINullablesSetToNull[] = 'cancelUrl';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cancelUrl', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cancelUrl) && mb_strlen($cancelUrl) > 256) {
            throw new \InvalidArgumentException('invalid length for $cancelUrl when calling PaymentSessionCreatingResponse., must be smaller than or equal to 256.');
        }
        $this->container['cancelUrl'] = $cancelUrl;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return PaymentSessionStatus|null
     */
    public function getStatus(): mixed
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param PaymentSessionStatus $status status
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
     * @param string $expire リダイレクト型決済URL 有効期限\\ 形式： `yyyy/MM/dd HH:mm:ss.SSS`
     */
    public function setExpire(mixed $expire): static
    {
        if (is_null($expire)) {
            throw new \InvalidArgumentException('non-nullable expire cannot be null');
        }
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets shopServiceName.
     *
     * @return string|null
     */
    public function getShopServiceName(): mixed
    {
        return $this->container['shopServiceName'];
    }

    /**
     * Sets shopServiceName.
     *
     * @param string|null $shopServiceName ショップ／サービス名\\ 決済URL上で表示されるショップおよびサービスの名称です。\\ \\ デフォルトでは本番環境申請時に登録した「明細書表記」の値が設定されます。
     */
    public function setShopServiceName(mixed $shopServiceName): static
    {
        if (is_null($shopServiceName)) {
            $this->openAPINullablesSetToNull[] = 'shopServiceName';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shopServiceName', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($shopServiceName) && mb_strlen($shopServiceName) > 100) {
            throw new \InvalidArgumentException('invalid length for $shopServiceName when calling PaymentSessionCreatingResponse., must be smaller than or equal to 100.');
        }
        $this->container['shopServiceName'] = $shopServiceName;

        return $this;
    }

    /**
     * Gets guideMailSendFlag.
     *
     * @return string|null
     */
    public function getGuideMailSendFlag(): mixed
    {
        return $this->container['guideMailSendFlag'];
    }

    /**
     * Sets guideMailSendFlag.
     *
     * @param string $guideMailSendFlag 決済メール 送信フラグ\\ リダイレクト型決済URLをfincodeからのメール送信機能で送信したかどうかを示します。  - `0`：送信しなかった（デフォルト） - `1`：送信した
     */
    public function setGuideMailSendFlag(mixed $guideMailSendFlag): static
    {
        if (is_null($guideMailSendFlag)) {
            throw new \InvalidArgumentException('non-nullable guideMailSendFlag cannot be null');
        }
        $allowedValues = $this->getGuideMailSendFlagAllowableValues();
        if (!in_array($guideMailSendFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'guideMailSendFlag', must be one of '%s'", $guideMailSendFlag, implode("', '", $allowedValues)));
        }
        $this->container['guideMailSendFlag'] = $guideMailSendFlag;

        return $this;
    }

    /**
     * Gets receiverMail.
     *
     * @return string|null
     */
    public function getReceiverMail(): mixed
    {
        return $this->container['receiverMail'];
    }

    /**
     * Sets receiverMail.
     *
     * @param string|null $receiverMail 決済メール 送信先メールアドレス\\ リダイレクト型決済URLをfincodeからのメール送信機能で送信する場合の送信先メールアドレスです
     */
    public function setReceiverMail(mixed $receiverMail): static
    {
        if (is_null($receiverMail)) {
            $this->openAPINullablesSetToNull[] = 'receiverMail';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('receiverMail', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($receiverMail) && mb_strlen($receiverMail) > 254) {
            throw new \InvalidArgumentException('invalid length for $receiverMail when calling PaymentSessionCreatingResponse., must be smaller than or equal to 254.');
        }
        $this->container['receiverMail'] = $receiverMail;

        return $this;
    }

    /**
     * Gets mailCustomerName.
     *
     * @return string|null
     */
    public function getMailCustomerName(): mixed
    {
        return $this->container['mailCustomerName'];
    }

    /**
     * Sets mailCustomerName.
     *
     * @param string|null $mailCustomerName 購入メール 購入者の名前\\ リダイレクト型決済URLをfincodeからのメール送信機能で送信する場合のメール中で用いられる購入者の名前です。\\ \\ fincodeが提供するデフォルトのメールテンプレートでは敬称がテンプレート側に含まれています。
     */
    public function setMailCustomerName(mixed $mailCustomerName): static
    {
        if (is_null($mailCustomerName)) {
            $this->openAPINullablesSetToNull[] = 'mailCustomerName';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mailCustomerName', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($mailCustomerName) && mb_strlen($mailCustomerName) > 384) {
            throw new \InvalidArgumentException('invalid length for $mailCustomerName when calling PaymentSessionCreatingResponse., must be smaller than or equal to 384.');
        }
        $this->container['mailCustomerName'] = $mailCustomerName;

        return $this;
    }

    /**
     * Gets thanksMailSendFlag.
     *
     * @return string|null
     */
    public function getThanksMailSendFlag(): mixed
    {
        return $this->container['thanksMailSendFlag'];
    }

    /**
     * Sets thanksMailSendFlag.
     *
     * @param string $thanksMailSendFlag 完了メール 送信フラグ\\ 決済が完了した際に購入者に完了メールを送信するかどうかを示します。  - `0`：送信しない（デフォルト） - `1`：送信する
     */
    public function setThanksMailSendFlag(mixed $thanksMailSendFlag): static
    {
        if (is_null($thanksMailSendFlag)) {
            throw new \InvalidArgumentException('non-nullable thanksMailSendFlag cannot be null');
        }
        $allowedValues = $this->getThanksMailSendFlagAllowableValues();
        if (!in_array($thanksMailSendFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'thanksMailSendFlag', must be one of '%s'", $thanksMailSendFlag, implode("', '", $allowedValues)));
        }
        $this->container['thanksMailSendFlag'] = $thanksMailSendFlag;

        return $this;
    }

    /**
     * Gets shopMailTemplateId.
     *
     * @return string|null
     */
    public function getShopMailTemplateId(): mixed
    {
        return $this->container['shopMailTemplateId'];
    }

    /**
     * Sets shopMailTemplateId.
     *
     * @param string|null $shopMailTemplateId メールテンプレートID\\ メールテンプレートIDが設定されている場合、リダイレクト型決済URLの送信先メールアドレスに送信されるメールのテンプレートが変更されます。\\ \\ fincodeが提供するデフォルトのメールテンプレートを使用する場合は`null`を設定します。
     */
    public function setShopMailTemplateId(mixed $shopMailTemplateId): static
    {
        if (is_null($shopMailTemplateId)) {
            $this->openAPINullablesSetToNull[] = 'shopMailTemplateId';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shopMailTemplateId', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($shopMailTemplateId) && mb_strlen($shopMailTemplateId) > 25) {
            throw new \InvalidArgumentException('invalid length for $shopMailTemplateId when calling PaymentSessionCreatingResponse., must be smaller than or equal to 25.');
        }
        $this->container['shopMailTemplateId'] = $shopMailTemplateId;

        return $this;
    }

    /**
     * Gets transaction.
     *
     * @return PaymentSessionTransaction|null
     */
    public function getTransaction(): mixed
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction.
     *
     * @param PaymentSessionTransaction $transaction transaction
     */
    public function setTransaction(mixed $transaction): static
    {
        if (is_null($transaction)) {
            throw new \InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets card.
     *
     * @return PaymentSessionCard|null
     */
    public function getCard(): mixed
    {
        return $this->container['card'];
    }

    /**
     * Sets card.
     *
     * @param PaymentSessionCard $card カード決済に関する情報
     */
    public function setCard(mixed $card): static
    {
        if (is_null($card)) {
            throw new \InvalidArgumentException('non-nullable card cannot be null');
        }
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets konbini.
     *
     * @return PaymentSessionKonbini|null
     */
    public function getKonbini(): mixed
    {
        return $this->container['konbini'];
    }

    /**
     * Sets konbini.
     *
     * @param PaymentSessionKonbini $konbini コンビニ決済に関する情報
     */
    public function setKonbini(mixed $konbini): static
    {
        if (is_null($konbini)) {
            throw new \InvalidArgumentException('non-nullable konbini cannot be null');
        }
        $this->container['konbini'] = $konbini;

        return $this;
    }

    /**
     * Gets paypay.
     *
     * @return PaymentSessionPayPay|null
     */
    public function getPaypay(): mixed
    {
        return $this->container['paypay'];
    }

    /**
     * Sets paypay.
     *
     * @param PaymentSessionPayPay $paypay PayPayに関する情報
     */
    public function setPaypay(mixed $paypay): static
    {
        if (is_null($paypay)) {
            throw new \InvalidArgumentException('non-nullable paypay cannot be null');
        }
        $this->container['paypay'] = $paypay;

        return $this;
    }

    /**
     * Gets virtualaccount.
     *
     * @return PaymentSessionVirtualAccount|null
     */
    public function getVirtualaccount(): mixed
    {
        return $this->container['virtualaccount'];
    }

    /**
     * Sets virtualaccount.
     *
     * @param PaymentSessionVirtualAccount $virtualaccount 銀行振込に関する情報
     */
    public function setVirtualaccount(mixed $virtualaccount): static
    {
        if (is_null($virtualaccount)) {
            throw new \InvalidArgumentException('non-nullable virtualaccount cannot be null');
        }
        $this->container['virtualaccount'] = $virtualaccount;

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

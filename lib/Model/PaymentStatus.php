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

/**
 * 決済ステータス  - &#x60;UNPROCESSED&#x60;: 未処理 - &#x60;CHECKED&#x60;: 有効性チェック済み - &#x60;AUTHORIZED&#x60;: 仮売上 - &#x60;AWAITING_CUSTOMER_PAYMENT&#x60;: 購入者の支払い待ち - &#x60;AWAITING_PAYMENT_APPROVAL&#x60;: 決済承認待ち - &#x60;CAPTURED&#x60;: 売上確定 - &#x60;CANCELED&#x60;: キャンセル - &#x60;EXPIRED&#x60;: 決済の期限切れ - &#x60;AUTHENTICATED&#x60;: 未処理（3Dセキュア認証待ち） - &#x60;FAILED&#x60;: 決済失敗.
 */
enum PaymentStatus: string
{
    /**
     * Possible values of this enum.
     */
    case UNPROCESSED = 'UNPROCESSED';
    case CHECKED = 'CHECKED';
    case AUTHORIZED = 'AUTHORIZED';
    case AWAITING_CUSTOMER_PAYMENT = 'AWAITING_CUSTOMER_PAYMENT';
    case AWAITING_PAYMENT_APPROVAL = 'AWAITING_PAYMENT_APPROVAL';
    case CAPTURED = 'CAPTURED';
    case CANCELED = 'CANCELED';
    case EXPIRED = 'EXPIRED';
    case AUTHENTICATED = 'AUTHENTICATED';
    case FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return array_map(fn (self $enum): string => $enum->value, self::cases());
    }
}

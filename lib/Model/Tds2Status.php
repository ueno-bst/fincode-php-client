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
 * 3Dセキュア2.0認証ステータス  - &#x60;AUTHENTICATING&#x60;: 3Dセキュア認証処理中 - &#x60;CHALLENGE&#x60;: 3Dセキュア認証が必要 - &#x60;ACTIVATED&#x60;: 有効化済み - &#x60;AUTHENTICATED&#x60;: 3Dセキュア認証済み
 */
enum Tds2Status: string
{
    /**
     * Possible values of this enum.
     */
    case AUTHENTICATING = 'AUTHENTICATING';
    case CHALLENGE = 'CHALLENGE';
    case ACTIVATED = 'ACTIVATED';
    case AUTHENTICATED = 'AUTHENTICATED';

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

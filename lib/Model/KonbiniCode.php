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
 * コンビニ事業者コード\\ 購入者が払い込みを行ったコンビニ事業者をあらわすコード。  - &#x60;00010&#x60;: セブン-イレブン - &#x60;00020&#x60;: ローソン - &#x60;00030&#x60;: ファミリーマート - &#x60;00080&#x60;: ミニストップ - &#x60;00760&#x60;: セイコーマート.
 */
enum KonbiniCode: string
{
    /**
     * Possible values of this enum.
     */
    case _00010 = '00010';
    case _00020 = '00020';
    case _00030 = '00030';
    case _00080 = '00080';
    case _00760 = '00760';

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

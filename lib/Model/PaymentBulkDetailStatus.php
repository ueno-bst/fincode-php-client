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
 * ステータス  - &#x60;CHECKED&#x60;: チェック済み&lt;br /&gt;&lt;span class&#x3D;\&quot;smallText\&quot;&gt;データのチェックが完了し、決済処理の実行を待っています。&lt;/span&gt; - &#x60;SUCCEEDED&#x60;: 決済成功&lt;br /&gt;&lt;span class&#x3D;\&quot;smallText\&quot;&gt;この決済の処理においてエラーが発生せず請求が完了しました。&lt;/span&gt; - &#x60;FAILED&#x60;: 決済失敗&lt;br /&gt;&lt;span class&#x3D;\&quot;smallText\&quot;&gt;この決済の処理において1件以上のエラーが発生しました。&lt;/span&gt;.
 */
enum PaymentBulkDetailStatus: string
{
    /**
     * Possible values of this enum.
     */
    case CHECKED = 'CHECKED';
    case SUCCEEDED = 'SUCCEEDED';
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

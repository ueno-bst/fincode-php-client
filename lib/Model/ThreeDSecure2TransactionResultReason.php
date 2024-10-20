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
 * 3Dセキュア認証結果の理由コード\\ \\ 3Dセキュア認証2.0の結果（&#x60;tds2_trans_result&#x60;）の理由を示すコードです。  - &#x60;01&#x60;: カード認証に失敗 - &#x60;02&#x60;: 不明なデバイス - &#x60;03&#x60;: サポートされていないデバイス - &#x60;04&#x60;: 認証頻度の上限を超えた - &#x60;05&#x60;: 有効期限切れのカード - &#x60;06&#x60;: 無効なカード番号 - &#x60;07&#x60;: 無効な取引 - &#x60;08&#x60;: カードのレコードが存在しない - &#x60;09&#x60;: セキュリティ障害 - &#x60;10&#x60;: 盗難カード - &#x60;11&#x60;: 不正の疑い - &#x60;12&#x60;: カード会員に取引が許可されていない - &#x60;13&#x60;: カード会員がサービスに登録されていない - &#x60;14&#x60;: 取引が3Dセキュア処理サービスでタイムアウトした - &#x60;15&#x60;: 信頼度が低い - &#x60;16&#x60;: 信頼度が中程度 - &#x60;17&#x60;: 信頼度が高い - &#x60;18&#x60;: 信頼度が非常に高い - &#x60;19&#x60;: 3Dセキュア処理サービスの最大チャレンジを超える - &#x60;20&#x60;: 非決済取引はサポートされていません - &#x60;21&#x60;: 3RIトランザクションはサポートされていません - &#x60;22&#x60;: 3Dセキュア処理サービスの技術的な問題 - &#x60;23&#x60;: 3Dセキュア処理サービスによってDecoupled認証が必要と判断されたが、ThreeDSecureリクエスターからは要求されていない - &#x60;24&#x60;: ThreeDSecure Requestor Decoupled Max Timeを超過 - &#x60;25&#x60;: Decoupled認証のためのカード会員を認証するのに十分な時間が与えられなかった - &#x60;26&#x60;: 認証は試行されたが、カード会員によって実行されなかった
 */
enum ThreeDSecure2TransactionResultReason: string
{
    /**
     * Possible values of this enum.
     */
    case _01 = '01';
    case _02 = '02';
    case _03 = '03';
    case _04 = '04';
    case _05 = '05';
    case _06 = '06';
    case _07 = '07';
    case _08 = '08';
    case _09 = '09';
    case _11 = '11';
    case _12 = '12';
    case _13 = '13';
    case _14 = '14';
    case _15 = '15';
    case _16 = '16';
    case _17 = '17';
    case _18 = '18';
    case _19 = '19';
    case _20 = '20';
    case _21 = '21';
    case _22 = '22';
    case _23 = '23';
    case _24 = '24';
    case _25 = '25';
    case _26 = '26';
    case _80___99 = '80...99';

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

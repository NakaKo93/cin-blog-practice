<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class ApodService {
    /**
     * NASAの外部APIを用いてデータを取得
     * 
     * @param collection $date 日付のデータ
     * @return array APIからのレスポンス
     */
    public static function Get($date) {
        $client = new Client();
        $response = $client->request(
            'GET',
            'https://api.nasa.gov/planetary/apod',
            ['query' => [
                'api_key' => config('getKey.NASA-API-Key'),
                'start_date' => $date['start_date'],
                'end_date' => $date['end_date']
            ]]
        );
        $responseBody = $response->getBody()->getContents();

        return json_decode($responseBody, true);
    }
}
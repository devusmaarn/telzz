<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Http;

class FundWallet extends Page
{
    protected static ?string $navigationIcon = 'iconsax-out-empty-wallet-add';

    protected static string $view = 'filament.pages.fund-wallet';

    protected function getHeaderActions():array
    {
        return [
            Action::make('generate token')
                ->action(function () {
                    $response = Http::withHeaders([
                        "Authorization" => "Basic ". \base64_encode('MK_TEST_9XCF88Y7RU:D04SRRVRZZDJHXDXHERP5VXJNU45H4KR')
                        ])
                        ->post('https://sandbox.monnify.com/api/v1/auth/login')
                        ->object();

                    session(['monnify_token' => $response->responseBody->accessToken]);
                }),
            Action::make('create wallet')
                ->action(function () {
                    $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . session('monnify_token')
                    ])
                        ->post('https://sandbox.monnify.com/api/v2/bank-transfer/reserved-accounts', [
                        "accountReference"=> "abc123",
                        "accountName"=> "Test Reserved Account",
                        "currencyCode"=> "NGN",
                        "contractCode"=> "2880322279",
                        "customerEmail"=> "baba@test.com",
                        // "bvn"=> "21212121212",
                        "customerName"=> "John Doe",
                        "getAllAvailableBanks"=> true
                    ])
                    ->object();

                    dd($response);
                })
        ];  
    }
}

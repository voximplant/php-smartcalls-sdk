# smartcalls
<h1>Basic description</h1> <p>HTTP API is available via the <u>https://kit.voximplant.com/api/v3/<b>{method}</b></u> endpoint. To use the methods marked with the LOCK symbol, you need to generate an access_token via the <b>getAccessToken</b> method. Pass this access token to each HTTP API call.</p> <h1>Authentication</h1> <p>This API uses Custom Query Parameter for its authentication.</p> <p>The parameters that are needed to be sent for this type of authentication are as follows:</p> <ul>   <li><strong>access_token</strong></li>   <li><strong>domain</strong></li> </ul>

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/voximplant/php-smartcalls-sdk.git"
    }
  ],
  "require": {
    "voximplant/php-smartcalls-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/smartcalls/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountGetAccountInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetAccountInfoGet: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Name of the setting, such as account_id, domain_name, etc

try {
    $result = $apiInstance->settingSearchSettingsGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->settingSearchSettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://kit.voximplant.com/api/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountGetAccountInfoGet**](docs/Api/AccountApi.md#accountgetaccountinfoget) | **GET** /account/getAccountInfo | 
*AccountApi* | [**settingSearchSettingsGet**](docs/Api/AccountApi.md#settingsearchsettingsget) | **GET** /setting/searchSettings | 
*CallsApi* | [**callsDownloadHistoryReportPost**](docs/Api/CallsApi.md#callsdownloadhistoryreportpost) | **POST** /calls/downloadHistoryReport | 
*CallsApi* | [**callsExportHistoryReportPost**](docs/Api/CallsApi.md#callsexporthistoryreportpost) | **POST** /calls/exportHistoryReport | 
*CallsApi* | [**callsGetHistoryReportStatusPost**](docs/Api/CallsApi.md#callsgethistoryreportstatuspost) | **POST** /calls/getHistoryReportStatus | 
*CallsApi* | [**callsSearchCallsGet**](docs/Api/CallsApi.md#callssearchcallsget) | **GET** /calls/searchCalls | 
*CampaignsApi* | [**attemptDownloadStatReportGet**](docs/Api/CampaignsApi.md#attemptdownloadstatreportget) | **GET** /attempt/downloadStatReport | 
*CampaignsApi* | [**attemptExportStatReportPost**](docs/Api/CampaignsApi.md#attemptexportstatreportpost) | **POST** /attempt/exportStatReport | 
*CampaignsApi* | [**attemptGetStatReportStatusPost**](docs/Api/CampaignsApi.md#attemptgetstatreportstatuspost) | **POST** /attempt/getStatReportStatus | 
*CampaignsApi* | [**attemptSearchAttemptsGet**](docs/Api/CampaignsApi.md#attemptsearchattemptsget) | **GET** /attempt/searchAttempts | 
*CampaignsApi* | [**outboundAppendToCampaignPost**](docs/Api/CampaignsApi.md#outboundappendtocampaignpost) | **POST** /outbound/appendToCampaign | 
*CampaignsApi* | [**outboundDeleteCampaignPost**](docs/Api/CampaignsApi.md#outbounddeletecampaignpost) | **POST** /outbound/deleteCampaign | 
*CampaignsApi* | [**outboundInitCampaignPost**](docs/Api/CampaignsApi.md#outboundinitcampaignpost) | **POST** /outbound/initCampaign | 
*CampaignsApi* | [**outboundPauseCampaignPost**](docs/Api/CampaignsApi.md#outboundpausecampaignpost) | **POST** /outbound/pauseCampaign | 
*CampaignsApi* | [**outboundResumeCampaignPost**](docs/Api/CampaignsApi.md#outboundresumecampaignpost) | **POST** /outbound/resumeCampaign | 
*CampaignsApi* | [**outboundSearchCampaignsGet**](docs/Api/CampaignsApi.md#outboundsearchcampaignsget) | **GET** /outbound/searchCampaigns | 
*CampaignsApi* | [**outboundStatPost**](docs/Api/CampaignsApi.md#outboundstatpost) | **POST** /outbound/stat | 
*HelperApi* | [**helperGetListTimezonesGet**](docs/Api/HelperApi.md#helpergetlisttimezonesget) | **GET** /helper/getListTimezones | 
*HelperApi* | [**helperGetTimezonesByNumberPost**](docs/Api/HelperApi.md#helpergettimezonesbynumberpost) | **POST** /helper/getTimezonesByNumber | 
*NumbersApi* | [**calleridSearchCallerIDsGet**](docs/Api/NumbersApi.md#calleridsearchcalleridsget) | **GET** /callerid/searchCallerIDs | 
*NumbersApi* | [**phoneSearchNumbersGet**](docs/Api/NumbersApi.md#phonesearchnumbersget) | **GET** /phone/searchNumbers | 
*ScenariosApi* | [**scenarioGetScenarioVariablesPost**](docs/Api/ScenariosApi.md#scenariogetscenariovariablespost) | **POST** /scenario/getScenarioVariables | 
*ScenariosApi* | [**scenarioRunScenarioPost**](docs/Api/ScenariosApi.md#scenariorunscenariopost) | **POST** /scenario/runScenario | 
*ScenariosApi* | [**scenarioSearchScenariosGet**](docs/Api/ScenariosApi.md#scenariosearchscenariosget) | **GET** /scenario/searchScenarios | 

## Documentation For Models

 - [AccountDomainPartnerType](docs/Model/AccountDomainPartnerType.md)
 - [AccountDomainTariffType](docs/Model/AccountDomainTariffType.md)
 - [AccountDomainType](docs/Model/AccountDomainType.md)
 - [AccountProfileItemType](docs/Model/AccountProfileItemType.md)
 - [AccountProfileType](docs/Model/AccountProfileType.md)
 - [AccountType](docs/Model/AccountType.md)
 - [AccountUserType](docs/Model/AccountUserType.md)
 - [AppendFailType](docs/Model/AppendFailType.md)
 - [AppendToCampaignResponseType](docs/Model/AppendToCampaignResponseType.md)
 - [AppendToCampaignResponseTypeResult](docs/Model/AppendToCampaignResponseTypeResult.md)
 - [AttemptType](docs/Model/AttemptType.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [CallerIDType](docs/Model/CallerIDType.md)
 - [CallsType](docs/Model/CallsType.md)
 - [CampaignStatResponseType](docs/Model/CampaignStatResponseType.md)
 - [CampaignStatType](docs/Model/CampaignStatType.md)
 - [CampaignType](docs/Model/CampaignType.md)
 - [DeleteCampaignResponseType](docs/Model/DeleteCampaignResponseType.md)
 - [ErrorResultType](docs/Model/ErrorResultType.md)
 - [ErrorType](docs/Model/ErrorType.md)
 - [ExportHistoryReportResponseType](docs/Model/ExportHistoryReportResponseType.md)
 - [ExportStatReportResponseType](docs/Model/ExportStatReportResponseType.md)
 - [ExportStatReportResponseTypeResult](docs/Model/ExportStatReportResponseTypeResult.md)
 - [GetAccountInfoResponseType](docs/Model/GetAccountInfoResponseType.md)
 - [GetHistoryReportStatusResponseType](docs/Model/GetHistoryReportStatusResponseType.md)
 - [GetListTimezonesResponseType](docs/Model/GetListTimezonesResponseType.md)
 - [GetScenarioVariablesRequestType](docs/Model/GetScenarioVariablesRequestType.md)
 - [GetScenarioVariablesResponseType](docs/Model/GetScenarioVariablesResponseType.md)
 - [GetStatReportStatusResponseType](docs/Model/GetStatReportStatusResponseType.md)
 - [GetStatReportStatusResponseTypeResult](docs/Model/GetStatReportStatusResponseTypeResult.md)
 - [GetTimezonesByNumberRequestType](docs/Model/GetTimezonesByNumberRequestType.md)
 - [GetTimezonesByNumberResponseType](docs/Model/GetTimezonesByNumberResponseType.md)
 - [InitCampaignRequestType](docs/Model/InitCampaignRequestType.md)
 - [InitCampaignResponseType](docs/Model/InitCampaignResponseType.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [Meta](docs/Model/Meta.md)
 - [PauseCampaignResponseType](docs/Model/PauseCampaignResponseType.md)
 - [PhoneNumberCampaignType](docs/Model/PhoneNumberCampaignType.md)
 - [PhoneNumberScenarioType](docs/Model/PhoneNumberScenarioType.md)
 - [PhoneNumberType](docs/Model/PhoneNumberType.md)
 - [ResumeCampaignResponseType](docs/Model/ResumeCampaignResponseType.md)
 - [ScenarioCampaignType](docs/Model/ScenarioCampaignType.md)
 - [ScenarioPhoneNumberType](docs/Model/ScenarioPhoneNumberType.md)
 - [ScenarioType](docs/Model/ScenarioType.md)
 - [SearchAttemptsResponseType](docs/Model/SearchAttemptsResponseType.md)
 - [SearchCallerIDsResponseType](docs/Model/SearchCallerIDsResponseType.md)
 - [SearchCallsResponseType](docs/Model/SearchCallsResponseType.md)
 - [SearchCampaignsResponseType](docs/Model/SearchCampaignsResponseType.md)
 - [SearchNumbersResponseType](docs/Model/SearchNumbersResponseType.md)
 - [SearchScenariosResponseType](docs/Model/SearchScenariosResponseType.md)
 - [SearchSettingsResponseType](docs/Model/SearchSettingsResponseType.md)
 - [SettingType](docs/Model/SettingType.md)
 - [SettingsType](docs/Model/SettingsType.md)
 - [StatRequestType](docs/Model/StatRequestType.md)
 - [TestNumberType](docs/Model/TestNumberType.md)
 - [TimezoneByPhoneType](docs/Model/TimezoneByPhoneType.md)
 - [TimezoneType](docs/Model/TimezoneType.md)
 - [VariablesType](docs/Model/VariablesType.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author




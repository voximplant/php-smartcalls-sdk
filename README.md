# smartcalls
<h1>Basic description</h1> <p>HTTP API is available via the <u>https://smartcalls.io/api/v2/<b>{method}</b></u> endpoint. To use the methods marked with the LOCK symbol, you need to generate an access_token via the <b>getAccessToken</b> method. Pass this access token to each HTTP API call.</p> <h1>Authentication</h1> <p>This API uses Custom Query Parameter for its authentication.</p> <p>The parameters that are needed to be sent for this type of authentication are as follows:</p> <ul>   <li><strong>access_token</strong></li>   <li><strong>domain</strong></li> </ul>

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

// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountGetAccountInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetAccountInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://smartcalls.io/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountGetAccountInfoGet**](docs/Api/AccountApi.md#accountgetaccountinfoget) | **GET** /account/getAccountInfo | 
*AccountApi* | [**authGetAccessTokenGet**](docs/Api/AccountApi.md#authgetaccesstokenget) | **GET** /auth/getAccessToken | 
*AccountApi* | [**notificationGetNotificationsGet**](docs/Api/AccountApi.md#notificationgetnotificationsget) | **GET** /notification/getNotifications | 
*AccountApi* | [**passwordChangeByTokenPost**](docs/Api/AccountApi.md#passwordchangebytokenpost) | **POST** /password/changeByToken | 
*AccountApi* | [**passwordRecoveryByEmailPost**](docs/Api/AccountApi.md#passwordrecoverybyemailpost) | **POST** /password/recoveryByEmail | 
*AccountApi* | [**settingSearchSettingsGet**](docs/Api/AccountApi.md#settingsearchsettingsget) | **GET** /setting/searchSettings | 
*CampaignsApi* | [**attemptDownloadStatReportPost**](docs/Api/CampaignsApi.md#attemptdownloadstatreportpost) | **POST** /attempt/downloadStatReport | 
*CampaignsApi* | [**attemptExportStatReportPost**](docs/Api/CampaignsApi.md#attemptexportstatreportpost) | **POST** /attempt/exportStatReport | 
*CampaignsApi* | [**attemptGetStatReportStatusPost**](docs/Api/CampaignsApi.md#attemptgetstatreportstatuspost) | **POST** /attempt/getStatReportStatus | 
*CampaignsApi* | [**attemptSearchAttemptsGet**](docs/Api/CampaignsApi.md#attemptsearchattemptsget) | **GET** /attempt/searchAttempts | 
*CampaignsApi* | [**outboundAppendToCampaignPost**](docs/Api/CampaignsApi.md#outboundappendtocampaignpost) | **POST** /outbound/appendToCampaign | 
*CampaignsApi* | [**outboundDeleteCampaignPost**](docs/Api/CampaignsApi.md#outbounddeletecampaignpost) | **POST** /outbound/deleteCampaign | 
*CampaignsApi* | [**outboundGetCallListTemplatePost**](docs/Api/CampaignsApi.md#outboundgetcalllisttemplatepost) | **POST** /outbound/getCallListTemplate | 
*CampaignsApi* | [**outboundInitCampaignPost**](docs/Api/CampaignsApi.md#outboundinitcampaignpost) | **POST** /outbound/initCampaign | 
*CampaignsApi* | [**outboundPauseCampaignPost**](docs/Api/CampaignsApi.md#outboundpausecampaignpost) | **POST** /outbound/pauseCampaign | 
*CampaignsApi* | [**outboundResumeCampaignPost**](docs/Api/CampaignsApi.md#outboundresumecampaignpost) | **POST** /outbound/resumeCampaign | 
*CampaignsApi* | [**outboundSearchCampaignsGet**](docs/Api/CampaignsApi.md#outboundsearchcampaignsget) | **GET** /outbound/searchCampaigns | 
*CampaignsApi* | [**outboundStatPost**](docs/Api/CampaignsApi.md#outboundstatpost) | **POST** /outbound/stat | 
*HelperApi* | [**helperGetListTimezonesGet**](docs/Api/HelperApi.md#helpergetlisttimezonesget) | **GET** /helper/getListTimezones | 
*HelperApi* | [**helperGetTimezonesByNumberPost**](docs/Api/HelperApi.md#helpergettimezonesbynumberpost) | **POST** /helper/getTimezonesByNumber | 
*MediaApi* | [**mediaDeleteMediaPost**](docs/Api/MediaApi.md#mediadeletemediapost) | **POST** /media/deleteMedia | 
*MediaApi* | [**mediaGetStreamMediaGet**](docs/Api/MediaApi.md#mediagetstreammediaget) | **GET** /media/getStreamMedia | 
*MediaApi* | [**mediaSearchMediaGet**](docs/Api/MediaApi.md#mediasearchmediaget) | **GET** /media/searchMedia | 
*MediaApi* | [**mediaUpdateMediaPost**](docs/Api/MediaApi.md#mediaupdatemediapost) | **POST** /media/updateMedia | 
*MediaApi* | [**mediaUploadMediaPost**](docs/Api/MediaApi.md#mediauploadmediapost) | **POST** /media/uploadMedia | 
*NumbersApi* | [**calleridSearchCallerIDsGet**](docs/Api/NumbersApi.md#calleridsearchcalleridsget) | **GET** /callerid/searchCallerIDs | 
*NumbersApi* | [**phoneSearchNumbersGet**](docs/Api/NumbersApi.md#phonesearchnumbersget) | **GET** /phone/searchNumbers | 
*NumbersApi* | [**phoneUpdateNumberPost**](docs/Api/NumbersApi.md#phoneupdatenumberpost) | **POST** /phone/updateNumber | 
*ScenariosApi* | [**scenarioDeleteScenarioPost**](docs/Api/ScenariosApi.md#scenariodeletescenariopost) | **POST** /scenario/deleteScenario | 
*ScenariosApi* | [**scenarioGetScenarioVariablesPost**](docs/Api/ScenariosApi.md#scenariogetscenariovariablespost) | **POST** /scenario/getScenarioVariables | 
*ScenariosApi* | [**scenarioRunScenarioPost**](docs/Api/ScenariosApi.md#scenariorunscenariopost) | **POST** /scenario/runScenario | 
*ScenariosApi* | [**scenarioSearchScenariosGet**](docs/Api/ScenariosApi.md#scenariosearchscenariosget) | **GET** /scenario/searchScenarios | 

## Documentation For Models

 - [AccessTokenType](docs/Model/AccessTokenType.md)
 - [AccountType](docs/Model/AccountType.md)
 - [AccountTypeDomain](docs/Model/AccountTypeDomain.md)
 - [AccountTypeDomainPartner](docs/Model/AccountTypeDomainPartner.md)
 - [AccountTypeProfile](docs/Model/AccountTypeProfile.md)
 - [AccountTypeUser](docs/Model/AccountTypeUser.md)
 - [AppendToCampaignResponseType](docs/Model/AppendToCampaignResponseType.md)
 - [AppendToCampaignResponseTypeResult](docs/Model/AppendToCampaignResponseTypeResult.md)
 - [AttemptType](docs/Model/AttemptType.md)
 - [Body](docs/Model/Body.md)
 - [CallerIDType](docs/Model/CallerIDType.md)
 - [CampaignStatResponseType](docs/Model/CampaignStatResponseType.md)
 - [CampaignStatType](docs/Model/CampaignStatType.md)
 - [CampaignType](docs/Model/CampaignType.md)
 - [ChangeByTokenResponseType](docs/Model/ChangeByTokenResponseType.md)
 - [ChangeByTokenResponseTypeResult](docs/Model/ChangeByTokenResponseTypeResult.md)
 - [DeleteCampaignResponseType](docs/Model/DeleteCampaignResponseType.md)
 - [DeleteMediaResponseType](docs/Model/DeleteMediaResponseType.md)
 - [DeleteScenarioResponseType](docs/Model/DeleteScenarioResponseType.md)
 - [DownloadStatReportResponseType](docs/Model/DownloadStatReportResponseType.md)
 - [ErrorResultType](docs/Model/ErrorResultType.md)
 - [ErrorType](docs/Model/ErrorType.md)
 - [ExportStatReportResponseType](docs/Model/ExportStatReportResponseType.md)
 - [ExportStatReportResponseTypeResult](docs/Model/ExportStatReportResponseTypeResult.md)
 - [GetAccessTokenResponseType](docs/Model/GetAccessTokenResponseType.md)
 - [GetAccountInfoResponseType](docs/Model/GetAccountInfoResponseType.md)
 - [GetCallListTemplateResponseType](docs/Model/GetCallListTemplateResponseType.md)
 - [GetListTimezonesResponseType](docs/Model/GetListTimezonesResponseType.md)
 - [GetNotificationsResponseType](docs/Model/GetNotificationsResponseType.md)
 - [GetScenarioVariablesRequestType](docs/Model/GetScenarioVariablesRequestType.md)
 - [GetScenarioVariablesResponseType](docs/Model/GetScenarioVariablesResponseType.md)
 - [GetStatReportStatusResponseType](docs/Model/GetStatReportStatusResponseType.md)
 - [GetStatReportStatusResponseTypeResult](docs/Model/GetStatReportStatusResponseTypeResult.md)
 - [GetStreamMediaResponseType](docs/Model/GetStreamMediaResponseType.md)
 - [GetTimezonesByNumberRequestType](docs/Model/GetTimezonesByNumberRequestType.md)
 - [GetTimezonesByNumberResponseType](docs/Model/GetTimezonesByNumberResponseType.md)
 - [InitCampaignRequestType](docs/Model/InitCampaignRequestType.md)
 - [InitCampaignResponseType](docs/Model/InitCampaignResponseType.md)
 - [MediaType](docs/Model/MediaType.md)
 - [Meta](docs/Model/Meta.md)
 - [NotificationType](docs/Model/NotificationType.md)
 - [PauseCampaignResponseType](docs/Model/PauseCampaignResponseType.md)
 - [PhoneNumberType](docs/Model/PhoneNumberType.md)
 - [RecoveryByEmailRequestType](docs/Model/RecoveryByEmailRequestType.md)
 - [RecoveryByEmailResponseType](docs/Model/RecoveryByEmailResponseType.md)
 - [RecoveryByEmailResponseTypeResult](docs/Model/RecoveryByEmailResponseTypeResult.md)
 - [ResumeCampaignResponseType](docs/Model/ResumeCampaignResponseType.md)
 - [RunScenarioRequestType](docs/Model/RunScenarioRequestType.md)
 - [RunScenarioResponseType](docs/Model/RunScenarioResponseType.md)
 - [ScenarioType](docs/Model/ScenarioType.md)
 - [SearchAttemptsResponseType](docs/Model/SearchAttemptsResponseType.md)
 - [SearchCallerIDsResponseType](docs/Model/SearchCallerIDsResponseType.md)
 - [SearchCampaignsResponseType](docs/Model/SearchCampaignsResponseType.md)
 - [SearchMediaResponseType](docs/Model/SearchMediaResponseType.md)
 - [SearchNumbersResponseType](docs/Model/SearchNumbersResponseType.md)
 - [SearchScenariosResponseType](docs/Model/SearchScenariosResponseType.md)
 - [SearchSettingsResponseType](docs/Model/SearchSettingsResponseType.md)
 - [SettingType](docs/Model/SettingType.md)
 - [SettingsType](docs/Model/SettingsType.md)
 - [TestNumberType](docs/Model/TestNumberType.md)
 - [TimezoneByPhoneType](docs/Model/TimezoneByPhoneType.md)
 - [TimezoneType](docs/Model/TimezoneType.md)
 - [UpdateMediaRequestType](docs/Model/UpdateMediaRequestType.md)
 - [UpdateMediaResponseType](docs/Model/UpdateMediaResponseType.md)
 - [UpdateNumberRequestType](docs/Model/UpdateNumberRequestType.md)
 - [UpdateNumberResponseType](docs/Model/UpdateNumberResponseType.md)
 - [UploadMediaResponseType](docs/Model/UploadMediaResponseType.md)
 - [VariablesType](docs/Model/VariablesType.md)

## Documentation For Authorization


## AccessTokenAuth

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string

## Domain

- **Type**: API key
- **API key parameter name**: domain
- **Location**: URL query string


## Author


# Smartcalls\AccountApi

All URIs are relative to *https://kit.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountGetAccountInfoGet**](AccountApi.md#accountgetaccountinfoget) | **GET** /account/getAccountInfo | 
[**settingSearchSettingsGet**](AccountApi.md#settingsearchsettingsget) | **GET** /setting/searchSettings | 

# **accountGetAccountInfoGet**
> \Smartcalls\Model\GetAccountInfoResponseType accountGetAccountInfoGet()



Get info about your account, such as account name, currency etc.

### Example
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Smartcalls\Model\GetAccountInfoResponseType**](../Model/GetAccountInfoResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingSearchSettingsGet**
> \Smartcalls\Model\SearchSettingsResponseType settingSearchSettingsGet($key)



Get current account settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Name of the setting, such as account_id, domain_name, etc | [optional]

### Return type

[**\Smartcalls\Model\SearchSettingsResponseType**](../Model/SearchSettingsResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


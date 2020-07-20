# Smartcalls\HelperApi

All URIs are relative to *https://kit.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**helperGetListTimezonesGet**](HelperApi.md#helpergetlisttimezonesget) | **GET** /helper/getListTimezones | 
[**helperGetTimezonesByNumberPost**](HelperApi.md#helpergettimezonesbynumberpost) | **POST** /helper/getTimezonesByNumber | 

# **helperGetListTimezonesGet**
> \Smartcalls\Model\GetListTimezonesResponseType helperGetListTimezonesGet()



List of timezones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\HelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->helperGetListTimezonesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->helperGetListTimezonesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Smartcalls\Model\GetListTimezonesResponseType**](../Model/GetListTimezonesResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helperGetTimezonesByNumberPost**
> \Smartcalls\Model\GetTimezonesByNumberResponseType helperGetTimezonesByNumberPost($phone_number, $country)



Define the timezone by the phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\HelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone_number = 56; // int | 
$country = "country_example"; // string | 

try {
    $result = $apiInstance->helperGetTimezonesByNumberPost($phone_number, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->helperGetTimezonesByNumberPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number** | **int**|  | [optional]
 **country** | **string**|  | [optional]

### Return type

[**\Smartcalls\Model\GetTimezonesByNumberResponseType**](../Model/GetTimezonesByNumberResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


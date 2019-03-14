# Smartcalls\NumbersApi

All URIs are relative to *https://smartcalls.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calleridSearchCallerIDsGet**](NumbersApi.md#calleridSearchCallerIDsGet) | **GET** /callerid/searchCallerIDs | 
[**phoneSearchNumbersGet**](NumbersApi.md#phoneSearchNumbersGet) | **GET** /phone/searchNumbers | 
[**phoneUpdateNumberPost**](NumbersApi.md#phoneUpdateNumberPost) | **POST** /phone/updateNumber | 

# **calleridSearchCallerIDsGet**
> \Smartcalls\Model\SearchCallerIDsResponseType calleridSearchCallerIDsGet($id, $sort)



Search for the Caller ID number. The method without specifying the parameters returns last 20 Caller IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Caller ID. ID can be retrieved via the **searchCallersIDs** method.
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’, etc). <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>

try {
    $result = $apiInstance->calleridSearchCallerIDsGet($id, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->calleridSearchCallerIDsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Caller ID. ID can be retrieved via the **searchCallersIDs** method. | [optional]
 **sort** | **string**| Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]

### Return type

[**\Smartcalls\Model\SearchCallerIDsResponseType**](../Model/SearchCallerIDsResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **phoneSearchNumbersGet**
> \Smartcalls\Model\SearchNumbersResponseType phoneSearchNumbersGet($id, $sort)



Search for the phone numbers. The method without specifying the parameters returns last 20 phone numbers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Phone number ID. ID can be retrieved via the **searchNumbers** method.
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’, etc). <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>

try {
    $result = $apiInstance->phoneSearchNumbersGet($id, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->phoneSearchNumbersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Phone number ID. ID can be retrieved via the **searchNumbers** method. | [optional]
 **sort** | **string**| Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]

### Return type

[**\Smartcalls\Model\SearchNumbersResponseType**](../Model/SearchNumbersResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **phoneUpdateNumberPost**
> \Smartcalls\Model\UpdateNumberResponseType phoneUpdateNumberPost($redirect_number, $id)



Set or update the call forwarding number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirect_number = "redirect_number_example"; // string | 
$id = 56; // int | Phone number ID. ID can be retrieved via the **searchNumbers** method.

try {
    $result = $apiInstance->phoneUpdateNumberPost($redirect_number, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->phoneUpdateNumberPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redirect_number** | **string**|  | [optional]
 **id** | **int**| Phone number ID. ID can be retrieved via the **searchNumbers** method. | [optional]

### Return type

[**\Smartcalls\Model\UpdateNumberResponseType**](../Model/UpdateNumberResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


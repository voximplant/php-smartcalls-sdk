# Smartcalls\MediaApi

All URIs are relative to *https://smartcalls.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaDeleteMediaPost**](MediaApi.md#mediaDeleteMediaPost) | **POST** /media/deleteMedia | 
[**mediaGetStreamMediaGet**](MediaApi.md#mediaGetStreamMediaGet) | **GET** /media/getStreamMedia | 
[**mediaSearchMediaGet**](MediaApi.md#mediaSearchMediaGet) | **GET** /media/searchMedia | 
[**mediaUpdateMediaPost**](MediaApi.md#mediaUpdateMediaPost) | **POST** /media/updateMedia | 
[**mediaUploadMediaPost**](MediaApi.md#mediaUploadMediaPost) | **POST** /media/uploadMedia | 

# **mediaDeleteMediaPost**
> \Smartcalls\Model\DeleteMediaResponseType mediaDeleteMediaPost($id)



Delete the specified media item. The media item can't be deleted if it's used in an active campaign.

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

$apiInstance = new Smartcalls\client\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Media ID. ID can be retrieved via the **searchMedia** method.

try {
    $result = $apiInstance->mediaDeleteMediaPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaDeleteMediaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Media ID. ID can be retrieved via the **searchMedia** method. |

### Return type

[**\Smartcalls\Model\DeleteMediaResponseType**](../Model/DeleteMediaResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaGetStreamMediaGet**
> \Smartcalls\Model\GetStreamMediaResponseType mediaGetStreamMediaGet($id)



Get media as a stream. The method starts to transfer file to the customer's backend/application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Media ID. ID can be retrieved via the **searchMedia** method.

try {
    $result = $apiInstance->mediaGetStreamMediaGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaGetStreamMediaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Media ID. ID can be retrieved via the **searchMedia** method. |

### Return type

[**\Smartcalls\Model\GetStreamMediaResponseType**](../Model/GetStreamMediaResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaSearchMediaGet**
> \Smartcalls\Model\SearchMediaResponseType mediaSearchMediaGet($id, $title, $sort, $page, $per_page)



Get info about the specified media item: the name of related file and its ID.

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

$apiInstance = new Smartcalls\client\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Media ID. ID can be retrieved via the **searchMedia** method.
$title = "title_example"; // string | Media title to search.
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’ or ‘sort=-id’). <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>
$page = 56; // int | API methods return 20 records (one page) by default. The parameter specifies which page will be in a response: the first one, second, etc. <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>
$per_page = 56; // int | Sets the number of records per page (default value is 20, min = 1, max = 50). <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>

try {
    $result = $apiInstance->mediaSearchMediaGet($id, $title, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaSearchMediaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Media ID. ID can be retrieved via the **searchMedia** method. | [optional]
 **title** | **string**| Media title to search. | [optional]
 **sort** | **string**| Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’ or ‘sort&#x3D;-id’). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]
 **page** | **int**| API methods return 20 records (one page) by default. The parameter specifies which page will be in a response: the first one, second, etc. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]
 **per_page** | **int**| Sets the number of records per page (default value is 20, min &#x3D; 1, max &#x3D; 50). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]

### Return type

[**\Smartcalls\Model\SearchMediaResponseType**](../Model/SearchMediaResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaUpdateMediaPost**
> \Smartcalls\Model\UpdateMediaResponseType mediaUpdateMediaPost($id, $title)



Update the specified media item.

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

$apiInstance = new Smartcalls\client\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Media ID. ID can be retrieved via the **searchMedia** method.
$title = "title_example"; // string | 

try {
    $result = $apiInstance->mediaUpdateMediaPost($id, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaUpdateMediaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Media ID. ID can be retrieved via the **searchMedia** method. |
 **title** | **string**|  | [optional]

### Return type

[**\Smartcalls\Model\UpdateMediaResponseType**](../Model/UpdateMediaResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaUploadMediaPost**
> \Smartcalls\Model\UploadMediaResponseType mediaUploadMediaPost($upload_file)



Upload a new media file.

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

$apiInstance = new Smartcalls\client\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_file = "upload_file_example"; // string | 

try {
    $result = $apiInstance->mediaUploadMediaPost($upload_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaUploadMediaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_file** | **string**|  | [optional]

### Return type

[**\Smartcalls\Model\UploadMediaResponseType**](../Model/UploadMediaResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


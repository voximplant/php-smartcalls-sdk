# Smartcalls\ScenariosApi

All URIs are relative to *https://smartcalls.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**scenarioDeleteScenarioPost**](ScenariosApi.md#scenarioDeleteScenarioPost) | **POST** /scenario/deleteScenario | 
[**scenarioGetScenarioVariablesPost**](ScenariosApi.md#scenarioGetScenarioVariablesPost) | **POST** /scenario/getScenarioVariables | 
[**scenarioRunScenarioPost**](ScenariosApi.md#scenarioRunScenarioPost) | **POST** /scenario/runScenario | 
[**scenarioSearchScenariosGet**](ScenariosApi.md#scenarioSearchScenariosGet) | **GET** /scenario/searchScenarios | 

# **scenarioDeleteScenarioPost**
> \Smartcalls\Model\DeleteScenarioResponseType scenarioDeleteScenarioPost($scenario_id)



Delete the specified scenario. The scenario can't be deleted if it's used in an active campaign.

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

$apiInstance = new Smartcalls\client\ScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_id = 56; // int | Scenario ID. ID can be retrieved via the **searchScenarios** method.

try {
    $result = $apiInstance->scenarioDeleteScenarioPost($scenario_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenariosApi->scenarioDeleteScenarioPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **int**| Scenario ID. ID can be retrieved via the **searchScenarios** method. | [optional]

### Return type

[**\Smartcalls\Model\DeleteScenarioResponseType**](../Model/DeleteScenarioResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scenarioGetScenarioVariablesPost**
> \Smartcalls\Model\GetScenarioVariablesResponseType scenarioGetScenarioVariablesPost($scenario_id, $required_only)



Get variables from scenario.

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

$apiInstance = new Smartcalls\client\ScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_id = 56; // int | 
$required_only = true; // bool | 

try {
    $result = $apiInstance->scenarioGetScenarioVariablesPost($scenario_id, $required_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenariosApi->scenarioGetScenarioVariablesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **int**|  | [optional]
 **required_only** | **bool**|  | [optional]

### Return type

[**\Smartcalls\Model\GetScenarioVariablesResponseType**](../Model/GetScenarioVariablesResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scenarioRunScenarioPost**
> \Smartcalls\Model\RunScenarioResponseType scenarioRunScenarioPost($scenario_id, $phone, $variables, $phone_number_id, $caller_id)



Run the specified scenario.

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

$apiInstance = new Smartcalls\client\ScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_id = 56; // int | 
$phone = 56; // int | 
$variables = "variables_example"; // string | 
$phone_number_id = 56; // int | 
$caller_id = 56; // int | 

try {
    $result = $apiInstance->scenarioRunScenarioPost($scenario_id, $phone, $variables, $phone_number_id, $caller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenariosApi->scenarioRunScenarioPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **int**|  | [optional]
 **phone** | **int**|  | [optional]
 **variables** | **string**|  | [optional]
 **phone_number_id** | **int**|  | [optional]
 **caller_id** | **int**|  | [optional]

### Return type

[**\Smartcalls\Model\RunScenarioResponseType**](../Model/RunScenarioResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scenarioSearchScenariosGet**
> \Smartcalls\Model\SearchScenariosResponseType scenarioSearchScenariosGet($scenario_id, $title, $sort, $page, $per_page)



Search for the scenarios. The method without specifying the parameters returns last 50 created scenarios.

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

$apiInstance = new Smartcalls\client\ScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_id = 56; // int | Scenario ID. ID can be retrieved via the **searchScenarios** method.
$title = "title_example"; // string | Scenario title to search.
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’ or ‘sort=-id’). <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>
$page = 56; // int | API methods return 20 records (one page) by default. The parameter specifies which page will be in response: first one, second one etc. <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>
$per_page = 56; // int | Sets the number of records per page (default value is 20, min = 1, max = 50). <br /><b>IMPORTANT: the parameter can be used only in GET requests.</b>

try {
    $result = $apiInstance->scenarioSearchScenariosGet($scenario_id, $title, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenariosApi->scenarioSearchScenariosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_id** | **int**| Scenario ID. ID can be retrieved via the **searchScenarios** method. | [optional]
 **title** | **string**| Scenario title to search. | [optional]
 **sort** | **string**| Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’ or ‘sort&#x3D;-id’). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]
 **page** | **int**| API methods return 20 records (one page) by default. The parameter specifies which page will be in response: first one, second one etc. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]
 **per_page** | **int**| Sets the number of records per page (default value is 20, min &#x3D; 1, max &#x3D; 50). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; | [optional]

### Return type

[**\Smartcalls\Model\SearchScenariosResponseType**](../Model/SearchScenariosResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


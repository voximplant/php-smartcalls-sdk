# Smartcalls\ScenariosApi

All URIs are relative to *https://kit.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**scenarioGetScenarioVariablesPost**](ScenariosApi.md#scenariogetscenariovariablespost) | **POST** /scenario/getScenarioVariables | 
[**scenarioRunScenarioPost**](ScenariosApi.md#scenariorunscenariopost) | **POST** /scenario/runScenario | 
[**scenarioSearchScenariosGet**](ScenariosApi.md#scenariosearchscenariosget) | **GET** /scenario/searchScenarios | 

# **scenarioGetScenarioVariablesPost**
> \Smartcalls\Model\GetScenarioVariablesResponseType scenarioGetScenarioVariablesPost($scenario_id, $required_only)



Get variables of the specified scenario.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\ScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

$apiInstance = new Smartcalls\client\ScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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
 **scenario_id** | **int**|  |
 **phone** | **int**|  |
 **variables** | **string**|  |
 **phone_number_id** | **int**|  |
 **caller_id** | **int**|  |

### Return type

[**\Smartcalls\Model\RunScenarioResponseType**](../Model/RunScenarioResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scenarioSearchScenariosGet**
> \Smartcalls\Model\SearchScenariosResponseType scenarioSearchScenariosGet($id, $folder_id, $scenario_type, $title, $with_campaigns, $with_phones, $sort, $page, $per_page)



Search for the scenarios. The method without specifying the parameters returns the last 20 scenarios created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\ScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Scenario ID. The ID can be retrieved via the **searchScenarios** method
$folder_id = 56; // int | ID of the scenario's folder
$scenario_type = 56; // int | Scenario type to search for. (<b>example:</b> scenario_type = 1 — displays only outgoing call scenarios, scenario_type = 2 — shows only incoming call scenarios)
$title = "title_example"; // string | Scenario title to search for
$with_campaigns = 56; // int | Set '1' to include campaigns in the search results
$with_phones = 56; // int | Set '1' to include phone numbers in the search results
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’ or ‘sort=-id’). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$page = 56; // int | Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$per_page = 56; // int | Number of records per page (default value is 20, min = 1, max = 50). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>

try {
    $result = $apiInstance->scenarioSearchScenariosGet($id, $folder_id, $scenario_type, $title, $with_campaigns, $with_phones, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenariosApi->scenarioSearchScenariosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Scenario ID. The ID can be retrieved via the **searchScenarios** method | [optional]
 **folder_id** | **int**| ID of the scenario&#x27;s folder | [optional]
 **scenario_type** | **int**| Scenario type to search for. (&lt;b&gt;example:&lt;/b&gt; scenario_type &#x3D; 1 — displays only outgoing call scenarios, scenario_type &#x3D; 2 — shows only incoming call scenarios) | [optional]
 **title** | **string**| Scenario title to search for | [optional]
 **with_campaigns** | **int**| Set &#x27;1&#x27; to include campaigns in the search results | [optional]
 **with_phones** | **int**| Set &#x27;1&#x27; to include phone numbers in the search results | [optional]
 **sort** | **string**| Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’ or ‘sort&#x3D;-id’). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **page** | **int**| Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **per_page** | **int**| Number of records per page (default value is 20, min &#x3D; 1, max &#x3D; 50). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]

### Return type

[**\Smartcalls\Model\SearchScenariosResponseType**](../Model/SearchScenariosResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


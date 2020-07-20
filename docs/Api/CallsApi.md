# Smartcalls\CallsApi

All URIs are relative to *https://kit.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callsDownloadHistoryReportPost**](CallsApi.md#callsdownloadhistoryreportpost) | **POST** /calls/downloadHistoryReport | 
[**callsExportHistoryReportPost**](CallsApi.md#callsexporthistoryreportpost) | **POST** /calls/exportHistoryReport | 
[**callsGetHistoryReportStatusPost**](CallsApi.md#callsgethistoryreportstatuspost) | **POST** /calls/getHistoryReportStatus | 
[**callsSearchCallsGet**](CallsApi.md#callssearchcallsget) | **GET** /calls/searchCalls | 

# **callsDownloadHistoryReportPost**
> string callsDownloadHistoryReportPost($report_id)



Get the download link to the call history file (.xsls).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportHistoryReport** method

try {
    $result = $apiInstance->callsDownloadHistoryReportPost($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsDownloadHistoryReportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportHistoryReport** method |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callsExportHistoryReportPost**
> \Smartcalls\Model\ExportHistoryReportResponseType callsExportHistoryReportPost($call_direction, $scenario_id, $from, $to)



Start processing the call history. To check if the processing is over, use the <b>getHistoryReportStatus</b> method; use the <b>downloadHistoryReport</b> method to get the download link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$call_direction = "call_direction_example"; // string | Call direction (<b>example:</b> ‘call_direction=outgoing’ or ‘call_direction=incoming’ or ‘call_direction=all’)
$scenario_id = 56; // int | Scenario ID. The ID can be retrieved via the **searchScenarios** method.
$from = "from_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$to = "to_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’

try {
    $result = $apiInstance->callsExportHistoryReportPost($call_direction, $scenario_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsExportHistoryReportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_direction** | **string**| Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) | [optional]
 **scenario_id** | **int**| Scenario ID. The ID can be retrieved via the **searchScenarios** method. | [optional]
 **from** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **to** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]

### Return type

[**\Smartcalls\Model\ExportHistoryReportResponseType**](../Model/ExportHistoryReportResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callsGetHistoryReportStatusPost**
> \Smartcalls\Model\GetHistoryReportStatusResponseType callsGetHistoryReportStatusPost($report_id)



Get info about call history processing. If the response parameter \"processed\" is True, the call history can be downloaded via the <b>downloadHistoryReport</b> method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportHistoryReport** method

try {
    $result = $apiInstance->callsGetHistoryReportStatusPost($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsGetHistoryReportStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportHistoryReport** method |

### Return type

[**\Smartcalls\Model\GetHistoryReportStatusResponseType**](../Model/GetHistoryReportStatusResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callsSearchCallsGet**
> \Smartcalls\Model\SearchCallsResponseType callsSearchCallsGet($id, $call_direction, $scenario_id, $phone, $datetime_start, $datetime_end)



Search for the calls. The method without specifying the parameters returns the last 20 calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Call ID.
$call_direction = "call_direction_example"; // string | Call direction (<b>example:</b> ‘call_direction=outgoing’ or ‘call_direction=incoming’ or ‘call_direction=all’)
$scenario_id = 56; // int | Scenario ID. The ID can be retrieved via the **searchScenarios** method
$phone = 56; // int | Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (<b>example:</b> phone=15417543010)
$datetime_start = "datetime_start_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$datetime_end = "datetime_end_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’

try {
    $result = $apiInstance->callsSearchCallsGet($id, $call_direction, $scenario_id, $phone, $datetime_start, $datetime_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsSearchCallsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Call ID. | [optional]
 **call_direction** | **string**| Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) | [optional]
 **scenario_id** | **int**| Scenario ID. The ID can be retrieved via the **searchScenarios** method | [optional]
 **phone** | **int**| Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (&lt;b&gt;example:&lt;/b&gt; phone&#x3D;15417543010) | [optional]
 **datetime_start** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **datetime_end** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]

### Return type

[**\Smartcalls\Model\SearchCallsResponseType**](../Model/SearchCallsResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


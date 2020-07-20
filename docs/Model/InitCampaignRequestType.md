# InitCampaignRequestType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title of the campaign. | [optional] 
**max_attempts** | **int** | Maximum number of calls to one phone number. | [optional] 
**interval** | **int** | Time between attempts to call one phone number. | [optional] 
**max_lines** | **int** | Maximum number of calls performed simultaneously | [optional] 
**scenario_id** | **int** | Scenario ID. The ID can be retrieved via the **searchScenarios** method. | [optional] 
**phone_number_id** | **int** | Phone number ID. The ID сan be retrieved via the **searchNumbers** method. | [optional] 
**caller_id** | **int** | Caller ID. The ID сan be retrieved via the **searchCallerIDs** method. | [optional] 
**time_start** | **string** | Time when the API starts calling customers. Specify it along with the date_start parameter. | [optional] 
**time_end** | **string** | Time when the calls end. Specify it along with the date_end parameter. | [optional] 
**date_start** | **string** | Date when the API starts calling customers. Specify it along with the time_start parameter. | [optional] 
**date_end** | **string** | Date when the calls end. Specify it along with the time_end parameter. | [optional] 
**permanent** | **bool** | Set &#x27;true&#x27; to make the campaign permanent. Set &#x27;false&#x27; to stop the campaign after the end of the calls. | [optional] 
**description** | **string** | Campaign description | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


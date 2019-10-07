# InitCampaignRequestType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title of the campaign. | [optional] 
**max_attempts** | **int** | Maximum amount of calls on one phone number. | [optional] 
**interval** | **int** | The time between attempts to call on one phone number. | [optional] 
**max_lines** | **int** | Maximum simultaneously performing calls. | [optional] 
**scenario_id** | **int** | Scenario ID. ID can be retrieved via the **searchScenarios** method. | [optional] 
**phone_number_id** | **int** | Phone number ID. Can be retrieved via the **searchNumbers** method. | [optional] 
**callerid_id** | **int** | Caller ID. Can be retrieved via the **searchCallerIDs** method. | [optional] 
**time_start** | **string** | Time when API will start calling customers. Specify it along with the date_start parameter. | [optional] 
**time_end** | **string** | Time when calling will end.Specify it along with the date_end parameter. | [optional] 
**date_start** | **string** | Date when API will start calling customers. Specify it along with the time_start parameter. | [optional] 
**date_end** | **string** | Date when calling will end. Specify it along with the time_end parameter. | [optional] 
**permanent** | **bool** | Date when calling will end. Specify it along with the time_end parameter. Allow adding contacts to the active campaign? If **true**, you can add contacts up to the date_end and time_end. If **false**, the campaign will stop when calling ends or at the specified date_end and time_end. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



# Get Trigger Response List

## Structure

`GetTriggerResponseList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggers` | [`?(GetTriggerResponse[])`](../../doc/models/get-trigger-response.md) | Optional | **Constraints**: *Maximum Items*: `3` | getTriggers(): ?array | setTriggers(?array triggers): void |

## Example (as JSON)

```json
{
  "triggers": [
    {
      "accountName": "accountName4",
      "comparator": "comparator2",
      "createdAt": "2016-03-13T12:52:32.123Z",
      "groupName": "groupName0",
      "modifiedAt": "2016-03-13T12:52:32.123Z"
    },
    {
      "accountName": "accountName4",
      "comparator": "comparator2",
      "createdAt": "2016-03-13T12:52:32.123Z",
      "groupName": "groupName0",
      "modifiedAt": "2016-03-13T12:52:32.123Z"
    }
  ]
}
```


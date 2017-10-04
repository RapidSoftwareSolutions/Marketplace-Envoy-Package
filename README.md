[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Envoy/functions?utm_source=RapidAPIGitHub_EnvoyFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Envoy Package
The easiest way to sign in visitors.Collect guests information, capture their photos and have them sign legal documents—all on the iPad.
* Domain: [envoy.com](https://envoy.com/)
* Credentials: apiKey

## How to get credentials: 
1. Register on the [envoy.com](https://envoy.com/)
2. After registration, you will receive apiKey in [account setting](https:\/\/dashboard.envoy.com\/settings\/account) 
 
  ## Custom datatypes: 
   |Datatype|Description|Example
   |--------|-----------|----------
   |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
   |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
   |List|Simple array|```["123", "sample"]``` 
   |Select|String with predefined values|```sample```
   |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Envoy.ImportEmployees
You can automatically refresh your employee directory as long as you can export to a csv.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your API Key.
| csvFile| File       | When crafting your employee directory csv, it’s very important you strictly follow the format prescribed. It has to be in the exact order of Full Name, Email, and then Phone Number.

You can automatically refresh your employee directory as long as you can export to a csv. If you’re using LDAP or Active Directory, both systems have easy ways to export their data. When crafting your employee directory csv, it’s very important you strictly follow the format prescribed. It has to be in the exact order of Full Name, Email, and then Phone Number.

##### CSV Format for ImportEmployees endpoint

| Column  | Description |
| ------ | ----------- |
| `Full Name` | **String** _(required)_ The full name of the employee |
| `Email` | **String** _(optional)_ The email of the employee |
| `Phone Number` | **String** _(optional)_ The phone number of the employee |

Although optional, email is used as the primary identifier by Envoy. If your csv does not contain email entries, it will override the previous employee directory in full. This means that any assistant information will have to be added back in. Your employees will also not be able to take advantage of the Envoy mobile app.

## Envoy.ImportPreRegistrationVisitor
This version of bulk visitor pre-registration allows you to pre-register guests by uploading a CSV.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API Key.
| csvFile      | File       | Csv file with Pre-Registration Visitors.
| notifyInvitee| Select     | Will send email invites to those on the list.The notification function can be enabled in your account settings.

We're working to support a variety of upload and file
formats in the future.

##### CSV Format for ImportPreRegistrationVisitor endpoint

```
"Peter Parker","peter@dailybugle.com","2015-12-25 12:00 PM",,"Tony Stark"
"John Doe","john@doe.com","2015-10-05 3:30 PM",,"Beverly"
```

| Column | Description |
| ------ | ----------- |
| `invitee_name` | **String** _(required)_ The full name of the person being invited. |
| `invitee_email` | **String** _(optional)_ The email of the person being invited. |
| `expected_arrival_time` | **DateTime** _(required)_ This needs to be in an `iso6601` format. It should follow this format `2014-07-29 4:00 PM` in their local time. |
| `private_notes` | **String** _(optional)_ |
| `host_name` | **String** _(required)_ The person who is hosting the visitor. |



## Envoy.getAllLocationVisitors
See all the entries for the master location. By default, it will return all time entries but you can also filter by to and from dates to get a range.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API Key.
| fromDate| DatePicker | iso8601 format ie. 2014-03-01.
| toDate  | DatePicker | iso8601 format ie. 2014-03-01.


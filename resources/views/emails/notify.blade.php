<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>New Query Received</h2>
    <h3>Details:</h3>
    <p><strong>Name:</strong> {{ $queryData['name'] }}</p>
    <p><strong>Email:</strong> {{ $queryData['email'] }}</p>
    <p><strong>Company Name:</strong> {{ $queryData['company_name'] }}</p>
    <p><strong>Phone Number:</strong> {{ $queryData['phone_number'] }}</p>
    <p><strong>Web Url:</strong> {{ $queryData['web_url'] }}</p>
    <p><strong>Msg:</strong> {{ $queryData['your_msg'] }}</p>
    <p><strong>Preffered Option:</strong> {{ $queryData['preffered_option'] }}</p>
    <p><strong>Budget:</strong> {{ $queryData['budget'] }}</p>
    <p><strong>Goals:</strong> {{ $queryData['goals'] }}</p>
    <p><strong>FB Link:</strong> {{ $queryData['fb_link'] }}</p>
    <p><strong>Insta Link:</strong> {{ $queryData['insta_link'] }}</p>
    <p><strong>Category:</strong> {{ $queryData['category'] }}</p>
    <p><strong>Requirement:</strong> {{ $queryData['Requirement'] }}</p>
    <p><strong>Existing Tool:</strong> {{ $queryData['existing_tool'] }}</p>
    <p><strong>Language:</strong> {{ $queryData['language'] }}</p>
    <p><strong>Form Type:</strong> {{ $queryData['form_type'] }}</p>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Query Received</title>
</head>
<body>
    <h2>New Query Received</h2>
    <h3>Details:</h3>

    @if(!empty($queryData['name']))
        <p><strong>Name:</strong> {{ $queryData['name'] }}</p>
    @endif

    @if(!empty($queryData['email']))
        <p><strong>Email:</strong> {{ $queryData['email'] }}</p>
    @endif

    @if(!empty($queryData['company_name']))
        <p><strong>Company Name:</strong> {{ $queryData['company_name'] }}</p>
    @endif

    @if(!empty($queryData['phone_number']))
        <p><strong>Phone Number:</strong> {{ $queryData['phone_number'] }}</p>
    @endif

    @if(!empty($queryData['web_url']))
        <p><strong>Web URL:</strong> {{ $queryData['web_url'] }}</p>
    @endif

    @if(!empty($queryData['your_msg']))
        <p><strong>Message:</strong> {{ $queryData['your_msg'] }}</p>
    @endif

    @if(!empty($queryData['preffered_option']))
        <p><strong>Preferred Option:</strong> {{ $queryData['preffered_option'] }}</p>
    @endif

    @if(!empty($queryData['budget']))
        <p><strong>Budget:</strong> {{ $queryData['budget'] }}</p>
    @endif

    @if(!empty($queryData['goals']))
        <p><strong>Goals:</strong> {{ $queryData['goals'] }}</p>
    @endif

    @if(!empty($queryData['fb_link']))
        <p><strong>FB Link:</strong> {{ $queryData['fb_link'] }}</p>
    @endif

    @if(!empty($queryData['insta_link']))
        <p><strong>Insta Link:</strong> {{ $queryData['insta_link'] }}</p>
    @endif

    @if(!empty($queryData['category']))
        <p><strong>Category:</strong> {{ $queryData['category'] }}</p>
    @endif

    @if(!empty($queryData['Requirement']))
        <p><strong>Requirement:</strong> {{ $queryData['Requirement'] }}</p>
    @endif

    @if(!empty($queryData['existing_tool']))
        <p><strong>Existing Tool:</strong> {{ $queryData['existing_tool'] }}</p>
    @endif

    @if(!empty($queryData['language']))
        <p><strong>Language:</strong> {{ $queryData['language'] }}</p>
    @endif

    @if(!empty($queryData['form_type']))
        <p><strong>Form Type:</strong> {{ $queryData['form_type'] }}</p>
    @endif

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>{{ $mailData['companyname'] }}</title>
</head>
<body>
    <h1>From : {{ '  '.$mailData['lastname'].' '.$mailData['firstname'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
    <p>Thank you</p>
    <h1>Contacts : {{ '  '.$mailData['email'].' '.$mailData['phonenumber'] }}</h1>

</body>
</html>

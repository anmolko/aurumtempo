<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
</head>
<body>
<p>Hi, This is {{ $data['name'] }}</p>
<p>My phone number is {{$data['phone_number']}} and email is {{$data['email']}}</p>
<p>I have some query about {{$data['msg_subject']}} like {{ $data['message'] }}.</p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Status Update</title>
</head>
<body>
    <p>Dear {{ $name }},</p>

    <p>Your account status has been updated to {{ $status ?? 'No status' }}.</p>

    <p>Remarks: {{ $remarks ?? 'No remarks' }}</p>

    <p>Thank you,</p>
    <p>The Team</p>
</body>
</html>

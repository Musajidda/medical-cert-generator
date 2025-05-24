<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #000;
            width: 600px;
            text-align: center;
        }
        h1 {
            text-decoration: underline;
        }
        .patient-info {
            margin: 20px 0;
        }
        .signature {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <h1>Medical Certificate</h1>
    <div class="patient-info">
        <p><strong>Name:</strong> {{patient_name}}</p>
        <p><strong>Date of Birth:</strong> {{date_of_birth}}</p>
        <p><strong>Diagnosis:</strong> {{diagnosis}}</p>
        <p><strong>Issued Date:</strong> {{issued_date}}</p>
    </div>
    <div class="signature">
        <p>____________________</p>
        <p>Doctor's Name</p>
        <p>Medical License Number</p>
    </div>
</body>
</html>
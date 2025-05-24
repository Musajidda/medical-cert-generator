<?php
// filepath: medical-cert-generator/public/index.php

require_once '../src/CertificateGenerator.php';

$templatePath = '../templates/certificate_template.php'; // Adjust the path as needed
$certificateGenerator = new CertificateGenerator($templatePath);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'] ?? '',
        'date' => $_POST['date'] ?? '',
        'doctor' => $_POST['doctor'] ?? '',
        'diagnosis' => $_POST['diagnosis'] ?? ''
    ];

    $certificate = $certificateGenerator->generateCertificate($data);
    echo $certificate;
} else {
    ?>
<form method="POST" action="">
    <label for="name">Patient Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="doctor">Doctor's Name:</label>
    <input type="text" id="doctor" name="doctor" required>

    <label for="diagnosis">Diagnosis:</label>
    <textarea id="diagnosis" name="diagnosis" required></textarea>

    <button type="submit">Generate Certificate</button>
</form>
<?php
}
?>
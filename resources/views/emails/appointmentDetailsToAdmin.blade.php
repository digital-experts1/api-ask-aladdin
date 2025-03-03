{{-- File: resources/views/emails/appointmentDetailsToAdmin.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
</head>
<body>
    <p>Dear Admin,</p>

    <p>Please find below the details of the upcoming appointment scheduled for {{ $contactForm->name }}:</p>
    <ul>
        <li><strong>Patient Name:</strong> {{ $contactForm->name }}</li>
 

        <li><strong>Contact Information:</strong> {{ $contactForm->email }}</li>
        <li><strong>Phone:</strong> {{ $contactForm->phone }}</li>
        <li><strong>Special Instructions:</strong> {{ $contactForm->message }}</li>
    </ul>

    <p>Please ensure that the necessary preparations are made to accommodate this appointment effectively. Should there be any changes or additional requirements, I will update you accordingly.</p>

    <p>Thank you for your attention to this matter.</p>

    <p>Best regards,</p>

    Ethra Invest<br>
  
</body>
</html>

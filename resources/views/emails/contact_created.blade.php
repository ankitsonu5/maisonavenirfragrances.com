<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Enquiry</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f9;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 20px; border-radius: 5px;">
        <h2 style="text-align: center; color: #333;">New Contact Enquiry</h2>
        <p style="font-size: 1em; color: #333;">You have a new contact enquiry with the following details:</p>

        <table style="width: 100%; margin-top: 20px; font-size: 1em; color: #333;">
            <tr>
                <td style="padding: 8px; font-weight: bold;">Name:</td>
                <td style="padding: 8px;">{{ $contact->name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Company Name:</td>
                <td style="padding: 8px;">{{ $contact->company_name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Contact Number:</td>
                <td style="padding: 8px;">{{ $contact->contact_number }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Email:</td>
                <td style="padding: 8px;">{{ $contact->email }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Enquiry:</td>
                <td style="padding: 8px;">{{ $contact->enquiry }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Country:</td>
                <td style="padding: 8px;">{{ $contact->country }}</td>
            </tr>
        </table>

        <p style="margin-top: 20px; font-size: 1em; color: #333;">Please reach out to this contact as soon as possible.
        </p>
    </div>
</body>

</html>
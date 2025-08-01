# Bulk-SMS-Sender-using-PHP-TextSMS-API-Kenya-
Simple PHP script to send bulk SMS using the TextSMS.co.ke API. Ideal for CRM systems, marketing platforms, or notification tools. Built for Kenyan developers and businesses

## 🚀 Features

- Send SMS to multiple numbers
- Easily configurable API keys
- Uses cURL or `file_get_contents`
- Clean and minimal code
- Built with Kenyan businesses in mind 🇰🇪

---

## 🔧 Requirements

- PHP 7.0+
- An account with [TextSMS.co.ke](https://textsms.co.ke)
- Valid API Key and Partner ID

---

## 🛠️ How to Use

1. Clone the repository or download the files.
2. Replace the credentials in the script:

```php
$apiKey = 'your_api_key_here';
$partnerID = 'your_partner_id';
$shortcode = 'SENDERID';
$recipient = '2547XXXXXXXX'; // comma-separated for multiple
$message = 'Your custom SMS message';

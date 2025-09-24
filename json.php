<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formatted JSON Display</title>
        <style>
            pre {
                background-color: #f4f4f4;
                padding: 15px;
                border: 1px solid #ddd;
                overflow-x: auto; /* For horizontal scrolling if content is wide */
            }
            code {
                font-family: monospace;
                color: #333;
            }
        </style>
    </head>
    <body>
        <h1>Formatted JSON Data</h1>
        <pre><code id="json-display"></code></pre>

        <script>
            const jsonData = {"data":{"id":"855","type":"click","attributes":{"geo_state":"IN","geo_country":"IN","ip_address":"122.185.127.250","device":"Chrome","user_agent":null,"c1":null,"c2":null,"c3":null,"c4":null,"c5":null,"created_at":"2025-09-18T09:43:26.048-04:00","updated_at":"2025-09-18T09:43:26.048-04:00","browser":"Unknown Browser","browser_version":"0","device_family":"unknown_device","device_type":"unknown_device","device_model":"Unknown","platform_name":"Unknown","platform_family":"unknown_platform","platform_version":"0","http_referer":null,"additional_passed_values":{"sub5":null,"c5":null},"aff_id":null,"pub_id":null,"session_token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbGlja19pZCI6ODU1LCJleHAiOjE3NTgyODk0MDZ9.6Wrx26-GGvDZ0auOOM_FeOEPQvCpRK00E7ZlDN0dRc4"}},"meta":{"status":"success","message":"Click created successfully."}};

            const formattedJsonString = JSON.stringify(jsonData, null, 2);
            document.getElementById('json-display').textContent = formattedJsonString;
        </script>
    </body>
    </html>
<?php
header('Access-Control-Allow-Origin: https://localhost:5000');
header('Access-Control-Allow-Credentials: true');
header('Content-Type: text/html');
header('Set-Cookie: __Host-3P_partitioned=iframe_cookie1; Secure; Path=/; SameSite=None; Partitioned; Max-Age=86400');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iframe Content</title>   

</head>
<body>

  <script>
    // Function to read cookies
    function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
    }

    // Log   
 // the cookie value to console
    console.log('Cookie from iframe:', getCookie('__Host-3P_partitioned'));
  </script>

</body>
</html>
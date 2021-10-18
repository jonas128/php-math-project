<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<script>
function checkKey(key) {
  return (key >= '0' && key <= '9') || ['+','(',')','-'].includes(key);
}
</script>
<input onkeydown="return checkKey(event.key)" placeholder="Enter a two digit number please" type="tel">
</body>

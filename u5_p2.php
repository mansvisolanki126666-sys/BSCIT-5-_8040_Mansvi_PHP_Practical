<!DOCTYPE html>
<html>
<head>
    <title>Prompt Example</title>
</head>
<body>

    <h2>JavaScript Prompt Example</h2>
    <p id="result"></p>

    <script>
        let name = prompt("Enter your name:");

        document.getElementById("result").innerHTML =
            "Hello, " + name + "!";
    </script>

</body>
</html>
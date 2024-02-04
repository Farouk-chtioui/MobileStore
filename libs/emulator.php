<!DOCTYPE html>
<html>
<body>
    <pre id="jsonOutput"></pre>

    <script>
        fetch('actions-1.json')
            .then(response => response.json())
            .then(data => {
                document.getElementById('jsonOutput').textContent = JSON.stringify(data, null, 2);
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
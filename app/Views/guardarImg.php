<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="padding-top:160px">
    <form method="POST" enctype="multipart/form-data">
        <input type="file" id="imagen" name="imagen">
        <input type="submit" id="send" value="Subir imagen">
    </form>
    </div>
lalal
    <img src="http://localhost/ufm/uploads/add.jpg" alt="hola">
    lalal

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        $('#send').click(function(e) {
            e.preventDefault();

            var formData = new FormData();
            formData.append('formData', $('#imagen')[0].files[0]);
            formData.append('slug','add.jpg');

            console.log(formData); // Mueve esta línea aquí

            $.ajax({
                url: "add-img",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
</body>
</html>

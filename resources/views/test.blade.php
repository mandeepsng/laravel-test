<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trumbowyg Editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trumbowyg@2.26.0/dist/ui/trumbowyg.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.26.0/dist/trumbowyg.min.js"></script>
</head>
<body>
    <form method="POST" action="/save">
        @csrf
        <textarea id="editor" name="content"></textarea>
        <button type="submit">Save</button>
    </form>

    <script>
        $(document).ready(function () {
            $('#editor').trumbowyg();
        });
    </script>
</body>
</html>

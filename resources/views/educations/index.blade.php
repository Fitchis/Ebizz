<!-- resources/views/educations/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education List</title>
</head>
<body>
    <h1>Education List</h1>
    <ul>
        @foreach($educations as $education)
            <li>{{ $education->title }}</li>
        @endforeach
    </ul>
</body>
</html>
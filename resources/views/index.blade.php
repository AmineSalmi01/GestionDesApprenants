<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amine Salmi</title>
</head>
<body>
    
    <form action="{{ route('send') }}" method="GET">
        <!-- {{ csrf_field() }} -->
        
        
        <input type="text" name="input">
        <button type="submit">Save</button>
    </form>
    
    
</body>
</html>
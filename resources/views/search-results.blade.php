


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    @if($properties->isEmpty())
        <p>No properties found.</p>
    @else
        <ul>
            @foreach($properties as $property)
                <li>{{ $property->address }} - {{ $property->city }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>

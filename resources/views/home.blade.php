<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #444;
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            width: 80%;
            max-width: 600px;
        }

        li {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        li strong {
            font-size: 24px;
            color: #2d3e50;
        }

        li em {
            display: block;
            margin-top: 10px;
            font-style: italic;
            color: #666;
        }

        p {
            text-align: center;
            color: #999;
            font-size: 18px;
        }

        /* Button styling (optional) */
        .btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div>
        <h1>Movie List</h1>

        @if($movies->count())
            <ul>
                @foreach($movies as $movie)
                    <li>
                        <strong>{{ $movie->name }}</strong><br>
                        <em>{{ $movie->description }}</em>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No movies found.</p>
        @endif

        <!-- Optional button -->
        <a href="#" class="btn">Add a Movie</a>
    </div>

</body>
</html>

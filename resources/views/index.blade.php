<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Resume</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Name: {{ $detail->full_name }}</h1>
        <p>Profession: {{ $detail->profession }}</p>
    </header>
    <section>
        <h2>About Me</h2>
        <p>{{ $detail->about }}</p>
    </section>
    <section>
        <h2>Experience</h2>
        <ul>
            @foreach (explode("\n", $detail->experience) as $experience)
                <li>{{ $experience }}</li>
            @endforeach
        </ul>
    </section>
    <section>
        <h2>Education</h2>
        <ul>
            @foreach (explode("\n", $detail->education) as $education)
                <li>{{ $education }}</li>
            @endforeach
        </ul>
    </section>
    <footer>
        <p>Contact: {{ $detail->contact }}</p>
    </footer>
</body>
</html>

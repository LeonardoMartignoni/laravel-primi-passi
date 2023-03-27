<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel first steps</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        @foreach ($nav as $link)
          <li><a href="{{ route('nav-link') }}">{{ $link }}</a></li>
        @endforeach
      </ul>
    </nav>
  </header>

  <h1>{{ $welcome }}</h1>
</body>

</html>

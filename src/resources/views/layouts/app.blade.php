<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="css/reset.css" />
    @yield('css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&family=Inika&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
</head>
<body>
  <header class="header">
    <div class="header">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>
  <main>
        @yield('content')
 </main>
</body>

</html>
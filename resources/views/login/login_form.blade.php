<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ログインフォーム</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>
<form class="form-signin" action="{{ route('login') }}" method="POST">
  @csrf
  <h1 class="ttl">ログインフォーム</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
  <button type="submit" class="btn">ログイン</button>
</form>

</body>
</html>
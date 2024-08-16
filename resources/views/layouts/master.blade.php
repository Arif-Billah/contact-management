<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	@if(isset($errors) && $errors->any())
       <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
    @endif
	{{--@if(session()->has('error'))
	  <div>{{session()->get('error')}}</div>
	@endif--}}
	@if (session()->has('success'))
       <div class="alert alert-success">
            {{ session()->get('success') }}
       </div>
    @endif

	@yield('content')
</body>
</html>
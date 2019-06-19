<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>5Ffarming Login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{asset('public/css/base.css')}}" rel="stylesheet" />
</head>
<body class="background">

<form action="{{action('admin/views/dashboard.blade.php')}}" method="POST">
{{method_field('GET')}}
{{csrf_field()}}

<div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
       <div class="main">
	   <div class="card card-signin my-5">
          <div class="card-body">
		  <div class="logo text-center">
				<img src="{{asset('public/image/final-logo.png')}}" />
			</div>
            <h5 class="card-title text-center">Login </h5>
            <form class="form-signin">
              <div class="form-label-group">
			
                <input type="email" id="txtusername" name="txtusername" class="form-control" placeholder="Email address" required autofocus>
                <label for="txtusername">Email address</label>
              </div>

              <div class="form-label-group">
			 
                <input type="password" id="txtpassword" name="txtpassword" class="form-control" placeholder="Password" required>
				<label for="txtpassword">Password</label>
              </div>

              <a href="{{asset('admin/views/dashboard.blade.php')}}" class="btn btn-lg btn-customize btn-block text-capitalized">Sign in</a>
              <!-- <button class="btn btn-lg btn-customize btn-block text-capitalized" type="submit">Sign in</button> -->
            
            </form>
          </div>
        </div>
	   </div>
      </div>
	</div>


	
	</form>


</body>
</html>
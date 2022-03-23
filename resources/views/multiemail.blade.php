<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Mail using laravel 5.8 | Amit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2"></div>

        <div class="col-8">
            @if(session()->get('success'))
            <div class="alert alert-success mt-2">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session()->get('success') }}
            </div>
        @endif
            <div class="card">
                <div class="card-header">
                Multi Email Send in Laravel
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('mailsend')}}" enctype="multipart/form-data">
                        @csrf
                        <label for="">Email id</label>
                        <input type="email" class="form-control" placeholder="Enter email id" name="email" value="{{ old('email')}}">
                        <label>Enter Your Message</label>
                        <textarea type="text" name="message" class="w-100 p-2" placeholder="Enter your Message" value="{{old('message')}}"></textarea>
                        <button type="submit" name="send" class="btn btn-primary fa fa-send-o"> Submit </button>
                    </form>

                </div>
              </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>

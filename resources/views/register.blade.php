<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <!-- /resources/views/post/create.blade.php --> 
 @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
  
 <!-- Create Post Form -->
        <h2>Register</h2> 


        <form action="<?php echo url('/store'); ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" value = "<?php echo old('name'); ?>" aria-describedby=""
                    placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" value = "<?php echo old('email'); ?>"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputName">LinkedIn Url</label>
                <input type="text" class="form-control" id="exampleInputName" name="linkedIn" value = "<?php echo old('linkedIn'); ?>"
                    placeholder="LinkedIn Url">
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputPassword"> Departments</label>
                <select type="select" class="form-control" name="dep_id">
                    @foreach ($data as $val)
                    <option value = "{{ $val->id}}">{{$val->title}}</option>
                    @endforeach
                
                </select>
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>



</body>

</html>
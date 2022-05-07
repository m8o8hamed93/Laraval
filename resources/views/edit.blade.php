<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
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
        <h2>Edit</h2> 


        <form action="<?php echo url('/update'); ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <input type="hidden" name="id" value="{{ $data->first()->id }}">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" value = "{{$data[0]->name}}" aria-describedby=""
                    placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" value = "{{$data[0]->email}}"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <!-- <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password">
            </div> -->

            <div class="form-group">
                <label for="exampleInputName">LinkedIn Url</label>
                <input type="text" class="form-control" id="exampleInputName" name="linkedIn" value = "{{$data[0]->linkedIn}}"
                    placeholder="LinkedIn Url">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>



</body>

</html>
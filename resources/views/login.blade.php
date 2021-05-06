<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.partials.__style')
</head>

<body>

    <div class="container">
        <div class="row">


            <div class="col-lg-6 border border-warning">
                <h3>login</h3>
                <form action="{{route('user.login')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email"
                        class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter Email">
                        @error('email')
                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                      @error('password')
                      <small id="helpId" class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <div class="col-lg-6 border border-warning">
                <h3>Registration</h3>
                <form action="{{route('user.create')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text"
                        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter Name">
                        @error('name')
                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email"
                        class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter Email" autocomplete="off">
                        @error('email')
                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                      @error('password')
                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="role">Role</label>
                      <select class="form-control" name="role_id" id="role">
                        <option disabled selected>Choose Role</option>

                        @foreach ($role_data as $item)

                            <option value="{{$item->name}}">{{$item->name}}</option>

                        @endforeach
                      </select>
                      @error('role_id')
                      <small id="helpId" class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>



        </div>
    </div>

    @include('layouts.partials.__script')
</body>

</html>

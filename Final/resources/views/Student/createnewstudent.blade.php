<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 offset-md-4">
                <h4>New Student</h4>
                <hr>
                
                <form action="{{ route('student.save') }}" method="post">
                        
                    @csrf
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="surname">surname</label>
                        <input type="text" class="form-control" name="surname" placeholder="Enter surname"
                            value="{{ old('surname') }}">
                    </div>
                    <div class="form-group">
                        <label for="department">department</label>
                        <input type="department" class="form-control" name="department" placeholder="Enter a department">
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    <br>
                    <a href="{{ route('auth.login') }}">I already have an account, Sign In.</a>
                </form>
            </div>
        </div>
    </div>
</body>
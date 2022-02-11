<!DOCTYPE html>
<html lang="pl">
@include('partials/head')
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            @include('partials/navi')
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>Horse List</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Breed</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Groom</th>
                    @if (!Auth::guest())
                    <th scope="col">Delete</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($horses as $el)
                    <tr>
                        <th scope="row">{{$el->name}}</th>
                        <td>{{$el->age}}</td>
                        <td>{{$el->breed_name}}</td>
                        <td>{{$el->gender_name}}</td>
                        <td>{{$el->groom_surname}}</td>
                        @if (!Auth::guest())
                        <td><a class="btn btn-outline-dark " href="./delete_horse/{{$el->name}}" role="button">Delete Horse</a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
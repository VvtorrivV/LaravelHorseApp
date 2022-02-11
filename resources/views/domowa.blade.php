<!DOCTYPE html>
<html lang="pl">
@include('partials/head')
<body>
@include('partials/navi')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Welcome in <span class="badge badge-dark">horseApp</span></h1>
                    <p class="lead">Here you can view information about horses.</p>
                    @if (!Auth::guest())
                    <p class="lead">To view more log out</p>
                    @else
                        <p class="lead">To view more log in</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <br>
        </div>
    </div>
    <!--
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
                </tr>
                </thead>
                <tbody>
                @foreach($horse as $el)
                    <tr>
                        <td scope="row">{{$el->name}}</td>
                        <td>{{$el->age}}</td>
                        <td>{{$el->breed_name}}</td>
                        <td>{{$el->gender_name}}</td>
                        <td>{{$el->groom_surname}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    -->
    <div class="row">
        <div class="col">
            @include('partials/footer')
        </div>
    </div>
</div>
</body>
</html>
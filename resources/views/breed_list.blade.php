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
            <h2>Breed List</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Delete Breed</th>
                </tr>
                </thead>
                <tbody>
                @foreach($breed as $el)
                    <tr>
                        <td>{{$el->breed_name}}</td>
                        <td><a class="btn btn-outline-dark" role="button" href="./delete_breed/{{$el->id}}">Delete Breed</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
</body>
</html>
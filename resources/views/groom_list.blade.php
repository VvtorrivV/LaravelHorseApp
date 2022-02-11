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
            <h2>Groom List</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($groom as $el)
                    <tr>
                        <th scope="row">{{$el->groom_name}}</th>
                        <td>{{$el->groom_surname}}</td>
                        <td><a class="btn btn-outline-dark" href="./delete_groom/{{$el->id}}" role="button">Delete Groom</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
</body>
</html>
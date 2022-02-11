<!DOCTYPE html>
<html>
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
            <h2>Add New Horse</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form class="form-inline" action="./add_breed" method="post">
                @csrf
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Input</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><label for="breed_name">Breed Name</label></th>
                        <td> <input id="breed_name" name="breed_name" size="20"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" class="btn btn-outline-dark btn-lg btn-block">Add</button></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
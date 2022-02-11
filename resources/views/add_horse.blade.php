<!DOCTYPE html>
<html>
@include('partials.head')

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
            <form class="form-inline" action="./add_horse" method="post">
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
                        <th scope="row"><label for="horsename">Horse name</label></th>
                        <td><input id="horsename" name="horsename" size="20"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="age">Horse age</label></th>
                        <td><input id="age" name="age" size="20"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="breed_id">Breed</label></th>
                        <td>
                            <select id="breed_id" name="breed_id">
                                @foreach ($breed as $el)
                                    <option value="{{ $el->id }}">{{ $el->breed_name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="gender_id">Gender</label></th>
                        <td>
                            <select id="gender_id" name="gender_id">
                                @foreach ($gender as $el)
                                    <option value="{{ $el->id }}">{{ $el->gender_name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"> <label for="groom_id">Groom</label></th>
                        <td>
                            <select id="groom_id" name="groom_id">
                                @foreach ($groom as $el)
                                    <option value="{{ $el->id }}">{{ $el->groom_surname }}</option>
                                @endforeach
                            </select>
                        </td>
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

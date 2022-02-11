<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="./domowa">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./horses">Horses</a>
                </li>
                @if (!Auth::guest())
                <li class="nav-item">
                    <a class="nav-link active" href="./add_horse">Add Horse</a>
                </li>
                @endif
                @if (!Auth::guest())
                <li class="nav-item">
                    <a class="nav-link active" href="./grooms">Grooms</a>
                </li>
                @endif
                @if (!Auth::guest())
                <li class="nav-item">
                    <a class="nav-link active" href="./add_groom">Add Groom</a>
                </li>
                @endif
                @if (!Auth::guest())
                <li class="nav-item">
                    <a class="nav-link active" href="./breeds">Breeds</a>
                </li>
                @endif
                @if (!Auth::guest())
                <li class="nav-item">
                    <a class="nav-link active" href="./add_breed">Add Breed</a>
                </li>
                @endif
                <li class="nav-item">
                    @if(Auth::check())
                    <a class="nav-link active" href="./loguj">Log out</a>
                    @else
                        <a class="nav-link active" href="./loguj">Log in</a>
                        @endif
                </li>
            </ul>
        </div>
    </div>
</div>


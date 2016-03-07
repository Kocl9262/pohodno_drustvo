@extends("base")

@section("tab_title")
    Šmarna gora
@endsection

@section("page_title")
    Šmarna gora
@endsection

@section("content")

    <div class="container">
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="http://s3.favim.com/orig/40/forest-green-greenery-nature-stairs-Favim.com-332194.jpg">
            <h2 class="featurette-heading">Pohod na Šmarno goro
                <span class="text-muted">Do vrha smo prišli vsi :)</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">
    </div>

    <div style="width:50%">
        <form class="form-horizontal" role="form" action="" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Ime: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Vpiši ime">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="surname">Priimek: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Vpiši priimek">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email: </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Vpiši email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="address">Naslov: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Vpiši naslov">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="city">Kraj: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Vpiši kraj">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="country">Država: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="country" id="country" placeholder="Vpiši državo">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Prijavi se</button>
                </div>
            </div>
        </form>
    </div>

@endsection

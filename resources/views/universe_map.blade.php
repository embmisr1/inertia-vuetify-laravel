<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Location</title>
  </head>
  <body>
    <div class="row align-items-start">
        <div class="card col-md-7">
            <center>
                <div style="width: 1000px; height: 550px;">
                    {!! Mapper::render() !!}
                    <div class="card-body">
                        <h5 class="card-title font-weight-normal">To make a polygon: <span class="font-weight-bold">DRAG THE PIN TO GET THE COORDINATES</span></h5>
                    </div>
                </div>
            </center>
        </div>
        <div class="card col-md-5" id="polyDiv">
                <div style="height: 550px; overflow:scroll;">
                    <div class="card-body">
                        <h5 class="card-title font-weight-normal">Firm Name: <span class="font-weight-bold">{{ $query_universe->un_firmname }}</span></h5>
                        <h5 class="card-title font-weight-normal">Proponent: <span class="font-weight-bold">{{ $query_universe->un_proponent }}</span></h5><br/>
                        <form method="post" action="../universe_polygon">
                            @csrf
                            <div class="row col-md-9">
                              <div class="col">
                                <h5 class="card-title font-weight-normal">Latitude</h5>
                              </div>
                              <div class="col">
                                <h5 class="card-title font-weight-normal">Longitude</h5>
                              </div>
                            </div>
                            <span id="polySpan">
                                @if($query_polygon->count() > 1)
                                    @foreach($query_polygon as $qry_polygon)
                                        <div class="row mt-2" id="polyInputGroup">
                                            <div class="col">
                                                <input type="text" id="polygon_latitude" name="polygon_latitude[]" value="{{$qry_polygon->polygon_latitude}}" class="form-control" placeholder="E.g. 16.6319" readonly>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="polygon_longitude" name="polygon_longitude[]" value="{{$qry_polygon->polygon_longitude}}" class="form-control" placeholder="E.g. 120.3186" readonly>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-danger" type="button" id="polyBtnMinus" onclick="minus_poly(this);">Remove</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row mt-2" id="polyInputGroup" hidden>
                                        <div class="col">
                                            <input type="text" id="polygon_latitude" name="polygon_latitude[]" class="form-control" placeholder="E.g. 16.6319" readonly>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="polygon_longitude" name="polygon_longitude[]" class="form-control" placeholder="E.g. 120.3186" readonly>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-danger" type="button" id="polyBtnMinus" onclick="minus_poly(this);">Remove</button>
                                        </div>
                                    </div>
                                @endif
                            </span>
                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" name="universe_FK" value="{{ request('universe_FK') }}" class="btn btn-primary btn-md">
                                        Create Polygon
                                    </button>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
        </div>
    </div>
    <script>
        function minus_poly(str){
            var child_ctr = $("#polySpan .row").length;
            $(str).parents("#polyInputGroup").remove();
        }
        function get_coordinate(lat, lng){
            var confirmation = confirm("Do you want to take this coordinates?\n"+lat+'\n'+lng);
            if(confirmation == true){
                var clone = $("#polyInputGroup").clone();
                clone.appendTo("#polySpan");
                $("#polyInputGroup:last-child").prop("hidden",false);
                $("#polyInputGroup:last-child").find("#polygon_latitude").val(lat);
                $("#polyInputGroup:last-child").find("#polygon_longitude").val(lng);
            }
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
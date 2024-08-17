{{-- Importante el colocarle el id="msj" para despues en el jquery llamarlo con el id --}}

@if(session('msjcreate'))
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-7 w-50 d-flex justify-content-center">
            <div id="msj" class="alert alert-success rounded-0">
                {{ session('msjcreate') }}
            </div>
        </div>
    </div>
</div>
@endif



@if(session('msjedit'))
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-7 w-50 d-flex justify-content-center">
            <div id="msj" class="alert alert-success rounded-0">
                {{ session('msjedit') }}
            </div>
        </div>
    </div>
</div>
@endif




@if(session('msjdelete'))
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-7 w-50 d-flex justify-content-center">
            <div id="msj" class="alert alert-danger rounded-0">
                {{ session('msjdelete') }}
            </div>
        </div>
    </div>
</div>
@endif

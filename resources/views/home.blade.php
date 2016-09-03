@extends('layouts.app-backend')

@section('content-backend')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

                <div>
                    <center>
                        <h2>Bienvenido</h2>
                            <div class="col-xs-12">
                                {{ Html::image('images/pm-yellow.png', 'footer', ['class' => 'bienvenido_backend']) }}
                            </div>
                        
                    </center>
                </div>
            
        </div>
    </div>
</div>
@endsection

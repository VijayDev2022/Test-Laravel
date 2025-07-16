@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        <div class="col-8"><br /><br />
            <h2 class="text-center">Who received the rewards?</h2>

            <div class="col-lg-12" style="background-color:#676797;float:left;width:100%;color: #fff;
    padding: 20px 20px;
    border-radius: 15px;margin-bottom:20px;">
                <div class="col-lg-3" style="float:left;"><img width="50px;" src="http://localhost/laravel-role/resources/img/img.png" /></div>
                <div class="col-lg-3" style="float:left;font-size:15px;font-weight:500;"><p>Ha***n</p></div>
                <div class="col-lg-3" style="float:left;font-size:18px;"><p>IDR 22,333,56s</p></div>
                 <div class="col-lg-3" style="float:left;"><p style="float: left;
    font-size: 17px;
    text-align: right;">12/08/2025,<span style="float: left;
    text-align: right;
    width: 100%;
    color: #b3c3d7;
}">12:98:45</span><br></p></div>
               

            </div>

             <div class="col-lg-12" style="background-color:#676797;float:left;width:100%;color: #fff;
    padding: 20px 20px;
    border-radius: 15px;margin-bottom:20px;">
                <div class="col-lg-3" style="float:left;"><img width="50px;" src="http://localhost/laravel-role/resources/img/img.png" /></div>
                <div class="col-lg-3" style="float:left;font-size:15px;font-weight:500;"><p>Ha***n</p></div>
                <div class="col-lg-3" style="float:left;font-size:18px;"><p>IDR 22,333,56s</p></div>
                 <div class="col-lg-3" style="float:left;"><p style="float: left;
    font-size: 17px;
    text-align: right;">12/08/2025,<span style="float: left;
    text-align: right;
    width: 100%;
    color: #b3c3d7;
}">12:98:45</span><br></p></div>
               

            </div>


             <div class="col-lg-12" style="background-color:#676797;float:left;width:100%;color: #fff;
    padding: 20px 20px;
    border-radius: 15px;margin-bottom:20px;">
                <div class="col-lg-3" style="float:left;"><img width="50px;" src="http://localhost/laravel-role/resources/img/img.png" /></div>
                <div class="col-lg-3" style="float:left;font-size:15px;font-weight:500;"><p>Ha***n</p></div>
                <div class="col-lg-3" style="float:left;font-size:18px;"><p>IDR 22,333,56s</p></div>
                 <div class="col-lg-3" style="float:left;"><p style="float: left;
    font-size: 17px;
    text-align: right;">12/08/2025,<span style="float: left;
    text-align: right;
    width: 100%;
    color: #b3c3d7;
}">12:98:45</span><br></p></div>
               

            </div>


             <div class="col-lg-12" style="background-color:#676797;float:left;width:100%;color: #fff;
    padding: 20px 20px;
    border-radius: 15px;margin-bottom:20px;">
                <div class="col-lg-3" style="float:left;"><img width="50px;" src="http://localhost/laravel-role/resources/img/img.png" /></div>
                <div class="col-lg-3" style="float:left;font-size:15px;font-weight:500;"><p>Ha***n</p></div>
                <div class="col-lg-3" style="float:left;font-size:18px;"><p>IDR 22,333,56s</p></div>
                 <div class="col-lg-3" style="float:left;"><p style="float: left;
    font-size: 17px;
    text-align: right;">12/08/2025,<span style="float: left;
    text-align: right;
    width: 100%;
    color: #b3c3d7;
}">12:98:45</span><br></p></div>
               

            </div>



            



            

        </div>
    </div>
</div>
@endsection

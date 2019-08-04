@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in Admin!
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class='conteiner'>

<p class="text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit perspiciatis deserunt vitae, excepturi nobis totam velit nesciunt officia, 
debitis nisi dolore ea mollitia esse delectus deleniti cupiditate dolorem iure minima.</p>
<br>“
<div class="conteiner">
    <div class="row justify-content-center">
       <div class="col-md-4">
          <div class="card">
               <div class="card-header">Create</div>
                  <div calss="card-body">
                        <a  class="btn btn-primary , {{Request::is('create') ? 'active' : ''}}" href="products/create">Create</a>
                  </div>
              </div>
          </div>
       </div>
    </div>
</div>
@endsection

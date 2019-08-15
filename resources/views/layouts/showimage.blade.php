<!-- @extends('layouts.app')

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

<p class="text text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolorum hic, ut possimus veniam assumenda. Debitis, beatae ex ipsum veritatis sit,
et minima vel molestias id assumenda possimus amet. Ratione.</p>
<br>“
<div class="conteiner">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card">
<div class="card-columns">

<div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Card title that wraps to a new line</h5>
<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
</div>
</div>
</div>
</div>
</div>

</div>
<a  class="btn btn-info , {{Request::is('storeimage') ? 'active' : ''}}" href="/storeimage">Back</a>
</div>




@endsection  -->

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

	<p class="text text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolorum hic, ut possimus veniam assumenda. Debitis, beatae ex ipsum veritatis sit,
		et minima vel molestias id assumenda possimus amet. Ratione.</p>
	<br>“
	<div class="conteiner">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">Upload picture</div>
					<div calss="card-body">
						<form action="{{route('storeimage')}}" method="get" enctype="multipart/form-data">
							@csrf
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
								</div>
								<div class="custom-file">
								
									<input type="file" name="image" class="custom-file-input"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>
							<input type="submit" value="Upload" class="btn btn-success ">

					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>




@endsection 

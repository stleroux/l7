@extends('layouts.admin.admin')

@section('stylesheet')
<style>
.cover {
  object-fit: cover;
  /*width: 50px;*/
  /*height: 100px;*/
}
</style>
@endsection

@section('pageHeader', 'ADMIN DASHBOARD')

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="#">Layout</a></li> --}}
   {{-- <li class="breadcrumb-item active">123 Fixed Navbar Layout</li> --}}
@endsection

@section('content')
   @include('admin.dashboard.infoBoxes')


   <?php  
  
// Get the image and convert into string 
//$img = file_get_contents('https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-22.png');
//$img = file_get_contents(PUBLIC_PATH() . '/_projects/27/full_size/1594209277.jpg');
$img = file_get_contents(PUBLIC_PATH() . '/_projects/IMG_1265.JPG');
//$img = file_get_contents(PUBLIC_PATH() . '/_projects/IMG_1266.JPG');
//$img = file_get_contents(PUBLIC_PATH() . '/_projects/IMG_1268.JPG');
//$img = file_get_contents(PUBLIC_PATH() . '/_projects/IMG_1289.JPG');
//$img = file_get_contents(PUBLIC_PATH() . '/_projects/IMG_1290.JPG');
  
// Encode the image string data into base64 
$data = base64_encode($img); 
  
// Display the output 
// echo $data; 

//echo base64_decode($data);

?>
{{--    <div class="row">
      <div class="col-12 col-xl-6 border bg-primary">
			<div class="card">
				<div class="card-header"></div>
				<div class="card-body">
					<img class="card-img-top" src="data:image/jpg;base64, {{ $data }}"  alt="Image Preview" />
				</div>
			</div>
      </div>
   </div>
 --}}

 <div class="card">
    <div class="card-body">
    	<div class="row">
	    	<div class="col-xl-6">
	    		{{-- <img class="cover" src="data:image/jpg;base64, {{ $data }}" width="150px" width="250px" /> --}}
	    		<img class="cover" src="data:image/jpg;base64, {{ $data }}" width="75%" width="auto" />
	    	</div>
	    	<div class="col-3">Col 3</div>
	    	<div class="col-3">Col 3</div>
	    </div>
	    <div class="row">
	    	<div class="col">
	    		COMMENTS
	    	</div>
	    </div>
    </div>
</div>



{{-- <img src="data:image/bmp;base64, {{ $data }}" height="auto"  width="50%" alt="Image Preview" /><br /> --}}
{{-- <img src="data:image/png;base64, {{ $data }}" height="30px"  width="auto" alt="Image Preview" /><br /> --}}
@endsection

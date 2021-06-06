@php
  function editInVCarve($jobSheet) {
  	// dd($jobSheet);
  	// $file = "C:/Users/Stephane/Documents/CNC/Bit Trays - Drawer #1.crv";
  	$file = public_path('\_carvings\55\Bit Trays - Drawer #1.crv');
  	// $file = public_path('\_carvings\55\chocolate.crv');
  	// dd($file);
    //exec("C:/Program Files/VCarve Pro 10.5/x64/VCarvePro.exe", $file);
    // exec("C:/Users/Stephane/Documents/CNC/Bit Trays - Drawer #1.crv");
    exec($file);
  }

  if (isset($_GET['vcarve'])) {
    editInVCarve($carving->jobSheet);
  }
@endphp

<a href="{{ route('admin.carvings.show', $carving->id) }}?vcarve=true" class="btn btn-block btn-default">Edit in VCarve Pro</a>
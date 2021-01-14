@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
@stop

@section('pageHeader')
   <i class="{{ config('icons.carvings') }} mr-1"></i>
   Carvings :: Frequently Asked Questions
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('carvings.index') }}">Carvings</a></li>
   <li class="breadcrumb-item">Carvings FAQ</li>
@endsection

@section('rightColumn')
   @include('UI.carvings.blocks.popular')
   {{-- @include('UI.carvings.blocks.tags') --}}
@endsection

@section('topbar')
   {{-- @include('UI.carvings.faq.topbar') --}}
@endsection

@section('content')

   <div class="accordion" id="carvingsFAQ">
      <div class="card text-dark">

         @forelse($faqs as $faq)
{{--       <div class="card text-dark">

         <div
            class="card-header bg-primary text-dark"
            data-toggle="collapse"
            data-target="#collapse{{ $faq->id }}"
            aria-expanded="true"
            aria-controls="collapse{{ $faq->id }}"
         >
            {{ ucwords($faq->question) }}            
         </div>
         <div
            class="card-body collapse"
            id="collapse{{ $faq->id }}"
            aria-labelledby="heading{{ $faq->id }}"
            data-parent="#carvingsFAQ"
         >
            {!! ucfirst($faq->answer) !!}            
         </div>
      </div> --}}

            <a href="#"
               class="bg-primary list-group-item list-group-item-action p-1 mb-2"
               data-toggle="collapse"
               data-target="#collapse{{ $faq->id }}"
               aria-expanded="true"
               aria-controls="collapse{{ $faq->id }}">
               {{ ucwords($faq->question) }}
            </a>
            
            <div
               id="collapse{{ $faq->id }}"
               class="collapse bg-light p-0 m-0"
               aria-labelledby="heading{{ $faq->id }}"
               data-parent="#carvingsFAQ">
               <div class="card-body text-dark p-2 m-2 border">
                 {!! ucfirst($faq->answer) !!}
               </div>
            </div>

        @empty
        @endforelse

      </div>

   </div>

@endsection

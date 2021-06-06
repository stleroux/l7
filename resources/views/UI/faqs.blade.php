@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.faq') }} mr-1"></i>
   Frequently Asked Questions
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
   <li class="breadcrumb-item">FAQ</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.carvings.blocks.popular') --}}
   {{-- @include('UI.carvings.blocks.tags') --}}
@endsection

@section('topbar')
   {{-- @include('UI.carvings.faq.topbar') --}}
@endsection

@section('content')

   <div class="card mb-2 card-trans-0">
   
      <div class="card-header text-light p-2 m-0 bg-primary">
         <i class="{{ config('icons.faq') }}"></i>
         Click the question to reveal the answer.
      </div>
      
      <div class="card-body p-0 m-0">


         <div id="accordion">
            @forelse($faqs as $faq)

@if($faq->category == 'Carvings')
   @php
      $bgColor = 'bg-primary';
      $style1 = '';
   @endphp
@elseif($faq->category == 'Projects')
   @php
      $bgColor = 'bg-info';
      $style1 = '';
   @endphp
@else {{-- Recipes --}}
   @php
      $bgColor = '';
      $style1 = "style=\"background-color: #800000\"";
   @endphp
   {{-- {{ $style1 }} --}}
@endif


               <div class="card mb-2 mt-2 card-trans-8">
                  <div class="card-header p-0 m-0 {{$bgColor}}" id="heading{{ $faq->id }}" {!! $style1 !!}>
                     <h6 class="mb-0 p-0">
                        <a href="#"
                           class="list-group-item p-1 m-0 card-trans-4 text-dark"
                           {{--  list-group-item-action --}} 
                           data-toggle="collapse"
                           data-target="#collapse{{ $faq->id }}"
                           aria-expanded="true"
                           aria-controls="collapse{{ $faq->id }}">
                           <small>[{{ $faq->category }}]</small> :: {{ ucwords($faq->question) }}
                        </a>
                     </h6>
                  </div>

                  <div id="collapse{{ $faq->id }}" class="collapse {{$bgColor}}" {!! $style1 !!} aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion">
                     <div class="card-body p-2 m-0 card-trans-8 text-dark">
                        {!! ucfirst($faq->answer) !!}
                     </div>
                  </div>
               </div>
            @empty
               <div class="col-row p-2 card-trans-4">
                  {{ config('settings.noRecordsFound') }}
               </div>
            @endforelse
         </div>

      </div>
   </div>

@endsection

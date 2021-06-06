@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/projects.css') }}">
@stop

@section('pageHeader')
   <i class="{{ config('icons.projects') }} mr-1"></i>
   Projects :: Frequently Asked Questions
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
   <li class="breadcrumb-item">Projects FAQ</li>
@endsection

@section('rightColumn')
   @include('UI.projects.blocks.popular')
   {{-- @include('UI.projects.blocks.tags') --}}
@endsection

@section('topbar')
   {{-- @include('UI.projects.faq.topbar') --}}
@endsection

@section('content')

{{--    <div class="card p-0 m-0 bg-info">
      <div class="card-body p-0 m-1">

         <div id="accordion">
            @forelse($faqs as $faq)
               <div class="card mb-1 bg-info border">
                  <div class="card-header p-0 m-0" id="heading{{ $faq->id }}">
                     <h6 class="mb-0 p-0">
                        <a href="#"
                           class="bg-info list-group-item list-group-item-action p-1 m-0"
                           data-toggle="collapse"
                           data-target="#collapse{{ $faq->id }}"
                           aria-expanded="true"
                           aria-controls="collapse{{ $faq->id }}">
                           {{ ucwords($faq->question) }}
                        </a>
                     </h6>
                  </div>

                  <div id="collapse{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion">
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
   </div> --}}

   <div class="card mb-2 card-trans-0">
      
      <div class="card-header text-light p-2 m-0 bg-info">
         <i class="{{ config('icons.faq') }}"></i>
         Click the question to reveal the answer.
      </div>
      
      <div class="card-body p-0 m-0">


         <div id="accordion">
            @forelse($faqs as $faq)
               <div class="card mb-2 mt-2 card-trans-8">
                  <div class="card-header p-0 m-0 bg-info" id="heading{{ $faq->id }}">
                     <h6 class="mb-0 p-0">
                        <a href="#"
                           class="list-group-item{{--  list-group-item-action --}} p-1 m-0 card-trans-4 text-dark"
                           data-toggle="collapse"
                           data-target="#collapse{{ $faq->id }}"
                           aria-expanded="true"
                           aria-controls="collapse{{ $faq->id }}">
                           {{ ucwords($faq->question) }}
                        </a>
                     </h6>
                  </div>

                  <div id="collapse{{ $faq->id }}" class="collapse bg-info" aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion">
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

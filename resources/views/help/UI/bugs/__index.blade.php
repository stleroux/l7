@include('help.header')

@if(View::exists('help.UI.bugs.index.introduction'))
    @include('help.UI.bugs.index.introduction')
@endif

@if(View::exists('help.UI.bugs.index.howTo'))
   @include('help.UI.bugs.index.howTo')
@endif

@if(View::exists('help.UI.bugs.index.fields'))
   @include('help.UI.bugs.index.fields')
@endif

@if(View::exists('help.UI.bugs.index.actions'))
   @include('help.UI.bugs.index.actions')
@endif

@include('help.footer')

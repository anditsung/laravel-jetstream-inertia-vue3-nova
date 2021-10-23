@if ( in_array(last(request()->segments()), ['login', 'reset']) )
    <a class="text-black text-2xl font-bold dim no-underline" href="/">{{ config('app.name') }}</a>
@else
    <div class="w-full text-center text-2xl">{{ config('app.name') }}</div>
@endif


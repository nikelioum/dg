@php
    $variable = DB::table('blocks')->select('body')->where('block_id', 'footer')->where('active', true)->first();
@endphp

{!!$variable->body!!}
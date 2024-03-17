@php
    $variable = DB::table('blocks')->select('body')->where('block_id', 'menu')->where('active', true)->first();
@endphp

{!!$variable->body!!}
<section {{$attributes->merge(['style' =>  $style ])}}  {{ $attributes->merge(['class' => $variant . " " . $class ]) }}>
    {!! $message ?? $slot !!}
</section>
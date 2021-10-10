<section {{$style ? 'style="{{ $style }}"' : ""}} {{ $attributes->merge(['class' => "xs-auto" . " " . $section . " " . $class ]) }}>
    {!! $message ?? $slot !!}
</section>
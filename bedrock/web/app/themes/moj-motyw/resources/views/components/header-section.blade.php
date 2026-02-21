@php
    $headerLabel = $headerLabel ?? null;
    $underHeaderLabel = $underHeaderLabel ?? null;
@endphp

<section {{ $attributes->merge(['class' => 'container-own m-auto py-4 flex flex-col items-center']) }}>
    @if($underHeaderLabel)
        <p class="text-xs-regular">
            {{ $underHeaderLabel }}
        </p>
    @endif

    @if($headerLabel)
        <h2 class="display-lg-regular">
            {{ $headerLabel }}
        </h2>
    @endif
    
</section>

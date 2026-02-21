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
        <h2 class="text-center">
            <span class="display-md-regular lg:hidden">{{ $headerLabel }}</span>
            <span class="hidden lg:block display-lg-regular">{{ $headerLabel }}</span>
        </h2>
    @endif
    
</section>

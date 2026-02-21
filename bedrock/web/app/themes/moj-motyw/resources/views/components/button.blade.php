@php
    $variant = $variant ?? 'primary';
    $size = $size ?? 'lg';
    $href = $href ?? '#';
    $iconBefore = $iconBefore ?? null;
    $iconAfter = $iconAfter ?? null;
    $iconOnly = $iconOnly ?? null;
    $label = $label ?? null;
    $extraClass = $extraClass ?? '';

    $base = 'inline-flex items-center justify-center gap-2 font-semibold transition-colors';
    
    $variants = [
        'primary' => 'bg-blue-800 text-white hover:bg-blue-900',
        'outline' => 'bg-white text-blue-800 border border-blue-800 hover:bg-blue-50',
    ];
    
    $sizes = [
        'lg' => 'px-6 py-4 text-base',
        'md' => 'px-4 py-3 text-sm',
    ];
    
    $classes = $base . ' ' . $variants[$variant] . ' ' . $sizes[$size] . ' ' . $extraClass;
@endphp

{{-- button.blade.php --}}
<a href="{{ $href }}" class="{{ $classes }}">
    @if(isset($iconBefore))
        <span>{{ $iconBefore }}</span>
    @endif

    @if($label)
        {{ $label }}
    @endif

    @if(isset($iconAfter))
        <span>{{ $iconAfter }}</span>
    @endif
</a>
<div class="flex flex-col items-stretch lg:flex-row lg:max-w-[1440px] m-auto">
    <div class="bg-orange-300 flex-1 flex flex-col justify-between">
        @if($bottomFirst['procent-image'])
            <img class="max-w-[232px] m-auto" src="{{ $bottomFirst['procent-image']['url'] }}" alt="{{ $bottomFirst['procent-image']['alt'] }}">
        @endif
        <p class="p-4 text-xs-regular text-white">{{ $bottomFirst['text']}}</p>
    </div>
    @foreach($bottomBenefits as $benefits)
        <div class="p-4 flex flex-col justify-between flex-1 bg-neutral-300 gap-8 nth-3:bg-neutral-100">
            @if($benefits['ikona'])
                <img class="w-[120px]" src="{{ $benefits['ikona']['url'] }}" alt="{{ $benefits['ikona']['alt'] }}">
            @endif
            <div>   
                <p class="display-sm-regular mb-4">{{$benefits['tytul']}}</p>
                <p class="text-xs-regular">{{$benefits['tekst']}}</p>
            </div>
        </div>
    @endforeach
</div>
@if($portfolio->have_posts())
    @while($portfolio->have_posts())
        @php($portfolio->the_post())
        <div class="flex-1 lg:max-w-[405px]">
            <img class="w-full object-cover lg:h-[270px]" src="{{get_the_post_thumbnail_url() }}" alt="">
            <h3>{{ get_the_title() }}</h3>
            <p>{{ get_the_excerpt() }}</p>
            <a href="{{ get_permalink() }}">Czytaj więcej</a>
        </div>
    @endwhile
    @php(wp_reset_postdata())
@endif
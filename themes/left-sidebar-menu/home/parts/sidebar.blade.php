
<div class="mb-xl">
    <h5>{{ trans('entities.' . (auth()->check() ? 'my_recently_viewed' : 'books_recent')) }}</h5>
    @include('entities.list', [
        'entities' => $recents,
        'style' => 'compact',
        'emptyText' => auth()->check() ? trans('entities.no_pages_viewed') : trans('entities.books_empty')
        ])
</div>


<div class="mb-xl">
    <h5>{{ trans('entities.recently_updated_pages') }}</h5>
    <div id="recently-updated-pages">
        @include('entities.list', [
        'entities' => $recentlyUpdatedPages,
        'style' => 'compact',
        'emptyText' => trans('entities.no_pages_recently_updated')
        ])
    </div>
    <a href="{{ url('/pages/recently-updated')  }}" class="text-muted block py-xs">{{ trans('common.view_all') }}</a>
</div>


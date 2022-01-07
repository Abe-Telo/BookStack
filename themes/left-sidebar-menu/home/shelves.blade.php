@extends('layouts.wiki')

@section('body')
    @include('shelves.parts.list', ['shelves' => $shelves, 'view' => $view])
@stop

@section('left')
    @include('home.parts.sidebar')
@stop

@section('right')
    <div class="actions mb-xl">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="icon-list text-primary">
            @if(user()->can('bookshelf-create-all'))
                <a href="{{ url("/create-shelf") }}" class="icon-list-item">
                    <span>@icon('add')</span>
                    <span>{{ trans('entities.shelves_new_action') }}</span>
                </a>
            @endif
            @include('entities.view-toggle', ['view' => $view, 'type' => 'shelves'])
            @include('home.parts.expand-toggle', ['classes' => 'text-primary', 'target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'])
            @include('common.dark-mode-toggle', ['classes' => 'icon-list-item text-primary'])
        </div>
    </div>

@if(count($draftPages) > 0)
    <div id="recent-drafts" class="mb-xl">
        <h5>{{ trans('entities.my_recent_drafts') }}</h5>
        @include('entities.list', ['entities' => $draftPages, 'style' => 'compact'])
    </div>
@endif

@if(count($favourites) > 0)
    <div id="top-favourites" class="mb-xl">
        <h5>{{ trans('entities.my_most_viewed_favourites') }}</h5>
        @include('entities.list', [
            'entities' => $favourites,
            'style' => 'compact',
        ])
        <a href="{{ url('/favourites')  }}" class="text-muted block py-xs">{{ trans('common.view_all') }}</a>
    </div>
@endif





<div id="recent-activity" class="mb-xl">
    <h5>{{ trans('entities.recent_activity') }}</h5>
    @include('common.activity-list', ['activity' => $activity])
</div>


@stop

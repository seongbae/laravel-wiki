@extends('vi-kon.bootstrap::modal.modal')

<?php $onlyContent = true ?>

@section('title')
    <i class="icon-io-folder"></i>
    &nbsp;
    @lang('wiki::page/show.modal.move-success.title')
@overwrite

@section('body')
    <div class="alert alert-success" role="alert">
        @lang('wiki::page/show.modal.move-success.content', ['source' => $source, 'destination' => $page->getUrl()])
    </div>
@overwrite

@section('append')
    <script type="text/javascript">
        history.replaceState(null, '{{ $page->getTitle() }}', '{!! route('wiki.show', ['url' => $page->getUrl()]) !!}');
    </script>
@append
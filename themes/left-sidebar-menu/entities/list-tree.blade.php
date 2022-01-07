 
<!-- list-item-basic.blade.php  --> 

	 
	 <?php $type = $entity->getType(); ?>
	 

<div class="sidebar-page-list "><!--entity-list-->
    <!--<ul class="entity-list compact sidebar-page-list">-->


	<a href="{{ $entity->getUrl() }}" 
		class="entity-list{{$type}} 
		{{$type === 'page' && 
		$entity->draft ? 'draft' : ''}}
		{{$classes ?? ''}} entity-list-item" 
		data-entity-type="{{$type}}" 
		data-entity-id="{{$entity->id}}">
		<span role="presentation" class="icon text-{{$type}} entity-list">@icon($type)</span>
			<div class=" content">
				<h4 class="entity-list-item-name break-text">
				{{ $entity->preview_name ?? $entity->name }}</h4>
				{{ $slot ?? '' }}
			</div>
	</a>
</div>



<!-- list-item.blade.php  -->

 <!-- compact -->
 <!-- entity-list {{ $style ?? '' }} -->
 

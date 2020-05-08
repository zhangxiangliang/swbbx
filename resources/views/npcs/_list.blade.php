@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($npcs as $npc)
  @include('npcs._item', ['npc' => $npc])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($npcs as $npc)
  @include('npcs._item', ['npc' => $npc])
  @endforeach
</div>
@endif

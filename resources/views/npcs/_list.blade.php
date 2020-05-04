<div class="masonry">
  @foreach ($npcs as $npc)
  @include('npcs._item', ['npc' => $npc])
  @endforeach
</div>

<div class="card-columns">
  @foreach ($npcs as $npc)
  @include('npcs._item', ['npc' => $npc])
  @endforeach
</div>

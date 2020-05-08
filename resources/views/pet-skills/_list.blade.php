@if(isset($masonry))
<div class="masonry-{{$masonry}}">
  @foreach ($petSkills as $petSkill)
  @include('pet-skills._item', ['petSkill' => $petSkill])
  @endforeach
</div>
@else
<div class="masonry">
  @foreach ($petSkills as $petSkill)
  @include('pet-skills._item', ['petSkill' => $petSkill])
  @endforeach
</div>
@endif

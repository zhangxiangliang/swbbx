<div class="masonry">
  @foreach ($petSkills as $petSkill)
  @include('pet-skills._item', ['petSkill' => $petSkill])
  @endforeach
</div>

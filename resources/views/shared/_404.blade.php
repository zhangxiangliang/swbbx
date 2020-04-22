@if(0
|| $items === null
|| (is_object($items) && $items->count() === 0)
|| (is_array($items) && count($items) === 0)
)
<div class="flash-message mt-2">
  <p class="alert alert-info">
    暂无相关信息
  </p>
</div>
@endif

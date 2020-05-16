@extends('layouts.app')

@section('title', '经验计算器')

@section('content')
<h1>经验计算器</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 操作相关 --}}
    <form action="{{ route('experiences.index') }}" method="GET" accept-charset="UTF-8">
      <div class="row mb-2">
        <div class="col-sm-12 col-md-6">
          <div class="card">
            <div class="card-header">
              人物经验相关
            </div>
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                <div class="input-group">
                  <input name='start_level' type="number" class="form-control" placeholder="输入当前等级"
                    value="{{request()->get('start_level', '')}}">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='start_level_is_fly' type="checkbox" class="custom-control-input"
                          {{request()->get('start_level_is_fly', '') ? 'checked' : ''}} value="true"
                          id="start_level_is_fly">
                        <label class="custom-control-label" for="start_level_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='end_level' type="number" class="form-control" placeholder="输入目标等级"
                    value="{{request()->get('end_level', '')}}">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='end_level_is_fly' type="checkbox" class="custom-control-input"
                          {{request()->get('end_level_is_fly', '') ? 'checked' : ''}} value="true"
                          id="end_level_is_fly">
                        <label class="custom-control-label" for="end_level_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='server_level' type="number" class="form-control" placeholder="输入服务器等级"
                    value="{{request()->get('server_level', '')}}">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='server_level_is_break' type="checkbox" class="custom-control-input"
                          {{request()->get('server_level_is_break', '') ? 'checked' : ''}} value="true"
                          id="server_level_is_break">
                        <label class="custom-control-label" for="server_level_is_break">是否突破</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 mt-sm-2 mt-md-0">
          <div class="card">
            <div class="card-header">
              技能经验相关
            </div>
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                <div class="input-group">
                  <input name='start_skill' type="number" class="form-control" placeholder="输入当前技能等级"
                    value="{{request()->get('start_skill', '')}}">
                  <div class=" input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='start_skill_is_fly' type="checkbox" class="custom-control-input"
                          {{request()->get('start_skill_is_fly', '') ? 'checked' : ''}} value="true"
                          id="start_skill_is_fly">
                        <label class="custom-control-label" for="start_skill_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='end_skill' type="number" class="form-control" placeholder="输入目标技能等级"
                    value="{{request()->get('end_skill', '')}}">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='end_skill_is_fly' type="checkbox" class="custom-control-input"
                          {{request()->get('end_skill_is_fly', '') ? 'checked' : ''}} value="true"
                          id="end_skill_is_fly">
                        <label class="custom-control-label" for="end_skill_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='total_skill' type="number" class="form-control" placeholder="输入目标技能数目"
                    value="{{request()->get('total_skill', '')}}">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='total_skill_is_max' type="checkbox" class="custom-control-input"
                          {{request()->get('total_skill_is_max', '') ? 'checked' : ''}} value="true"
                          id="total_skill_is_max">
                        <label class="custom-control-label" for="total_skill_is_max">是否满技</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-sm-12 col-md-4">
          <div class="card">
            <div class="card-header">
              人物花费总计
            </div>
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>当前等级</div>
                  <div>
                    {{$total['level']['start']}}级{{$total['level']['start_is_fly'] ? '飞升' : ''}}
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>目标等级</div>
                  <div>
                    {{$total['level']['end']}}级{{$total['level']['end_is_fly'] ? '飞升' : ''}}
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>所需经验</div>
                  <div>
                    {{$total['level']['experience']}} 经验
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="card">
            <div class="card-header">
              增加 {{$total['skill']['total']}} 个技能总计
            </div>
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>当前等级</div>
                  <div>
                    {{$total['skill']['start']}}级{{$total['skill']['start_is_fly'] ? '飞升' : ''}}
                    到
                    {{$total['skill']['end']}}级{{$total['skill']['end_is_fly'] ? '飞升' : ''}}
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>所需信誉</div>
                  <div>
                    {{$total['skill']['cost']}} 信誉
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>所需经验</div>
                  <div>
                    {{$total['skill']['experience']}} 经验
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="card">
            <div class="card-header">
              总计
            </div>
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>所需信誉</div>
                  <div>
                    {{$total['total']['cost']}} 信誉
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                  <div>所需经验</div>
                  <div>
                    {{$total['total']['experience']}} 经验
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <button type="submit" class="btn btn-primary btn-sm btn-block">确认计算</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('experiences._sidebar')
  </div>
</div>

@endsection

@section('scripts')
<script>
  masonry('.masonry', 2);

</script>
@stop

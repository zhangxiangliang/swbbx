@extends('layouts.app')

@section('title', '经验计算器')

@section('content')

<h1>经验计算器</h1>
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">
    {{-- 操作相关 --}}
    <form action="{{ route('questions.index') }}" method="GET" accept-charset="UTF-8">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card">
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                人物等级相关
              </div>
              <div class="list-group-item">
                <div class="input-group">
                  <input name='start_level' type="text" class="form-control" placeholder="输入当前等级">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='start_level_is_fly' type="checkbox" class="custom-control-input"
                          id="start_level_is_fly">
                        <label class="custom-control-label" for="start_level_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='end_level' type="text" class="form-control" placeholder="输入目标等级">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='end_level_is_fly' type="checkbox" class="custom-control-input"
                          id="end_level_is_fly">
                        <label class="custom-control-label" for="end_level_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='server_level' type="text" class="form-control" placeholder="输入服务器等级">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='server_level_is_break' type="checkbox" class="custom-control-input"
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

        <div class="col-md-6 mt-sm-2 mt-md-0">

          <div class="card">
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                人物经验相关
              </div>
              <div class="list-group-item">
                <div class="input-group">
                  <input name='start_skill' type="text" class="form-control" placeholder="输入当前技能等级">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='start_skill_is_fly' type="checkbox" class="custom-control-input"
                          id="start_skill_is_fly">
                        <label class="custom-control-label" for="start_skill_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='end_skill' type="text" class="form-control" placeholder="输入目标技能等级">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='end_skill_is_fly' type="checkbox" class="custom-control-input"
                          id="end_skill_is_fly">
                        <label class="custom-control-label" for="end_skill_is_fly">是否飞升</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="list-group-item">
                <div class="input-group">
                  <input name='total_skill' type="text" class="form-control" placeholder="输入目标技能数目">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <div class="custom-control custom-switch">
                        <input name='total_skill_is_larger' type="checkbox" class="custom-control-input"
                          id="total_skill_is_larger">
                        <label class="custom-control-label" for="total_skill_is_larger">是否满技</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-2">
          <div class="card">
            <div class="list-group list-group-flush">
              <div class="list-group-item">
                计算结果
              </div>
              <div class="list-group-item">
                <div class="input-group">
                  <button type="button" class="btn btn-primary btn-lg btn-block">确认计算</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="row">
      <div class="col-md-6">
        <h2>人物经验表</h2>
        <div class="card">
          <table class="table mb-0 text-center">
            <thead class="thead-light">
              <tr>
                <th scope="col">当前等级</th>
                <th scope="col">所需经验</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($levels as $level)
              <tr>
                <td>
                  {{$level->level}}级
                  @if($level->sort > 130)
                  <span class="badge badge-success">飞升</span>
                  @endif
                </td>
                <td>{{$level->experience}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-md-6 mt-sm-2 mt-md-0">
        <h2>技能经验表</h2>
        <div class="card">
          <table class="table mb-0 text-center">
            <thead class="thead-light">
              <tr>
                <th scope="col">当前等级</th>
                <th scope="col">所需经验</th>
                <th scope="col">所需信誉</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($skills as $skill)
              <tr>
                <td>
                  {{$skill->level}}级
                  @if($skill->sort > 135)
                  <span class="badge badge-success">飞升</span>
                  @endif
                </td>
                <td>{{$skill->experience}}</td>
                <td>{{$skill->cost}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar mt-md-0 mt-sm-2">
    @include('experiences._sidebar')
  </div>
</div>

@endsection

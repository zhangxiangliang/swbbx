<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Models\Question::class => \App\Policies\QuestionPolicy::class,
        \App\Models\Reply::class => \App\Policies\ReplyPolicy::class,
        \App\Models\Topic::class => \App\Policies\TopicPolicy::class,
        \App\Models\User::class => \App\Policies\UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 修改策略自动发现的逻辑
        // 动态返回模型对应的策略名称，如：'App\Model\User' => 'App\Policies\UserPolicy',
        // Gate::guessPolicyNamesUsing(function ($modelClass) {
        //     return 'App\Policies\\'.class_basename($modelClass).'Policy';
        // });
    }
}

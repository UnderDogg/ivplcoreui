@extends('setup.master')

@section('content')

    <section class="content-header">
        <h1>@lang('ip.installation_complete')</h1>
    </section>

    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box box-primary">

                    <div class="box-body">

                        <p>@lang('ip.you_may_now_sign_in')</p>

                        <a href="{{ route('session.login') }}" class="btn btn-primary">@lang('ip.sign_in')</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@stop
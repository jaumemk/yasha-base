    <div class="row">
        <div class="col-md-9 col-md-push-3">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
            </div>
        </div>
        <div class="col-md-3 col-md-pull-9">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">{{ config('backpack.base.project_name') }}</div>
                </div>

                <div class="box-body"> Backend Version - {{  $_SERVER['YASHABASE_BACKEND_VERSION'] }}</div>
            </div>
        </div>
    </div>

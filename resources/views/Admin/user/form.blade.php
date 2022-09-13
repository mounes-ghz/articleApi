<div class="row">
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('name', null, ['class' => 'form-control text-right d-ltr', 'id'=>'name'])}}
        <span>نام و نام خانوادگی </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('email', null, ['class' => 'form-control text-left d-ltr', 'id'=>'email'])}}
        <span>ایمیل </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('password', null, ['class' => 'form-control text-left d-ltr', 'id'=>'email'])}}
        <span>رمز عبور </span>
    </label>
</div>
<div class="w-100 text-center">
    <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
</div>

{{Form::close()}}

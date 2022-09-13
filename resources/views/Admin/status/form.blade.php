<div class="row">
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('title', null, ['class' => 'form-control text-right d-ltr', 'id'=>'title'])}}
        <span>عنوان</span>
    </label>
    <label class="form-group col-sm-2 col-md-2 col-lg-2 has-float-label">
        {{Form::select('is_active', $isActive, null, ['class' => 'form-control text-right', 'required'])}}
        <span>وضعیت</span>
    </label>
</div>
<div class="w-100 text-center">
    <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
</div>
{{Form::close()}}

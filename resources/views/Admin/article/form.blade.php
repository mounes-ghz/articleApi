<div class="row">
    <label class="form-group col-sm-2 col-md-2 col-lg-2 has-float-label">
        {{Form::select('user_id', $users, null, ['class' => 'form-control text-right', 'required'])}}
        <span>نویسنده</span>
    </label>
    <label class="form-group col-sm-2 col-md-2 col-lg-2 has-float-label">
        {{Form::select('category_id', $categories, null, ['class' => 'form-control text-right', 'required'])}}
        <span>دسته بندی</span>
    </label>
    <label class="form-group col-sm-2 col-md-2 col-lg-2 has-float-label">
        {{Form::select('status_id', $statuses, null, ['class' => 'form-control text-right', 'required'])}}
        <span>وضعیت </span>
    </label>
    <label class="form-group col-sm-6 col-md-4 col-lg-4 has-float-label">
        {{Form::text('title', null, ['class' => 'form-control text-right d-ltr', 'required'])}}
        <span>عنوان</span>
    </label>
    <label class="form-group col-sm-12 col-md-12 col-lg-12 has-float-label">
        {{Form::textarea('description', null, ['class' => 'form-control text-right d-ltr', 'required'])}}
        <span>محتوا</span>
    </label>
</div>
<div class="w-100 text-center">
    <button class="btn btn-primary btn-sm mb-1" type="submit">ارسال</button>
</div>


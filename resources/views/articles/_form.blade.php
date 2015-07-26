    <div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'btn btn-primary']) !!}
  </div>

  <div class="form-group">
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
   </div>

  <div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
   </div>

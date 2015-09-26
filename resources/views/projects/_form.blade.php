   

    <div class="form">

       <div class="form-group">
       {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
      </div>

      <div class="form-group">
       {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
      </div>
   
      <div class="form-group">
       {!! Form::input('date', 'published_at', date('Y-m-d'), [   'class' => 'btn btn-primary']) !!}
     </div>
   
     <div class="form-group">
       {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    </div>

    </div>

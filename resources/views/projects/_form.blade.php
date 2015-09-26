   

    <div class="form">

       <div class="form-group">
       {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
      </div>


      <div class="form-group">
       {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
      </div>
   
      

      <div class="row col-md-6">

          <div class="form-group">
           {!! Form::text('thumbnail_path', null, ['class' => 'form-control', '  placeholder' => 'Thumbnail Path']) !!}
          </div>

      </div>

      <div class="col-md-6">
      
        <div class="form-group">
         {!! Form::text('thumbnail_icon_path', null, ['class' => 'form-control', 'placeholder' => 'Icon Path']) !!}
        </div>
      
      </div>
      
      <div class="row col-md-6">
        <div class="form-group">
         {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
        </div>
      </div>

      
      <div class="row col-md-12">
      <div class="form-group">
       {!! Form::input('date', 'published_at', date('Y-m-d'), [   'class' => 'btn btn-primary']) !!}
      </div>
      </div>

   <div class="row col-md-12">
     <div class="form-group">
       {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    </div>
    </div>

    </div>

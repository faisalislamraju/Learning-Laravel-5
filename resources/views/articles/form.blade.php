
<div class="form-group">
			{!! Form::label('title', 'Name:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('body', 'Name:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('published_at', 'Publish On:') !!}
			{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
		</div>	
		
		<div class="form-group">
			{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>	
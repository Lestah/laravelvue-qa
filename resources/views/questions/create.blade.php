@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 22px;">Ask Question
                    <div class="pull-right"><a href="{{ route('questions.index') }}" class="btn btn-primary">Back to all Questions</a></div>
                </div>
                

                <div class="panel-body">
                    <form action="{{ route('questions.store') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="question-title">Question Title</label>
                            <input type="text" name="title" id="question-title" class="form-control {{ $error->has('title') ? 'is-invalid' : '' }}">
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question-body">Explain your question</label>
                            <textarea name="body" id="question-body" rows="10" class="form-control {{ $error->has('body') ? 'is-invalid' : '' }}"></textarea>
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ask this question</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 22px;">Edit Question
                    <div class="pull-right"><a href="{{ route('questions.index') }}" class="btn btn-primary">Back to all Questions</a></div>
                </div>
                

                <div class="panel-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="post">
                        {{ method_field('PUT') }}
                        @include("questions._form", ['buttonText' => "Update Question"])
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
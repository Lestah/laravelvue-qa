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
                        @include("questions._form", ['buttonText' => "Ask Question"]);
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
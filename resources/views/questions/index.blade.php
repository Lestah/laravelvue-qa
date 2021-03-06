@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 22px;">All Questions
                    <div class="pull-right"><a href="{{ route('questions.create') }}" class="btn btn-primary">Ask Question</a></div>
                </div>
                

                <div class="panel-body">
                    @include('layouts._messages')
                    @foreach($questions as $question)
                        <div class="media">
                            <div class=" counters pull-left">
                                <div class="vote">
                                    <strong>{{ $question->votes }}</strong> {{ str_plural('vote', $question->votes) }}
                                </div>
                                <div class="status {{ $question->status }}">
                                    <strong>{{ $question->answers }}</strong> {{ str_plural('answer', $question->answers) }}
                                </div>
                                <div class="view">
                                    {{ $question->views ." ". str_plural('view', $question->votes) }}
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="pull-right">
                                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary btn-xs" style="margin-top:7px; margin-right:10px;">Edit</a>
                                    <form method="post" action="{{ route('questions.destroy', $question->id) }}" class="pull-right" style="margin-top:6px;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }} 
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs">Delete</button>
                                    </form>
                                </div>
                                {{-- route('questions.show',$question->id) use model encapsulation --}}
                                <h3 class="mt-0"><a href="{{ $question->url }}">{{ $question->title }}</a></h3>
                                <p class="lead">
                                    Asked by
                                    <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                    <small class="text-muted">{{ $question->created_date }}</small>
                                </p>
                                {{ str_limit($question->body, 250) }}
                                
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    
                    <div class="text-center">
                        {{ $questions->links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
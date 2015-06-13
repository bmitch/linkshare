@extends('default')

@section('content')

    <!--The user's posts-->
    <div class="col-lg-8">
        @foreach($user->posts()->paginate(15) as $post)
            @include('snippets.post', array('post' => $post))
        @endforeach

    </div>

    <!--The user profile-->
    <div class="col-lg-4">
        <div class="alert bg-success">
            <h3>User Profile</h3>

            <p>{{ $user->name }} has been a user for {{ Helper::timeAgo($user->created_at, 'user') }} and has
                submitted {{ $user->posts->count() }} posts so far</p>
        </div>
    </div>

@endsection
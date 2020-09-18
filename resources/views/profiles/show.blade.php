@extends('components.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-banner.jpg" alt="" class="rounded-lg mb-2">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit profile</a>
                <a href="" class="bg-blue-500 rounded-full py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>
        <p class="text-sm">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
            qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur"
        </p>

        <img src="{{$user->avatar}}" alt=""
             class="rounded-full mr-2 absolute"
             style="width: 150px; left: calc(50% - 75px); top:230px;"
        >


    </header>

    @include('_timeline', [
    'tweets'=> $user->tweets
    ])
@endsection

<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-banner.jpg" alt="" class="rounded-lg mb-2">

            <img src="{{$user->avatar}}" alt=""
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 width="150"
                 height="150"
                 style="left:50%; width: 150px; height: 150px;"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">

                @can('edit', $user)
                <a href="{{$user->path('edit')}}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
            qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur"
        </p>




    </header>

    @include('_timeline', [
    'tweets'=> $user->tweets
    ])
</x-app>

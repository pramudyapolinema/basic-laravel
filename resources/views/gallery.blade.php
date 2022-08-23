<x-app-layout title="Gallery">
    <div class="container">
        <x-card title='Laravel Framework' subtitle='Laravel is my PHP Framework'>
            Laravel is a web application framework with expressive, elegant syntax. We’ve
            already laid the foundation — freeing you to create without sweating the small things.
        </x-card>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            @foreach ($titles as $key => $title)
                <x-image-card title="{{ $title }}" image="https://picsum.photos/id/{{ $key }}/500/">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </x-image-card>
            @endforeach
        </div>

    </div>
</x-app-layout>
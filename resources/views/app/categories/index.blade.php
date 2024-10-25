<x-app title="Catégories">
    <main class="container-wide space-y-8">
        <section>
            <h1>Toutes les catégories</h1>

            <div class="grid">
                @foreach($category as $tracks)
                    <div class="description">
                        <div>
                            {{--  --}}
                        </div>
                        <div>
                            <h2>{{ $tracks->name }}</h2>
                            <h3>{{ trans_choice('tracks.count', $tracks->tracks_count) }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
</x-app>

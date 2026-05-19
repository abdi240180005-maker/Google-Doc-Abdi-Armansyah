<h1>Halaman Documents</h1>

<a href="/documents/create">
    Buat Document
</a>

<hr>

@foreach ($documents as $document)

    <h3>

        <a href="/documents/{{ $document->id }}">

            {{ $document->title }}

        </a>

    </h3>

@endforeach
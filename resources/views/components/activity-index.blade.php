<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <section class="section">
        {!! $header !!}
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Données</h4>
                            <div class="card-header-form">
                                <a href="{{route('Front.admin.'.$route.'.create')}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="CREATE">
                                    Ajouter une activité <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  id="activity" class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">N</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Resume</th>
                                            <th>Date limite</th>
                                            <th>Image</th>
                                            <th>Fichier</th>
                                            {{-- <th>Date et Heure</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($activities as $activity)
                                            <tr>
                                                <td>{{ $activity->id }}</td>
                                                <td>{{ $activity->title }}</td>
                                                <td>{{ $stripTags($activity->content, 150) }}</td>
                                                <td>{{ $stripTags($activity->resume, 150) }}</td>
                                                <td>{{ $activity->limit_date }}</td>
                                                <td>
                                                    <img alt="{{ $activity->title }}"
                                                        src="{{ asset('storage/' . $activity->image) }}" data-toggle="tooltip"
                                                        width="50">
                                                </td>
                                                <td>
                                                    <a href="{{ asset('storage/' . $activity->file) }}"
                                                        title="{{ $activity->title }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                                {{-- <td>{{ $partner->created_at }}</td> --}}
                                                <td>
                                                    <a href="{{ route('Front.admin.'.$route.'.edit', $activity) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                        title="" data-original-title="Edit"><i
                                                            class="fas fa-pencil-alt"></i></a>

                                                    <form action="{{ route('Front.admin.'.$route.'.destroy', $activity->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-action trigger--fire-modal-6"
                                                            onclick="return confirm('{{$message}}')"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>

                                                    <a href="{{route('Front.admin.'.$route.'.applicants', $activity)}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Voir les postulants"><i
                                                        class="fas fa-users"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script>
        new DataTable('#activity', {
            paging: true,
            pageLength: 15,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
            }
        });
    </script>
@endpush

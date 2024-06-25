<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    @props(['route', 'message', 'header', 'type'])
    <section class="section">
        {!! $header !!}
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Données</h4>
                            <div class="card-header-form">
                                <a href="{{route('Front.admin.'.$route.'.index')}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="" data-original-title="retourner">
                                    Retour <i class="fas fa-sign-out-alt"></i>
                                </a>
                                <a href="{{route('Front.admin.'.$route.'.create')}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="CREATE">
                                    Ajouter <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  id="activity" class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">N°</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Resumé</th>
                                            <th>Date limite</th>
                                            @if($type == 'news')
                                                <th>Image de Couverture</th>
                                            @else
                                                <th>Image</th>
                                                <th>Document associé</th>
                                            @endif
                                            {{-- <th>Date et Heure</th> --}}
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($activities as $activity)
                                            <tr>
                                                <td>{{ $activity->id }}</td>
                                                <td>{{ $stripTags($activity->title, 50) }}</td>
                                                <td>{{ $stripTags($activity->content, 50) }}</td>
                                                <td>{{ !is_null($activity->resume) ? $stripTags($activity->resume, 10) : 'Aucun résumé'}}</td>
                                                <td>{{ $activity->limit_date ?? 'Aucune date' }}</td>

                                            @if($type == 'news')
                                                <td>
                                                    @if ($activity->image)
                                                        <img alt="{{ $activity->title }}"
                                                            src="{{ asset('storage/' .$activity->image) }}" data-toggle="tooltip"  style="height: 60px; width:auto">
                                                    @else
                                                        Aucune image
                                                    @endif
                                                </td>
                                            @else
                                                <td>
                                                    @if ($activity->image)
                                                        <img alt="{{ $activity->title }}"
                                                            src="{{ asset('storage/' .$activity->image) }}" data-toggle="tooltip"  style="height: 60px; width:auto">
                                                    @else
                                                        Aucune image
                                                    @endif
                                                </td>
                                                <td >
                                                    @if ($activity->file)

                                                            <a href="{{ asset('storage/' .$activity->file)  }}" title="{{ $activity->title }}" >
                                                                <svg  style="height: 40px;width:40px; color:aqua" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/></svg>
                                                            </a>
                                                    @else
                                                        Aucun document

                                                    @endif
                                                </td>

                                            @endif
                                                {{-- <td>{{ $partner->created_at }}</td> --}}
                                                <td>
                                                    <a href="{{ route('Front.admin.'.$route.'.edit', $activity) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                        title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>

                                                    <form action="{{ route('Front.admin.'.$route.'.destroy', $activity->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"class="btn btn-danger btn-action trigger--fire-modal-6" onclick="return confirm('{{$message}}')"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                    @if ($type !== 'advantages' && $type !== 'news')
                                                        <a href="{{route('Front.admin.activities.applicants', $activity->id)}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Voir les postulants">
                                                        <i class="fas fa-users"></i></a>
                                                    @endif
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

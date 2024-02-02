@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        </h2>
        <!-- CTA -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="lg:container text-gray-600 dark:text-gray-400" style="text-align: justify;padding:0 60 60 60;">
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h3 class="text-center"> {{ __('profil.form.title', [ 'title' => $typeDeDemande->name]) }} </h3>
                    <hr><br>
                    <div id="part1">
                        <h5 class="">{{ __('profil.form.part1_title1') }}</h5>
                        <div class="text-justify lg:px-10 md:px-0">
                            {!! __('profil.form.part1_description1') !!}
                        </div>
                        <h4 class="">{{ __('profil.form.part1_title2') }}</h4>
                        <ul>
                            @foreach ($dispositions as $disposition)
                                <li>{{ $loop->iteration }}: <strong>{{ $disposition->disposition->translator['percent'] }} %
                                        {{ $disposition->disposition->translator['title'] }}</strong>
                                    {{ $disposition->disposition->translator['content'] }}
                                </li>
                                <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                            @endforeach
                        </ul>
                        <br>
                        <h4 class="">{{ __('profil.form.part1_title3') }}</h4>
                        <div class="text-justify lg:px-10 md:px-0">
                            <p >{{ __('profil.form.part1_description3') }}</p>
                        </div>

                        <h5 class="lg:px-10 md:px-0">{{ __('profil.form.part1_title4') }}</h5>
                        <P class="text-justify lg:px-10 md:px-0">{{ __('profil.form.part1_description4') }}</P>
                        <ol>
                            @foreach ($eligibilities as $eligibility)
                                <li> <strong>{{ $loop->iteration }} </strong>: {{ $eligibility->eligibility->translator['title'] }} </li>
                                <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                            @endforeach
                        </ol>
                        <hr>
                        <h5 class="pt-4">{{ __('profil.form.part1_title5') }}</h5>
                        <p class="text-justify lg:px-10 md:px-0">{!! __('profil.form.part1_description5') !!}</p>

                        <ul class="text-justify lg:px-10 md:px-0">
                            <li>{{ __('profil.form.part1_title6') }}</li>
                        </ul>
                        <ul class="text-justify lg:px-10 md:px-0">
                            @foreach ($obligations as $obligation)
                                <li><strong>{{ $loop->iteration }}: {{ $obligation->obligation->translator['title'] }} </strong> </li>
                                <p> {{ $obligation->obligation->translator['content'] }}</p>

                                <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                            @endforeach

                        </ul>
                        <hr>
                        <button onclick="nextPart('part1', 'part2')" class=" right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                            {{ __('profil.home.start') }}
                        </button>
                        <br>
                    </div>

                    <div class="form-part " class="scrolling-inputs" id="part2">
                        <h4>{{__('profil.form.part2_title1')}}</h4>
                        <div class="alert alert-primary text-center">
                            {{__('profil.form.part2_description1')}}
                        </div>
                        <form action="{{ route('store', ['typeDeDemande' => $typeDeDemande]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row pt-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label "> <strong>{{__('profil.form.social')}}</strong></label>
                                        {{ $company->name }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.form.legal_form')}}</strong></label>
                                        {{ $company->legal_form }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.company.form.rccm')}}</strong></label>
                                        {{ $company->RCCM }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>{{__('profil.company.form.taxpayer')}}</strong></label>
                                        {{ $company->taxpayer_account }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.company.form.headquarters')}}</strong></label>
                                        {{ $company->siege }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.company.form.capital')}}</strong></label>
                                        {{ $company->capital }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>{{__('profil.company.form.phone')}}</strong></label>
                                        {{ $company->phone }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.company.form.fax')}}</strong></label>
                                        {{ $company->cellulaire }}
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>{{__('profil.company.form.email')}}</strong></label>
                                        {{ $company->email }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>{{__('profil.company.form.website')}}</strong></label>
                                        {{ $company->website_link }}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.company.form.job')}}</strong></label>
                                        {{ $company->fonction }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.company.form.agent')}}</strong></label>
                                        {{ $company->legal_agent }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>{{__('profil.form.part2_title2')}}</strong></label>
                                        {{ $company->activity }}
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                        <label for="field2" class="form-label">Type d’implantation à la
                                            ZBTIC</label>
                                        <div class="row">

                                            <div class="mb-3">
                                                <input type="checkbox">
                                                <label class="custom-control-label" for="remember-me">Nouvelle société
                                                    créée</label>
                                            </div>
                                            <div class="mb-3">
                                                <input type="checkbox">
                                                <label class="custom-control-label" for="remember-me">Société en
                                                    exploitation
                                                    à transférer</label>
                                            </div>
                                        </div>
                                    </div> --}}
                            </div>
                            <div class=" mb-10  ">
                                <a href="{{ route('company-edit', ['company' => $company->id,'typeDeDemande' => $typeDeDemande]) }}"
                                    class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                                    {{__('profil.form.update')}}
                                    <span class="ml-2" aria-hidden="true">+</span>
                                </a>
                            </div>
                            <br>
                            <div class="py-4">
                                <h4>{{__('profil.form.documents')}}</h4>
                                <div class=" py-2 grid grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-2">
                                    @foreach ($documentsType as $key => $documentType)
                                        <div class=" items-center">
                                            <label for="document_{{ $documentType->id }}" class="text-sm font-medium text-gray-600 dark:text-gray-400">
                                                <strong>{{ $documentType->typeDocuments->translator['name'] }}</strong>
                                                <small id="inputGroupFileAddon04" class="form-text text-muted">{{__('profil.form.text_muted')}}</small>
                                            </label>
                                            <br>
                                            <input type="file" id="document_{{ $documentType->id }}" name="documents[{{ $key }}]"
                                                class=" bg-white border border-gray-300 rounded-md p-2 "
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                                accept=".pdf, .txt, .docx">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <button type="button"
                                class=" right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple"
                                onclick="nextPart('part2', 'part3')">{{__('profil.form.next')}}</button>

                            <button type="button" class="btn btn-outline-warming text-white" onclick="prevPart('part2', 'part1')">{{__('profil.form.previous')}}</button>
                    </div>

                    <div class="form-part " id="part3">
                        <br>
                        <h2 class="text-center">{{__('profil.form.undertaking')}}</h2>
                        <br>
                        <p class="text-justify py-4 ">{{__('profil.form.undertaking_text', ['fullname' => app('App\Http\Controllers\ProfilController')->getUsername()]) }}</p>
                        <button type="submit" class=" right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">valider</button>
                        </form>
                        <button type="button" class="btn btn-outline-warming  text-white" onclick="prevPart('part3', 'part2')">{{__('profil.form.previous')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

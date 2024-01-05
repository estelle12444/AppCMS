 {{-- <div class=" " >
    <div class="flex flex-row pl-32 pt-4 pb-4 bg-repeat " style="background-color: #FFF4E7; background-image: url(img/image8.png);">
        <div class="basis-1/4 pl-16">
            <div class="flex flex-col py-4">
                <img src="{{ asset('img/image11.png') }}" width="80" alt="logo">
            </div>
            <p class="py-2">
                B.P 605 Grand-Bassam
            </p>
            <p class="py-2">
                +(225) 27 21 31 29 00 / 31
            </p>
            <p class="py-2">
                info@vitib.ci
            </p>
            <p class="py-2">
                Côte d'Ivoire
            </p>
        </div>
        <div class="basis-1/4 pl-20">
            <h3 class="font-semibold py-4">
                Menu
            </h3>
            <p class="py-2">
                Accueil
            </p>
            <p class="py-1.5">
                A propos
            </p>
            <p class="py-1.5">
                Nos partenaires
            </p>
            <p class="py-1.5">
                S'implanter
            </p>
            <p class="py-1.5">
                Opportunités
            </p>
            <p class="py-1.5">
                Mediathèque
            </p>
        </div>
        <div class="basis-1/4  pr-32">
            <h3 class="font-semibold py-4">
                Offres d'emploi
            </h3>
            <p class="py-2">
                Appels d'offre
            </p>
            <p>
                Demandes de manifestation
            </p>
            <p class="py-2">
                Demandes de cotation
            </p>
            <p>
                Appels à candidatures
            </p>
            <p class="py-2">
                Offres d'emploi
            </p>
        </div>
        <div class="basis-1/4">
            <h3 class="font-semibold  py-4">
                Newsletter
            </h3>
            <p class="py-2">
                Inscrivez-vous à nos communications
                pour recevoir nos meilleures offres!
            </p>
            <form action="">

            </form>

        </div>
    </div>
</div>
<div style="background-color:  #F18700;">
    <p class="text-center p-8 text-white">
        © VITIB 2023 | Tous droits réservé. Designer by SaH Analytics Int
    </p>
</div> --}}


 <footer class="bg-orange-100 dark:bg-gray-900">
     <div class="mx-auto w-full max-w-screen-xl">
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 md:px-16 py-6 lg:py-8">
             <div>
                 <h2 class="mb-2 text-sm font-semibold text-gray-900 uppercase dark:text-white -translate-y-6">
                     <img src="{{ asset('img/Image11.png') }}" width="80" alt="logo">
                 </h2>
                 <ul class="text-gray-700 dark:text-gray-400 font-medium -translate-y-6">
                     <li class="mb-4">
                         B.P 605 Grand-Bassam
                     </li>
                     <li class="mb-4">
                        +(225) 27 21 31 29 00/31
                    </li>
                     <li class="mb-4">
                         info@vitib.ci
                     </li>
                     <li class="mb-4">
                         Côte d'Ivoire
                     </li>
                      <div class="">
                        <a href="{{ route('login') }} ">
                        <button type="button" style="background-color: #F18700"
                            class=" xl:p-4 xl:px-8 rounded-none font-bold text-white text-left text-md">
                            Rejoignez-nous
                        </button>
                    </a>
                    </div>
                 </ul>
             </div>
             <div>
                 <h2 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">Menu</h2>
                 <ul class="text-gray-700 dark:text-gray-400 font-medium">
                     <li class="mb-4">
                         <a href="/home" class="hover:underline">Accueil</a>
                     </li>
                     <li class="mb-4">
                         <a href="/about" class="hover:underline">A propos</a>
                     </li>
                     <li class="mb-4">
                         <a href="/etsagre" class="hover:underline">Nos partenaires</a>
                     </li>
                     <li class="mb-4">
                         <a href="/installer" class="hover:underline">S'implanter</a>
                     </li>
                     <li class="mb-4">
                         <a href="/opportunity" class="hover:underline">Opportunités</a>
                     </li>
                     <li class="mb-4">
                         <a href="/media" class="hover:underline">Mediathèque</a>
                     </li>
                 </ul>
             </div>
             <div>
                 <h2 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">Offres d'emploi</h2>
                 <ul class="text-gray-700 dark:text-gray-400 font-medium">
                     <li class="mb-4">
                         <a href="/annonce" class="hover:underline">Appels d'offre</a>
                     </li>
                     <li class="mb-4">
                         <a href="/annonce" class="hover:underline">Demandes de manifestation</a>
                     </li>
                     <li class="mb-4">
                         <a href="/annonce" class="hover:underline">Demandes de cotation</a>
                     </li>
                     <li class="mb-4">
                         <a href="/annonce" class="hover:underline">Appels à Candidature</a>
                     </li>
                     <li class="mb-4">
                         <a href="/annonce" class="hover:underline">Offres d'emploi</a>
                     </li>
                     <li class="mb-4">
                         <a href="/annonce" class="hover:underline">Newsletter</a>
                     </li>
                 </ul>
             </div>
             <div>
                 <h2 class="mb-6 text-3xl font-semibold text-gray-900 dark:text-white">Newsletter</h2>
                 <ul class="text-gray-700 dark:text-gray-400 font-medium">
                     <li class="mb-4">
                         <p class="py-2">
                             Inscrivez-vous à nos communications pour recevoir nos meilleures offres!
                         </p>
                     </li>
                     <li class="mb-4">

                         <form action="{{ route('newsletter.subscribe') }}" method="POST"
                             enctype="multipart/form-data" class="flex flex-col items-center md:flex-row">
                             @csrf
                             <div class="relative pb-4 pt-4">
                                 <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                     <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                         <path
                                             d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                         <path
                                             d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                     </svg>
                                 </div>
                                 <input type="text" name="email" id="input-group-1"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                     placeholder="name@vitib.com"/>


                             </div>
                             @error('email')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                             <button type="submit" style="background-color: #F18700;"
                                 class="pt-3 text-white hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                 S'abonner
                             </button>
                         </form>


                     </li>
                     @if (session('success'))
                     <div class="alert alert-success">
                         {{ session('success') }}
                     </div>
                 @endif


                     <li class="mb-4">
                         <div class="flex mt-4 space-x-5  md:mt-0">
                             <a href="https://www.facebook.com/vitibzonefranche" class="text-amber-500 hover:text-amber-500 dark:hover:text-white">
                                 <svg class="md:w-4 md:h-4 w-6 h-6" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                     <path fill-rule="evenodd"
                                         d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                         clip-rule="evenodd" />
                                 </svg>
                                 <span class="sr-only">Facebook page</span>
                             </a>

                             <a href="https://twitter.com/VitibCi" class="text-amber-500 hover:text-amber-500 dark:hover:text-white">
                                 <svg class="md:w-4 md:h-4 w-6 h-6" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                     <path fill-rule="evenodd"
                                         d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                         clip-rule="evenodd" />
                                 </svg>
                                 <span class="sr-only">Twitter page</span>
                             </a>
                             <a href="https://www.youtube.com/channel/UCzA2_qBxt4XRoiLRiNs2Drw" class="text-amber-500 hover:text-amber-500 dark:hover:text-white">
                                <svg class="md:w-4 md:h-4 w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"/>
                                  </svg>
                                 <span class="sr-only">Youtube page</span>
                             </a>
                             <a href="https://www.linkedin.com/in/vitib-sa-89a711142/" class="text-amber-500 hover:text-amber-500 dark:hover:text-white">
                                <svg class="md:w-4 md:h-4 w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                                    <path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/>
                                    <path d="M3 5.012H0V15h3V5.012Z"/>
                                  </svg>

                                 <span class="sr-only"> linkedin</span>
                             </a>

                         </div>
                     </li>

                 </ul>
             </div>
         </div>
     </div>
 </footer>
 <div style="background-color: #F18700;">
     <p class="text-center p-4 text-white">
         © VITIB 2023 | Tous droits réservés. Design by SaH Analytics Int
     </p>
 </div>

<x-app-layout title="Prospecto">
    <div class="bg-white">
        <div class="pt-6 pb-16 sm:pb-24">
            <nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-4 text-sm font-medium text-gray-900"></a>
                            <svg viewBox="0 0 6 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-auto text-gray-300">
                                <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-4 text-sm font-medium text-gray-900"></a>
                            <svg viewBox="0 0 6 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-auto text-gray-300">
                                <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Banquetacionamiento</a>
                    </li>
                </ol>
            </nav>
            <div class="mx-auto mt-8 max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8">
                    <div class="lg:col-span-5 lg:col-start-8">
                        <div class="flex justify-between">
                            <h1 class="text-xl font-medium text-gray-900">{{ $prospect->name }}</h1>
                            <p class="text-xl font-medium text-gray-900">
                               Votos:
                                {{ $prospect->votes }}
                            </p>
                        </div>
                        <!-- Reviews -->
                        <div class="mt-4">
                            <h2 class="sr-only">Reviews</h2>
                            <div class="flex items-center">
                                <p class="text-sm text-gray-700">
{{--                                    3.9--}}
                                    <span class="sr-only"> out of 5 stars</span>
                                </p>
{{--                                <div class="ml-1 flex items-center">--}}
{{--                                    <!----}}
{{--                                      Heroicon name: mini/star--}}

{{--                                      Active: "text-yellow-400", Inactive: "text-gray-200"--}}
{{--                                    -->--}}
{{--                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />--}}
{{--                                    </svg>--}}

{{--                                    <!-- Heroicon name: mini/star -->--}}
{{--                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />--}}
{{--                                    </svg>--}}

{{--                                    <!-- Heroicon name: mini/star -->--}}
{{--                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />--}}
{{--                                    </svg>--}}

{{--                                    <!-- Heroicon name: mini/star -->--}}
{{--                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />--}}
{{--                                    </svg>--}}

{{--                                    <!-- Heroicon name: mini/star -->--}}
{{--                                    <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
                                <div aria-hidden="true" class="ml-4 text-sm text-gray-300">·</div>
{{--                                <div class="ml-4 flex">--}}
{{--                                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">See all 512 reviews</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>

                    <!-- Image gallery -->
                    <div class="mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
                        <h2 class="sr-only">Images</h2>

                        <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-3 lg:gap-8">
                            <img src="{{ $prospect->getFirstMediaUrl()  }}" alt="Back of women&#039;s Basic Tee in black." class="lg:col-span-2 lg:row-span-2 rounded-lg">

                            @if(isset($prospect->getMedia()[1]))
                                <img src="{{ $prospect->getMedia()[1]->getUrl() }}" alt="Imagen de invasión de banqueta" class="hidden lg:block rounded-lg">
                            @endif
                            @if(isset($prospect->getMedia()[2]))
                                <img src="{{ $prospect->getMedia()[2]->getUrl() }}" alt="Imagen de invasión de banqueta" class="hidden lg:block rounded-lg">
                            @endif

                        </div>
                    </div>

                    <div class="mt-8 lg:col-span-5">
                        <form>
                            <!-- Color picker -->
{{--                            <div>--}}
{{--                                <h2 class="text-sm font-medium text-gray-900">Color</h2>--}}

{{--                                <fieldset class="mt-2">--}}
{{--                                    <legend class="sr-only">Choose a color</legend>--}}
{{--                                    <div class="flex items-center space-x-3">--}}
{{--                                        <!----}}
{{--                                          Active and Checked: "ring ring-offset-1"--}}
{{--                                          Not Active and Checked: "ring-2"--}}
{{--                                        -->--}}
{{--                                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">--}}
{{--                                            <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-0-label">--}}
{{--                                            <span id="color-choice-0-label" class="sr-only"> Black </span>--}}
{{--                                            <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>--}}
{{--                                        </label>--}}

{{--                                        <!----}}
{{--                                          Active and Checked: "ring ring-offset-1"--}}
{{--                                          Not Active and Checked: "ring-2"--}}
{{--                                        -->--}}
{{--                                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">--}}
{{--                                            <input type="radio" name="color-choice" value="Heather Grey" class="sr-only" aria-labelledby="color-choice-1-label">--}}
{{--                                            <span id="color-choice-1-label" class="sr-only"> Heather Grey </span>--}}
{{--                                            <span aria-hidden="true" class="h-8 w-8 bg-gray-400 border border-black border-opacity-10 rounded-full"></span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}

                            <!-- Size picker -->
{{--                            <div class="mt-8">--}}
{{--                                <div class="flex items-center justify-between">--}}
{{--                                    <h2 class="text-sm font-medium text-gray-900">Size</h2>--}}
{{--                                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">See sizing chart</a>--}}
{{--                                </div>--}}

{{--                                <fieldset class="mt-2">--}}
{{--                                    <legend class="sr-only">Choose a size</legend>--}}
{{--                                    <div class="grid grid-cols-3 gap-3 sm:grid-cols-6">--}}
{{--                                        <!----}}
{{--                                          In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"--}}
{{--                                          Active: "ring-2 ring-offset-2 ring-indigo-500"--}}
{{--                                          Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"--}}
{{--                                        -->--}}
{{--                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">--}}
{{--                                            <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">--}}
{{--                                            <span id="size-choice-0-label">XXS</span>--}}
{{--                                        </label>--}}

{{--                                        <!----}}
{{--                                          In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"--}}
{{--                                          Active: "ring-2 ring-offset-2 ring-indigo-500"--}}
{{--                                          Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"--}}
{{--                                        -->--}}
{{--                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">--}}
{{--                                            <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">--}}
{{--                                            <span id="size-choice-1-label">XS</span>--}}
{{--                                        </label>--}}

{{--                                        <!----}}
{{--                                          In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"--}}
{{--                                          Active: "ring-2 ring-offset-2 ring-indigo-500"--}}
{{--                                          Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"--}}
{{--                                        -->--}}
{{--                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">--}}
{{--                                            <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">--}}
{{--                                            <span id="size-choice-2-label">S</span>--}}
{{--                                        </label>--}}

{{--                                        <!----}}
{{--                                          In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"--}}
{{--                                          Active: "ring-2 ring-offset-2 ring-indigo-500"--}}
{{--                                          Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"--}}
{{--                                        -->--}}
{{--                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">--}}
{{--                                            <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">--}}
{{--                                            <span id="size-choice-3-label">M</span>--}}
{{--                                        </label>--}}

{{--                                        <!----}}
{{--                                          In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"--}}
{{--                                          Active: "ring-2 ring-offset-2 ring-indigo-500"--}}
{{--                                          Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"--}}
{{--                                        -->--}}
{{--                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">--}}
{{--                                            <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">--}}
{{--                                            <span id="size-choice-4-label">L</span>--}}
{{--                                        </label>--}}

{{--                                        <!----}}
{{--                                          In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"--}}
{{--                                          Active: "ring-2 ring-offset-2 ring-indigo-500"--}}
{{--                                          Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"--}}
{{--                                        -->--}}
{{--                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 opacity-25 cursor-not-allowed">--}}
{{--                                            <input type="radio" name="size-choice" value="XL" disabled class="sr-only" aria-labelledby="size-choice-5-label">--}}
{{--                                            <span id="size-choice-5-label">XL</span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}

                            <button type="submit" class="mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Dejar voto</button>
                        </form>

                        <!-- Product details -->
                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900">{{ __('Description') }}</h2>

                            <div class="prose prose-sm mt-4 text-gray-500">
                                {{ $prospect->description }}
                            </div>
                        </div>

                        <div class="mt-8 border-t border-gray-200 pt-8">
                            <h2 class="text-sm font-medium text-gray-900">Caracteristicas especiales</h2>

                            <div class="prose prose-sm mt-4 text-gray-500">
                                <ul role="list">
                                    @if($prospect->is_from_politician)
                                        <li>Parece que este lugar está relacionado a un politico o funcionaro público.</li>
                                    @endif
                                    @if($prospect->is_from_bussiness)
                                        <li>Este lugar es de un negocio.</li>
                                    @endif
                                    @if($prospect->is_from_media)
                                        <li>Este lugar es socialmente relevante.</li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <!-- Policies -->
                        <section aria-labelledby="policies-heading" class="mt-10">
                            <h2 id="policies-heading" class="sr-only">Our Policies</h2>
                            <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                                <a href="{{ $prospect->google_maps_link }}">
                                    <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                                        <dt>
                                            <!-- Heroicon name: outline/globe-americas -->
                                            <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                            </svg>
                                            <span class="mt-4 text-sm font-medium text-gray-900">Ir a Google Maps</span>
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-500">Mucha gente entra a ver la calificación general.</dd>
                                    </div>
                                </a>
                                <a href="{{ $prospect->facebook_link }}">
                                <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                                    <dt>
                                        <!-- Heroicon name: outline/currency-dollar -->
                                        <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="mt-4 text-sm font-medium text-gray-900">Ir a Facebook</span>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-500">Otros contactos podrán ver que votaste negativo.</dd>
                                </div>
                                </a>
                            </dl>
                        </section>
                        <!-- Share buttons section -->
                        <div class="mt-8 border-t border-gray-200 pt-8">

                            <h2 id="share-heading" class="text-sm font-medium text-gray-900">Comparte esta página</h2>
                            <section aria-labelledby="share-heading" class="mt-10">

                                <div class="flex justify-center space-x-6">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('prospects.show', ['prospect' => $prospect->id]) }}">
                                        <i class="fab fa-facebook fa-2x"></i>
                                        <span class="sr-only">Share on Facebook</span>
                                    </a>

                                    <a href="https://twitter.com/share?url={{ route('prospects.show', ['prospect' => $prospect->id]) }}&text=Revisa esta página de BoicotPeatonal.ORG! {{ $prospect->name }}" class="text-gray-400 hover:text-gray-500">
                                        <i class="fab fa-twitter fa-2x"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

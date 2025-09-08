@extends('layouts.indexLayout')



@section('content')
    @include('partials.navMobile')

    <div class="bg-white sticky top-0 z-50">
        @include('partials.navPC')
    </div>

    <!-- border -->
     <div class="border-b-[0.4px] border-alerta"></div>

     <!-- hero -->
      <div class="relative mt-2">
        <img src="https://simontini.id/assets/stadi2024/4-subussalam.jpg" alt="Mapbiomas Landy - Indonesia" class="sm:h-[70vh] h-[40vh] w-full object-top object-cover relative">
        <div class="absolute sm:bottom-32 bottom-16 sm:left-[21rem] left-5">
            {{-- <p class="text-white sm:text-5xl text-4xl font-black mb-6 leading normal sm:w-7/12 w-full">{{__('Learning from the Past for the Future') }}</p> --}}
            <a href="https://plataforma.mapbiomas.org/coverage/coverage_lclu?t[regionKey]=indonesia" class=" bg-alerta text-white  px-4 py-1 font-semibold text-xl">{{__('Access The Platform') }}</a>

        </div>
      </div>


       <!-- what is -->
       <div class="max-w-6xl mx-auto flex sm:flex-row flex-col gap-5 px-4 mt-12">
            <div class=" w-full  ">
                <a class="bg-alerta px-4 py-1 text-white font-semibold capitalize">{{__('What is MapBiomas Alerta') }}</a>
                <div class="flex flex-row  h-full   gap-4  snap-x snap-mandatory mt-4">
                    <img src="{{ asset('assets/whatis.png') }}" alt="">
                </div>

            </div>
            {{-- <div class="sm:w-3/12 w-full  ">
                <a class="bg-alerta px-4 py-1 text-white font-semibold capitalize">Event</a>
                <div class=" flex flex-col gap-4 mt-4">
                    @foreach ($event as $item)
                        <!-- card -->
                        <div class="sm:flex-shrink flex-shrink-0 snap-center w-full  ">
                            <a href="{{ route('detailevent', [app()->getLocale(), $item->id, $item->slug]) }}"  class="sm:w-7/12 w-full">
                                <img src="{{ asset('storage/files/photos/'.$item->img) }}"  alt="{{ $item->title }}" class="bg-red-200 h-36 w-full" />
                            </a>
                        </div>
                    @endforeach
                </div>

            </div> --}}

       </div>

       <!-- news -->
        <div class=" bg-alerta-2 sm:mt-12 mt-1">
            <div class=" z-20 max-w-6xl mx-auto sm:py-16 py-4 px-4" >
                <div class=" mb-2 w-full justify-start items-center flex">
                    <a class="bg-alerta p-2 text-white font-semibold text-base  text-left ">{{__('news') }}</a>
                </div>
                <div class="flex flex-row  scrollbar-hide overflow-x-scroll h-full   gap-4  snap-x snap-mandatory">
                    <!-- card -->
                    <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  ">
                        <a  class="sm:w-7/12 w-full">
                            <div  alt="" class="bg-red-200 h-44 w-full"></div>
                        </a>

                        <a  class="md:mt-6 mt-3 font-semibold   flex-shrink-0 flex ">Technical experts review MapBiomas Indonesia Collection 1 methodology and results</a>
                        <div class="mt-2 text-sm  font-light">
                            Mapbiomas Indonesia involves technical experts in the field of Geographic Information System (GIS) to review the platform, methodology and data of the first collection of land cover maps
                        </div>
                    </div>
                     <!-- card -->
                     <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  ">
                        <a  class="sm:w-7/12 w-full">
                            <div  alt="" class="bg-red-200 h-44 w-full"></div>
                        </a>

                        <a  class="md:mt-6 mt-3 font-semibold   flex-shrink-0 flex ">Technical experts review MapBiomas Indonesia Collection 1 methodology and results</a>
                        <div class="mt-2 text-sm  font-light">
                            Mapbiomas Indonesia involves technical experts in the field of Geographic Information System (GIS) to review the platform, methodology and data of the first collection of land cover maps
                        </div>
                    </div>
                     <!-- card -->
                     <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  ">
                        <a  class="sm:w-7/12 w-full">
                            <div  alt="" class="bg-red-200 h-44 w-full"></div>
                        </a>

                        <a  class="md:mt-6 mt-3 font-semibold   flex-shrink-0 flex ">Technical experts review MapBiomas Indonesia Collection 1 methodology and results</a>
                        <div class="mt-2 text-sm  font-light">
                            Mapbiomas Indonesia involves technical experts in the field of Geographic Information System (GIS) to review the platform, methodology and data of the first collection of land cover maps
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>

        <!-- infographic -->
         <div class="max-w-6xl mx-auto px-4 mt-12">
            <a class="bg-alerta py-2 px-2 text-white font-semibold ">Infographic</a>
            <div class="mt-4 flex flex-col gap-2">
                <img src="https://alerta.mapbiomas.org/wp-content/uploads/sites/17/2025/05/MBI-RAD-6.0-brazil-EN-1-scaled.jpg" alt="" class="w-full h-full">
                {{-- <a href="{{ asset('storage/files/photos/'.$infographic->img) }}"><img src="{{ asset('storage/files/photos/'.$infographic->img) }}" alt="{{$infographic->title}}" class="w-full h-full mt-4"></a> --}}
                {{-- <a href="{{ asset('storage/files/photos/'.$infographic->img) }}" class="text-landy text-xl font-semibold ">{{$infographic->title}}</a> --}}
            </div>
         </div>



       {{-- @include('partials.footer') --}}
@endsection

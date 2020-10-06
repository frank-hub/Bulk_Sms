@extends('layouts.admin')
@section('content')
<div class="flex">
    @include('layouts.sidebar')
    <div class="p-4 w-full w-4/5 bg-gray-100 overflow-y-hidden">
        @include('layouts.navbar')
        <div class="px-10 py-8">
            <h1 class="flex text-3xl text-gray-600">
                <a href="{{url('/')}}" class="text-3xl font-semibold">Dashboard</a>
                > <span class="text-green-400">Reports</span>
            </h1>
        </div>
        
{{-- CHARTS --}}

<div class="lg:flex mb-4">
    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white rounded-lg mx-auto p-6 lg:w-3/5 mb-2">
        {!! $earnings_chart->container() !!}
    </div>
    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white rounded-lg mx-auto p-6 lg:ml-4 lg:w-2/5">
        {!! $statics_chart->container() !!}
    </div>
</div>
{{-- END CHARTS --}}
    </div>
</div>
@endsection
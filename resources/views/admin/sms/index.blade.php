@extends('layouts.admin')
@section('content')
<div class="flex">
    @include('layouts.sidebar')
    <div class="p-4 w-full w-4/5 bg-gray-100 overflow-y-hidden">
        @include('layouts.navbar')
        <div class="px-10 py-8">
            <h1 class="flex text-3xl text-gray-600">
                <a href="{{url('/')}}" class="text-3xl font-semibold">Dashboard</a>
                > <span class="text-green-400">Profile</span>
            </h1>
        </div>
        <form class="w-full" action="">
            
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    Short Message (SMS)
                </label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text"></textarea>
                </div>
            </div>
            <!-- Using utilities: -->
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Send
            </button>
          </form>
            <br>
          {{-- TABLE --}}
          <div id='recipients' class=" transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-xl p-8 mt-6 lg:mt-0 rounded shadow-lg bg-white">
            <div class="block overflow-x-auto">
                <table id="example" class="py-4" style="width:100%;">
                    <thead>
                        <tr>
                            <th data-priority="1">#</th>
                            <th data-priority="2">SMS</th>
                        
                            <th data-priority="6">Status</th>
                        </tr>
                    </thead>
                    <tbody class="leading-normal">
                        <tr>
                            <td>1</td>
                            <td>Good evening, we have internet outage. The outage had affect the whole network under Fractured Wifi Network. If you have any queries kindly contact 0717353774. Thank you and Good Night.</td>
                            <td>
                                <div class="text-sm font-semibold uppercase tracking-tight text-green-600 mb-2">Complete</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- END TABLE --}}
    </div>
</div>
@endsection
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
        @if ($errors->any())
          <ul>
            @foreach ($errors->all() as $error)
                <li class="text-sm font-semibold uppercase tracking-tight text-orange-400 mb-2">{{$error}}</li>
            @endforeach
          </ul>
        @endif
        <form class="w-full max-w-lg" action="{{url('clients/store')}}" method="POST">
          @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  First Name
                </label>
                <input name="fname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-grey-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Last Name
                </label>
                <input name="sname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                  Phone
                </label>
                <input name="phone_no" maxlength="13" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-phone" type="tel" value="+254">
                <p class="text-gray-600 text-xs italic">+254789989989</p>
              </div>
            </div>
            {{-- <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                  City
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  State
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>New Mexico</option>
                    <option>Missouri</option>
                    <option>Texas</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                  Zip
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
              </div>
            </div> --}}
            <!-- Using utilities: -->
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                SUBMIT
            </button>
          </form>
          {{-- TABLE --}}
          <div id='recipients' class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-xl p-8 mt-6 lg:mt-0 rounded shadow-lg bg-white">
            <div class="block overflow-x-auto">
                <table id="example" class="py-4" style="width:100%;">
                    <thead>
                        <tr>
                            <th data-priority="1">#</th>
                            <th data-priority="2">Name</th>
                            <th data-priority="3">Phone</th>
                            <th data-priority="5">Created date</th>
                            <th data-priority="6">Action</th>
                        </tr>
                    </thead>
                    <tbody class="leading-normal">
                        <tr>
                            <td>1</td>
                            <td>Rhona Davidson</td>
                            <td>+2549800908</td>
                            <td>2010/10/14</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- END TABLE --}}
    </div>
</div>
@endsection
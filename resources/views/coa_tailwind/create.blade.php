@extends('layouts.app_org')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap  justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">New COA</div>

                    <div class="flex-auto p-6">
                        @if ($message = Session::get('success'))

                            <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800 alert-block">

                                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>

                        @endif

                        @if (count($errors) > 0)
                            <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form method="post" action="{{route('file.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="product_name">Product Name</label>
                                <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="product_name" id="product_name" value="">
                            </div>
                            <div class="mb-4">
                                <label for="coaNumber">Batch Number</label>
                                <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="coa_number" id="coa_number" value="">
                            </div>
                            <div class="mb-4">
                                <input type="file" class="block appearance-none" name="fileToUpload" aria-describedby="fileHelp" id="coa_name" enctype="multipart/form-data">
                            </div>
                            <button class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600" type="submit">Beam me up</button>
                            <a href="{{ route('home') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline text-blue-600 border-blue-600 hover:bg-blue-600 hover:text-white bg-white hover:bg-blue-600 py-1 px-2 leading-tight text-xs " role="button"
                               aria-pressed="true">Home</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection








<div>
    <div class="font-extrabold text-3xl ">{{ $name }}</div>
    @foreach ($files as $file)
        <ul class="list-disc list-inside">
            <li
                class="p-2 grid grid-cols-5 items-center border-b border-black w-1/2 hover:bg-gray-800 hover:text-white hover:rounded-md hover:border-0 transition duration-150 delay-200 transform hover:-translate-y-1 hover:shadow-xl shadow-gray-900">
                {{-- @if ($file->type === 'pdf') --}}
                <a href="{{ url('/storage') . '/' . $type . '/' . $file->id . '/' . $file->file_name }}" target="_blank"
                    class="col-span-4">{{ $file->file_name }}
                </a>
                <a
                    href="{{ url('/app/delete_media') . '/' . $file->id . '/' . $type }} "class=" border-black hover:border-0 hover:bg-red-600 hover:text-white text-center font-bold text-sm p-2 rounded " onclick="return(confirm('Do you want to delete this file?'))">Delete</a>
                {{-- @endif --}}
            </li>
        </ul>
        </iframe>
    @endforeach
</div>
@if($counter < 1)
    <script>
        window.close();
    </script>
@endif


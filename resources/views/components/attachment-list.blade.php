<div>
    <div class="font-extrabold text-3xl ">{{ $name }}</div>
    @foreach ($files as $file)
        <ul class="list-disc list-inside">
            <li class="pl-4">
                <a href="{{ url('/storage'). '/' . $type . '/' . $file->id . '/' . $file->file_name }}"
                    target="_blank">{{ $file->file_name }}
                </a>
            </li>
        </ul>
    @endforeach
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded-b-lg dark:bg-gray-900">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> --}}
                <img src="{{ asset('images/emb_logo.png') }}" class="object-cover h-8 px-4" alt="EMB LOGO">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Download
                    Attachment/s</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </nav>

    <div class="p-4 ">
        {{-- permits --}}
        @if (isset($permits) && count($permits) > 0 )
            <x-attachment-list name="Permits" :files="$permits" type="permits" />
        @endif
        {{-- monitoring --}}
        @if (isset($monitoring))
            <x-attachment-list name="Monitoring" :files="$monitoring" type="monitoring" />
        @endif
        {{-- legal --}}
        @if (isset($legal))
            <x-attachment-list name="Legal" :files="$legal" type="Legal" />
        @endif
        {{-- Complaint --}}
        @if (isset($complaint))
            <x-attachment-list name="Complaint" :files="$complaint" type="complaint" />
        @endif
        {{-- ComplaintAction --}}
        @if (isset($complaintaction))
            <x-attachment-list name="Complaint Action" :files="$complaintaction" type="complaintaction" />
        @endif


    </div>


</body>

</html>

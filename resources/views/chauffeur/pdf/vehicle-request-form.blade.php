<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .text-center {
            text-align: center;
        }

        .p-0 {
            padding: 0px
        }

        .border {
            border: 1px solid black;
        }

        .my-1 {
            margin-top: 0.5rem;
            /* 4px */
            margin-bottom: 0.5rem;
            /* 4px */
        }

        .p-1 {
            padding: 1rem
        }

        .pl-05 {
            padding-left: .5rem
        }

        .w-full {
            width: 100%;
        }

        .w-half {
            width: 50%;
        }

        table {
            border-spacing: .5em;
        }
    </style>
</head>

<body>
    <div class="text-center p-0">
        <h2>
            <header>Request Vehicle Form</header>
        </h2>
    </div>

    <table class="w-full my-1">
        <tr class="w-full">
            <td class="border" colspan="2">
                <span class="pl-05">Name:</span>
                <div class="p-1">
                    {{ $data['name'] }}
                </div>
            </td>
        </tr>
        <tr class="">
            <td class="border" colspan="2">
                <span class="pl-05">Purpose:</span>
                <div class="p-1">
                    {{ $data['purpose'] }}
                </div>
            </td>
        </tr>
        <tr class="">
            <td class="border" colspan="2">
                <span class="pl-05">Destination:</span>
                <div class="p-1">
                    {{ $data['destination'] }}
                </div>
            </td>
        </tr>
        <tr class="">
            <td class="w-half border ">
                <span class="pl-05">Name of Firm/s:</span>
                <div class="p-1">
                    {{ $data['name_of_firms'] }}
                </div>
            </td>
            <td class="w-half border">
                <span class="pl-05">Place/s:</span>
                <div class="p-1">
                    {{ $data['places'] }}
                </div>
            </td>
        </tr>

        <tr class="">
            <td class="w-half border">
                <span class="pl-05">Departure:</span>
                <div class="p-1">

                    {{ \Carbon\Carbon::parse($data['departure'])->format('M d, Y')  }}
                </div>
            </td>
            <td class="w-half border">
                <span class="pl-05">Arrival:</span>
                <div class="p-1">
                    {{ \Carbon\Carbon::parse($data['arrival'])->format('M d, Y')  }}
                </div>
            </td>
        </tr>

        <tr class="">
            <td class="w-half border">
                <span class="pl-05">Requested By:</span>
                <div class="p-1">
                    {{ $data['requested_user']['username'] }}
                </div>
            </td>
            <td class="w-half border">
                <span class="pl-05">Aproved By:</span>
                <div class="p-1">
                    {{ $data['approvedBy'] }}
                </div>
            </td>
        </tr>
    </table>

</body>

</html>

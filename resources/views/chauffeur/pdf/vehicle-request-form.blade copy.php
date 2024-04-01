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
        .p-1{
            padding:1rem
        }
        .pl-05{
            padding-left:.5rem
        }
        .flex{
            display:flex;
            gap:2vw
        }
        .flex-row{
            flex-direction:row
        }
        .flex-item{
            width: 50vw
        }

    </style>
</head>

<body>
    <div class="text-center p-0">
        <h2>
            <header>Request Vehicle Form</header>
        </h2>
    </div>
    <div class="border my-1 ">
        <span class="pl-05">Name:</span>
        <div class="p-1">

        </div>
    </div>
    <div class="border my-1 ">
        <span class="pl-05">Purpose:</span>
        <div class="p-1">

        </div>
    </div>
    <div class="border my-1 ">
        <span class="pl-05">Destination:</span>
        <div class="p-1">

        </div>
    </div>
    <div class="flex">
        <div class="border my-1 flex-item">
            <span class="pl-05">Name of Firm/s:</span>
            <div class="p-1">

            </div>
        </div>
        <div class="border my-1 flex-item">
            <span class="pl-05">Place/s:</span>
            <div class="p-1">

            </div>
        </div>
    </div>
    <div class="flex">
        <div class="border my-1 flex-item">
            <span class="pl-05">Departure:</span>
            <div class="p-1">

            </div>
        </div>
        <div class="border my-1 flex-item">
            <span class="pl-05">Arrival:</span>
            <div class="p-1">

            </div>
        </div>
    </div>

    <div class="flex">
        <div class="border my-1 flex-item">
            <span class="pl-05">Requested By:</span>
            <div class="p-1">

            </div>
        </div>
        <div class="border my-1 flex-item">
            <span class="pl-05">Aproved By:</span>
            <div class="p-1">

            </div>
        </div>
    </div>
</body>

</html>

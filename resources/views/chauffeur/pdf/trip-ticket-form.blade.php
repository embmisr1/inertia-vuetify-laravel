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

        .mt-2 {
            margin-top: 2rem;
            /* 4px */
        }

        .p-1 {
            padding: 1rem
        }

        .pl-05 {
            padding-left: .5rem
        }

        .flex {
            display: flex;
            gap: 2vw
        }

        .flex-row {
            flex-direction: row
        }

        .flex-item {
            width: 50vw
        }

        .tripDetailTable,
        .tripDetailTableHead,
        .tripDetailTableTHead,
        .tripDetailTableBody {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .border-b {
            border-bottom: 1px solid black;
        }

        .linw-margin {
            margin: 0 10rem 0 2.5rem
        }

        .margin-0 {
            margin: 0em
        }

        .margin-t-0 {
            margin-top: 0em
        }

        .text-85em {
            font-size: .85em
        }

        .font-bold {
            font-weight: bold
        }
    </style>
</head>

<body class="text-85em">
    <div class="text-center p-0">
        <h5>
            <header>DRIVERS TRIP TICKET NO. _________________</header>
        </h5>
    </div>
    <table style="width:100%" class="tableTop">

        <tr>
            <td colspan="2">
                <small>DATE:</small>
                <div class="border-b linw-margin"></div>
            </td>
            <td>
                <small>PLATE NO.</small>
                <div class="border-b " style="margin-left:4.5rem"></div>
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <small>
                    NAME OF DRIVER:
                </small>
                <div class="border-b" style="margin-left:8rem"></div>
            </td>
            <td>
                <small>
                    TYPE OF VEHICLE:
                </small>
                <div class="border-b" style="margin-left:8rem"></div>
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <small>AUTHORIZED PASSENGER(S):</small>
                <div class="border-b" style="margin-left:12.5rem"></div>
            </td>
            <td>
                <small>
                    DESTINATION:
                </small>
                <div class="border-b" style="margin-left:6rem"></div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="border-b" style="padding:.7rem">

            </td>
            <td class="border-b">

            </td>
        </tr>
        <tr>
            <td colspan="2" class="border-b" style="padding:.7rem">

            </td>
            <td class="border-b">

            </td>
        </tr>
        <tr>
            <td colspan="2">
                <small>PURPOSE OF TRIP:</small>
                <div class="border-b" style="margin-left:7.5rem"></div>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td colspan="2" class="border-b" style="padding:.7rem">

            </td>
            <td class="">

            </td>
        </tr>
        <tr>
            <td colspan="2" class="border-b" style="padding:.7rem">

            </td>
            <td>
                <small>
                    DEPARTURE:
                </small>
                <div class="border-b" style="margin-left:5.5rem"></div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="border-b" style="padding:.7rem">

            </td>
            <td>
                <small>
                    ARRIVAL:
                </small>
                <div class="border-b" style="margin-left:4.5rem"></div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <small>
                    <b>
                        RECOMMENDING APPROVAL:
                    </b>
                </small>
            </td>
            <td>
                <small>
                    <b>
                        APPROVED:
                    </b>
                </small>
            </td>
        </tr>

        <tr>
            <td colspan="2" class="text-center">
                <div class="border-b" style="margin-top:2.5rem"></div>
                <small style="font-style: italic;margin:0rem ">
                    Chief of Division
                </small>
            </td>
            <td class="text-center">
                <div class="border-b" style="margin-top:2.5rem"></div>
                <small style="font-style: italic; margin:0rem">
                    Chief, FAD:
                </small>
            </td>
        </tr>
    </table>
    <table style="width:100%" class="tripDetailTable">
        <caption><small>TO BE FILLE UP BY THE DRICER OF THE VEHICLE</small></caption>
        <tr class="tripDetailTableHead">
            <th class="tripDetailTableTHead text-center" colspan="2">Departure</th>
            <th class="tripDetailTableTHead text-center" colspan="2">Arrival</th>
            <th class="tripDetailTableTHead text-center" colspan="2">Speedometer Reading</th>
            <th class="tripDetailTableTHead text-center" rowspan="2">Total KM Travelled</th>
            <th class="tripDetailTableTHead text-center" rowspan="2">Gasoline Consumed</th>
            </thead>
            <tbody class="tripDetailTableBody">
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1">Time</td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%">Place</td>
                    <td class="tripDetailTableBody text-center" colspan="1">Time</td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%">Place</td>
                    <td class="tripDetailTableBody text-center" colspan="1">Departure</td>
                    <td class="tripDetailTableBody text-center" colspan="1">Arrival</td>
                </tr>
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1" style="padding:1em"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%;"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                </tr>
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1" style="padding:1em"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%;"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                </tr>
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1" style="padding:1em"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%;"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                </tr>
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1" style="padding:1em"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%;"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                </tr>
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1" style="padding:1em"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%;"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                </tr>
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1" style="padding:1em"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%;"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                </tr>
                <tr>
                    <td class="tripDetailTableBody text-center" colspan="1" style="padding:1em"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%;"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1" style="width: 20%"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                    <td class="tripDetailTableBody text-center" colspan="1"></td>
                </tr>


            </tbody>
    </table>
    <div class="text-center">
        <small class="text-center margin-0"><b>MOTOR OIL, GEAR OIL, BRAKE FLUID</b></small>
    </div>
    <table style="width:100%">
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    GASOLINE USED
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:30%;" class="text-85em font-bold">
                <small>
                    BALANCE IN TANK BEFORE TRIP
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%" class="text-85em font-bold">
                <small>
                    ISSUED FROM STOCK
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%" class="text-85em font-bold">
                <small>
                    PURCHASED OUTSITE
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%" class="text-85em font-bold">
                <small>
                    GASOLINE USED
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td class="text-center">
                <div class="border-b"></div>
                <small><i>Driver</i></small>
            </td>
        </tr>
        <tr>
            <td style="width:28%" class="text-85em font-bold">
                <small>
                    BALANCE IN TANK AFTER TRIP
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
    </table>

    <small class="my-1">
        I/WE HEREBY CERTIFY THAT THE VEHICLE WAS ON OFFICIAL BUSINESS STATED HEREIN:
    </small>

    <div class="mt-2 text-center">

        <div class="border " style=""></div>
        <small>
            <b class="">PASSENGER(S) SIGNATURES(S)</b>
        </small>
    </div>
    <div class="mt-2 text-center">

        <div class="border " style=""></div>

        <small class="">Republic of the Philippines</small>
        <br>
        <b>
            <i>Department of Environemnt and Natural Resources</i>
            <br>
            <small>Environmental Management Bureau</small>
        </b>
        <br>
        <small>
            Regional Office No.1
        </small>
        <br>
        <small>
            Government Center, Sevilla, San Fernando City, La Union
        </small>
        <br>
    </div>
    <h5 class="text-center margin-t-0">ISSUANCE OF GASOLINE, OIL, BREAK FLUID, ETC</h5>

    <table style="width:100%">
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    DATE
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    NAME OF DRIVER / OPERATOR
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    TYPE OF VEHICLE / EQUIPMENT
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    GAS REQUESTED
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    EXTRA
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    REGULAR
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    DIESEL
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td class="text-center">
                <b>
                    BY AUTHORITY OF THE RD:
                </b>
            </td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    MOTOR OIL
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    GEAR OIL
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    GREASE
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td class="text-center">
                <div class="border-b"></div>
                <small>
                    <i>
                        Chief, FAD
                    </i>
                </small>
            </td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    BRAKE FLUID
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="width:28%; " class="text-85em font-bold">
                <small>
                    OTHERS (SPECIFY)
                </small>
            </td>
            <td>
                :
                <div class="border-b"></div>
            </td>
            <td></td>
        </tr>
    </table>


</body>

</html>

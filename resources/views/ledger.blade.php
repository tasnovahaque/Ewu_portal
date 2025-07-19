@extends('app')
<style>
    .container{
        margin: 20px;     
    }
    .nagivation{
        background-color:  #F9FBFC;
        margin-bottom: 10px;
        height: 45px;
        display: flex;
        align-items: center; /* Vertically centers items */
        border-radius: 5px;
        padding: 10px;
        border-bottom: 1px solid rgb(227, 227, 227);
    }
    .nagivation p span{
        font-weight: bold;
    }
    table{
        width: 1240px;
    }
    table, td, th{
        border-collapse: collapse;
        border: 1px solid rgb(226, 226, 226);
    }
    .routine{
        display: flex;
        justify-content: center;
    }
    tr{
        height: 40px;
        color: #868888;
    }
    tr:nth-child(even) {
        background-color: #FFFFFF; /* Light gray */
    }

    tr:nth-child(odd) {
        background-color: #F8F8F8; /* White */
    }
    .dropdown{
        width: 400px;
        height: 40px;
        background-color: white;
        border: 0px;
        border-bottom: 1px solid rgb(226, 226, 226);
        color: #868888;
        font-size: 15px;
    }
    .show{
        width: 250px;
        height: 40px;
        background-color: #204D74;
        direction: none;
        border: 0px;
        margin-left: 10px;
        border-radius: 5px;
        font-size: 16px;
        color: white;
    }
    .select{
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .balance{
        font-size: 24px;
        color: #8A2BE2;
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Schedule </p>
        </div>
        <div class="select">
            <span class="balance">Closing Balance : 0.00 </span>
            <button class="show"> <i class="fa fa-download"></i> Down Manual Deposit Slip</button>
        </div>
        <div class="routine">
            <table>
                <tr>
                    <th width="">Sl No.</th>
                    <th width="">Date</th>
                    <th width="">Semester</th>
                    <th width="">Voucher Type</th>
                    <th width="">Debit</th>
                    <th width="">Credit</th>
                </tr>
                <tr>
                    <th width="">Sl No.</th>
                    <th width="">Date</th>
                    <th width="">Semester</th>
                    <th width="">Voucher Type</th>
                    <th width="">Debit</th>
                    <th width="">Credit</th>
                </tr>
            </table>
        </div>
    </div>
@endsection

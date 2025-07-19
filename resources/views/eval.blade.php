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
        width: 150px;
        height: 40px;
        background-color: #22A7F2;
        direction: none;
        border: 0px;
        margin-left: 10px;
        border-radius: 50px;
        font-size: 18px;
        color: white;
    }
    .select{
        margin-top: 20px;
        margin-bottom: 20px;
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Faculty Evaluation </p>
        </div>
        <div class="select">
            <select name="course" class="dropdown">
                <option selected>Select Semister</option>
                <option value="Fall 21">Fall 21</option>
                <option value="Fall 22">Fall 22</option>
            </select>
            <button class="show">Evaluate</button>
        </div>
        <div class="routine">
            <table>
                <tr>
                    <th width="">Course</th>
                    <th width="">Facylty Evaluation Status</th>
                    <th width="">From Date</th>
                    <th width="">To Date</th>
                    <th width="">Evaluate</th>
                </tr>
                <tr>
                    <th width="">Course</th>
                    <th width="">Facylty Evaluation Status</th>
                    <th width="">From Date</th>
                    <th width="">To Date</th>
                    <th width="">Evaluate</th>
                </tr>
            </table>
        </div>
    </div>
@endsection

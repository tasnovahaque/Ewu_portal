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
        background-color: #337AB7;
        direction: none;
        border: 0px;
        margin-left: 10px;
        border-radius: 5px;
        font-size: 18px;
        color: white;
    }
    .select{
        margin-top: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Offered Courses </p>
        </div>
        
        <form class="select">
            <div class="singleselect">
                <select name="department" class="dropdown">
                    <option selected>Select Department</option>
                    <option value="Fall 21">Fall 21</option>
                    <option value="Fall 22">Fall 22</option>
                </select>
            </div>
            <div class="singleselest">
                <select name="semester" class="dropdown">
                    <option selected>Select Semister</option>
                    <option value="Fall 21">Fall 21</option>
                    <option value="Fall 22">Fall 22</option>
                </select>
            </div>
            <button type="submit" class="show"> <i class="fa fa-eye"></i> Show Offered Courses</button>
        </form>
        <div class="routine">
            <table>
                <tr>
                    <th width="">Course</th>
                    <th width="">Section</th>
                    <th width="">Timing</th>
                    <th width="">Room No</th>
                    <th width="">Dedicated Department</th>
                    <th width="">Capacity</th>
                </tr>
                <tr>
                    <th width="">Course</th>
                    <th width="">Section</th>
                    <th width="">Timing</th>
                    <th width="">Room No</th>
                    <th width="">Dedicated Department</th>
                    <th width="">Capacity</th>
                </tr>
            </table>
        </div>
    </div>
@endsection

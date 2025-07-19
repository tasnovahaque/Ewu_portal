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
    .body{
        border: 1px solid rgb(194, 192, 192);
        padding: 20px;
    }
    table{
        width: 100%;
    }
    tr{
        height: 50px;
    }
    .info{
        width: 100%;
        /* background-color: red; */
        display: flex;
        justify-content: space-between;
    }
    .studentinfo{
        width: 49%;
        border: 1px solid rgb(194, 192, 192);
        padding: 10px;
    }
    .summary{
        width: 49%;
        border: 1px solid rgb(194, 192, 192);
        padding: 10px;
    }
    th{
        text-align: left;
    }
    h2, h4{
        width: 100%;
        text-align: center;
        margin-bottom: 5px;
    }
    tr:nth-child(even) {
        background-color: #FFFFFF; /* Light gray */
    }

    tr:nth-child(odd) {
        background-color: #F8F8F8; /* White */
    }
    table, td, th{
        border-collapse: collapse;
        border: 1px solid rgb(226, 226, 226);
    }
    .category{
        padding-top: 20px;
    }
    .tablehead{
        background-color: #5F9EA0;
    }


</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Degree Review </p>
            {{-- {{auth()->id()}} --}}
        </div>
        <h4>Degree Analysis</h4>
        <div class="body">
            <h4>B.Sc. in Computer Science and Engineering</h4>
            <div class="info">
                <div class="studentinfo">
                    <h4>Student Information</h4>
                    <table>
                        <tr>
                            <td>Student Id</td>
                            <td> 2021-3-60-242</td>
                        </tr>
                        <tr>
                            <td> Student Name</td>
                            <td>Akash Ahmed </td>
                        </tr>
                        <tr>
                            <td>CGPA</td>
                            <td>2021-3-60-242</td>
                        </tr>
                        <tr>
                            <td>Cr Atn</td>
                            <td> 2021-3-60-242</td>
                        </tr>
                        <tr>
                            <td> Cr Earn</td>
                            <td> 2021-3-60-242</td>
                        </tr>
                        <tr>
                            <td> Min Credit Required</td>
                            <td>2021-3-60-242</td>
                        </tr> 
                        <tr>
                            <td>Remaining Credit </td>
                            <td>2021-3-60-242</td>
                        </tr> 
                    </table>
                </div>
                <div class="summary">
                    <h4>Credits Completion Summary</h4>
                    <table>
                        <tr>
                            <td>Basic Science Courses</td>
                            <td> 11 (Out of 11)</td>
                        </tr>
                        <tr>
                            <td> Mathematics and Statistics Courses</td>
                            <td>15 (Out of 15)</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="category">
                <div class="tablehead">
                    <h2> Compulsory Language and General Education Courses </h2> 
                </div>
                <table>
                    <tr>
                        <td>Basic Science Courses</td>
                        <td> 11 (Out of 11)</td>
                    </tr>
                    <tr>
                        <td> Mathematics and Statistics Courses</td>
                        <td>15 (Out of 15)</td>
                    </tr>

                </table>
            </div>

            <div class="category">
                <div class="tablehead">
                    <h2> Compulsory Language and General Education Courses </h2> 
                </div>
                <table>
                    <tr>
                        <td>Basic Science Courses</td>
                        <td> 11 (Out of 11)</td>
                    </tr>
                    <tr>
                        <td> Mathematics and Statistics Courses</td>
                        <td>15 (Out of 15)</td>
                    </tr>

                </table>
            </div>
            
        </div>
    </div>
@endsection

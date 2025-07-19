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
        width: 1000px;
    }
    tr{
        height: 40px;
        color: #868888;
        height: 50px;
    }
    .dropdown{
        width: 400px;
        height: 40px;
        background-color: white;
        border: 0px;
        border: 1px solid rgb(179, 176, 176);
        color: #868888;
        font-size: 15px;
        border-radius: 5px;
    }
    .show{
        width: 100px;
        height: 30px;
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
    .comment{
        height: 250px;
        width: 500px;
    }
    .attachment{
        border: 1px solid rgb(136, 135, 135);
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Drop </p>
        </div>
        <div class="body">
            <form action="">
                <table>
                    <tr>
                        <td width="20%">
                            <label for="">
                                Semester:
                            </label>
                        </td>
                        <td>
                            <select name="course" class="dropdown">
                                <option selected>Select Semister</option>
                                <option value="Fall 21">Fall 21</option>
                                <option value="Fall 22">Fall 22</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">
                                Comments:
                            </label>
                        </td>
                        <td>
                            <textarea class="comment" type="text"> </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">
                                Attachment:
                            </label>
                        </td>
                        <td>
                            <input class="attachment" type="file">
                            <button class="show">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection

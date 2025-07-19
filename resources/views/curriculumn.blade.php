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
        display: flex;
        justify-content: center;
    }
    .lleft{
        background-color: #398439;
        border: 0px;
        height: 40px;
        width: 250px;
        font-size: 16px;
        border-radius: 5px;
        color: white;
        margin-top: 30px;
    }
    .rright{
        background-color: #0000FF;
        border: 0px;
        height: 40px;
        width: 150px;
        font-size: 16px;
        border-radius: 5px;
        color: white;
        margin-top: 30px;
        margin-left: 5px;
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Curriculumn </p>
        </div>
        <div class="body">
            <button class="lleft">
                    Show My Course Curriculumn
            </button>

            <button class="rright">
                Show Blue Book
            </button>
        </div>
    </div>
@endsection

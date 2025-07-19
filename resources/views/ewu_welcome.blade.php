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
    .time{
        background-color:  #D9EDF7;
        margin-bottom: 15px;
        height: 45px;
        display: flex;
        align-items: center; /* Vertically centers items */
        border-radius: 5px;
        padding: 10px;
    }
    .time p{
        color : #507591;
    }
    .time p span{
        font-weight: bold;
    }
    .nagivation p span{
        font-weight: bold;
    }
    .body{
        display: flex;
        align-items: center; /* Vertically centers items */
        justify-content: center;
        /* background-color: #C0392B; */
        border-radius: 5px;
    }
    .btns{
        height: 30px;
        width: 150px;
        background-color: #23ABF2;
        margin: 5px;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .btns p{
        color: white;
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Dashboard </p>
            {{-- {{auth()->id()}} --}}
        </div>
        <div class="time">
            <p> <span>Welcome</span> to East West University Student Portal!</p>
            {{-- {{auth()->id()}} --}}
        </div>
    </div>
@endsection

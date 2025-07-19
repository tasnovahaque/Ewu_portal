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
    .blue{
        width: 100%;
        margin: 10px;
    }
    .blue p{
        color: blue;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
    }
    .red{
        width: 100%;
        margin: 10px;
    }
    .red p{
        color: red;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
    }
    .buttondiv{
        margin: 10px;
    }
    .notice{
        height: 40px;
        width: 200px;
        background-color: #EC971F;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Convocation Application </p>
            {{-- {{auth()->id()}} --}}
        </div>
        <div class="body">
            <div class="blue">
                <p> If you want to change your Name,Father's Name and Mother's Name. Please contact the Registrar’s Office with the relevant documents. You may call (09666775577 ext. 155, 263, 380) or come physically to the Registrar’s office (room # 409/410). </p>
            </div>
            <div class="red">
                <p> As your required credit for the degree is not completed yet, you can not apply for the convocation. Thanks. </p>
            </div>
        </div>
        <div class="buttondiv">
            <button class="notice" > <i class="fa fa-bell"></i> Notice & User Manual</button>
        </div>
    </div>
@endsection

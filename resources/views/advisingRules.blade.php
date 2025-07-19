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
        width: 350px;
        margin-left: 100px;
    }
    td{
        color: #868888;
        font-weight: bold;
    }
    tr{
        height: 40px;
    }
    .lleft {
        width: 50%;
        /* background-color: aqua; */
    }
    .rright{
        width: 50%;
        /* background-color: aqua; */
    }
    .info{
        display:flex;
        flex-wrap: wrap;
    }
    .box{
        border: 1px solid rgb(227, 227, 227);
        border-radius: 5px;
    }
    .header{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 50px;
        background-color: #F5F5F5;
        border-radius: 5px 5px 0px 0px;
    }
    .header p{
        font-size: 22px;
        font-weight: bold;
    }

</style>
@section('content')
    <div class="container">
        <div class="nagivation">
            <p> <span> Home </span> / Advising Rules </p>
            {{-- {{auth()->id()}} --}}
        </div>
        <div class="box">
            <div class="header">
                <p>
                    Advising Rules
                </p>
            </div>
            <div class="info">
                <div class="lleft">
                    <table>
                        <tr>
                            <td> Program Type   </td>
                            <td> : Undergraduate  </td>
                        </tr>
                        <tr>
                            <td> Completed Credit   </td>
                            <td> :  </td>
                        </tr>
                        <tr>
                            <td> Minimum CGPA Required  </td>
                            <td> : 2.16 </td>
                        </tr>
                        <tr>
                            <td> Student ID  </td>
                            <td> :2021-3-60-242  </td>
                        </tr>
                        <tr>
                            <td> Max Credit  </td>
                            <td> : 21  </td>
                        </tr>
                        <tr>
                            <td> Max Course  </td>
                            <td> : 7  </td>
                        </tr>
                        <tr>
                            <td> Max Course Drop  </td>
                            <td> :   </td>
                        </tr>
                        <tr>
                            <td> Max Financial AID Credit  </td>
                            <td> :  </td>
                        </tr>
                    </table>
                </div>
                <div class="rright">
                    <table>
                        <tr>
                            <td> Program Type   </td>
                            <td> : Undergraduate  </td>
                        </tr>
                        <tr>
                            <td> Completed Credit   </td>
                            <td> :  </td>
                        </tr>
                        <tr>
                            <td> Minimum CGPA Required  </td>
                            <td> : 2.16 </td>
                        </tr>
                        <tr>
                            <td> Student ID  </td>
                            <td> :2021-3-60-242  </td>
                        </tr>
                        <tr>
                            <td> Max Credit  </td>
                            <td> : 21  </td>
                        </tr>
                        <tr>
                            <td> Max Course  </td>
                            <td> : 7  </td>
                        </tr>
                        <tr>
                            <td> Max Course Drop  </td>
                            <td> :   </td>
                        </tr>
                        <tr>
                            <td> Max Financial AID Credit  </td>
                            <td> :  </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
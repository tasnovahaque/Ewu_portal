<style>
    .sidebar {
        height: 100vh;
        width: 250px;
        background-color: #315177;
        position: fixed;
    }
    .list{
        list-style: none;
        margin-top: 40px;
        display: flex;
        flex-direction: column;

    }
    .menu{
        color: white;
        height: 35px;
        position: relative;
        right: 30px;
        margin-bottom: 10px;
        margin-left: -10px;
        display: flex;
        flex-direction: row;
        width: 250px;
        /* background-color: red; */
        align-items: center;
    }
    .menu a{
        text-decoration: none;
        color: white;
        font-weight: bold;
    }
    .toggle{
        color: antiquewhite;
        margin-left: 10px;
        margin-top: 30px;
    }
    .text{
        padding-left: 10px;
        width: 1200px;
        margin-left: 10px;
        /* background-color:blue; */
    }
    .float_right{
        width: 100%;
        display: flex;
        flex-direction: row-reverse;
        padding-right: 8px;
    }
    .left_icon{
        margin-left: 8px;
    }
    .toggle{
        background-color: transparent;
        border: 0px;
        margin-left: 3px;
    }
    .collaps{
        height: 100vh;
        width: 100px;
        background-color: #315177;
    }
</style>

<div class="sidebar" id="myId">
    <button class="toggle"> <i class="fa fa-bars fa-2xl"></i> </button>
    
    <ul class="list">
        {{-- <li class="menu"> 
            <i class="fa-solid fa-syringe fa-lg left_icon"></i>
            <a class="text" href="{{route('vaccination')}}"> VACCINATION STATUS </a>
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div>
        </li> --}}
        <li class="menu"> 
            <i class="fas fa-registered fa-lg left_icon"> </i> 
            <a class="text" href="{{route('advising')}}"> ADVISING </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div>
        </li>
        <li class="menu"> 
            <i class="fas fa-school fa-lg left_icon"> </i> 
            <a class="text" href="{{route('scedule')}}"> MY CLASS SCHEDULE </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div>
        </li>
        <li class="menu"> 
            <i class="fas fa-book fa-lg left_icon"> </i> 
            <a class="text" href="{{route('advisingRules')}}"> ADVISING RULES </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div> 
        </li>
        <li class="menu"> 
            <i class="fa fa-sort-numeric-asc fa-lg left_icon"> </i>  
            <a class="text" href="{{route('grade')}}"> GRADE REPORT </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div>
        </li>
        <li class="menu"> 
            <i class="fas fa-trash fa-lg left_icon"> </i> 
            <a class="text" href="{{route('drop')}}"> SEMESTER DROP </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div> 
        </li>
        <li class="menu"> 
            <i class="fas fa-book-reader fa-lg left_icon"> </i> 
            <a class="text" href="{{route('curriculumn')}}"> CURRICULUMN </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div> 
        </li>
        <li class="menu"> 
            <i class="fas fa-money-check-alt fa-lg left_icon"> </i> 
            <a class="text" href="{{route('ledger')}}"> MY ACCOUNT LEDGER </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div> 
        </li>
        <li class="menu"> 
            <i class="fas fa-book-open fa-lg left_icon"> </i> 
            <a class="text" href="{{route('courses')}}"> OFFERED COURSES </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div>
        </li>
        <li class="menu"> 
            <i class="fas fa-book fa-lg left_icon"> </i> 
            <a class="text" href="{{route('degree')}}"> DEGREE REVIEW </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div>
        </li>
        <li class="menu"> 
            <i class="fas fa-fill fa-lg left_icon"> </i> 
            <a class="text" href="{{route('eval')}}"> FACULTY EVALUATION </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div> 
        </li>
        <li class="menu"> 
            <i class="fas fa-user-graduate fa-lg left_icon"> </i> 
            <a class="text" href="{{route('convo')}}"> CONVOCATION APPLICATION </a> 
            <div class="float_right">
                <i class="fa fa-chevron-right"> </i> 
            </div>
        </li>
    </ul>
</div>
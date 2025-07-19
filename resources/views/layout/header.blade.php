<style>
    .head{
        height: 70px;
        background: linear-gradient(90deg, rgba(247,247,247,1) 0%, rgba(28,67,112,1) 100%);
        display: flex;
        flex-wrap: 'wrap';
    }
    .logo{
        height: 80%;
        padding: 3px;
        margin-left: 15px;
    }
    .left{
        width: 100px;
        width: 80%;
        /* background-color: blue; */
    }
    .right{
        height: 100%;
        width: 20%;
        /* background-color: red; */
    }
    .logout{
        text-decoration: none;
        color: aliceblue;
        font-size: 20px;
    }
</style>
<div class="head">
    <div class="left">
        <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="logo">
    </div>
    <div class="right">
        <div>
            <a class="logout" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
            >
                {{ __('Logout') }}
            </a>
        </div>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
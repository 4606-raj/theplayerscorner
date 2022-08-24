<style>
    h1{
        font-family: "Open Sans", sans-serif;
        color: #2d2525;
        font-size: 1.8rem;
    }
    .row-bl{
        color: #2d2525;
        font-size: 1rem;
        font-family: "Open Sans", sans-serif;
        border: 1px solid #d4dbe1;
        /* display: flex; */
        /* align-items: center; */
        border-radius: 4px;
        margin: 8px 0;
        overflow: hidden;
    }
    .row-bl p:nth-child(1){
        background: #f7fbff;
        font-size: .9rem;
        font-weight: 600;
        padding: 10px 15px;
        border-bottom: 1px solid #d4dbe1;
    }
    p{
        /* border-right: 1px solid #d4dbe1; */
        margin-top: 0;
        margin-bottom: 0;
    }
    .row-bl p:nth-child(2){
        padding: 15px;
        line-height: 25px;
    }
    .main-bl{
        padding: 15px;
    }
    @media screen and (max-width: 575.98px){
        .top-2-row{
            flex-direction: column;
        }
        .row-bl{
            width: 100% !important;
        }
    }
</style>

<div class="main-bl">
    <h1>Email from Southall Website</h1>

    <div class="top-2-row" style="display: flex; justify-content: space-between;">
        <div class="row-bl" style="width: 49%">
            <p>Name</p>
            <p>{{ $data['name'] }}</p>
        </div>
        <div class="row-bl" style="width: 49%;">
            <p>Email</p>
            <p>{{ $data['email'] }}</p>
        </div>
    </div>
    
    <div class="top-2-row" style="display: flex; justify-content: space-between;">
        <div class="row-bl" style="width: 49%;">
            <p>Phone No.</p>
            <p>{{ $data['phone'] }}</p>
        </div>
    
        <div class="row-bl" style="width: 49%;">
            <p>Regarding</p>
            <p>{{ $data['type'] }}</p>
        </div>
    </div>

    <div class="row-bl">
        <p>Message</p>
        <p>{{ $data['message'] }}</p>
    </div>

</div>
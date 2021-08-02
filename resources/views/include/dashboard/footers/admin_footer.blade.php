<footer class="footer">
    <div>
        <a href="{{env('APP_URL')}}">{{env('APP_NAME')}} </a> © {{date("Y")}}.
    </div>
    <div class="ms-auto">{{__('Powered by')}}&nbsp;<a href="{{env('APP_DEV_URL')}}">{{env('APP_DEV')}}</a></div>
</footer>

<footer class="footer">
    <div>
        <a class="text-xs no-underline" href="{{env('APP_URL')}}">{{env('APP_NAME')}} </a> © {{date("Y")}}.
    </div>
    <div class="ms-auto text-xs">{{__('Powered by')}}&nbsp;<a class="no-underline" href="{{env('APP_DEV_URL')}}">{{env('APP_DEV')}}</a></div>
</footer>

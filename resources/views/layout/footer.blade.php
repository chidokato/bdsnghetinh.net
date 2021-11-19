<footer>
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="footer-col" style='text-align: center;'>
                        
                        <img style='margin: 30px 0px;' src='public/upload/files/logo201895945.png'>
                        
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <div class="footer-contact">
                            <div class="foo">
                                <H3>{{$head_setting->name}}</H3>
                                
                            </div>
                            <div class="foo">
                                <strong>Địa chỉ: </strong>{{$head_setting->address}}
                            </div>
                            <div class="foo">
                                <strong>Điện thoại: </strong>{{$head_setting->hotline}}
                            </div>
                            @if($head_setting->hotline1)
                            <div class="foo">
                                <strong>Điện thoại: </strong><a href="tel:0963647129">{!!$head_setting->hotline1!!}</a>
                            </div>
                            @endif
                            <div class="foo">
                                <strong>Email: </strong><a href="mailto:{{$head_setting->email}}"><span>{{$head_setting->email}}</span></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <!--h3>Like us</h3-->
                        <div class="footer-content">
                            <div class="fb-page" data-href="{{$head_setting->facebook}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$head_setting->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$head_setting->facebook}}">Facebook</a></blockquote></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</footer>


@php
    $params=\Route::current()->parameters();
    $routename=\Route::currentRouteName();
    extract($params);
    /*
    if(isset($container)){
        if(is_object($container)){$container_type=$container->type;}else{$container_type=$container;}
        $lang='pub_theme::'.$container_type;
        if(isset($container1)){
            if(is_object($container1)){$container1_type=$container1->type;}else{$container1_type=$container1;}
            $lang='pub_theme::'.$container_type.'.'.$container1_type;
        }
    }else{
        //dd($params);
	   $tmp= Route::currentRouteAction();
	   $tmp=explode('\\',$tmp);
	   $tmp=strtolower($tmp[1]);
	   $lang=$tmp.'::fields';
    }
    */
    if(isset($container)){
        if(is_object($container)){$container_type=$container->type;}else{$container_type=$container;}
        $routename=str_replace('container0.',''.$container->type.'.',$routename);
    }
    if(isset($container1)){
        if(is_object($container1)){$container1_type=$container1->type;}else{$container1_type=$container1;}
        $routename=str_replace('.container1.','.'.$container1->type.'.',$routename);
    }
    $lang='pub_theme::'.$routename;

@endphp

{{-- PUB_THEME COMPONENTS --}}
{{ Form::component('bsText', 'extend::includes.components.form.text',
    ['name', 'value' => null,'attributes' => [],'lang'=>$lang]) }}    

{{ Form::component('bsPassword', 'extend::includes.components.form.password',
    ['name', 'value' => null,'attributes' => [],'lang'=>$lang]) }}    


{{ Form::component('bsTextarea', 'extend::includes.components.form.textarea',
    ['name', 'value' => null,'attributes' => [],'lang'=>$lang]) }}    

{{ Form::component('bsAddress', 'extend::includes.components.form.address',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsGeoComplete', 'extend::includes.components.form.geocomplete',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsGeoCompleteFull', 'extend::includes.components.form.geocompletefull',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsTypeahead', 'extend::includes.components.form.typeahead',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsUploadImg', 'extend::includes.components.form.unisharp.uploadimg',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsCheckbox', 'extend::includes.components.form.checkbox',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{-- BTN --}}
{{--  
{{ Form::component('bsBtnUpDown', 'extend::includes.components.form.btn.updown',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}
--}}

{{-- ADM_THEME COMPONENTS --}}

{{ Form::component('bsNumber', 'backend::includes.components.form.number',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}	

{{ Form::component('bsSwitch', 'backend::includes.components.form.switch',
	['name', 'value' => null,'checked'=>false, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsSubmit', 'backend::includes.components.form.submit',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}
{{ Form::component('bs3Submit', 'backend::includes.components.form.submit3',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}	


@php

Form::macro('bsOpen', function ($model, $from, $to='', $params = null) {
    if ($params == null) {
        $params=\Route::current()->parameters();
    }
    $req_params=\Request::all();

    //if(is_array($req_params)) $params=array_merge($req_params,$params);

    //dd($params);

    if ($to=='') {
        $to=$from;
        switch ($to) {
            case 'update': $from='edit'; break;
            case 'store': $from='create'; break;
        }
    }
    
    $routename=Request::route()->getName();
    $routename=str_replace('.'.$from, '.'.$to, $routename);

    $route=route($routename, $params);

    $parz=array_merge([$routename], array_values($params));
    switch ($to) {
        case 'store':
            $method='POST';
        break;
        case 'update':
            $method='PUT'; //PUT/PATCH
        break;
        case 'destroy':
            $method='DELETE';
        break;
        default:
            $method='POST';
        break;
    }
    if (isset($params['method'])) {
        $method=$params['method'];
    }



    return Form::model($model, [
    'route' => $parz
    //'action' => $route
    ])
    //.csrf_field()
    .method_field($method);
});

Form::macro('bsBtnCrud', function ($extra) {
    $btns='';
    $btns.=Form::bsBtnEdit($extra);
    $btns.=Form::bsBtnDelete($extra);
    return $btns;
});
Form::macro('bsBtnEdit', function ($extra, $from='index', $to='edit') {
    $params=\Route::current()->parameters();
    $params=array_merge($params, $extra);
    $routename=Request::route()->getName();
    //echo '<h3>'.$routename.'</h3>';
    $route=route(str_replace('.'.$from, '.'.$to, $routename), $params);
    $class='btn btn-small btn-info';
    if (isset($extra['class'])) {
        $class.=' '.$extra['class'];
    }
    return '<a class="'.$class.'" href="'.$route.'" data-toggle="tooltip" title="Modifica"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a>';
});


Form::macro('bsBtnClone', function ($extra, $from='index', $to='edit' /*$to='replicate' */) {
    $params=\Route::current()->parameters();
    $params=array_merge($params, $extra);
    $params['replicate']=1;
    $route=route(str_replace('.'.$from, '.'.$to, Request::route()->getName()), $params);
    return '<a class="btn btn-small btn-warning" href="'.$route.'"  data-toggle="tooltip" title="Duplica"><i class="fa fa-clipboard fa-fw" aria-hidden="true"></i></a>';
});

Form::macro('bsBtnDelete', function ($extra) {
    //$theme=\App\Services\ThemeService::class;
    $routename=Request::route()->getName();
    $routename=str_replace('.index', '.destroy',$routename );
    extract($extra);
    //-----------
    $id=$row->getKey();
    //$id=array_values($extra)[0];
    $params=\Route::current()->parameters();
    $params=array_merge($params, $extra);
    $params['routename']='';unset($params['routename']);
    $route=route($routename, $params);
    
    //Theme::add('/theme/bc/jquery/dist/jquery.min.js');
    Theme::add('theme/bc/sweetalert2/dist/sweetalert2.min.js'); 
    Theme::add('theme/bc/sweetalert2/dist/sweetalert2.min.css'); 
    Theme::add('extend::js/btnDeleteX2.js');
    
    /*-- sweet alert 1 --
    Theme::add('/theme/bc/sweetalert/dist/sweetalert.css');
    Theme::add('/theme/bc/sweetalert/dist/sweetalert.min.js');
    Theme::add('/theme/js/btnDeleteX.js');
    */
    $class='btn btn-small btn-danger';
    if (isset($extra['class'])) {
        $class.=' '.$extra['class'];
    }
    return '<a class="'.$class.'" href="#" data-token="'. csrf_token() .'" data-id="'.$id.'" data-href="'.$row->destroy_url.'?id='.$id.'" data-toggle="tooltip" title="Cancella">
        <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
    </a>';
});

Form::macro('bsBtnUnlink', function ($extra=[]) {
    $theme=\App\Services\ThemeService::class;
    extract($extra);
    //-----------
    //$id=array_values($extra)[0];
    $id=$row->id;
    $params=\Route::current()->parameters();
    $params=array_merge($params, $extra);
    $route=route(str_replace('.index', '.detach', Request::route()->getName()), $params);
    Theme::addStyle('/theme/bc/sweetalert/dist/sweetalert.css');
    Theme::addScript('/theme/bc/jquery/dist/jquery.min.js');
    Theme::addScript('/theme/bc/sweetalert/dist/sweetalert.min.js');
    Theme::addScript('/theme/pub/js/btnDetachX.js');
    $class='btn btn-small btn-danger';
    if (isset($extra['class'])) {
        $class.=' '.$extra['class'];
    }
    return '<a class="'.$class.'" href="#" data-token="'. csrf_token() .'" data-id="'.$id.'" data-href="'.$route.'" data-toggle="tooltip" title="Scollega">
            <i class="fa fa-unlink fa-fw" aria-hidden="true"></i>
            </a>';
});

Form::macro('bsBtnUpDown',function ($extra){
    extract($extra);
    //$params=\Route::current()->parameters();
    //$params=array_merge($params, $extra);
    //$routename=Request::route()->getName();
    return '<a href="'.$row->moveup_url.'" class="btn btn-xs btn-warning">
            <i class="fa fa-arrow-up"></i>
    </a>
    <a href="'.$row->movedown_url.'" class="btn btn-xs btn-warning">
        <i class="fa fa-arrow-down"></i>
    </a>';
});



Form::macro('bsBtnCreate', function ($extra=[]) {
     //---default var ---
     $txt='Nuova ';
     $params=[];
     extract($extra);
     $routename=str_replace('.index', '.create', Request::route()->getName());

     $params=array_merge(\Route::current()->parameters(), $params);
     $route=route($routename, $params);
     $class='btn btn-small btn-info btn-xs';
     if (isset($extra['class'])) {
         $class.=' '.$extra['class'];
     }
     return '<a class="'.$class.'" href="'.$route.'" data-toggle="tooltip" title="Create"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>&nbsp;'.$txt.'</a>';
 });

@endphp
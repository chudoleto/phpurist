@extends('layouts.site.site_container')

@section('content')
	
	<div class="container">
		<div class="row">
			<main class="container">
    <div class="intro-background"></div>
    <div class="intro"> 
    </div>
    <div class="img-background"></div>
    <div class="content-container-1">
        <div class="info-block">
            <h3>текст <br> текст</h3>
            <span>- № 1 -</span>
            <p>текст - не текст текст текст, <br> там текст текст текст</p>
        </div>
        <div class="img-block"></div>
    </div>
    <div class="content-container-2">
        <div class="item-content2">
            <div class="icon-1"></div>
            <h2>Без установки</h2>
            <p>Работает через браузер <br> на любой платформе</p>
        </div>
        <div class="item-content2">
            <div class="icon-2"></div>
            <h2>Просто и легко</h2>
            <p>Так, как будто вы работаете <br> с обычным сайтом</p>
        </div>
        <div class="item-content2">
            <div class="icon-3"></div>
            <h2>Всегда под рукой</h2>
            <p>Быстрый доступ к нужным<br> Вам документам</p>
        </div>
    </div>
    <div class="content-container-3">
        <div class="img-block2"></div>
        <div class="info-block2">
            <h3>текст текст <br> текст текст</h3>
            <span>- № 2 -</span>
            <p>текст, текст текст текст текст! текст текст <br> текст текст</p>
        </div>
    </div>
    <div class="content-container-4">
        <div class="item-content4">
            <h3>Вставлю <br> текст</h3>
            <span>- № 3 -</span>
            <p>текст текст <br> текст текст текст</p>
        </div>
        <div class="item-content4">
            <h3>Вставлю <br> текст</h3>
            <span>- № 4 -</span>
            <p>текст в текст из текст-текст текст <br> текст текст!</p>
        </div>
        <div class="item-content4">
            <h3>Вставлю <br> текст</h3>
            <span>- № 5 -</span>
            <p>текст текст в текст текст и <br> текст текст</p>
        </div>
    </div>
    
    <div class="container-search-hostels">
        <div class="hotels-search">
            <h2>Заинтересовались?</h2>
            <p>Попробуйте наше приложение!</p>
            <button onClick="getElementById('win').removeAttribute('style');" class="button-search">Войти!</button>
            
        </div>
    

</main>
		</div>
	</div>
	
@endsection

@section('code')
	<script>
		var action = function(e) {
			var data = e.data
			var txt = $(this).data('text');
			alert(txt);
		};

		var x = 1;
		$('#push1').click(action);
		$('#push2').click(action);
	</script>
@endsection
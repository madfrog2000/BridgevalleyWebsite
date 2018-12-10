$(function(){
	var total = $('.news-container>.row').length;
	var itemsPerPage = 3;
	var currentPage = 1;
	var numberOfPages = Math.ceil(total/itemsPerPage);





	for(var i = 1; i<=numberOfPages ; i++){

		$('.news-paginator').append(' <li class="page-item"><a class="page-link" href="#">'+i+'</a></li>');

	}

	$('.news-paginator>li>a').on('click',function(e){


		e.preventDefault();

		console.log(currentPage);
		currentPage = parseInt($(this).text());
		showItems();
	});




	function showItems(){

		var startIndex = (currentPage-1)*itemsPerPage;
		var endIndex = startIndex+itemsPerPage; //not including last item

		$('.news-container>.row').hide();
		$('.news-container>.row').each(function(i,el){

			if((i>=startIndex)&&(i<endIndex)){
				$(el).show();
			}
		});

		//update menu

		$('.news-paginator>li>a').removeClass('active');
		$('.news-paginator>li:nth-child('+currentPage+')>a').addClass('active');

	}

	showItems();


	
});
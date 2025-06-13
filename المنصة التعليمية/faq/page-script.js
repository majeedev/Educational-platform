$('.the-question').click(function(){
    $(this).toggleClass('question-is-clicked');
    $(this).next().slideToggle(200);
});

$('.the-question').prepend('<span class="arrow-down">▼</span>');

for(var i=0; i<$('.questions-container').children().length; i++)
{
	$('.the-question').eq(i).prepend('<span class="question-number">'+(i+1)+' )</span>');
}
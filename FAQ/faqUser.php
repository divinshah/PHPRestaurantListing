<?php
include "../headerfooter/header.php";
?> 
<div class="jumbotron">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
    </div>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
 $(document).ready(function() {
 
    $('.faq_question').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
            $(this).closest('.faq').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }
 
    });
 
});
</script>
<style>

.faq_question {
    margin: 0px;
    padding: 0px 0px 5px 0px;
    display: inline-block;
    cursor: pointer;
    font-weight: bold;
	text-transform:capitalize;
	color:#1A5276;
}
 
.faq_answer_container {
    height: 0px;
    overflow: hidden;
    padding: 0px;
}
.faqques{
	font-family:Arial, Helvetica, sans-serif;
    font-size:15px;
	border-style: outset;
	width: 50%;
	height: 30px;
	margin-left:300px;
}
.faq_ans{
	font-family:Arial, Helvetica, sans-serif;
    font-size:15px;
	width: 50%;
	height: 30px;
	margin-left:300px;
	font-style: italic;
	color:#34495E;
}
</style>


<?php
require_once '../model/Database.php';
require_once 'faq.php';

$dbcon = Database::getDb();
$s = new faq();
$myfaq =  $s->getAllFaq(Database::getDb());



foreach($myfaq as $faq){
   echo "<div class = 'faq_container'>
   <div class = 'faq'>
   <div class = 'faqques'>
    <div class='faq_question'> <ul> Question: $faq->question </ul></div></div>
           <div class='faq_answer_container'>
             <div class='faq_ans'> <div class='faq_answer'> <ul> Answer: $faq->answers </ul></div></div>
           </div>        
    </div>
 </div>";
   
}
?>
<?php
include "../headerfooter/footer.php";
?>
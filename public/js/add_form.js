$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });
    for (var j = 3; j >= 1; j--) {
        $("#in"+j).on("input",function(e){
        var $supp = ".sp" + $(e.target).attr('id').slice(-1);
        $($supp).remove();            
        $($(this)).css("background-color", "#fff");
        //$("span").remove('.sp' + $i);
        });
    }

     $('a[data-toggle="tab"').click(function(e){
        var bool = 1;
        for (var i = 3; i >= 1; i--) {
        var name ;
        if ($("#in"+i).is("input")) {
            name = $("#in"+i).val();
        }else{
            //name = $("#in"+i).val();
            //name = $('select[value="FB"]').val();
            name = $( ".in"+ i +" option:selected" ).val();
        }
        if(name == ""){
            /* a modefie apres*/
            bool = 1;
            $(".sp"+ i).remove();
            if ($("#in"+i).is("input")) {
                $("#in"+i).after('<span class="text-danger sp'+ i +'">Ce champ est obligatoire</span>');
                //$("#in3").addClass('invalid');
                $("#in"+i).css("background-color", "#ffdddd");
                //$('#input1').after('<span class="error text-danger"> Please enter your first name</span>');
            }else{
                $(".in"+i).after('<span class="text-danger sp'+ i +'">Ce champ est obligatoire</span>');
                $(".in"+i).css("background-color", "#ffdddd");
            }
        }else{
            $(".sp"+ i).remove();
        }
        }
        if(bool==0){
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().addClass('disabled');
            return false;
        }else{
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            //$active.prevAll().addClass('disabled');
            //$active.addClass('disabled')
        }
    });

    $(".next-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);
    });

    $(".prev-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });

});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

/*$(document).ready(function(){

$('.next-step').click(function(){
    validateForm();   
});


function validateForm(){

    var nameReg = /^[A-Za-z]+$/;
    var numberReg =  /^[0-9]+$/;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    var names = $('#name').val();
    var company = $('#companyInput').val();
    var email = $('#emailInput').val();
    var telephone = $('#telInput').val();
    var message = $('#messageInput').val();

    var inputVal = new Array(names, company, email, telephone, message);

    var inputMessage = new Array("name", "company", "email address", "telephone number", "message");

     $('.error').hide();

        if(inputVal[0] == ""){
            $('#name').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
        } 
        else if(!nameReg.test(names)){
            $('#nameLabel').after('<span class="error"> Letters only</span>');
        }

        if(inputVal[1] == ""){
            $('#companyLabel').after('<span class="error"> Please enter your ' + inputMessage[1] + '</span>');
        }

        if(inputVal[2] == ""){
            $('#emailLabel').after('<span class="error"> Please enter your ' + inputMessage[2] + '</span>');
        } 
        else if(!emailReg.test(email)){
            $('#emailLabel').after('<span class="error"> Please enter a valid email address</span>');
        }

        if(inputVal[3] == ""){
            $('#telephoneLabel').after('<span class="error"> Please enter your ' + inputMessage[3] + '</span>');
        } 
        else if(!numberReg.test(telephone)){
            $('#telephoneLabel').after('<span class="error"> Numbers only</span>');
        }

        if(inputVal[4] == ""){
            $('#messageLabel').after('<span class="error"> Please enter your ' + inputMessage[4] + '</span>');
        }       
}   

});
//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});*/
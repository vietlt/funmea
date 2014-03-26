
    function ShowMessage() {
        this.msgError = function(msg) {
        	status = 'error';
            setTimeout(function() { // then show popup, deley in .5 second
                loadPopup(msg,status); // function show popup
            }, 500); // .5 second
            return false;
        }
        this.msgInfor = function(msg) {
        	status = 'infor';
            setTimeout(function() { // then show popup, deley in .5 second
                loadPopup(msg,status); // function show popup
            }, 500); // .5 second
            return false;
        }
        this.msgSuccess = function(msg) {
        	status = 'success';
            setTimeout(function() { // then show popup, deley in .5 second
                loadPopup(msg,status); // function show popup
            }, 500); // .5 second
            return false;
        }
        this.msgWarnning = function(msg) {
        	status = 'warning';
            setTimeout(function() { // then show popup, deley in .5 second
                loadPopup(msg,status); // function show popup
            }, 500); // .5 second
            return false;
        }

    }


	/* event for close the popup */
	$("div.close").hover(
						function() {
							$('span.ecs_tooltip').show();
						},
						function () {
	    					$('span.ecs_tooltip').hide();
	  					}
					);
	
	$(".close").click(function() {
//		disablePopup();  // function close pop up
        console.log(123);
        $(window).load(disablePopup);
	});
	
	$(this).keyup(function(event) {
		if (event.which == 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
		}  	
	});
	
	$("div#backgroundPopup").click(function() {
		disablePopup();  // function close pop up
	});
	
	$('a.livebox').click(function() {
		alert('Hello World!');
	return false;
	});

    var popupStatus = 0; // set value
    function loadPopup(msg, status) {
    	var str = '';
        if (status == 'error') str = '<button type="button" class="btn-red" onclick="disablePopup()">Thử lại</button>';
        if (status == 'success') str = '<button type="button" class="btn-success" onclick="disablePopup()">Đồng ý</button>';
        if (status == 'infor') str = '<button type="button" class="btn-infor"> onclick="disablePopup()"Save changes</button>';
        if (status == 'warning') str = '<button type="button" class="btn-warning" onclick="disablePopup()">Save changes</button>';

        if (popupStatus == 0) { // if value is 0, show popup
            $('body:first').append(
            	'<div id="toPopup" class="modal-dialog">' + 
            	'<div class="modal-content">' + '<div class="modal-header">' + 
            	'<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="disablePopup()">&times;</button>' + 
            	'<h4 class="modal-title '+status+'">Thông báo từ Funmea.com</h4>' + '</div>' + '<div class="modal-body">' + msg + '</div>' + 
            	'<div class="modal-footer">' + 
            	str + 
            	'</div>' + '</div>' + '</div>' + '<div id="backgroundPopup"></div>');
            $("#toPopup").toggle(500); // fadein popup div
            $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
            $("#backgroundPopup").fadeIn(0001);
            popupStatus = 1; // and set value to 1
        }
    }
    function disablePopup() {
		if(popupStatus == 1) { // if value is 1, close popup
			$("#toPopup").remove();  
			$("#backgroundPopup").remove();  
			popupStatus = 0;  // and set value to 0
		}
	}	
    
    var dialog = new ShowMessage();
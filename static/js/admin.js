$(document).on("ready", init);

var view;
var controller;
var model;

function init() {
    console.log("((Init))");

    model = new Model();
    controller = new Controller();
    view = new View();
}

function View() {
    console.log("((View))");
    $("#visible_video").on('click',function(){
    	if ($(this)[0].checked == true ){
    		$(this)[0].value = '1';
    		$("#visibleContainer").removeClass('labelHide');
    	}else{
    		$(this)[0].value = '0';
    		$("#visibleContainer").addClass('labelHide');
    	}
    });
    
    if ($("#visible_video")[0].checked == true ){
    	$(this)[0].value = '1';
    	$("#visibleContainer").removeClass('labelHide');
    }else{
    	$(this)[0].value = '0';
    	$("#visibleContainer").addClass('labelHide');
    }
    
    $("#visible_modal").on('click',function(){
    	if ($(this)[0].checked == true ){
    		$(this)[0].value = '1';
    	}else{
    		$(this)[0].value = '0';
    	}
    });
    
    $("#validateUrl").on('click', function(){
    	var url = $("#url").val();
    	controller.validate(url);
    });
    
    var containerSong = document.getElementById('container_song').children;
    for (var i = 0; i < containerSong.length; i++) {
		var containerVideo = $(containerSong)[i].children;
		var playVideo = $(containerVideo)[2];
		var deleteVideo = $(containerVideo)[3];
		var containerMultimedia = $(containerVideo)[4];
	
		$(playVideo).on("click",{
			id:  containerMultimedia,
		}, controller.showContainerMultimedia);
		
		$(deleteVideo).on("click",{
			id:  containerMultimedia,
		}, controller.deleteSong);
	}
	
	var containerVideoUpload = document.getElementById('container_video').children;
	 for (var x = 0; x < containerVideoUpload.length; x++) {
	 	
	 	var containerVideoChildren = $(containerVideoUpload[x])[0].children;
	 	var containerVideoUploadId = $(containerVideoUpload[x]);
	 	var containerVideoDelete = containerVideoChildren[3].children;
	 	console.log(containerVideoDelete[1].name);
	 	var video = containerVideoChildren[2];
	 	var containerVideoUploadIdChildrem = $(containerVideoDelete)[0].children;
	 	
	 	$(containerVideoDelete[1]).on("click",{
	 		id: containerVideoDelete[1].name,
	 	},controller.deleteVideo);
	 	
	 	$(containerVideoDelete[2]).on("click",{
	 		container:$(containerVideoUploadId)[0].children[3],
	 		video: video,
	 		p: containerVideoChildren[1]
	 	},controller.showContainerBottons);
	 	
	 	$(containerVideoChildren[1]).on("click", {
	 		container:$(containerVideoUploadId)[0].children[3],
	 		video: video,
	 		p: containerVideoChildren[1],
	 	},controller.showContainerBottons);
		
	}
	$("#fileToUploadVideo").on('change', function() {
		console.log('paso por aqui');
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#videoContainer");
        image_holder.empty();
        if (extn == "avi" || extn == "mpg" || extn == "mp4") {
            if (typeof(FileReader) != "undefined") {
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                          $("<video />", {
                              "src": e.target.result,
                              "name": 'video',
                              "id": 'video',
                              "class": "thumb-video",
                              "controls": true,
                              "value": 'video',
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
            } else {
            }
        }
      
    });
    
    $("#fileToUploadCd").on('change', function() {
		console.log('paso por aqui');
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#cdContainer");
        image_holder.empty();
        if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                          $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image"
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
            } else {
            }
        }
      
    });
    
     $("#fileToUploadImg").on('change', function() {
		console.log('paso por aqui');
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#imgContainer");
        image_holder.empty();
        if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                          $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image",
                            "style": "width:150px",
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
            } else {
            }
        }
      
    });
}

function Controller() {
    console.log("((Controller))");
    
    this.showContainerBottons = function(event){
		
    	if ($(event.data.container).hasClass('labelHide')){
    		$(event.data.container).removeClass('labelHide');	
    		$(event.data.video).addClass('labelHide');
    		$(event.data.p).addClass('labelHide');
    	}else{
    		$(event.data.container).addClass('labelHide');
    		$(event.data.video).removeClass('labelHide');
    		$(event.data.p).removeClass('labelHide');
    	}
    	
    };
    
    this.deleteVideo = function(event){
    	console.log(event.data.id);
    	var hr = new XMLHttpRequest();
    	var url = "/cheyproducciones/controller/deleteVideo.php";
	    var vars = "idVideoData="+event.data.id ;
	    hr.open("POST", url, true);
	    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    hr.onreadystatechange = function() {
		    if(hr.readyState == 4 && hr.status == 200) {
			    var return_data = hr.responseText;
				document.getElementById("statusVideo").innerHTML = return_data;
		    };
	    };
	   
	    hr.send(vars); // Actually execute the request
	    document.getElementById("statusVideo").innerHTML = "processing...";
    };
    
    this.validate = function(url){
    	var id;
        var htmlWidget;
        var error = false;
    	var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]{11,11}).*/;
        var match = url.match(regExp);
        if (match) {
        	if (match.length >= 2 && match[2].length == 11) {
            	id = match[2];
            } else {
                error = true;
            }
       	} else {
           	error = true;
        }
        if (!error) {
        	$.ajax({
            	type: "GET",
                url: "http://gdata.youtube.com/feeds/api/videos/" + id,
                error: function () {
                	error = true;
                }
           	});
        }
        htmlWidget = "<iframe width='70%' height='210' src='http://www.youtube.com/embed/" + id + "?rel=0' frameborder='0' allowfullscreen class='img-polaroid'></iframe>";
        $("#video_url").html(htmlWidget);
    };
    
    this.showContainerMultimedia = function(event){
    	if ($(event.data.id).hasClass('labelHide')){
    		$(event.data.id).removeClass('labelHide');
    	}else{
    		$(event.data.id).addClass('labelHide');
    	}
    };
    
    this.deleteSong = function(event){
    	var hr = new XMLHttpRequest();
    	var url = "/cheyproducciones/controller/deleteSong.php";
	    var vars = "idSongData="+$(event.data.id)[0].children[0].id;
	    hr.open("POST", url, true);
	    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    hr.onreadystatechange = function() {
		    if(hr.readyState == 4 && hr.status == 200) {
			    var return_data = hr.responseText;
				document.getElementById("status").innerHTML = return_data;
		    };
	    };
	   
	    hr.send(vars); // Actually execute the request
	    document.getElementById("status").innerHTML = "processing...";
    	
    };
	
}

function Model() {
    console.log("((Model))");

}
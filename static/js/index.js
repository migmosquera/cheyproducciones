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
     var tapVideo = document.getElementById('videoTap');
    $("#pauseAudio").on("click", function(){
        tapVideo.pause();
    });
    $("#playAudio").on("click", function(){
        tapVideo.play();
    });
    $("#showModal").hide();
    console.log(showModal);
    if (showModal == 1){
       controller.showModal();
    }
}

function Controller() {
    console.log("((Controller))");
    
    this.showModal = function(){
        //$("#showModal").dialog();
       $("#showModal").modal();
       $("#nav").hide();
       $(".close-modal").text('Ir a la Pagina');
       $(".close-modal").on('click',function(){
           $("#nav").show();
       })
    };
}

function Model() {
    console.log("((Model))");

}
// function autoLoad(){
//     $.ajax({
//     url: 'loadmessage.php',
//     success: function(data){
//         $('.textchat').html(data);
//     }
//     });
// }

// $(document).ready(function()
// {
//     setInterval(autoLoad, 3000);
// });


// function sendMessage() {
//     $.post('/minichat/traitement/post-message.php',{
//         msg_text: $('#message'). val()
//     },function(){
//         document.querySelector('#message').value=''
//         autoLoad()
//     }
//     )
// }

function autoLoad(){
$(document).ready(function (){
    $(".message").load("message.php");
    
         setInterval(function() {
       $(".message").load("message.php");
   }, 2000);
    
  
});
}

function sendMessage() {
    $.post('process/tchatprocess.php',{
        message: $('#msg'). val()
    },function(){
        document.querySelector('#msg').value=''
        autoLoad()
    }
    )
}